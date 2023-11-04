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
 * Class HistoricPAI_CAR_Seeder
 */
class HistoricPAI_CAR_Seeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $pai=PAI::create([
      'name' => 'Plan de Acción Cuatrienal CAR 2016 - 2019',
      'start_date' => '2016-01-01',
      'end_date' => '2019-12-31',
      'director_name' => 'Néstor Guillermo Franco González',
      'group_id' => 3,
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
          'car_program' => 'PROGRAMA 1. CULTURA AMBIENTAL',
          'weighing' => 11,
          ]);
          $idprogram1 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 2. LIDERAZGO REGIONAL EN EL SINA',
          'weighing' => 2,
          ]);
          $idprogram2 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 3. INCIDENCIA EN LOS MODELOS TERRITORIALES',
          'weighing' => 7,
          ]);
          $idprogram3 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 4. LO REGULATORIO Y LA GOBERNABILIDAD',
          'weighing' => 13,
          ]);
          $idprogram4 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 5. ESPACIOS INTERINSTITUCIONALES Y SOCIALES DE LA INTERACCIÓN ',
          'weighing' => 7,
          ]);
          $idprogram5 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 6. ENFOQUE DE CUENCAS',
          'weighing' => 24,
          ]);
          $idprogram6 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 7.LAS DETERMINANTES AMBIENTALES',
          'weighing' => 11,
          ]);
          $idprogram7 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 8. LA TRANSVERSALIDAD EN LA GESTIÓN DEL RIESGO Y CAMBIO CLIMÁTICO',
          'weighing' => 5,
          ]);
          $idprogram8 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 9. MEGAPROYECTO RÍO BOGOTÁ',
          'weighing' => 20,
          ]);
          $idprogram9 = DB::getPdo()->lastInsertId();
          
          
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => ' 1. Gestión del conocimiento y la innovación ambiental',
            'weighing' => 31,
            ]);
            $idproject1 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => '2. Cultura para la protección ambiental',
            'weighing' => 69,
            ]);
            $idproject2 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => '3. Fortalecimiento y armonización de políticas, normas e instrumentos nacionales, regionales, departamentales y municipales para la gestión ambiental.',
            'weighing' => 100,
            ]);
            $idproject3 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => '4. Estado de los recursos naturales',
            'weighing' => 100,
            ]);
            $idproject4 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => '5. Cultura del servicio para fortalecer la gestión ambiental',
            'weighing' => 18,
            ]);
            $idproject5 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => '6. Autoridad Ambiental en el Territorio CAR. ',
            'weighing' => 22,
            ]);
            $idproject6 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => '7. Evaluación, control y vigilancia al uso, manejo, aprovechamiento y movilización de los recursos naturales.',
            'weighing' => 19,
            ]);
            $idproject7 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => '8. Unidad Integrada de Gobernabilidad Ambiental - UIGA',
            'weighing' => 17,
            ]);
            $idproject8 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => '9. Gestión para el fortalecimiento y desarrollo institucional.',
            'weighing' => 12,
            ]);
            $idproject9 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => '10. Infraestructura administrativa y gestión documental.',
            'weighing' => 12,
            ]);
            $idproject10 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram5,
            'project' => '11. Producción más limpia y negocios verdes.',
            'weighing' => 34,
            ]);
            $idproject11 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram5,
            'project' => ' 12. Espacios de participación y concertación ciudadana para la gestión ambiental.',
            'weighing' => 33,
            ]);
            $idproject12 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram5,
            'project' => '13. Conservación de suelo y agua para la sostenibilidad ambiental.',
            'weighing' => 33,
            ]);
            $idproject13 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => '14. Ordenación de cuencas hidrográficas.',
            'weighing' => 33,
            ]);
            $idproject14 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => '15.Infraestructura para la Gestión Ambiental.',
            'weighing' => 34,
            ]);
            $idproject15 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => '16. Regulación hídrica y adecuación hidráulica.',
            'weighing' => 33,
            ]);
            $idproject16 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram7,
            'project' => '17. Conservación y protección de la Estructura Ecológica Principal – EEP del Territorio CAR.',
            'weighing' => 44,
            ]);
            $idproject17 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram7,
            'project' => '18. Planificación, concertación y seguimiento del componente ambiental en el ordenamiento territorial.',
            'weighing' => 30,
            ]);
            $idproject18 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram8,
            'project' => '19. Conocimiento del riesgo y el cambio climático.',
            'weighing' => 26,
            ]);
            $idproject19 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram8,
            'project' => '20. Reducción, mitigación del riesgo y atención de desastres',
            'weighing' => 60,
            ]);
            $idproject20 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram8,
            'project' => '21. Programa Integral de Ecosostenibilidad municipal, con énfasis en energías alternativas.',
            'weighing' => 40,
            ]);
            $idproject21 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram9,
            'project' => ' 22. Adecuación hidráulica y recuperación ambiental del río Bogotá y otras acciones de saneamiento integral de la cuenca',
            'weighing' => 100,
            ]);
            $idproject22 = DB::getPdo()->lastInsertId();
            
            
            
            DB::table('objectives')->insert([
              'project_id' => $idproject1,
              'objective' => 'META 1.1  Posicionar y fortalecer el cien por ciento (100%) del sistema de gestión del conocimiento y la innovación ambiental en el marco del Plan Estratégico Nacional de Investigación Ambiental PENIA y del CONPES 3582 – Política nacional de ciencia y tecnología e innovación.',
              'weighing' => 100,
              ]);
              $idobjective1 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject2,
              'objective' => 'META 2.1 Implementar el cien por ciento (100%) del Plan estratégico de cultura del agua en el Territorio CAR.',
              'weighing' => 100,
              ]);
              $idobjective2 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject2,
              'objective' => 'META 2.2 Implementar el cien por ciento (100%) del Plan de fortalecimiento de cultura para la gestión de los residuos: Ciclo Re Ciclo.',
              'weighing' => 100,
              ]);
              $idobjective3 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject2,
              'objective' => 'META 2.3 Implementar el cien por ciento (100%) del  proceso de formación para aumentar la capacidad de adaptación frente al cambio climático y prevención de riesgo.',
              'weighing' => 100,
              ]);
              $idobjective4 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject2,
              'objective' => 'META 2.4 Implementar el cien por ciento (100%) del  Plan de comunicación educativa.',
              'weighing' => 100,
              ]);
              $idobjective5 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject2,
              'objective' => 'META 2.5 Implementar el cien por ciento (100%) de las acciones priorizadas para el fortalecimiento de los Planes Territoriales de Educación Ambiental en la Jurisdicción CAR.',
              'weighing' => 100,
              ]);
              $idobjective6 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject3,
              'objective' => 'META 3.1 Formular el cien por ciento (100%) de las propuestas priorizadas para fortalecer y armonizar políticas,  normas e instrumentos para la gestión ambiental al interior del Sistema Nacional Ambiental – SINA',
              'weighing' => 100,
              ]);
              $idobjective7 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject4,
              'objective' => 'META 4.1 Realizar anualmente veinte (20) campañas de monitoreo a las cuencas de segundo orden con cálculo del Índice de Calidad del Agua (ICA) y definir o delimitar las zonas de ronda de noventa y seis (96) corrientes priorizadas.',
              'weighing' => 100,
              ]);
              $idobjective8 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject4,
              'objective' => 'META 4.2  Monitorear, diagnosticar y modelar el cien por ciento (100%) de dos (2) acuíferos priorizados en el Territorio CAR.',
              'weighing' => 100,
              ]);
              $idobjective9 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject4,
              'objective' => 'META 4.3  Realizar el cien por ciento (100%) del proceso para la determinación de la oferta y demanda del recurso hídrico en cuatro (4) cuencas priorizadas.',
              'weighing' => 100,
              ]);
              $idobjective10 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject4,
              'objective' => 'META 4.4 Operar y mantener el cien por ciento (100%) de las redes de monitoreo, e implementar un sistema de seguimiento tecnológico ambiental.',
              'weighing' => 100,
              ]);
              $idobjective11 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject4,
              'objective' => 'META 4.5 Implementar el cien por por ciento (100%) de las acciones priorizadas para seis (6) especies de fauna o flora (amenazadas y/o invasoras) con Planes de Manejo y/o conservación formulados, y la elaboración de Planes de Manejo e implementación de medidas de Manejo y/o conservación priorizadas para cuatro (4) especies de fauna o flora (amenazadas y/o invasoras) y/o Ecosistemas.  ',
              'weighing' => 100,
              ]);
              $idobjective12 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject4,
              'objective' => 'META 4.6 Realizar el cien por ciento (100%) del proceso de monitoreo y diagnostico  del recurso suelo en cuatro (4) áreas de cuencas de segundo orden.',
              'weighing' => 100,
              ]);
              $idobjective13 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject4,
              'objective' => 'META 4.7   Realizar el cien por ciento (100%) del proceso de monitoreo, modelamiento y seguimiento anual del estado de la calidad del aire (fuentes fijas, ruido, fuentes moviles, calidad del aire y sustancia químicas generadoras de olores) en siete (7) zonas priorizadas.',
              'weighing' => 100,
              ]);
              $idobjective14 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject4,
              'objective' => 'META 4.8 Mantener, implementar y actualizar el cien por ciento (100%) del sistema de información ambiental y geográfico de la CAR y reportar la información',
              'weighing' => 100,
              ]);
              $idobjective15 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject4,
              'objective' => 'META 4.9 Realizar el cien por ciento (100%) del montaje y puesta en operacion del Centro de Investigacion Ambiental - CIA',
              'weighing' => 100,
              ]);
              $idobjective16 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject4,
              'objective' => 'META 4.10  Realizar el cien por ciento (100%) del proceso del montaje y/o validación de veinte (20) técnicas de matrices ambientales (agua, aire y suelo), para el mantenimiento de la acreditación del Centro de Investigacion Ambiental -CIA  y ampliación de los servicios.',
              'weighing' => 100,
              ]);
              $idobjective17 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject4,
              'objective' => 'META 4.11 
            Realizar el cien por ciento (100%) de la valoración económica ambiental en zona priorizada de un área protegida.',
              'weighing' => 100,
              ]);
              $idobjective18 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject5,
              'objective' => 'META 5.1 Implementar el cien por ciento (100%) del  Plan institucional de atención y servicio al  ciudadano.',
              'weighing' => 100,
              ]);
              $idobjective19 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject5,
              'objective' => 'META 5.2 Implementar el cien por ciento (100%) del Plan de fortalecimiento del Centro de Documentación Ambiental de la CAR.',
              'weighing' => 100,
              ]);
              $idobjective20 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject6,
              'objective' => 'META 6.1 Resolver siete mil (7.000) expedientes aperturados hasta 31 de diciembre de 2015, que se encuentren en trámite. ',
              'weighing' => 100,
              ]);
              $idobjective21 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject6,
              'objective' => 'META 6.2 Resolver el cien por ciento (100%) de las autorizaciones ambientales dentro de los tiempos establecidos por la ley o en el acuerdo de prestación de servicios de la entidad, iniciados a partir del 1º de enero de 2016.',
              'weighing' => 100,
              ]);
              $idobjective22 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject6,
              'objective' => 'META 6.3 Atender el cien por ciento (100%) de las quejas y contravenciones ambientales radicadas a partir del 1º de enero de 2016.',
              'weighing' => 100,
              ]);
              $idobjective23 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject6,
              'objective' => 'META 6.4 Realizar el cien por ciento (100%) del proceso de seguimiento a nueve mil (9.000) expedientes de permisos, concesiones y autorizaciones ambientales y/o Programa de Uso Eficiente y Ahorro del Agua - PUEAA aprobados.',
              'weighing' => 100,
              ]);
              $idobjective24 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject7,
              'objective' => 'META 7.1 Realizar anualmente el control y vigilancia de las actividades generadoras de aguas residuales en siete (7) cuencas de segundo orden.',
              'weighing' => 100,
              ]);
              $idobjective25 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject7,
              'objective' => 'META 7.2  Efectuar el seguimiento al cien por ciento (100%) de los Planes de Saneamiento y Manejo de Vertimientos – PSMV, aprobados.',
              'weighing' => 100,
              ]);
              $idobjective26 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject7,
              'objective' => 'META 7.3 Realizar mil (1.000) acciones de control y vigilancia al uso, aprovechamiento, movilización o comercialización del recurso flora .',
              'weighing' => 100,
              ]);
              $idobjective27 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject7,
              'objective' => 'META 7.4 Realizar evaluación, control y vigilancia ambiental, a las actividades mineras, mediante la ejecución de mil setecientas cincuenta (1.750) acciones.',
              'weighing' => 100,
              ]);
              $idobjective28 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject7,
              'objective' => 'META 7.5 Elaborar y desarrollar el cien por ciento (100%) de un (1) Plan para la prevención, control, vigilancia y manejo  de fauna silvestre relacionada con tráfico y/o tenencia ilegal, lo mismo que en casos de fauna silvestre exótica invasora y predadora.',
              'weighing' => 100,
              ]);
              $idobjective29 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject7,
              'objective' => 'META 7.6 Cumplir el cien por ciento (100%) de las actividades priorizadas en el Plan de Gestión Integral de Residuos Peligrosos - RESPEL de la CAR.',
              'weighing' => 100,
              ]);
              $idobjective30 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject7,
              'objective' => 'META 7.7 Efectuar el cien por ciento (100%)   del seguimiento anual a los Planes de Gestión Integral de Residuos Sólidos - PGIRS en el Territorio CAR.',
              'weighing' => 100,
              ]);
              $idobjective31 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject7,
              'objective' => 'META 7.8 Efectuar el cien por ciento (100%) de la  evaluación y  seguimiento a los Planes para la Reducción del Impacto por Olores Ofensivos – PRIOS, según el procedimiento establecido en la normatividad vigente.',
              'weighing' => 100,
              ]);
              $idobjective32 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject7,
              'objective' => 'META 7.9 Realizar el cien por ciento (100%) de dieciséis (16) seguimientos al Plan de Manejo Ambiental – PMA del Embalse del Muña y/o a las industrias en su zona de influencia.',
              'weighing' => 100,
              ]);
              $idobjective33 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject8,
              'objective' => 'META 8.1 Realizar cuarenta (40) operativos a las actividades de alto impacto que incluyan el uso, manejo, aprovechamiento y/o movilización de los recursos naturales y fortalecer la vigilancia permanente en el territorio.',
              'weighing' => 100,
              ]);
              $idobjective34 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject9,
              'objective' => 'META 9.1 Implementar el cien por ciento (100%) de las acciones priorizadas del Plan Estratégico de Tecnologías de la Información y las Comunicaciones – PETIC.',
              'weighing' => 100,
              ]);
              $idobjective35 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject9,
              'objective' => 'META 9.2  Implementar el cien por ciento (100%) de las acciones priorizadas en la estrategia de Gobierno en Línea.',
              'weighing' => 100,
              ]);
              $idobjective36 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject9,
              'objective' => 'META 9.3 Realizar el cien por ciento (100%) del proceso de mantenenimiento, actualización y mejoraramiento del Sistema Integrado de Gestión Pública - SIGESPU.',
              'weighing' => 100,
              ]);
              $idobjective37 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject9,
              'objective' => 'META 9.4 Implementar el cien por ciento (100%) de la estrategia de posicionamiento institucional, de marca e imagen, a nivel interno y externo.',
              'weighing' => 100,
              ]);
              $idobjective38 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject9,
              'objective' => 'META 9.5 Fortalecer la gestión institucional mediante la suscripción y ejecución de veinte (20)  instrumentos de cooperación interinstitucional.',
              'weighing' => 100,
              ]);
              $idobjective39 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject10,
              'objective' => 'META 10.1 Gestionar la organización documental de veinticuatro (24) Archivos de las dependencias del nivel  central y regional, así como la valoración  del Archivo Central e Histórico.',
              'weighing' => 100,
              ]);
              $idobjective40 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject10,
              'objective' => 'META 10.2 Adquirir y/o construir el cien por ciento (100%) de dos (2) sedes administrativas de la Corporación.',
              'weighing' => 100,
              ]);
              $idobjective41 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject10,
              'objective' => 'META 10.3 Mantener y/o dotar diez (10) sedes administrativas de la entidad.',
              'weighing' => 100,
              ]);
              $idobjective42 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject11,
              'objective' => 'META 11.1 Promover en doscientas (200) empresas procesos de autogestión ambiental participativa para la reconversión hacia sistemas sostenibles de producción',
              'weighing' => 100,
              ]);
              $idobjective43 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject11,
              'objective' => 'META 11.2  Implementar el cien por ciento (100%) del Programa Regional de Negocios Verdes para el territorio CAR.',
              'weighing' => 100,
              ]);
              $idobjective44 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject11,
              'objective' => 'META 11.3 Promover y/o hacer seguimiento a veinticuatro (24) encadenamientos sostenibles en el marco de la autogestión ambiental en el Territorio CAR.',
              'weighing' => 100,
              ]);
              $idobjective45 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject12,
              'objective' => 'META 12.1 Intervenir en el cien por ciento (100%) de los conflictos socioambientales priorizados en el marco del observatorio ambiental de la CAR.',
              'weighing' => 100,
              ]);
              $idobjective46 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject12,
              'objective' => 'META 12.2 Implementar el cien por ciento (100%) de los procesos de formación priorizados para el fortalecimiento de la capacidad de gestión ambiental de las organizaciones comunitarias y sociales.',
              'weighing' => 100,
              ]);
              $idobjective47 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject12,
              'objective' => 'META 12.3 Implementar trescientos (300) proyectos de Emprendimiento Social para la Conservación Ambiental - ESCA.',
              'weighing' => 100,
              ]);
              $idobjective48 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject12,
              'objective' => 'META 12.4 Implementar el cien por ciento (100%) de la  agenda étnica ancestral con las comunidades indígenas.',
              'weighing' => 100,
              ]);
              $idobjective49 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject13,
              'objective' => 'META 13.1 Intervenir tres mil quinientas (3.500) hectáreas en zonas con presencia de erosión, mediante la utilización de obras  biomecánicas, bioingeniería, labores de agricultura y ganadería de conservación.',
              'weighing' => 100,
              ]);
              $idobjective50 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject13,
              'objective' => 'META 13.2 Brindar asistencia técnica a cuatro mil  (4.000) familias campesinas,  en técnicas de agricultura y ganadería de conservación.',
              'weighing' => 100,
              ]);
              $idobjective51 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject13,
              'objective' => 'META 13.3 Implementar al cien por ciento (100%) la estrategia de difusión de los principios de conservación de suelo y agua para la sostenibilidad ambiental.',
              'weighing' => 100,
              ]);
              $idobjective52 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject13,
              'objective' => 'META 13.4 Implementar el cien por ciento (100%) de la estrategia educativa para el reconocimiento y la promoción del árbol, como generador de bienes y servicios ambientales - Cultura del Árbol.',
              'weighing' => 100,
              ]);
              $idobjective53 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject14,
              'objective' => 'META 14.1  Formular y/o actualizar el cien por ciento (100%) de los Planes de Ordenación y Manejo de Cuencas – POMCA, en cinco (5) cuencas del Territorio CAR.',
              'weighing' => 100,
              ]);
              $idobjective54 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject14,
              'objective' => 'META 14.2  Realizar la implementación del cien por ciento (100%) de las acciones priorizadas, de las previstas en los Planes de Ordenación y Manejo de Cuencas – POMCAS que están a cargo de la CAR.',
              'weighing' => 100,
              ]);
              $idobjective55 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject14,
              'objective' => 'META 14.3 Formular y adoptar en un cien por ciento (100%) el Plan de Ordenación del Recurso Hídrico - PORH, de un cuerpo de agua en el Territorio CAR.',
              'weighing' => 100,
              ]);
              $idobjective56 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject14,
              'objective' => 'META 14.4 Formular el cien por ciento (100%) del Plan de General de Ordenación Forestal – PGOF, para el Territorio CAR.',
              'weighing' => 100,
              ]);
              $idobjective57 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject14,
              'objective' => 'META 14.5 Realizar el cien por ciento (100%) del proceso de reglamentación de cuarenta (40) cuerpos de agua  del Territorio CAR.',
              'weighing' => 100,
              ]);
              $idobjective58 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject15,
              'objective' => 'META 15.1 Administrar, operar y mantener la infraestructura del cien por ciento (100%) de los parques de la CAR.',
              'weighing' => 100,
              ]);
              $idobjective59 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject15,
              'objective' => 'META 15.2 Cumplir el cien por ciento (100%) del objetivo anual establecido en los proyectos priorizados para el desarrollo de infraestructura en saneamiento básico.',
              'weighing' => 100,
              ]);
              $idobjective60 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject15,
              'objective' => 'META 15.3 Cumplir el cien por ciento (100%) del objetivo anual establecido en proyectos priorizados para el desarrollo de infraestructura enfocada a la gestión ambiental .',
              'weighing' => 100,
              ]);
              $idobjective61 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject16,
              'objective' => 'META 16.1 Realizar el cien por ciento (100%) del proceso de Administración, operación y mantenimiento de la infraestructura en los tres (3) embalses propiedad de la CAR, en los dos (2) sistemas hidráulicos de manejo ambiental y control de inundaciones, y banco de maquinaria CAR',
              'weighing' => 100,
              ]);
              $idobjective62 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject16,
              'objective' => 'META 16.2 Cumplir el cien por ciento (100%) del objetivo anual establecido en proyectos priorizados para el desarrollo de infraestructura enfocada a garantizar la disponibilidad y/o regulación hídrica.',
              'weighing' => 100,
              ]);
              $idobjective63 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject16,
              'objective' => 'META 16.3 Cumplir el cien por ciento (100%) del objetivo anual establecido en proyectos priorizados en adecuación y mantenimiento hidráulico.',
              'weighing' => 100,
              ]);
              $idobjective64 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject17,
              'objective' => 'META 17.1 Realizar el cien por ciento (100%) del proceso de redelimitación y/o recategorización de cinco (5) áreas protegidas del Territorio CAR.',
              'weighing' => 100,
              ]);
              $idobjective65 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject17,
              'objective' => 'META 17.2 Realizar el cien por ciento (100%) del proceso de declaratoria de tres (3) nuevas áreas protegidas en el Territorio CAR.',
              'weighing' => 100,
              ]);
              $idobjective66 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject17,
              'objective' => 'META 17.3 Realizar el  cien por ciento (100%)  de la delimitación y/o caracterización de ciento noventa (190) ecosistemas estratégicos  (humedales y paramos) en el Territorio CAR.',
              'weighing' => 100,
              ]);
              $idobjective67 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject17,
              'objective' => 'META 17.4 Realizar el cien por ciento (100%) del proceso de formulación y/o actualización de ocho (8) Planes de Manejo Ambiental - PMA de las áreas protegidas y ecosistemas estratégicos del Territorio CAR',
              'weighing' => 100,
              ]);
              $idobjective68 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject17,
              'objective' => 'META 17.5 Implementar el diez por ciento (10%) de las acciones definidas en los Planes de Manejo Ambiental - PMA priorizados de las áreas protegidas y ecosistemas estratégicos del territorio CAR.',
              'weighing' => 100,
              ]);
              $idobjective69 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject17,
              'objective' => 'META 17.6 Intervenir cuatro mil (4000) hectáreas con acciones de conservación, reforestación, recuperación, restauración y/o rehabiltación en áreas de interés ambiental en el Territorio CAR. (BanCO2®, Pago por Servicios Ambientales – PSA, recuperación de suelos, entre otros)',
              'weighing' => 100,
              ]);
              $idobjective70 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject18,
              'objective' => 'META 18.1  Implementar el cien por ciento (100%) de las acciones  priorizadas, competencia de la Corporación, en el Programa en Gestión Ambiental Urbana – PGAU.',
              'weighing' => 100,
              ]);
              $idobjective71 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject18,
              'objective' => 'META 18.2 Realizar seguimiento a cincuenta (50) municipios asesorados en el Sistema de Gestión Ambiental de los Municipios  -  SIGAM e iniciar la asesoría a treinta (30) municipios.',
              'weighing' => 100,
              ]);
              $idobjective72 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject18,
              'objective' => 'META 18.3 Apoyar la actualización y/o conservación catastral, de treinta (30) municipios del Territorio CAR .',
              'weighing' => 100,
              ]);
              $idobjective73 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject18,
              'objective' => 'META 18.4 Asesorar y/o asistir al cien por ciento (100%) de los municipios del Territorio CAR en la incorporación de los determinantes ambientales en los procesos de revisión y ajuste  de los Planes de Ordenamiento Territorial – POT, con su correspondiente seguimiento al cumplimiento de los asuntos ambientales concertados de los POT adoptados',
              'weighing' => 100,
              ]);
              $idobjective74 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject19,
              'objective' => 'META 19.1 Identificar , espacializar y monitorear anualmente en los ciento cinco (105) municipios del Territorio CAR los puntos críticos de riesgo',
              'weighing' => 100,
              ]);
              $idobjective75 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject19,
              'objective' => 'META 19.2 Elaborar estudios y/o diseños  para el conocimiento del riesgo en diez (10) cuencas hidrográficas del Territorio CAR.',
              'weighing' => 100,
              ]);
              $idobjective76 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject19,
              'objective' => 'META 19.3  Implementar  el cien por ciento (100%) de medidas priorizadas para la reducción de impactos por variabilidad y cambio climático en las cuencas del Territorio CAR.',
              'weighing' => 100,
              ]);
              $idobjective77 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject19,
              'objective' => 'META 19.4 Asesorar al cien por ciento (100%) de los entes territoriales en conocimiento de Gestión del Riesgo y Cambio Climático. ',
              'weighing' => 100,
              ]);
              $idobjective78 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject20,
              'objective' => 'META 20.1 Implementar el cien por ciento (100%) del objetivo anual establecido  en las medidas de reducción del riesgo en los puntos críticos priorizados.',
              'weighing' => 100,
              ]);
              $idobjective79 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject20,
              'objective' => 'META 20.2 Apoyar las actividades de atención de desastres en el cien por ciento (100%) de los puntos críticos priorizados por emergencia.',
              'weighing' => 100,
              ]);
              $idobjective80 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject21,
              'objective' => 'META 21.1 Formular e implementar el cien por ciento (100%) del Programa Integral con energías alternativas y gestión ambiental sostenible en un municipio priorizado.',
              'weighing' => 100,
              ]);
              $idobjective81 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject22,
              'objective' => 'META 22.1. Culminar el proceso de contratación y alcanzar como mínimo un 50% en la ejecución del Contrato Llave en Mano de la ampliación y optimización de la PTAR Salitre de conformidad con lo previsto en el componente 1 del Proyecto de Adecuación Hidráulica y Recuperación Ambiental del Río Bogotá',
              'weighing' => 100,
              ]);
              $idobjective82 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject22,
              'objective' => 'META  22.2. Ejecutar las obras de Adecuación Hidráulica del Río Bogotá en la Cuenca Media en un tramo de 68 kms desde Puente La Vigen (Cota), hasta las compuertas de Alicachín (Soacha), en el marco del Proyecto de Adecuación Hidráulica y Recuperación Ambiental del Río Bogotá, hasta completar el 100% de la intervención prevista.',
              'weighing' => 100,
              ]);
              $idobjective83 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject22,
              'objective' => 'META 22.3. Ejecutar las obras de Adecuación Hidráulica del Río Bogotá en la Cuenca Alta  en un tramo de 47 kms comprendido entre Puente La Virgen (Cota) y Puente Vargas (via Cajicá - Hato Grande), hasta alcanzar como mínimo un cuarenta por ciento (40%) de avance.',
              'weighing' => 100,
              ]);
              $idobjective84 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject22,
              'objective' => 'META 22.4. Cumplir con la contratación de estudios especializados de asistencia técnica al Proyecto de Adecuación Hidráulica y Recuperación ambiental del Río Bogotá, para alcanzar el 100% del avance en el desarrollo del Componente 3, incluyendo los estudios de plan maestro del agua, plan maestro de biosólidos y Plan de recuperación de áreas multifuncionales, según lo definido en el Plan de Adquisiciones aprobado por el Banco Mundial.',
              'weighing' => 100,
              ]);
              $idobjective85 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject22,
              'objective' => 'META 22.5. Administrar y gerenciar el 100% del Proyecto de Adecuación Hidráulica y Recuperación Ambiental del Río Bogotá y cumplir con gastos recurrentes y el pago de la deuda, de acuerdo con las normas y procedimientos aprobados por el Banco Mundial, Crédito BIRF 7985-CO.',
              'weighing' => 100,
              ]);
              $idobjective86 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject22,
              'objective' => 'META 22.6.  Contar con la disponibilidad del 100% de los predios identificados y requeridos como disponibles para la intervención en la zona de influencia del Proyecto de Adecuación Hidráulica y Recuperación Ambiental del Río Bogotá dentro del marco del Plan de Gestión Social y el Plan de Reasentamientos aprobado por el Banco Mundial y la CAR',
              'weighing' => 100,
              ]);
              $idobjective87 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject22,
              'objective' => 'META 22.7. Adelantar las gestiones y procesos para contar como mínimo con el 50% de la Disponibilidad de los Predios requeridos para las obras de Adecuación Hidráulica en la Cuenca Alta del Río Bogotá, en un tramo de 47 kms comprendido entre Puente La Virgen (Cota) y Puente Vargas (via Cajicá - Hato Grande).',
              'weighing' => 100,
              ]);
              $idobjective88 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject22,
              'objective' => 'META 22.8. Formular y adelantar la ejecución de diez (10) proyectos de saneamiento ambiental a desarrollar en cualquiera de las Cuencas integrantes del Río Bogotá, en el Territorio CAR, incluyendo entre ellos la Administración del Parque Lineal Río Bogotá.',
              'weighing' => 100,
              ]);
              $idobjective89 = DB::getPdo()->lastInsertId();
              
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 0.2,
                'goal_2' => 0.3,
                'goal_3' => 0.3,
                'goal_4' => 0.2,
                'goal_1_balance' => 0.2,
                'goal_2_balance' => 0.3,
                'goal_3_balance' => 0.3,
                'goal_4_balance' => 0.2,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct1 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 0.15,
                'goal_2' => 0.3,
                'goal_3' => 0.35,
                'goal_4' => 0.2,
                'goal_1_balance' => 0.15,
                'goal_2_balance' => 0.3,
                'goal_3_balance' => 0.35,
                'goal_4_balance' => 0.2,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct2 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0.2,
                'goal_2' => 0.35,
                'goal_3' => 0.3,
                'goal_4' => 0.15,
                'goal_1_balance' => 0.2,
                'goal_2_balance' => 0.35,
                'goal_3_balance' => 0.3,
                'goal_4_balance' => 0.15,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct3 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 0.2,
                'goal_2' => 0.35,
                'goal_3' => 0.3,
                'goal_4' => 0.15,
                'goal_1_balance' => 0.2,
                'goal_2_balance' => 0.35,
                'goal_3_balance' => 0.3,
                'goal_4_balance' => 0.15,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct4 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 0.2,
                'goal_2' => 0.35,
                'goal_3' => 0.3,
                'goal_4' => 0.15,
                'goal_1_balance' => 0.2,
                'goal_2_balance' => 0.35,
                'goal_3_balance' => 0.3,
                'goal_4_balance' => 0.15,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct5 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 105,
                'goal_2' => 105,
                'goal_3' => 105,
                'goal_4' => 105,
                'goal_1_balance' => 105,
                'goal_2_balance' => 105,
                'goal_3_balance' => 105,
                'goal_4_balance' => 105,
                'total_goal' => 420,
                'unit_goal' => 57,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct6 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 49,
                ]);
                $idobjectiveproduct7 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct8 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct9 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
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
                'unit_goal' => 34,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct10 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 24,
                'goal_2' => 24,
                'goal_3' => 24,
                'goal_4' => 24,
                'goal_1_balance' => 24,
                'goal_2_balance' => 24,
                'goal_3_balance' => 24,
                'goal_4_balance' => 24,
                'total_goal' => 96,
                'unit_goal' => 38,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct11 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 0.25,
                'goal_2' => 0.5,
                'goal_3' => 0.75,
                'goal_4' => 1,
                'goal_1_balance' => 0.25,
                'goal_2_balance' => 0.5,
                'goal_3_balance' => 0.75,
                'goal_4_balance' => 1,
                'total_goal' => 2.5,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct12 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => null,
                'product_other' => 'Producto 4',
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
                'weighing' => 100,
                ]);
                $idobjectiveproduct13 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective11,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct14 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective11,
                'product_id' => null,
                'product_other' => 'Producto 6',
                'goal_1' => 0.5,
                'goal_2' => 0.75,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 0.5,
                'goal_2_balance' => 0.75,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 3.25,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct15 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 7',
                'goal_1' => 0.15,
                'goal_2' => 0.3,
                'goal_3' => 0.35,
                'goal_4' => 0.2,
                'goal_1_balance' => 0.15,
                'goal_2_balance' => 0.3,
                'goal_3_balance' => 0.35,
                'goal_4_balance' => 0.2,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct16 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct17 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 34,
                ]);
                $idobjectiveproduct18 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct19 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct20 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct21 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
                'product_id' => null,
                'product_other' => 'Producto 13',
                'goal_1' => 0.42,
                'goal_2' => 0.21,
                'goal_3' => 0.16,
                'goal_4' => 0.21,
                'goal_1_balance' => 0.42,
                'goal_2_balance' => 0.21,
                'goal_3_balance' => 0.16,
                'goal_4_balance' => 0.21,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct22 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
                'product_id' => null,
                'product_other' => 'Producto 14',
                'goal_1' => 0.1,
                'goal_2' => 0.3,
                'goal_3' => 0.3,
                'goal_4' => 0.3,
                'goal_1_balance' => 0.1,
                'goal_2_balance' => 0.3,
                'goal_3_balance' => 0.3,
                'goal_4_balance' => 0.3,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct23 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective17,
                'product_id' => null,
                'product_other' => 'Producto 15',
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
                'weighing' => 100,
                ]);
                $idobjectiveproduct24 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective18,
                'product_id' => null,
                'product_other' => 'Producto 16',
                'goal_1' => 0.15,
                'goal_2' => 0.3,
                'goal_3' => 0.3,
                'goal_4' => 0.25,
                'goal_1_balance' => 0.15,
                'goal_2_balance' => 0.3,
                'goal_3_balance' => 0.3,
                'goal_4_balance' => 0.25,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 99,
                ]);
                $idobjectiveproduct25 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective18,
                'product_id' => null,
                'product_other' => 'Producto 17',
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
                $idobjectiveproduct26 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective19,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 0.2,
                'goal_2' => 0.3,
                'goal_3' => 0.3,
                'goal_4' => 0.2,
                'goal_1_balance' => 0.2,
                'goal_2_balance' => 0.3,
                'goal_3_balance' => 0.3,
                'goal_4_balance' => 0.2,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct27 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0.2,
                'goal_2' => 0.3,
                'goal_3' => 0.3,
                'goal_4' => 0.2,
                'goal_1_balance' => 0.2,
                'goal_2_balance' => 0.3,
                'goal_3_balance' => 0.3,
                'goal_4_balance' => 0.2,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 99,
                ]);
                $idobjectiveproduct28 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct29 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 1050,
                'goal_2' => 2450,
                'goal_3' => 2450,
                'goal_4' => 1050,
                'goal_1_balance' => 1050,
                'goal_2_balance' => 2450,
                'goal_3_balance' => 2450,
                'goal_4_balance' => 1050,
                'total_goal' => 7000,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct30 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct31 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 420,
                'goal_2' => 420,
                'goal_3' => 420,
                'goal_4' => 420,
                'goal_1_balance' => 420,
                'goal_2_balance' => 420,
                'goal_3_balance' => 420,
                'goal_4_balance' => 420,
                'total_goal' => 1680,
                'unit_goal' => 40,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct32 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective23,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct33 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective23,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 0.05,
                'goal_2' => 0.15,
                'goal_3' => 0.15,
                'goal_4' => 0.1,
                'goal_1_balance' => 0.05,
                'goal_2_balance' => 0.15,
                'goal_3_balance' => 0.15,
                'goal_4_balance' => 0.1,
                'total_goal' => 0.45,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct34 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective24,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct35 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective24,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 49,
                ]);
                $idobjectiveproduct36 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct37 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective25,
                'product_id' => null,
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
                'unit_goal' => 39,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct38 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct39 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective27,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 250,
                'goal_2' => 250,
                'goal_3' => 250,
                'goal_4' => 250,
                'goal_1_balance' => 250,
                'goal_2_balance' => 250,
                'goal_3_balance' => 250,
                'goal_4_balance' => 250,
                'total_goal' => 1000,
                'unit_goal' => 32,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct40 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective28,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 250,
                'goal_2' => 500,
                'goal_3' => 500,
                'goal_4' => 500,
                'goal_1_balance' => 250,
                'goal_2_balance' => 500,
                'goal_3_balance' => 500,
                'goal_4_balance' => 500,
                'total_goal' => 1750,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct41 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective29,
                'product_id' => null,
                'product_other' => 'Producto 5',
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
                'weighing' => 100,
                ]);
                $idobjectiveproduct42 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective30,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct43 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective31,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct44 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective32,
                'product_id' => null,
                'product_other' => 'Producto 8',
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
                'weighing' => 100,
                ]);
                $idobjectiveproduct45 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective33,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 99,
                ]);
                $idobjectiveproduct46 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective33,
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct47 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective34,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 5,
                'goal_2' => 12,
                'goal_3' => 12,
                'goal_4' => 11,
                'goal_1_balance' => 5,
                'goal_2_balance' => 12,
                'goal_3_balance' => 12,
                'goal_4_balance' => 11,
                'total_goal' => 40,
                'unit_goal' => 66,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct48 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective35,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct49 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective36,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct50 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective37,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct51 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective38,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct52 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective39,
                'product_id' => null,
                'product_other' => 'Producto 5',
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
                'weighing' => 99,
                ]);
                $idobjectiveproduct53 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective39,
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct54 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective40,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 24,
                'goal_2' => 24,
                'goal_3' => 24,
                'goal_4' => 24,
                'goal_1_balance' => 24,
                'goal_2_balance' => 24,
                'goal_3_balance' => 24,
                'goal_4_balance' => 24,
                'total_goal' => 96,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct55 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective41,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0.1,
                'goal_2' => 0.2,
                'goal_3' => 0.6,
                'goal_4' => 0.1,
                'goal_1_balance' => 0.1,
                'goal_2_balance' => 0.2,
                'goal_3_balance' => 0.6,
                'goal_4_balance' => 0.1,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct56 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective42,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 3,
                'goal_2' => 3,
                'goal_3' => 2,
                'goal_4' => 2,
                'goal_1_balance' => 3,
                'goal_2_balance' => 3,
                'goal_3_balance' => 2,
                'goal_4_balance' => 2,
                'total_goal' => 10,
                'unit_goal' => 79,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 99,
                ]);
                $idobjectiveproduct57 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective42,
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct58 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective43,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct59 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective43,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 50,
                'goal_2' => 50,
                'goal_3' => 50,
                'goal_4' => 50,
                'goal_1_balance' => 50,
                'goal_2_balance' => 50,
                'goal_3_balance' => 50,
                'goal_4_balance' => 50,
                'total_goal' => 200,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct60 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective44,
                'product_id' => null,
                'product_other' => 'Producto 3',
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
                'weighing' => 100,
                ]);
                $idobjectiveproduct61 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective45,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 6,
                'goal_2' => 6,
                'goal_3' => 6,
                'goal_4' => 6,
                'goal_1_balance' => 6,
                'goal_2_balance' => 6,
                'goal_3_balance' => 6,
                'goal_4_balance' => 6,
                'total_goal' => 24,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 99,
                ]);
                $idobjectiveproduct62 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective45,
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct63 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective46,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 0.175,
                'goal_2' => 0.325,
                'goal_3' => 0.25,
                'goal_4' => 0.25,
                'goal_1_balance' => 0.175,
                'goal_2_balance' => 0.325,
                'goal_3_balance' => 0.25,
                'goal_4_balance' => 0.25,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct64 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective47,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0.2,
                'goal_2' => 0.3,
                'goal_3' => 0.4,
                'goal_4' => 0.1,
                'goal_1_balance' => 0.2,
                'goal_2_balance' => 0.3,
                'goal_3_balance' => 0.4,
                'goal_4_balance' => 0.1,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct65 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective48,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 50,
                'goal_2' => 90,
                'goal_3' => 90,
                'goal_4' => 70,
                'goal_1_balance' => 50,
                'goal_2_balance' => 90,
                'goal_3_balance' => 90,
                'goal_4_balance' => 70,
                'total_goal' => 300,
                'unit_goal' => 75,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct66 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective49,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 0.2,
                'goal_2' => 0.3,
                'goal_3' => 0.25,
                'goal_4' => 0.25,
                'goal_1_balance' => 0.2,
                'goal_2_balance' => 0.3,
                'goal_3_balance' => 0.25,
                'goal_4_balance' => 0.25,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 99,
                ]);
                $idobjectiveproduct67 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective49,
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct68 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective50,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 800,
                'goal_2' => 900,
                'goal_3' => 900,
                'goal_4' => 900,
                'goal_1_balance' => 800,
                'goal_2_balance' => 900,
                'goal_3_balance' => 900,
                'goal_4_balance' => 900,
                'total_goal' => 3500,
                'unit_goal' => 47,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct69 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective51,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 1000,
                'goal_2' => 1000,
                'goal_3' => 1000,
                'goal_4' => 1000,
                'goal_1_balance' => 1000,
                'goal_2_balance' => 1000,
                'goal_3_balance' => 1000,
                'goal_4_balance' => 1000,
                'total_goal' => 4000,
                'unit_goal' => 46,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct70 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective52,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 0.2,
                'goal_2' => 0.25,
                'goal_3' => 0.3,
                'goal_4' => 0.25,
                'goal_1_balance' => 0.2,
                'goal_2_balance' => 0.25,
                'goal_3_balance' => 0.3,
                'goal_4_balance' => 0.25,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct71 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective53,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 0.2,
                'goal_2' => 0.3,
                'goal_3' => 0.3,
                'goal_4' => 0.2,
                'goal_1_balance' => 0.2,
                'goal_2_balance' => 0.3,
                'goal_3_balance' => 0.3,
                'goal_4_balance' => 0.2,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 99,
                ]);
                $idobjectiveproduct72 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective53,
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct73 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective54,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 0.3,
                'goal_2' => 0.25,
                'goal_3' => 0.35,
                'goal_4' => 0.1,
                'goal_1_balance' => 0.3,
                'goal_2_balance' => 0.25,
                'goal_3_balance' => 0.35,
                'goal_4_balance' => 0.1,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct74 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective55,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0.05,
                'goal_2' => 0.25,
                'goal_3' => 0.4,
                'goal_4' => 0.3,
                'goal_1_balance' => 0.05,
                'goal_2_balance' => 0.25,
                'goal_3_balance' => 0.4,
                'goal_4_balance' => 0.3,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct75 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective56,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 0.15,
                'goal_2' => 0.35,
                'goal_3' => 0.4,
                'goal_4' => 0.1,
                'goal_1_balance' => 0.15,
                'goal_2_balance' => 0.35,
                'goal_3_balance' => 0.4,
                'goal_4_balance' => 0.1,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct76 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective57,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 0.2,
                'goal_2' => 0.3,
                'goal_3' => 0.3,
                'goal_4' => 0.2,
                'goal_1_balance' => 0.2,
                'goal_2_balance' => 0.3,
                'goal_3_balance' => 0.3,
                'goal_4_balance' => 0.2,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct77 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective58,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 0.2,
                'goal_2' => 0.3,
                'goal_3' => 0.3,
                'goal_4' => 0.2,
                'goal_1_balance' => 0.2,
                'goal_2_balance' => 0.3,
                'goal_3_balance' => 0.3,
                'goal_4_balance' => 0.2,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct78 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective58,
                'product_id' => null,
                'product_other' => 'Producto 6',
                'goal_1' => 0.1,
                'goal_2' => 0.25,
                'goal_3' => 0.45,
                'goal_4' => 0.2,
                'goal_1_balance' => 0.1,
                'goal_2_balance' => 0.25,
                'goal_3_balance' => 0.45,
                'goal_4_balance' => 0.2,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 49,
                ]);
                $idobjectiveproduct79 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective58,
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct80 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective59,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct81 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective60,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct82 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective61,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 99,
                ]);
                $idobjectiveproduct83 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective61,
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct84 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective62,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct85 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective62,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct86 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective62,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 34,
                ]);
                $idobjectiveproduct87 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective63,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct88 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective64,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 99,
                ]);
                $idobjectiveproduct89 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective64,
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct90 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective65,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 0.1,
                'goal_2' => 0.4,
                'goal_3' => 0.4,
                'goal_4' => 0.1,
                'goal_1_balance' => 0.1,
                'goal_2_balance' => 0.4,
                'goal_3_balance' => 0.4,
                'goal_4_balance' => 0.1,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct91 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective66,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0.2,
                'goal_2' => 0.35,
                'goal_3' => 0.35,
                'goal_4' => 0.1,
                'goal_1_balance' => 0.2,
                'goal_2_balance' => 0.35,
                'goal_3_balance' => 0.35,
                'goal_4_balance' => 0.1,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct92 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective66,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 0,
                'goal_2' => 0.2,
                'goal_3' => 0.3,
                'goal_4' => 0.5,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0.2,
                'goal_3_balance' => 0.3,
                'goal_4_balance' => 0.5,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct93 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective67,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 0.15,
                'goal_2' => 0.35,
                'goal_3' => 0.4,
                'goal_4' => 0.1,
                'goal_1_balance' => 0.15,
                'goal_2_balance' => 0.35,
                'goal_3_balance' => 0.4,
                'goal_4_balance' => 0.1,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct94 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective67,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0.2,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0.2,
                'total_goal' => 0.2,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct95 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective68,
                'product_id' => null,
                'product_other' => 'Producto 6',
                'goal_1' => 0.15,
                'goal_2' => 0.35,
                'goal_3' => 0.35,
                'goal_4' => 0.15,
                'goal_1_balance' => 0.15,
                'goal_2_balance' => 0.35,
                'goal_3_balance' => 0.35,
                'goal_4_balance' => 0.15,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct96 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective69,
                'product_id' => null,
                'product_other' => 'Producto 7',
                'goal_1' => 0,
                'goal_2' => 0.08,
                'goal_3' => 0.12,
                'goal_4' => 0.12,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0.08,
                'goal_3_balance' => 0.12,
                'goal_4_balance' => 0.12,
                'total_goal' => 0.32,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct97 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective69,
                'product_id' => null,
                'product_other' => 'Producto 8',
                'goal_1' => 0.06,
                'goal_2' => 0.33,
                'goal_3' => 0.33,
                'goal_4' => 0.28,
                'goal_1_balance' => 0.06,
                'goal_2_balance' => 0.33,
                'goal_3_balance' => 0.33,
                'goal_4_balance' => 0.28,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct98 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective70,
                'product_id' => null,
                'product_other' => 'Producto 9',
                'goal_1' => 200,
                'goal_2' => 1000,
                'goal_3' => 2000,
                'goal_4' => 800,
                'goal_1_balance' => 200,
                'goal_2_balance' => 1000,
                'goal_3_balance' => 2000,
                'goal_4_balance' => 800,
                'total_goal' => 4000,
                'unit_goal' => 47,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct99 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective70,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct100 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective70,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct101 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective70,
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct102 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective71,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 0.1,
                'goal_2' => 0.3,
                'goal_3' => 0.4,
                'goal_4' => 0.2,
                'goal_1_balance' => 0.1,
                'goal_2_balance' => 0.3,
                'goal_3_balance' => 0.4,
                'goal_4_balance' => 0.2,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct103 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective72,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 5,
                'goal_2' => 10,
                'goal_3' => 10,
                'goal_4' => 5,
                'goal_1_balance' => 5,
                'goal_2_balance' => 10,
                'goal_3_balance' => 10,
                'goal_4_balance' => 5,
                'total_goal' => 30,
                'unit_goal' => 57,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct104 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective72,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 10,
                'goal_2' => 15,
                'goal_3' => 15,
                'goal_4' => 10,
                'goal_1_balance' => 10,
                'goal_2_balance' => 15,
                'goal_3_balance' => 15,
                'goal_4_balance' => 10,
                'total_goal' => 50,
                'unit_goal' => 57,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct105 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective73,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 5,
                'goal_2' => 10,
                'goal_3' => 10,
                'goal_4' => 5,
                'goal_1_balance' => 5,
                'goal_2_balance' => 10,
                'goal_3_balance' => 10,
                'goal_4_balance' => 5,
                'total_goal' => 30,
                'unit_goal' => 57,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct106 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective74,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct107 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective74,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 49,
                ]);
                $idobjectiveproduct108 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective74,
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct109 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective75,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 105,
                'goal_2' => 105,
                'goal_3' => 105,
                'goal_4' => 105,
                'goal_1_balance' => 105,
                'goal_2_balance' => 105,
                'goal_3_balance' => 105,
                'goal_4_balance' => 105,
                'total_goal' => 420,
                'unit_goal' => 53,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct110 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective75,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 105,
                'goal_2' => 105,
                'goal_3' => 105,
                'goal_4' => 105,
                'goal_1_balance' => 105,
                'goal_2_balance' => 105,
                'goal_3_balance' => 105,
                'goal_4_balance' => 105,
                'total_goal' => 420,
                'unit_goal' => 57,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct111 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective76,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 3,
                'goal_2' => 2,
                'goal_3' => 2,
                'goal_4' => 3,
                'goal_1_balance' => 3,
                'goal_2_balance' => 2,
                'goal_3_balance' => 2,
                'goal_4_balance' => 3,
                'total_goal' => 10,
                'unit_goal' => 39,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct112 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective77,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 0.46,
                'goal_2' => 0.3,
                'goal_3' => 0.14,
                'goal_4' => 0.1,
                'goal_1_balance' => 0.46,
                'goal_2_balance' => 0.3,
                'goal_3_balance' => 0.14,
                'goal_4_balance' => 0.1,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct113 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective78,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 0.1,
                'goal_2' => 0.3,
                'goal_3' => 0.3,
                'goal_4' => 0.3,
                'goal_1_balance' => 0.1,
                'goal_2_balance' => 0.3,
                'goal_3_balance' => 0.3,
                'goal_4_balance' => 0.3,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct114 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective78,
                'product_id' => null,
                'product_other' => 'Producto 6',
                'goal_1' => 105,
                'goal_2' => 105,
                'goal_3' => 105,
                'goal_4' => 105,
                'goal_1_balance' => 105,
                'goal_2_balance' => 105,
                'goal_3_balance' => 105,
                'goal_4_balance' => 105,
                'total_goal' => 420,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 49,
                ]);
                $idobjectiveproduct115 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective78,
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct116 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective79,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct117 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective80,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 99,
                ]);
                $idobjectiveproduct118 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective80,
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct119 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective81,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 0.2,
                'goal_2' => 0.25,
                'goal_3' => 0.3,
                'goal_4' => 0.25,
                'goal_1_balance' => 0.2,
                'goal_2_balance' => 0.25,
                'goal_3_balance' => 0.3,
                'goal_4_balance' => 0.25,
                'total_goal' => 1,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct120 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective82,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 0.1,
                'goal_2' => 0.1,
                'goal_3' => 0.1,
                'goal_4' => 0.2,
                'goal_1_balance' => 0.1,
                'goal_2_balance' => 0.1,
                'goal_3_balance' => 0.1,
                'goal_4_balance' => 0.2,
                'total_goal' => 0.5,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct121 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective83,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0.76,
                'goal_2' => 0.8,
                'goal_3' => 0.9,
                'goal_4' => 1,
                'goal_1_balance' => 0.76,
                'goal_2_balance' => 0.8,
                'goal_3_balance' => 0.9,
                'goal_4_balance' => 1,
                'total_goal' => 3.46,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct122 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective84,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 0,
                'goal_2' => 0.05,
                'goal_3' => 0.15,
                'goal_4' => 0.2,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0.05,
                'goal_3_balance' => 0.15,
                'goal_4_balance' => 0.2,
                'total_goal' => 0.4,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct123 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective85,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 0.6,
                'goal_2' => 0.75,
                'goal_3' => 0.85,
                'goal_4' => 1,
                'goal_1_balance' => 0.6,
                'goal_2_balance' => 0.75,
                'goal_3_balance' => 0.85,
                'goal_4_balance' => 1,
                'total_goal' => 3.2,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct124 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective86,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct125 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective87,
                'product_id' => null,
                'product_other' => 'Producto 6',
                'goal_1' => 0.9,
                'goal_2' => 0.95,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 0.9,
                'goal_2_balance' => 0.95,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 3.85,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct126 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective88,
                'product_id' => null,
                'product_other' => 'Producto 7',
                'goal_1' => 0.1,
                'goal_2' => 0.1,
                'goal_3' => 0.1,
                'goal_4' => 0.2,
                'goal_1_balance' => 0.1,
                'goal_2_balance' => 0.1,
                'goal_3_balance' => 0.1,
                'goal_4_balance' => 0.2,
                'total_goal' => 0.5,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 100,
                ]);
                $idobjectiveproduct127 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective89,
                'product_id' => null,
                'product_other' => 'Producto 8',
                'goal_1' => 2,
                'goal_2' => 2,
                'goal_3' => 3,
                'goal_4' => 3,
                'goal_1_balance' => 2,
                'goal_2_balance' => 2,
                'goal_3_balance' => 3,
                'goal_4_balance' => 3,
                'total_goal' => 10,
                'unit_goal' => 75,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 99,
                ]);
                $idobjectiveproduct128 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective89,
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct129 = DB::getPdo()->lastInsertId();
                

                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct1,
                  'name' => '1.1.1. Porcentaje de avance en el posicionamiento y fortalecimiento del sistema de  gestión del conocimiento y la innovación ambiental.',
                  'goal_1' => 0.2,
                  'goal_2' => 0.3,
                  'goal_3' => 0.3,
                  'goal_4' => 0.2,
                  'goal' => 1,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity1 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct2,
                  'name' => '2.1.1.Porcentaje de avance en la implementación del Plan estratégico de cultura del agua',
                  'goal_1' => 0.15,
                  'goal_2' => 0.3,
                  'goal_3' => 0.35,
                  'goal_4' => 0.2,
                  'goal' => 1,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity2 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct3,
                  'name' => '2.2.1 Pocentaje de avance en la implementación del Plan',
                  'goal_1' => 0.2,
                  'goal_2' => 0.35,
                  'goal_3' => 0.3,
                  'goal_4' => 0.15,
                  'goal' => 1,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity3 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct4,
                  'name' => '2.3.1 Pocentaje de avance en la implementación del Proceso',
                  'goal_1' => 0.2,
                  'goal_2' => 0.35,
                  'goal_3' => 0.3,
                  'goal_4' => 0.15,
                  'goal' => 1,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity4 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct5,
                  'name' => '2.4.1 Porcentaje de avance en la implementación del Plan',
                  'goal_1' => 0.2,
                  'goal_2' => 0.35,
                  'goal_3' => 0.3,
                  'goal_4' => 0.15,
                  'goal' => 1,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity5 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct6,
                  'name' => '2.5.1 Número de municipios con asesoría y/o acompañamiento técnico para fortalecer el Plan',
                  'goal_1' => 105,
                  'goal_2' => 105,
                  'goal_3' => 105,
                  'goal_4' => 105,
                  'goal' => 420,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity6 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct7,
                  'name' => '2.5.2 Ejecución de acciones en educación ambiental',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity7 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct8,
                  'name' => 'Asignación presupuestal proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity8 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct9,
                  'name' => '3.1.1 Porcentaje de avance en la Formulación de las propuestas.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity9 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct10,
                  'name' => '4.1.1 Cuencas de segundo orden con campañas de monitoreo, análisis y calculo de indice de calidad',
                  'goal_1' => 20,
                  'goal_2' => 20,
                  'goal_3' => 20,
                  'goal_4' => 20,
                  'goal' => 80,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity10 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct11,
                  'name' => '4.1.2 No.  de corrientes con zona de ronda definida o delimitada',
                  'goal_1' => 24,
                  'goal_2' => 24,
                  'goal_3' => 24,
                  'goal_4' => 24,
                  'goal' => 96,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity11 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct12,
                  'name' => '4.2.1 Porcentaje de avance en el monitoreo, diagnóstico y modelación de los acuiferos',
                  'goal_1' => 0.25,
                  'goal_2' => 0.5,
                  'goal_3' => 0.75,
                  'goal_4' => 1,
                  'goal' => 2.5,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity12 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct13,
                  'name' => '4.3.1 Porcentaje de área en cuencas priorizadas con cálculo de balance hídrico (Oferta-Demanda)',
                  'goal_1' => 0.25,
                  'goal_2' => 0.25,
                  'goal_3' => 0.25,
                  'goal_4' => 0.25,
                  'goal' => 1,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity13 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct14,
                  'name' => '4.4.1 Porcentaje de redes y estaciones de monitoreo en operación.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity14 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct15,
                  'name' => '4.4.2 Porcentaje de avance en la implementación y operación del sistema de  monitoreo y seguimiento tecnológico ambiental',
                  'goal_1' => 0.5,
                  'goal_2' => 0.75,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3.25,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity15 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct16,
                  'name' => '4.5.1 Porcentaje de avance en la formulacion e implementacion de la estrategia de diganostico y manejo de especies  y ecosistemas priorizados',
                  'goal_1' => 0.15,
                  'goal_2' => 0.3,
                  'goal_3' => 0.35,
                  'goal_4' => 0.2,
                  'goal' => 1,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity16 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct17,
                  'name' => '4.5.2. Porcentaje de especies amenazadas con medidas de conservación y manejo en ejecución',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity17 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct18,
                  'name' => '4.5.3 Porcentaje de especies invasoras con medidas de prevención, control y manejo en ejecución.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 34,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity18 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct19,
                  'name' => '4.6.1 Porcentaje de avance en monitoreos y diagnósticos del recurso suelo ',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity19 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct20,
                  'name' => '4.7.1  Porcentaje de avance el monitoreo y seguimiento a la calidad del aire en zonas priorizadas',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity20 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' =>$idobjectiveproduct21,
                  'name' => '4.8.1 Porcentaje de actualización y reporte de la información en el SIAC.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity21 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' =>$idobjectiveproduct22,
                  'name' => '4.8.2 Porcentaje de avance en la implementación de los sistemas GeoAmbiental y Sistemas establecidos en el Fallo Río Bogotá',
                  'goal_1' => 0.42,
                  'goal_2' => 0.21,
                  'goal_3' => 0.16,
                  'goal_4' => 0.21,
                  'goal' => 1,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity22 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective16,
                  'product_id' =>$idobjectiveproduct23,
                  'name' => '4.9.1 Porcentaje de avance en el montaje y puesta en operación del Centro de Investigacion Ambiental - CIA',
                  'goal_1' => 0.1,
                  'goal_2' => 0.3,
                  'goal_3' => 0.3,
                  'goal_4' => 0.3,
                  'goal' => 1,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity23 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct24,
                  'name' => '4.10.1 Porcentaje de avance en  el montaje, validación  y/o revalidación de técnicas de matrices ambientales (agua, aire y suelo)',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity24 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective18,
                  'product_id' =>$idobjectiveproduct25,
                  'name' => '4.11.1 Porcentaje de Avance en la valoración económica de la zona priorizada',
                  'goal_1' => 0.15,
                  'goal_2' => 0.3,
                  'goal_3' => 0.3,
                  'goal_4' => 0.25,
                  'goal' => 1,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity25 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective18,
                  'product_id' =>$idobjectiveproduct26,
                  'name' => 'Asignación presupuestal proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity26 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective19,
                  'product_id' =>$idobjectiveproduct27,
                  'name' => '5.1.1 Porcentaje de avance en la implementación del plan',
                  'goal_1' => 0.2,
                  'goal_2' => 0.3,
                  'goal_3' => 0.3,
                  'goal_4' => 0.2,
                  'goal' => 1,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity27 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective20,
                  'product_id' =>$idobjectiveproduct28,
                  'name' => '5.2.1 Porcentaje  de avance en la implementación del plan',
                  'goal_1' => 0.2,
                  'goal_2' => 0.3,
                  'goal_3' => 0.3,
                  'goal_4' => 0.2,
                  'goal' => 1,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity28 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective20,
                  'product_id' =>$idobjectiveproduct29,
                  'name' => 'Asignación presupuestal proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity29 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective21,
                  'product_id' =>$idobjectiveproduct30,
                  'name' => '6.1.1 No. de expedientes resueltos que se hayan iniciado hasta 31 de diciembre de 2015',
                  'goal_1' => 1050,
                  'goal_2' => 2450,
                  'goal_3' => 2450,
                  'goal_4' => 1050,
                  'goal' => 7000,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity30 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective22,
                  'product_id' =>$idobjectiveproduct31,
                  'name' => '6.2.1 Porcentaje de autorizaciones ambientales resueltas dentro de los tiempos establecidos por la ley o el acuerdo de prestación de servicios de la Entidad.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity31 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective22,
                  'product_id' =>$idobjectiveproduct32,
                  'name' => '6.2.2 Tiempo promedio de trámite para la resoluciòn de autorizaciones ambientales otorgadas por la Corporación',
                  'goal_1' => 420,
                  'goal_2' => 420,
                  'goal_3' => 420,
                  'goal_4' => 420,
                  'goal' => 1680,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity32 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective23,
                  'product_id' =>$idobjectiveproduct33,
                  'name' => '6.3.1 Porcentaje de quejas y contravenciones ambientales atendidas',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity33 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective23,
                  'product_id' =>$idobjectiveproduct34,
                  'name' => '6.3.2 Porcentaje de Procesos Sancionatorios Resueltos',
                  'goal_1' => 0.05,
                  'goal_2' => 0.15,
                  'goal_3' => 0.15,
                  'goal_4' => 0.1,
                  'goal' => 0.45,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity34 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective24,
                  'product_id' =>$idobjectiveproduct35,
                  'name' => '6.4.1 Porcentaje de autorizaciones ambientales con seguimiento',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity35 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective24,
                  'product_id' =>$idobjectiveproduct36,
                  'name' => '6.4.2 Porcentaje de Programas de Uso Eficiente y Ahorro del Agua (PUEAA) con seguimiento',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity36 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective24,
                  'product_id' =>$idobjectiveproduct37,
                  'name' => 'Asignación presupuestal proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity37 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective25,
                  'product_id' =>$idobjectiveproduct38,
                  'name' => '7.1.1 Número de Cuencas de segundo orden con control y vigilancia',
                  'goal_1' => 7,
                  'goal_2' => 7,
                  'goal_3' => 7,
                  'goal_4' => 7,
                  'goal' => 28,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity38 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective26,
                  'product_id' =>$idobjectiveproduct39,
                  'name' => '7.2.1 Porcentaje de Planes de Saneamiento y Manejo de Vertimientos (PSMV) con seguimiento',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity39 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective27,
                  'product_id' =>$idobjectiveproduct40,
                  'name' => '7.3.1  Número de acciones de control y vigilancia realizadas',
                  'goal_1' => 250,
                  'goal_2' => 250,
                  'goal_3' => 250,
                  'goal_4' => 250,
                  'goal' => 1000,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity40 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective28,
                  'product_id' =>$idobjectiveproduct41,
                  'name' => '7.4.1 Número de  acciones de evaluación, control y vigilancia ambiental ejecutadas',
                  'goal_1' => 250,
                  'goal_2' => 500,
                  'goal_3' => 500,
                  'goal_4' => 500,
                  'goal' => 1750,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity41 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective29,
                  'product_id' =>$idobjectiveproduct42,
                  'name' => '7.5.1 Porcentaje de avance en la elaboración y desarrollo  del plan ',
                  'goal_1' => 0.25,
                  'goal_2' => 0.25,
                  'goal_3' => 0.25,
                  'goal_4' => 0.25,
                  'goal' => 1,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity42 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective30,
                  'product_id' =>$idobjectiveproduct43,
                  'name' => '7.6.1 Porcentaje de ejecución de actividades priorizadas del Plan de Gestión integral de Respel CAR',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity43 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective31,
                  'product_id' =>$idobjectiveproduct44,
                  'name' => '7.7.1 Porcentaje de Planes de Gestión Integral de Residuos Sólidos (PGIRS) con seguimiento a metas de aprovechamiento',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity44 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective32,
                  'product_id' =>$idobjectiveproduct45,
                  'name' => '7.8.1 Porcentaje de  avance planes evaluados y con seguimiento',
                  'goal_1' => 0.25,
                  'goal_2' => 0.25,
                  'goal_3' => 0.25,
                  'goal_4' => 0.25,
                  'goal' => 1,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity45 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective33,
                  'product_id' =>$idobjectiveproduct46,
                  'name' => '7.9.1  Porcentaje de avance de los seguimientos realizados a las actividades del PMA y/o a las industrias en la zona de influencia del Embalse del Muña',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity46 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective33,
                  'product_id' =>$idobjectiveproduct47,
                  'name' => 'Asignación presupuestal proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity47 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective34,
                  'product_id' =>$idobjectiveproduct48,
                  'name' => '8.1.1 Número de Operativos realizados a actividades de Alto Impacto',
                  'goal_1' => 5,
                  'goal_2' => 12,
                  'goal_3' => 12,
                  'goal_4' => 11,
                  'goal' => 40,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity48 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective35,
                  'product_id' =>$idobjectiveproduct49,
                  'name' => '9.1.1. Porcentaje de avance en la implementación de las acciones del PETIC.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity49 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective36,
                  'product_id' =>$idobjectiveproduct50,
                  'name' => '9.2.1 Porcentaje de avance en la implementación de la estrategia de Gobierno en Línea.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity50 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective37,
                  'product_id' =>$idobjectiveproduct51,
                  'name' => '9.3.1 Porcentaje de Avance del proceso de mantenimiento, actualización y mejoramiento del SIGESPU',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity51 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective38,
                  'product_id' =>$idobjectiveproduct52,
                  'name' => '9.4.1 Porcentaje de avance de la estrategia',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity52 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective39,
                  'product_id' =>$idobjectiveproduct53,
                  'name' => '9.5.1 Numero de instrumentos de cooperación suscritos y ejecutados',
                  'goal_1' => 5,
                  'goal_2' => 5,
                  'goal_3' => 5,
                  'goal_4' => 5,
                  'goal' => 20,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity53 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective39,
                  'product_id' =>$idobjectiveproduct54,
                  'name' => 'Asignación presupuestal proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity54 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective40,
                  'product_id' =>$idobjectiveproduct55,
                  'name' => '10.1.1 Número de Archivos de Gestión apoyados en la organización de series documentales.',
                  'goal_1' => 24,
                  'goal_2' => 24,
                  'goal_3' => 24,
                  'goal_4' => 24,
                  'goal' => 96,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity55 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective41,
                  'product_id' =>$idobjectiveproduct56,
                  'name' => '10.2.1 Porcentaje de avance en la adquisición y/o construcción de la sede administrativa',
                  'goal_1' => 0.1,
                  'goal_2' => 0.2,
                  'goal_3' => 0.6,
                  'goal_4' => 0.1,
                  'goal' => 1,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity56 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective42,
                  'product_id' =>$idobjectiveproduct57,
                  'name' => '10.3.1 No. de sedes mantenidas y/o dotadas',
                  'goal_1' => 3,
                  'goal_2' => 3,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 10,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity57 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective42,
                  'product_id' =>$idobjectiveproduct58,
                  'name' => 'Asignación presupuestal proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity58 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective43,
                  'product_id' =>$idobjectiveproduct59,
                  'name' => '11.1.1 Porcentaje de sectores con acompañamiento para la reconversión hacia sistemas sostenibles de producción',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity59 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective43,
                  'product_id' =>$idobjectiveproduct60,
                  'name' => '11.1.2 No. de empresas con procesos de autogestión ambiental participativa.',
                  'goal_1' => 50,
                  'goal_2' => 50,
                  'goal_3' => 50,
                  'goal_4' => 50,
                  'goal' => 200,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity60 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective44,
                  'product_id' =>$idobjectiveproduct61,
                  'name' => '11.2.1 Implementación del programa regional de negocios verdes por la autoridad ambiental',
                  'goal_1' => 0.25,
                  'goal_2' => 0.25,
                  'goal_3' => 0.25,
                  'goal_4' => 0.25,
                  'goal' => 1,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity61 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective45,
                  'product_id' =>$idobjectiveproduct62,
                  'name' => '11.3.1 Número de encadenamientos productivos promovidos y/o en seguimiento',
                  'goal_1' => 6,
                  'goal_2' => 6,
                  'goal_3' => 6,
                  'goal_4' => 6,
                  'goal' => 24,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity62 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective45,
                  'product_id' =>$idobjectiveproduct63,
                  'name' => 'Asignación presupuestal proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity63 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective46,
                  'product_id' =>$idobjectiveproduct64,
                  'name' => '12.1.1 Porcentaje de avance en la intervención de Conflictos socioambientales',
                  'goal_1' => 0.175,
                  'goal_2' => 0.325,
                  'goal_3' => 0.25,
                  'goal_4' => 0.25,
                  'goal' => 1,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity64 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective47,
                  'product_id' =>$idobjectiveproduct65,
                  'name' => '12.2.1 Porcentaje de avance en la implementación de  procesos de formación',
                  'goal_1' => 0.2,
                  'goal_2' => 0.3,
                  'goal_3' => 0.4,
                  'goal_4' => 0.1,
                  'goal' => 1,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity65 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective48,
                  'product_id' =>$idobjectiveproduct66,
                  'name' => '12.3.1 Número de proyectos  emprendimiento social en implementación ',
                  'goal_1' => 50,
                  'goal_2' => 90,
                  'goal_3' => 90,
                  'goal_4' => 70,
                  'goal' => 300,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity66 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective49,
                  'product_id' =>$idobjectiveproduct67,
                  'name' => '12.4.1 Porcentaje de avance en la implementacion de la agenda indigena   ',
                  'goal_1' => 0.2,
                  'goal_2' => 0.3,
                  'goal_3' => 0.25,
                  'goal_4' => 0.25,
                  'goal' => 1,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity67 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective49,
                  'product_id' =>$idobjectiveproduct68,
                  'name' => 'Asignación presupuestal proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity68 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective50,
                  'product_id' =>$idobjectiveproduct69,
                  'name' => '13.1.1 Numero de hectareas intervenidas con agricultura y/o ganaderia de conservacion y obras biomecanicas y de bioingenieria.',
                  'goal_1' => 800,
                  'goal_2' => 900,
                  'goal_3' => 900,
                  'goal_4' => 900,
                  'goal' => 3500,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity69 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective51,
                  'product_id' =>$idobjectiveproduct70,
                  'name' => '13.2.1 Numero de familias asistidas con tecnicas de agricultura y ganadería de conservación',
                  'goal_1' => 1000,
                  'goal_2' => 1000,
                  'goal_3' => 1000,
                  'goal_4' => 1000,
                  'goal' => 4000,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity70 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective52,
                  'product_id' =>$idobjectiveproduct71,
                  'name' => '13.3.1 Porcentaje de avance en la implementación de la estrategia ',
                  'goal_1' => 0.2,
                  'goal_2' => 0.25,
                  'goal_3' => 0.3,
                  'goal_4' => 0.25,
                  'goal' => 1,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity71 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective53,
                  'product_id' =>$idobjectiveproduct72,
                  'name' => '13.4.1 Porcentaje de avance en la implementacion de la estrategia   ',
                  'goal_1' => 0.2,
                  'goal_2' => 0.3,
                  'goal_3' => 0.3,
                  'goal_4' => 0.2,
                  'goal' => 1,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity72 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective53,
                  'product_id' =>$idobjectiveproduct73,
                  'name' => 'Asignación presupuestal proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity73 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective54,
                  'product_id' =>$idobjectiveproduct74,
                  'name' => '14.1.1 Porcentaje de avance en la formulación y/o ajuste de los Planes de Ordenación y Manejo de cuencas (POMCAS)',
                  'goal_1' => 0.3,
                  'goal_2' => 0.25,
                  'goal_3' => 0.35,
                  'goal_4' => 0.1,
                  'goal' => 1,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity74 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective55,
                  'product_id' =>$idobjectiveproduct75,
                  'name' => '14.2.1 Porcentaje de Planes de Ordenación y Manejo de Cuencas (POMCAS) en ejecución',
                  'goal_1' => 0.05,
                  'goal_2' => 0.25,
                  'goal_3' => 0.4,
                  'goal_4' => 0.3,
                  'goal' => 1,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity75 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective56,
                  'product_id' =>$idobjectiveproduct76,
                  'name' => '14.3.1 Porcentaje de cuerpos de agua con plan de ordenamiento del recurso hídrico (PORH) adoptado',
                  'goal_1' => 0.15,
                  'goal_2' => 0.35,
                  'goal_3' => 0.4,
                  'goal_4' => 0.1,
                  'goal' => 1,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity76 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective57,
                  'product_id' =>$idobjectiveproduct77,
                  'name' => '14.4.1 Porcentaje de avance en la formulación del Plan de Ordenación Forestal ',
                  'goal_1' => 0.2,
                  'goal_2' => 0.3,
                  'goal_3' => 0.3,
                  'goal_4' => 0.2,
                  'goal' => 1,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity77 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective58,
                  'product_id' =>$idobjectiveproduct78,
                  'name' => '14.5.1 Porcentaje de avance en el proceso de reglamentación  de cuerpos de agua',
                  'goal_1' => 0.2,
                  'goal_2' => 0.3,
                  'goal_3' => 0.3,
                  'goal_4' => 0.2,
                  'goal' => 1,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity78 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective58,
                  'product_id' =>$idobjectiveproduct79,
                  'name' => '14.5.2 Porcentaje de cuerpos de agua con reglamentación del uso de las aguas ',
                  'goal_1' => 0.1,
                  'goal_2' => 0.25,
                  'goal_3' => 0.45,
                  'goal_4' => 0.2,
                  'goal' => 1,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity79 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective58,
                  'product_id' =>$idobjectiveproduct80,
                  'name' => 'Asignación presupuestal proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity80 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective59,
                  'product_id' =>$idobjectiveproduct81,
                  'name' => '15.1.1 Porcentaje de avance en la administración, operación y mantenimiento de la infraestructura de los parques de la CAR',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity81 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective60,
                  'product_id' =>$idobjectiveproduct82,
                  'name' => '15.2.1 Porcentaje de avance del objetivo anual del desarrollo de los  proyectos priorizados en Saneamiento Básico.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity82 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective61,
                  'product_id' =>$idobjectiveproduct83,
                  'name' => '15.3.1 Porcentaje de avance del objetivo anual del desarrollo de los  proyectos priorizados en gestión ambiental.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity83 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective61,
                  'product_id' =>$idobjectiveproduct84,
                  'name' => 'Asignación presupuestal proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity84 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective62,
                  'product_id' =>$idobjectiveproduct85,
                  'name' => '16.1.1 Porcentaje de cumplimiento en la administración, operación y mantenimiento de los embalses propiedad de la CAR ',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity85 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective62,
                  'product_id' =>$idobjectiveproduct86,
                  'name' => '16.1.2 Porcentaje de intervención de zonas de los Sistemas Hidráulicos de Manejo Ambiental y de Control de Inundaciones de Fúquene- Cucunubá y La Ramada con operación y/o mantenimiento ',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity86 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective62,
                  'product_id' =>$idobjectiveproduct87,
                  'name' => '16.1.3 Porcentaje de  operación y mantenimiento del Banco  de maquinaria  CAR',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 34,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity87 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective63,
                  'product_id' =>$idobjectiveproduct88,
                  'name' => '16.2.1 Porcentaje de avance del objetivo anual del desarrollo de los  proyectos priorizados en infraestructura enfocada a garantizar la disponibilidad y/o regulación hídrica. ',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity88 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective64,
                  'product_id' =>$idobjectiveproduct89,
                  'name' => '16.3.1 Porcentaje de avance del objetivo anual del desarrollo de los  proyectos priorizados en adecuación y mantenimiento hidráulico',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity89 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective64,
                  'product_id' =>$idobjectiveproduct90,
                  'name' => 'Asignación presupuestal proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity90 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective65,
                  'product_id' =>$idobjectiveproduct91,
                  'name' => '17.1.1 Porcentaje de avance en la redelimitación y/o recategorización de las áreas protegidas ',
                  'goal_1' => 0.1,
                  'goal_2' => 0.4,
                  'goal_3' => 0.4,
                  'goal_4' => 0.1,
                  'goal' => 1,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity91 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective66,
                  'product_id' =>$idobjectiveproduct92,
                  'name' => '17.2.1 Porcentaje de avance en la declataroria de nuevas áreas protegidas ',
                  'goal_1' => 0.2,
                  'goal_2' => 0.35,
                  'goal_3' => 0.35,
                  'goal_4' => 0.1,
                  'goal' => 1,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity92 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective66,
                  'product_id' =>$idobjectiveproduct93,
                  'name' => '17.2.2  Porcentaje de la superficie de áreas protegidas regionales declaradas homologadas o recategorizadas, inscritas en el RUNAP',
                  'goal_1' => 0,
                  'goal_2' => 0.2,
                  'goal_3' => 0.3,
                  'goal_4' => 0.5,
                  'goal' => 1,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity93 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective67,
                  'product_id' =>$idobjectiveproduct94,
                  'name' => '17.3.1 Porcentaje de avance en la delimitación y/o caracterización de ecosistemas estratégicos',
                  'goal_1' => 0.15,
                  'goal_2' => 0.35,
                  'goal_3' => 0.4,
                  'goal_4' => 0.1,
                  'goal' => 1,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity94 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective67,
                  'product_id' =>$idobjectiveproduct95,
                  'name' => '17.3.2 Porcentaje de páramos delimitados por el MADS, con zonificación y régimen de usos adoptados por la CAR',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0.2,
                  'goal' => 0.2,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity95 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective68,
                  'product_id' =>$idobjectiveproduct96,
                  'name' => '17.4.1 Porcentaje de avance en la formulación y/o actualización de los PMA  ',
                  'goal_1' => 0.15,
                  'goal_2' => 0.35,
                  'goal_3' => 0.35,
                  'goal_4' => 0.15,
                  'goal' => 1,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity96 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective69,
                  'product_id' =>$idobjectiveproduct97,
                  'name' => '17.5.1 Porcentaje de áreas protegidas con planes de manejo en ejecución',
                  'goal_1' => 0,
                  'goal_2' => 0.08,
                  'goal_3' => 0.12,
                  'goal_4' => 0.12,
                  'goal' => 0.32,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity97 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective69,
                  'product_id' =>$idobjectiveproduct98,
                  'name' => '17.5.2 Porcentaje de avance en la implementación de acciones definidas  en los planes de manejo adoptados, priorizados y en ejecución  de las áreas protegidas y ecosistemas estratégicos del Territorio CAR.',
                  'goal_1' => 0.06,
                  'goal_2' => 0.33,
                  'goal_3' => 0.33,
                  'goal_4' => 0.28,
                  'goal' => 1,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity98 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective70,
                  'product_id' =>$idobjectiveproduct99,
                  'name' => '17.6.1 Áreas de interés ambiental con acciones de conservación implementadas.',
                  'goal_1' => 200,
                  'goal_2' => 1000,
                  'goal_3' => 2000,
                  'goal_4' => 800,
                  'goal' => 4000,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity99 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective70,
                  'product_id' =>$idobjectiveproduct100,
                  'name' => '17.6.2 Porcentaje de suelos degradados en recuperación o rehabilitación',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity100 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective70,
                  'product_id' =>$idobjectiveproduct101,
                  'name' => '17.6.3 Porcentaje de áreas de ecosistemas en restauración, rehabilitación y reforestación ',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity101 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective70,
                  'product_id' =>$idobjectiveproduct102,
                  'name' => 'Asignación presupuestal proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity102 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective71,
                  'product_id' =>$idobjectiveproduct103,
                  'name' => '18.1.1 Ejecución de acciones en gestión ambiental urbana  ',
                  'goal_1' => 0.1,
                  'goal_2' => 0.3,
                  'goal_3' => 0.4,
                  'goal_4' => 0.2,
                  'goal' => 1,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity103 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective72,
                  'product_id' =>$idobjectiveproduct104,
                  'name' => '18.2.1 Municipios asesorados y/o asistidos en la formulación de su Sistema de Gestion Ambiental SIGAM',
                  'goal_1' => 5,
                  'goal_2' => 10,
                  'goal_3' => 10,
                  'goal_4' => 5,
                  'goal' => 30,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity104 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective72,
                  'product_id' =>$idobjectiveproduct105,
                  'name' => '18.2.2 Municipios apoyados en el seguimiento a su Sistema de Gestion Ambiental SIGAM ',
                  'goal_1' => 10,
                  'goal_2' => 15,
                  'goal_3' => 15,
                  'goal_4' => 10,
                  'goal' => 50,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity105 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective73,
                  'product_id' =>$idobjectiveproduct106,
                  'name' => '18.3.1 Número de municipios con apoyo a la actualización y/o conservación catastral  en ejecución ',
                  'goal_1' => 5,
                  'goal_2' => 10,
                  'goal_3' => 10,
                  'goal_4' => 5,
                  'goal' => 30,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity106 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective74,
                  'product_id' =>$idobjectiveproduct107,
                  'name' => '18.4.1. Porcentaje de municipios asesorados o asistidos en la inclusión del componente ambiental en los procesos de planificación y ordenamiento territorial, con énfasis en la incoporación de las determinantes ambientales para la revisión y ajuste de los POT.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity107 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective74,
                  'product_id' =>$idobjectiveproduct108,
                  'name' => '18.4.2 Porcentaje de municipios con seguimiento al cumplimiento de los asuntos ambientales concertados de los POT adoptados',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity108 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective74,
                  'product_id' =>$idobjectiveproduct109,
                  'name' => 'Asignación presupuestal proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity109 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective75,
                  'product_id' =>$idobjectiveproduct110,
                  'name' => '19.1.1 Número de mapas de puntos críticos de riesgo actualizados ',
                  'goal_1' => 105,
                  'goal_2' => 105,
                  'goal_3' => 105,
                  'goal_4' => 105,
                  'goal' => 420,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity110 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective75,
                  'product_id' =>$idobjectiveproduct111,
                  'name' => '19.1.2 No de municipios  con monitoreo a puntos críticos.',
                  'goal_1' => 105,
                  'goal_2' => 105,
                  'goal_3' => 105,
                  'goal_4' => 105,
                  'goal' => 420,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity111 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective76,
                  'product_id' =>$idobjectiveproduct112,
                  'name' => '19.2.1 Número de cuencas con estudios y/o diseños para el conocimiento del riesgo.',
                  'goal_1' => 3,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 3,
                  'goal' => 10,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity112 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective77,
                  'product_id' =>$idobjectiveproduct113,
                  'name' => '19.3.1 
                Porcentaje de avance en la implementación de medidas de reducción de impactos por variabilidad y cambio climático',
                  'goal_1' => 0.46,
                  'goal_2' => 0.3,
                  'goal_3' => 0.14,
                  'goal_4' => 0.1,
                  'goal' => 1,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity113 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective78,
                  'product_id' =>$idobjectiveproduct114,
                  'name' => '19.4.1  Porcentaje de entes territoriales asesorados en la incorporación, planificación y ejecución de acciones relacionadas con cambio climático en el marco de los instrumentos de planificación territorial',
                  'goal_1' => 0.1,
                  'goal_2' => 0.3,
                  'goal_3' => 0.3,
                  'goal_4' => 0.3,
                  'goal' => 1,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity114 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective78,
                  'product_id' =>$idobjectiveproduct115,
                  'name' => '19.4.2 No. De municipios dotados de conocimiento en gestión del riesgo y cambio climático.',
                  'goal_1' => 105,
                  'goal_2' => 105,
                  'goal_3' => 105,
                  'goal_4' => 105,
                  'goal' => 420,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity115 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective78,
                  'product_id' =>$idobjectiveproduct116,
                  'name' => 'Asignación presupuestal proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity116 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective79,
                  'product_id' =>$idobjectiveproduct117,
                  'name' => '20.1.1 Porcentaje de avance del objetivo anual  en el desarrollo de  medidas de reducción del riesgo en  puntos críticos priorizados ',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity117 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective80,
                  'product_id' =>$idobjectiveproduct118,
                  'name' => '20.2.1 Porcentaje de avance en las actividades de atención en los puntos críticos priorizados por emergencia. ',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity118 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective80,
                  'product_id' =>$idobjectiveproduct119,
                  'name' => 'Asignación presupuestal proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity119 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective81,
                  'product_id' =>$idobjectiveproduct120,
                  'name' => '21.1.1 Porcentaje de Avance en la formulación e implementación del programa ',
                  'goal_1' => 0.2,
                  'goal_2' => 0.25,
                  'goal_3' => 0.3,
                  'goal_4' => 0.25,
                  'goal' => 1,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity120 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective82,
                  'product_id' =>$idobjectiveproduct121,
                  'name' => '22.1.1 Porcentaje de Avance en el Proceso de Contratación y en la Ejecución de la Obra',
                  'goal_1' => 0.1,
                  'goal_2' => 0.1,
                  'goal_3' => 0.1,
                  'goal_4' => 0.2,
                  'goal' => 0.5,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity121 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective83,
                  'product_id' =>$idobjectiveproduct122,
                  'name' => '22.2.1 Porcentaje de Avance de Obra de adecuación hidráulica del Río Bogotá en la cuenca media',
                  'goal_1' => 0.76,
                  'goal_2' => 0.8,
                  'goal_3' => 0.9,
                  'goal_4' => 1,
                  'goal' => 3.46,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity122 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective84,
                  'product_id' =>$idobjectiveproduct123,
                  'name' => '22.3.1 Porcentaje de Avance de Obra de Adecuación hidráulica del Río Bogotá en la Cuenca Alta',
                  'goal_1' => 0,
                  'goal_2' => 0.05,
                  'goal_3' => 0.15,
                  'goal_4' => 0.2,
                  'goal' => 0.4,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity123 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective85,
                  'product_id' =>$idobjectiveproduct124,
                  'name' => '22.4.1 Porcentaje de cumplimiento de contratación de estudios especializados del Proyecto',
                  'goal_1' => 0.6,
                  'goal_2' => 0.75,
                  'goal_3' => 0.85,
                  'goal_4' => 1,
                  'goal' => 3.2,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity124 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective86,
                  'product_id' =>$idobjectiveproduct125,
                  'name' => '22.5.1 Porcentaje de cumplimiento en la administración y gerencia del Proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity125 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective87,
                  'product_id' =>$idobjectiveproduct126,
                  'name' => '22.6.1 Porcentaje de Predios Disponibles para el Proyecto en la Cuenca Media',
                  'goal_1' => 0.9,
                  'goal_2' => 0.95,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3.85,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity126 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective88,
                  'product_id' =>$idobjectiveproduct127,
                  'name' => '22.7.1 Porcentaje de Avance en Procesos para la Disponibilidad de Predios en la Cuenca Alta',
                  'goal_1' => 0.1,
                  'goal_2' => 0.1,
                  'goal_3' => 0.1,
                  'goal_4' => 0.2,
                  'goal' => 0.5,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity127 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective89,
                  'product_id' =>$idobjectiveproduct128,
                  'name' => '22.8.1 Número de proyectos formulados o en ejecución',
                  'goal_1' => 2,
                  'goal_2' => 2,
                  'goal_3' => 3,
                  'goal_4' => 3,
                  'goal' => 10,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity128 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective89,
                  'product_id' =>$idobjectiveproduct129,
                  'name' => 'Asignación presupuestal proyecto',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity129 = DB::getPdo()->lastInsertId();
        
        DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity1,
          'year' =>1,
          'value' => 0.19856,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia1 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity2,
          'year' =>1,
          'value' => 0.15,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia2 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity3,
          'year' =>1,
          'value' => 0.2,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia3 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity4,
          'year' =>1,
          'value' => 0.2,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia4 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity5,
          'year' =>1,
          'value' => 0.2,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia5 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity6,
          'year' =>1,
          'value' => 105,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia6 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity7,
          'year' =>1,
          'value' => 0.96,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia7 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity8,
          'year' =>1,
          'value' => 0.01,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia8 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity9,
          'year' =>1,
          'value' => 0.825,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia9 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity10,
          'year' =>1,
          'value' => 20,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia10 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity11,
          'year' =>1,
          'value' => 24,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia11 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity12,
          'year' =>1,
          'value' => 0.25,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia12 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity13,
          'year' =>1,
          'value' => 0.25,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia13 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity14,
          'year' =>1,
          'value' => 0.78025,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia14 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity15,
          'year' =>1,
          'value' => 0.5,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia15 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity16,
          'year' =>1,
          'value' => 0.15,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia16 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity17,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia17 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity18,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia18 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity19,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia19 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity20,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia20 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity21,
          'year' =>1,
          'value' => 0.902345714285714,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia21 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity22,
          'year' =>1,
          'value' => 0.593,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia22 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity23,
          'year' =>1,
          'value' => 0.1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia23 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity24,
          'year' =>1,
          'value' => 2.6,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia24 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity25,
          'year' =>1,
          'value' => 0.15,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia25 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity26,
          'year' =>1,
          'value' => 0.01,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia26 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity27,
          'year' =>1,
          'value' => 0.2,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia27 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity28,
          'year' =>1,
          'value' => 0.2,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia28 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity29,
          'year' =>1,
          'value' => 0.01,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia29 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity30,
          'year' =>1,
          'value' => 1448,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia30 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity31,
          'year' =>1,
          'value' => 0.956563706563707,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia31 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity32,
          'year' =>1,
          'value' => 155,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia32 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity33,
          'year' =>1,
          'value' => 0.865778200856735,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia33 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity34,
          'year' =>1,
          'value' => 0.089,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia34 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity35,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia35 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity36,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia36 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity37,
          'year' =>1,
          'value' => 0.01,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia37 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity38,
          'year' =>1,
          'value' => 7,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia38 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity39,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia39 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity40,
          'year' =>1,
          'value' => 250,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia40 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity41,
          'year' =>1,
          'value' => 506,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia41 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity42,
          'year' =>1,
          'value' => 0.242553571428571,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia42 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity43,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia43 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity44,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia44 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity45,
          'year' =>1,
          'value' => 0.25,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia45 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity46,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia46 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity47,
          'year' =>1,
          'value' => 0.01,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia47 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity48,
          'year' =>1,
          'value' => 11,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia48 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity49,
          'year' =>1,
          'value' => 0.933076923076923,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia49 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity50,
          'year' =>1,
          'value' => 1.00199,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia50 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity51,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia51 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity52,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia52 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity53,
          'year' =>1,
          'value' => 4,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia53 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity54,
          'year' =>1,
          'value' => 0.01,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia54 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity55,
          'year' =>1,
          'value' => 24,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia55 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity56,
          'year' =>1,
          'value' => 0.04,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia56 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity57,
          'year' =>1,
          'value' => 3,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia57 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity58,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia58 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity59,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia59 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity60,
          'year' =>1,
          'value' => 50,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia60 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity61,
          'year' =>1,
          'value' => 0.25,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia61 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity62,
          'year' =>1,
          'value' => 6,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia62 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity63,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia63 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity64,
          'year' =>1,
          'value' => 0.0875,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia64 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity65,
          'year' =>1,
          'value' => 0.2,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia65 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity66,
          'year' =>1,
          'value' => 60,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia66 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity67,
          'year' =>1,
          'value' => 0.2,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia67 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity68,
          'year' =>1,
          'value' => 0.01,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia68 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity69,
          'year' =>1,
          'value' => 1285.16,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia69 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity70,
          'year' =>1,
          'value' => 1368,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia70 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity71,
          'year' =>1,
          'value' => 0.572916666666667,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia71 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity72,
          'year' =>1,
          'value' => 0.2,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia72 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity73,
          'year' =>1,
          'value' => 0.01,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia73 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity74,
          'year' =>1,
          'value' => 0.3,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia74 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity75,
          'year' =>1,
          'value' => 0.05,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia75 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity76,
          'year' =>1,
          'value' => 0.15,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia76 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity79,
          'year' =>1,
          'value' => 0.1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia78 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity80,
          'year' =>1,
          'value' => 0.01,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia79 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity81,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia80 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity82,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia81 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity83,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia82 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity84,
          'year' =>1,
          'value' => 0.01,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia83 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity85,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia84 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity86,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia85 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity87,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia86 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity88,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia87 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity89,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia88 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity90,
          'year' =>1,
          'value' => 0.01,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia89 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity91,
          'year' =>1,
          'value' => 0.1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia90 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity92,
          'year' =>1,
          'value' => 0.2,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia91 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity99,
          'year' =>1,
          'value' => 202.2,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia95 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity100,
          'year' =>1,
          'value' => 0.85,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia96 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity101,
          'year' =>1,
          'value' => 1.866,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia97 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity102,
          'year' =>1,
          'value' => 0.01,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia98 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity103,
          'year' =>1,
          'value' => 0.0999,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia99 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity104,
          'year' =>1,
          'value' => 5,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia100 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity105,
          'year' =>1,
          'value' => 10,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia101 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity108,
          'year' =>1,
          'value' => 0.79047619047619,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia103 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity109,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia104 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity110,
          'year' =>1,
          'value' => 105,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia105 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity111,
          'year' =>1,
          'value' => 105,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia106 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity112,
          'year' =>1,
          'value' => 3,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia107 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity113,
          'year' =>1,
          'value' => 0.1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia108 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity114,
          'year' =>1,
          'value' => 0.1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia109 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity115,
          'year' =>1,
          'value' => 105,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia110 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity116,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia111 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity117,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia112 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity118,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia113 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity119,
          'year' =>1,
          'value' => 0.01,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia114 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity120,
          'year' =>1,
          'value' => 0.3,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia115 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity121,
          'year' =>1,
          'value' => 0.1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia116 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity122,
          'year' =>1,
          'value' => 0.76,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia117 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity125,
          'year' =>1,
          'value' => 1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia119 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity126,
          'year' =>1,
          'value' => 0.97,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia120 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity127,
          'year' =>1,
          'value' => 0.1,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia121 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity128,
          'year' =>1,
          'value' => 3,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia122 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity129,
          'year' =>1,
          'value' => 0.01,
          'date_report' => '2016-12-31',
          'rezago' => false,
          ]);
          $idevidencia123 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity1,
          'year' =>2,
          'value' => 0.3,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia124 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity2,
          'year' =>2,
          'value' => 0.3,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia125 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity3,
          'year' =>2,
          'value' => 0.35,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia126 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity4,
          'year' =>2,
          'value' => 0.35,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia127 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity5,
          'year' =>2,
          'value' => 0.35,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia128 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity6,
          'year' =>2,
          'value' => 105,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia129 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity7,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia130 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity8,
          'year' =>2,
          'value' => 0.01,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia131 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity9,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia132 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity10,
          'year' =>2,
          'value' => 20,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia133 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity11,
          'year' =>2,
          'value' => 24,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia134 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity12,
          'year' =>2,
          'value' => 0.51,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia135 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity13,
          'year' =>2,
          'value' => 0.25,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia136 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity14,
          'year' =>2,
          'value' => 0.99,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia137 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity15,
          'year' =>2,
          'value' => 0.75,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia138 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity16,
          'year' =>2,
          'value' => 0.296,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia139 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity17,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia140 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity18,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia141 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity19,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia142 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity20,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia143 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity21,
          'year' =>2,
          'value' => 0.95,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia144 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity22,
          'year' =>2,
          'value' => 0.2,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia145 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity23,
          'year' =>2,
          'value' => 0.3,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia146 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity24,
          'year' =>2,
          'value' => 0.9,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia147 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity25,
          'year' =>2,
          'value' => 0.3,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia148 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity26,
          'year' =>2,
          'value' => 0.01,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia149 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity27,
          'year' =>2,
          'value' => 0.3,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia150 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity28,
          'year' =>2,
          'value' => 0.3,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia151 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity29,
          'year' =>2,
          'value' => 0.01,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia152 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity30,
          'year' =>2,
          'value' => 2144,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia153 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity31,
          'year' =>2,
          'value' => 0.91,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia154 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity32,
          'year' =>2,
          'value' => 207,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia155 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity33,
          'year' =>2,
          'value' => 0.93,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia156 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity34,
          'year' =>2,
          'value' => 0.11,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia157 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity35,
          'year' =>2,
          'value' => 1.19,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia158 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity36,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia159 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity37,
          'year' =>2,
          'value' => 0.01,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia160 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity38,
          'year' =>2,
          'value' => 7,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia161 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity39,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia162 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity40,
          'year' =>2,
          'value' => 336,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia163 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity41,
          'year' =>2,
          'value' => 543,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia164 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity42,
          'year' =>2,
          'value' => 0.25,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia165 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity43,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia166 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity44,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia167 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity45,
          'year' =>2,
          'value' => 0.25,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia168 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity46,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia169 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity47,
          'year' =>2,
          'value' => 0.01,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia170 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity48,
          'year' =>2,
          'value' => 17,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia171 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity49,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia172 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity50,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia173 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity51,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia174 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity52,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia175 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity53,
          'year' =>2,
          'value' => 9,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia176 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity54,
          'year' =>2,
          'value' => 0.01,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia177 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity55,
          'year' =>2,
          'value' => 26,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia178 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity56,
          'year' =>2,
          'value' => 0.2,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia179 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity57,
          'year' =>2,
          'value' => 3,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia180 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity58,
          'year' =>2,
          'value' => 0.01,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia181 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity59,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia182 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity60,
          'year' =>2,
          'value' => 60,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia183 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity61,
          'year' =>2,
          'value' => 0.25,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia184 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity62,
          'year' =>2,
          'value' => 6,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia185 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity63,
          'year' =>2,
          'value' => 0.01,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia186 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity64,
          'year' =>2,
          'value' => 0.33,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia187 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity65,
          'year' =>2,
          'value' => 0.3,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia188 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity66,
          'year' =>2,
          'value' => 106,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia189 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity67,
          'year' =>2,
          'value' => 0.3,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia190 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity68,
          'year' =>2,
          'value' => 0.01,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia191 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity69,
          'year' =>2,
          'value' => 962.47,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia192 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity70,
          'year' =>2,
          'value' => 1059,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia193 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity71,
          'year' =>2,
          'value' => 0.25,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia194 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity72,
          'year' =>2,
          'value' => 0.3,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia195 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity73,
          'year' =>2,
          'value' => 0.01,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia196 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity74,
          'year' =>2,
          'value' => 0.24,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia197 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity75,
          'year' =>2,
          'value' => 0.25,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia198 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity76,
          'year' =>2,
          'value' => 0.35,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia199 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity78,
          'year' =>2,
          'value' => 0.254,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia200 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity79,
          'year' =>2,
          'value' => 0.25,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia201 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity80,
          'year' =>2,
          'value' => 0.01,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia202 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity81,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia203 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity82,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia204 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity83,
          'year' =>2,
          'value' => 0.79,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia205 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity84,
          'year' =>2,
          'value' => 0.01,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia206 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity85,
          'year' =>2,
          'value' => 0.98,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia207 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity86,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia208 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity87,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia209 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity88,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia210 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity89,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia211 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity90,
          'year' =>2,
          'value' => 0.01,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia212 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity91,
          'year' =>2,
          'value' => 0.36,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia213 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity92,
          'year' =>2,
          'value' => 0.64,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia214 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity93,
          'year' =>2,
          'value' => 0.26,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia215 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity94,
          'year' =>2,
          'value' => 0.35,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia216 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity96,
          'year' =>2,
          'value' => 0.35,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia217 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity97,
          'year' =>2,
          'value' => 0.29,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia218 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity98,
          'year' =>2,
          'value' => 0.42,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia219 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity99,
          'year' =>2,
          'value' => 699,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia220 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity100,
          'year' =>2,
          'value' => 1.01,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia221 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity101,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia222 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity102,
          'year' =>2,
          'value' => 0.01,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia223 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity103,
          'year' =>2,
          'value' => 0.3,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia224 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity104,
          'year' =>2,
          'value' => 11,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia225 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity105,
          'year' =>2,
          'value' => 16,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia226 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity106,
          'year' =>2,
          'value' => 32,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia227 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity107,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia228 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity108,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia229 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity109,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia230 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity110,
          'year' =>2,
          'value' => 105,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia231 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity111,
          'year' =>2,
          'value' => 105,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia232 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity113,
          'year' =>2,
          'value' => 0.19,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia233 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity114,
          'year' =>2,
          'value' => 0.3,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia234 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity115,
          'year' =>2,
          'value' => 105,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia235 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity116,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia236 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity117,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia237 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity118,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia238 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity119,
          'year' =>2,
          'value' => 0.01,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia239 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity120,
          'year' =>2,
          'value' => 0.3,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia240 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity121,
          'year' =>2,
          'value' => 0.2,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia241 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity122,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia242 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity124,
          'year' =>2,
          'value' => 0.85,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia243 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity125,
          'year' =>2,
          'value' => 1,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia244 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity126,
          'year' =>2,
          'value' => 0.98,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia245 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity127,
          'year' =>2,
          'value' => 0.12,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia246 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity128,
          'year' =>2,
          'value' => 2,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia247 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity129,
          'year' =>2,
          'value' => 0.01,
          'date_report' => '2017-12-31',
          'rezago' => false,
          ]);
          $idevidencia248 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity1,
          'year' =>3,
          'value' => 0.3,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia249 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity2,
          'year' =>3,
          'value' => 0.35,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia250 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity3,
          'year' =>3,
          'value' => 0.3,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia251 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity4,
          'year' =>3,
          'value' => 0.3,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia252 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity5,
          'year' =>3,
          'value' => 0.3,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia253 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity6,
          'year' =>3,
          'value' => 105,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia254 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity7,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia255 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity8,
          'year' =>3,
          'value' => 0.01,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia256 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity9,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia257 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity10,
          'year' =>3,
          'value' => 20,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia258 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity11,
          'year' =>3,
          'value' => 14,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia259 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity12,
          'year' =>3,
          'value' => 0.75,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia260 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity13,
          'year' =>3,
          'value' => 0.25,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia261 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity14,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia262 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity15,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia263 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity16,
          'year' =>3,
          'value' => 0.35,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia264 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity17,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia265 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity18,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia266 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity19,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia267 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity20,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia268 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity21,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia269 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity22,
          'year' =>3,
          'value' => 0.16,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia270 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity23,
          'year' =>3,
          'value' => 0.3,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia271 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity24,
          'year' =>3,
          'value' => 0.9,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia272 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity25,
          'year' =>3,
          'value' => 0.3,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia273 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity26,
          'year' =>3,
          'value' => 0.01,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia274 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity27,
          'year' =>3,
          'value' => 0.3,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia275 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity28,
          'year' =>3,
          'value' => 0.3,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia276 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity29,
          'year' =>3,
          'value' => 0.01,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia277 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity30,
          'year' =>3,
          'value' => 1408,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia278 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity31,
          'year' =>3,
          'value' => 0.94,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia279 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity32,
          'year' =>3,
          'value' => 263,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia280 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity33,
          'year' =>3,
          'value' => 0.94,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia281 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity34,
          'year' =>3,
          'value' => 0.09,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia282 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity35,
          'year' =>3,
          'value' => 0.98,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia283 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity36,
          'year' =>3,
          'value' => 0.92,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia284 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity37,
          'year' =>3,
          'value' => 0.01,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia285 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity38,
          'year' =>3,
          'value' => 7,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia286 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity39,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia287 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity40,
          'year' =>3,
          'value' => 273,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia288 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity41,
          'year' =>3,
          'value' => 621,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia289 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity42,
          'year' =>3,
          'value' => 0.22,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia290 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity43,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia291 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity44,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia292 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity45,
          'year' =>3,
          'value' => 0.25,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia293 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity46,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia294 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity47,
          'year' =>3,
          'value' => 0.01,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia295 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity48,
          'year' =>3,
          'value' => 15,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia296 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity49,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia297 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity50,
          'year' =>3,
          'value' => 0.96,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia298 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity51,
          'year' =>3,
          'value' => 0.98,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia299 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity52,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia300 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity53,
          'year' =>3,
          'value' => 3,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia301 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity54,
          'year' =>3,
          'value' => 0.01,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia302 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity55,
          'year' =>3,
          'value' => 26,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia303 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity56,
          'year' =>3,
          'value' => 0.47,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia304 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity57,
          'year' =>3,
          'value' => 3,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia305 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity58,
          'year' =>3,
          'value' => 0.01,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia306 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity59,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia307 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity60,
          'year' =>3,
          'value' => 50,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia308 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity61,
          'year' =>3,
          'value' => 0.25,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia309 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity62,
          'year' =>3,
          'value' => 2,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia310 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity63,
          'year' =>3,
          'value' => 0.01,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia311 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity64,
          'year' =>3,
          'value' => 0.25,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia312 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity65,
          'year' =>3,
          'value' => 0.4,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia313 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity67,
          'year' =>3,
          'value' => 0.25,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia314 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity68,
          'year' =>3,
          'value' => 0.01,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia315 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity69,
          'year' =>3,
          'value' => 1054,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia316 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity70,
          'year' =>3,
          'value' => 1002,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia317 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity71,
          'year' =>3,
          'value' => 0.44,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia318 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity72,
          'year' =>3,
          'value' => 0.3,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia319 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity73,
          'year' =>3,
          'value' => 0.01,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia320 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity74,
          'year' =>3,
          'value' => 0.3,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia321 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity75,
          'year' =>3,
          'value' => 0.4,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia322 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity76,
          'year' =>3,
          'value' => 0.4,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia323 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity78,
          'year' =>3,
          'value' => 0.3,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia324 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity79,
          'year' =>3,
          'value' => 0.45,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia325 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity80,
          'year' =>3,
          'value' => 0.01,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia326 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity81,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia327 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity82,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia328 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity83,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia329 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity84,
          'year' =>3,
          'value' => 0.01,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia330 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity85,
          'year' =>3,
          'value' => 0.92,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia331 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity86,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia332 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity87,
          'year' =>3,
          'value' => 0.68,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia333 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity88,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia334 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity89,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia335 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity90,
          'year' =>3,
          'value' => 0.01,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia336 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity91,
          'year' =>3,
          'value' => 0.4,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia337 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity92,
          'year' =>3,
          'value' => 0.35,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia338 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity93,
          'year' =>3,
          'value' => 0.34,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia339 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity94,
          'year' =>3,
          'value' => 0.4,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia340 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity96,
          'year' =>3,
          'value' => 0.34,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia341 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity97,
          'year' =>3,
          'value' => 0.12,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia342 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity98,
          'year' =>3,
          'value' => 0.47,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia343 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity99,
          'year' =>3,
          'value' => 5633,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia344 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity100,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia345 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity101,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia346 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity102,
          'year' =>3,
          'value' => 0.01,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia347 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity103,
          'year' =>3,
          'value' => 0.4,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia348 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity104,
          'year' =>3,
          'value' => 10,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia349 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity105,
          'year' =>3,
          'value' => 15,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia350 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity106,
          'year' =>3,
          'value' => 55,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia351 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity107,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia352 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity108,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia353 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity109,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia354 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity110,
          'year' =>3,
          'value' => 105,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia355 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity111,
          'year' =>3,
          'value' => 105,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia356 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity112,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia357 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity113,
          'year' =>3,
          'value' => 0.14,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia358 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity114,
          'year' =>3,
          'value' => 0.31,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia359 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity115,
          'year' =>3,
          'value' => 105,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia360 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity116,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia361 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity117,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia362 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity118,
          'year' =>3,
          'value' => 0.75,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia363 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity119,
          'year' =>3,
          'value' => 0.01,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia364 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity120,
          'year' =>3,
          'value' => 0.3,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia365 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity121,
          'year' =>3,
          'value' => 0.2,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia366 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity122,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia367 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity124,
          'year' =>3,
          'value' => 0.9,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia368 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity125,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia369 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity126,
          'year' =>3,
          'value' => 1,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia370 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity127,
          'year' =>3,
          'value' => 0.35,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia371 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity128,
          'year' =>3,
          'value' => 3,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia372 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity129,
          'year' =>3,
          'value' => 0.01,
          'date_report' => '2018-12-31',
          'rezago' => false,
          ]);
          $idevidencia373 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity1,
          'year' =>4,
          'value' => 0.1999998,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia374 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity2,
          'year' =>4,
          'value' => 0.2,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia375 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity3,
          'year' =>4,
          'value' => 0.15,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia376 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity4,
          'year' =>4,
          'value' => 0.15,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia377 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity5,
          'year' =>4,
          'value' => 0.15,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia378 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity6,
          'year' =>4,
          'value' => 105,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia379 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity7,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia380 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity8,
          'year' =>4,
          'value' => 0.01,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia381 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity9,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia382 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity10,
          'year' =>4,
          'value' => 20,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia383 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity11,
          'year' =>4,
          'value' => 24,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia384 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity12,
          'year' =>4,
          'value' => 0.997,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia385 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity13,
          'year' =>4,
          'value' => 0.250000024974494,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia386 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity14,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia387 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity15,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia388 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity16,
          'year' =>4,
          'value' => 0.2,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia389 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity17,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia390 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity18,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia391 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity19,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia392 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity20,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia393 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity21,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia394 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity22,
          'year' =>4,
          'value' => 0.04,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia395 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity23,
          'year' =>4,
          'value' => 0.3,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia396 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity24,
          'year' =>4,
          'value' => 0.9,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia397 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity25,
          'year' =>4,
          'value' => 0.25,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia398 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity26,
          'year' =>4,
          'value' => 0.01,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia399 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity27,
          'year' =>4,
          'value' => 0.2,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia400 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity28,
          'year' =>4,
          'value' => 0.2,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia401 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity29,
          'year' =>4,
          'value' => 0.01,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia402 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity30,
          'year' =>4,
          'value' => 934,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia403 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity31,
          'year' =>4,
          'value' => 0.895207521210731,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia404 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity32,
          'year' =>4,
          'value' => 271.8,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia405 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity33,
          'year' =>4,
          'value' => 0.909531189461449,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia406 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity34,
          'year' =>4,
          'value' => 0.108344370860927,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia407 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity35,
          'year' =>4,
          'value' => 1.2185,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia408 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity36,
          'year' =>4,
          'value' => 0.969543147208122,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia409 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity37,
          'year' =>4,
          'value' => 0.01,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia410 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity38,
          'year' =>4,
          'value' => 7,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia411 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity39,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia412 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity40,
          'year' =>4,
          'value' => 332,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia413 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity41,
          'year' =>4,
          'value' => 699,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia414 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity42,
          'year' =>4,
          'value' => 0.25,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia415 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity43,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia416 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity44,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia417 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity45,
          'year' =>4,
          'value' => 0.25,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia418 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity46,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia419 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity47,
          'year' =>4,
          'value' => 0.01,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia420 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity48,
          'year' =>4,
          'value' => 14,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia421 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity49,
          'year' =>4,
          'value' => 0.984666666666667,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia422 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity50,
          'year' =>4,
          'value' => 0.99772,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia423 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity51,
          'year' =>4,
          'value' => 0.981640146878825,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia424 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity52,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia425 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity53,
          'year' =>4,
          'value' => 5,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia426 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity54,
          'year' =>4,
          'value' => 0.01,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia427 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity55,
          'year' =>4,
          'value' => 23,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia428 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity56,
          'year' =>4,
          'value' => 0,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia429 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity58,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia430 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity59,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia431 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity60,
          'year' =>4,
          'value' => 50,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia432 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity61,
          'year' =>4,
          'value' => 0.25,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia433 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity62,
          'year' =>4,
          'value' => 6,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia434 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity63,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia435 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity64,
          'year' =>4,
          'value' => 0.25,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia436 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity65,
          'year' =>4,
          'value' => 0.1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia437 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity66,
          'year' =>4,
          'value' => 52,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia438 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity67,
          'year' =>4,
          'value' => 0.25,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia439 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity68,
          'year' =>4,
          'value' => 0.01,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia440 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity69,
          'year' =>4,
          'value' => 1005.48,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia441 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity70,
          'year' =>4,
          'value' => 1050,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia442 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity71,
          'year' =>4,
          'value' => 0.346153846153846,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia443 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity72,
          'year' =>4,
          'value' => 0.2,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia444 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity73,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia445 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity74,
          'year' =>4,
          'value' => 0.0328,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia446 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity75,
          'year' =>4,
          'value' => 0.3,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia447 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity76,
          'year' =>4,
          'value' => 0.1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia448 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity78,
          'year' =>4,
          'value' => 0.196875,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia449 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity79,
          'year' =>4,
          'value' => 0.2,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia450 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity80,
          'year' =>4,
          'value' => 0.01,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia451 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity81,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia452 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity82,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia453 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity83,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia454 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity84,
          'year' =>4,
          'value' => 0.01,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia455 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity85,
          'year' =>4,
          'value' => 0.972453703703704,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia456 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity86,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia457 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity87,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia458 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity88,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia459 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity89,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia460 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity90,
          'year' =>4,
          'value' => 0.01,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia461 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity91,
          'year' =>4,
          'value' => 0.1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia462 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity92,
          'year' =>4,
          'value' => 0.1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia463 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity93,
          'year' =>4,
          'value' => 0.0426833333333333,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia464 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity94,
          'year' =>4,
          'value' => 0.105263157894737,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia465 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity96,
          'year' =>4,
          'value' => 0.475,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia466 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity97,
          'year' =>4,
          'value' => 0.141818181818182,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia467 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity98,
          'year' =>4,
          'value' => 0.448,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia468 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity99,
          'year' =>4,
          'value' => 3099.75,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia469 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity100,
          'year' =>4,
          'value' => 1.14466666666667,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia470 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity101,
          'year' =>4,
          'value' => 1.15897222222222,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia471 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity102,
          'year' =>4,
          'value' => 0.01,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia472 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity103,
          'year' =>4,
          'value' => 0.0912,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia473 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity104,
          'year' =>4,
          'value' => 5,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia474 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity105,
          'year' =>4,
          'value' => 10,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia475 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity106,
          'year' =>4,
          'value' => 5,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia476 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity107,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia477 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity108,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia478 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity109,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia479 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity110,
          'year' =>4,
          'value' => 105,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia480 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity111,
          'year' =>4,
          'value' => 105,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia481 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity113,
          'year' =>4,
          'value' => 0.1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia482 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity114,
          'year' =>4,
          'value' => 0.3,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia483 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity115,
          'year' =>4,
          'value' => 105,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia484 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity116,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia485 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity117,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia486 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity118,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia487 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity119,
          'year' =>4,
          'value' => 0.01,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia488 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity120,
          'year' =>4,
          'value' => 0.203,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia489 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity121,
          'year' =>4,
          'value' => 0.4,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia490 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity122,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia491 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity123,
          'year' =>4,
          'value' => 0.66,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia492 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity124,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia493 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity125,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia494 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity126,
          'year' =>4,
          'value' => 1,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia495 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity127,
          'year' =>4,
          'value' => 0.35,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia496 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity128,
          'year' =>4,
          'value' => 9,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
          $idevidencia497 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity129,
          'year' =>4,
          'value' => 0.01,
          'date_report' => '2019-12-31',
          'rezago' => false,
          ]);
                    $idevidencia498 = DB::getPdo()->lastInsertId(); 
  
     DB::table('financing_sources')->insert([
      'father_id' => 11,
      'code' => '1.1.1.1.1.1.1.1',
      'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
      'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente1 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 1,
      'code' => '1.3',
      'name' => 'Otros',
      'description' => 'Otros',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente20 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 79,
      'code' => '1.1.2.2.2.8.1',
      'name' => 'Otros servicios (vigencia actual)',
      'description' => 'Otros servicios (vigencia actual)',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente3 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 76,
      'code' => '1.1.2.2.2.7.1',
      'name' => 'Aprovechamientos por parques (vigencia actual)',
      'description' => 'Aprovechamientos por parques (vigencia actual)',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente4 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 58,
      'code' => '1.1.2.2.2.1.1',
      'name' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
      'description' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente5 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 70,
      'code' => '1.1.2.2.2.5.1',
      'name' => 'Venta de Servicios de Laboratorio e Información (vigencia actual)',
      'description' => 'Venta de Servicios de Laboratorio e Información (vigencia actual)',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente6 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 61,
      'code' => '1.1.2.2.2.2.1',
      'name' => 'Seguimiento a licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
      'description' => 'Seguimiento a licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente7 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 208,
      'code' => '1.2.5.1.4',
      'name' => 'CONVENIOS - CSF CON SITUACIÓN DE FONDOS',
      'description' => 'CONVENIOS - CSF CON SITUACIÓN DE FONDOS',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente8 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 26,
      'code' => '1.1.2.1.1.1.5',
      'name' => 'TRANSFERENCIAS SECTOR ELECTRICO - VA - EMGESA - R BOGOTÁ',
      'description' => 'TRANSFERENCIAS SECTOR ELECTRICO - VA - EMGESA - R BOGOTÁ',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente9 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 26,
      'code' => '1.1.2.1.1.1.6',
      'name' => 'TRANSFERENCIAS SECTOR ELECTRICO - VA - CHIVOR',
      'description' => 'TRANSFERENCIAS SECTOR ELECTRICO - VA - CHIVOR',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente10 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 26,
      'code' => '1.1.2.1.1.1.7',
      'name' => 'TRANSFERENCIAS SECTOR ELECTRICO - VA - MARTIN DEL CORRAL',
      'description' => 'TRANSFERENCIAS SECTOR ELECTRICO - VA - MARTIN DEL CORRAL',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente11 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 26,
      'code' => '1.1.2.1.1.1.8',
      'name' => 'TRANSFERENCIAS SECTOR ELECTRICO - VA - CEMEX DE COLOMBIA',
      'description' => 'TRANSFERENCIAS SECTOR ELECTRICO - VA - CEMEX DE COLOMBIA',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente12 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 26,
      'code' => '1.1.2.1.1.1.9',
      'name' => 'TRANSFERENCIAS SECTOR ELECTRICO - VA - EMGESA - R GUAVIO',
      'description' => 'TRANSFERENCIAS SECTOR ELECTRICO - VA - EMGESA - R GUAVIO',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente13 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 26,
      'code' => '1.1.2.1.1.1.1',
      'name' => 'TRANSFERENCIAS SECTOR ELECTRICO - VA - ISAGEN - SOGAMOSO',
      'description' => 'TRANSFERENCIAS SECTOR ELECTRICO - VA - ISAGEN - SOGAMOSO',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente14 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 26,
      'code' => '1.1.2.1.1.1.11',
      'name' => 'TRANSFERENCIAS SECTOR ELECTRICO - V.AC - EMGESA - R NEGRO',
      'description' => 'TRANSFERENCIAS SECTOR ELECTRICO - V.AC - EMGESA - R NEGRO',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente15 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 208,
      'code' => '1.2.5.1.4',
      'name' => 'CONVENIOS - SSF SIN SITUACIÓN DE FONDOS',
      'description' => 'CONVENIOS - SSF SIN SITUACIÓN DE FONDOS',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente16 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 84,
      'code' => '1.1.2.3.1.1.1',
      'name' => 'Multas ambientales (vigencia actual)',
      'description' => 'Multas ambientales (vigencia actual)',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente19 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 48,
      'code' => '1.1.2.2.1.1.3.1',
      'name' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
      'description' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
      'type_id' => 22,
      'final_level' => true,
      'group_id' =>3,
      ]);
      $idFuente21 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 54,
      'code' => '1.1.2.2.1.1.5.3',
      'name' => 'TASA COMPENSATORIA POR EL USO PERMANENTE DE LA RESERVA FORESTAL PROTECTORA BOSQUE ORIENTAL DE BOGOTA - VIGENCIA ACTUAL',
      'description' => 'TASA COMPENSATORIA POR EL USO PERMANENTE DE LA RESERVA FORESTAL PROTECTORA BOSQUE ORIENTAL DE BOGOTA - VIGENCIA ACTUAL',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente22 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 51,
      'code' => '1.1.2.2.1.1.4.1',
      'name' => 'Tasa compensatoria por caza de Fauna Silvestre (vigencia actual)',
      'description' => 'Tasa compensatoria por caza de Fauna Silvestre (vigencia actual)',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente23 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 1,
      'code' => '1.4',
      'name' => 'CRÉDITO BANCO MUNDIAL - MEGAPROYECTO RÍO BOGOTÁ',
      'description' => 'CRÉDITO BANCO MUNDIAL - MEGAPROYECTO RÍO BOGOTÁ',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente24 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 1,
      'code' => '1.5',
      'name' => 'CRÉDITO INTERNO - PROYECTO LAGUNA DE FÚQUENE',
      'description' => 'CRÉDITO INTERNO - PROYECTO LAGUNA DE FÚQUENE',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente25 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 145,
      'code' => '1.2.2.6',
      'name' => 'Rendimientos financieros',
      'description' => 'Rendimientos financieros',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente26 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 1,
      'code' => '1.6',
      'name' => 'DISTRITO DE RIEGO LA RAMADA',
      'description' => 'DISTRITO DE RIEGO LA RAMADA',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente27 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 1,
      'code' => '1.7',
      'name' => 'DISTRITO DE RIEGO FUQUENE CUCUNUBA',
      'description' => 'DISTRITO DE RIEGO FUQUENE CUCUNUBA',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente28 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 237,
      'code' => '1.2.6.6',
      'name' => 'Recuperación cuotas partes pensionales',
      'description' => 'Recuperación cuotas partes pensionales',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente29 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 237,
      'code' => '1.2.6..8',
      'name' => 'REINTEGRO MESADAS PENSIONALES',
      'description' => 'REINTEGRO MESADAS PENSIONALES',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente30 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 42,
      'code' => '1.1.2.2.1.1.1.1',
      'name' => 'Tasa retributiva (vigencia actual)',
      'description' => 'Tasa retributiva (vigencia actual)',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente17 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 45,
      'code' => '1.1.2.2.1.1.2.1',
      'name' => 'Tasa por el uso del agua (vigencia actual)',
      'description' => 'Tasa por el uso del agua (vigencia actual)',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente18 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 14,
      'code' => '1.1.1.1.1.1.2.1',
      'name' => 'Participación del porcentaje ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
      'description' => 'Participación del porcentaje ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente2 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 250,
      'code' => '1.2.7.4',
      'name' => 'VENTA DE ACTIVOS RECURSOS DEL BALANCE',
      'description' => 'VENTA DE ACTIVOS RECURSOS DEL BALANCE',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente56 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 1,
      'code' => '1.6',
      'name' => 'Fondo FIAB',
      'description' => 'Fondo FIAB',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente75 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => $idFuente75,
      'code' => '1.6.1',
      'name' => 'FONDO FIAB - % AMBIENTAL DTTO CAP',
      'description' => 'FONDO FIAB - % AMBIENTAL DTTO CAP',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente57 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => $idFuente75,
      'code' => '1.6.2',
      'name' => 'FONDO FIAB - RENDIMIENTOS FINANC CRÉDITO BANCO MUNDIAL',
      'description' => 'FONDO FIAB - RENDIMIENTOS FINANC CRÉDITO BANCO MUNDIAL',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente61 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 42,
      'code' => '1.1.2.2.1.1.1.2',
      'name' => 'Tasa retributiva (vigencia anterior)',
      'description' => 'Tasa retributiva (vigencia anterior)',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente31 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 45,
      'code' => '1.1.2.2.1.1.2.2',
      'name' => 'Tasa por el uso del agua (vigencia anterior)',
      'description' => 'Tasa por el uso del agua (vigencia anterior)',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente32 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 54,
      'code' => '1.1.2.2.1.1.5.2',
      'name' => 'TASA COMPENSATORIA POR EL USO PERMANENTE DE LA RESERVA FORESTAL PROTECTORA BOSQUE ORIENTAL DE BOGOTA - VIGENCIA ANTERIOR',
      'description' => 'TASA COMPENSATORIA POR EL USO PERMANENTE DE LA RESERVA FORESTAL PROTECTORA BOSQUE ORIENTAL DE BOGOTA - VIGENCIA ANTERIOR',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente33 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 51,
      'code' => '1.1.2.2.1.1.4.2',
      'name' => 'Tasa compensatoria por caza de Fauna Silvestre (vigencia anterior)',
      'description' => 'Tasa compensatoria por caza de Fauna Silvestre (vigencia anterior)',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente34 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 14,
      'code' => '1.1.1.1.1.1.2.3',
      'name' => '50% PORCENTAJE AMBIENTAL DISTRITO CAPITAL - VIGENCIA ANTERIOR',
      'description' => '50% PORCENTAJE AMBIENTAL DISTRITO CAPITAL - VIGENCIA ANTERIOR',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente35 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 14,
      'code' => '1.1.1.1.1.1.2.2',
      'name' => 'Participación del porcentaje ambiental - Corporaciones Autónomas Regionales (vigencia anterior)',
      'description' => 'Participación del porcentaje ambiental - Corporaciones Autónomas Regionales (vigencia anterior)',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente36 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 26,
      'code' => '1.1.2.1.1.1.12',
      'name' => 'TRANSFERENCIAS SECTOR ELECTRICO - RC - EMGESA - R BOGOTÁ',
      'description' => 'TRANSFERENCIAS SECTOR ELECTRICO - RC - EMGESA - R BOGOTÁ',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente37 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 26,
      'code' => '1.1.2.1.1.1.13',
      'name' => 'TRANSFERENCIAS SECTOR ELECTRICO - RC - CHIVOR',
      'description' => 'TRANSFERENCIAS SECTOR ELECTRICO - RC - CHIVOR',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente38 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 26,
      'code' => '1.1.2.1.1.1.14',
      'name' => 'TRANSFERENCIAS SECTOR ELECTRICO - RC - MARTIN DEL CORRAL',
      'description' => 'TRANSFERENCIAS SECTOR ELECTRICO - RC - MARTIN DEL CORRAL',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente39 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 26,
      'code' => '1.1.2.1.1.1.15',
      'name' => 'TRANSFERENCIAS SECTOR ELECTRICO - RC - CEMEX DE COLOMBIA',
      'description' => 'TRANSFERENCIAS SECTOR ELECTRICO - RC - CEMEX DE COLOMBIA',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente40 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 26,
      'code' => '1.1.2.1.1.1.16',
      'name' => 'TRANSFERENCIAS SECTOR ELECTRICO - RC - EMGESA - R GUAVIO',
      'description' => 'TRANSFERENCIAS SECTOR ELECTRICO - RC - EMGESA - R GUAVIO',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente41 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 26,
      'code' => '1.1.2.1.1.1.17',
      'name' => 'TRANSFERENCIAS SECTOR ELECTRICO - RC - ISAGEN - SOGAMOSO',
      'description' => 'TRANSFERENCIAS SECTOR ELECTRICO - RC - ISAGEN - SOGAMOSO',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente42 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 26,
      'code' => '1.1.2.1.1.1.18',
      'name' => 'TRANSFERENCIAS SECTOR ELECTRICO - V.AN - EMGESA - R NEGRO',
      'description' => 'TRANSFERENCIAS SECTOR ELECTRICO - V.AN - EMGESA - R NEGRO',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente43 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 1,
      'code' => '1.7',
      'name' => 'Excedentes Financieros',
      'description' => 'Excedentes Financieros',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente76 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => $idFuente76,
      'code' => '1.7.1',
      'name' => 'EXCEDENTES FINANCIEROS - TASAS POR USOS',
      'description' => 'EXCEDENTES FINANCIEROS - TASAS POR USOS',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente44 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => $idFuente76,
      'code' => '1.7.2',
      'name' => 'EXCEDENTES FINAN. SEC ELE - MARTIN CORRAL',
      'description' => 'EXCEDENTES FINAN. SEC ELE - MARTIN CORRAL',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente45 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => $idFuente76,
      'code' => '1.7.3',
      'name' => 'EXCEDENTES FINAN. SEC ELE - CHIVOR',
      'description' => 'EXCEDENTES FINAN. SEC ELE - CHIVOR',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente46 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => $idFuente76,
      'code' => '1.7.4',
      'name' => 'EXCEDENTES FINAN. SEC ELE - EMGESA R BOGOTÁ',
      'description' => 'EXCEDENTES FINAN. SEC ELE - EMGESA R BOGOTÁ',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente47 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => $idFuente76,
      'code' => '1.7.5',
      'name' => 'EXCEDENTES FINAN. SEC ELE - CEMEX',
      'description' => 'EXCEDENTES FINAN. SEC ELE - CEMEX',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente48 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => $idFuente76,
      'code' => '1.7.6',
      'name' => 'EXCEDENTES FINANCIEROS - DESTINACIÓN GENERAL',
      'description' => 'EXCEDENTES FINANCIEROS - DESTINACIÓN GENERAL',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente49 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => $idFuente76,
      'code' => '1.7.7',
      'name' => 'EXCEDENTES FINANCIEROS - TASAS RETRIBUTIVAS',
      'description' => 'EXCEDENTES FINANCIEROS - TASAS RETRIBUTIVAS',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente50 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => $idFuente76,
      'code' => '1.7.8',
      'name' => 'EXCEDENTES FINAN. SEC ELE - EMGESA R GUAVIO',
      'description' => 'EXCEDENTES FINAN. SEC ELE - EMGESA R GUAVIO',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente51 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => $idFuente76,
      'code' => '1.7.9',
      'name' => 'EXCEDENTES FINANCIEROS - APORTES CONVENIOS  - CSF CON SITUACIÓN DE FONDOS',
      'description' => 'EXCEDENTES FINANCIEROS - APORTES CONVENIOS  - CSF CON SITUACIÓN DE FONDOS',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente52 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => $idFuente76,
      'code' => '1.7.1',
      'name' => 'EXCEDENTES FINAN. SEC ELE - ISAGEN SOGAMOSO',
      'description' => 'EXCEDENTES FINAN. SEC ELE - ISAGEN SOGAMOSO',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente53 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => $idFuente76,
      'code' => '1.7.11',
      'name' => 'EXCEDENTES FINANCIEROS CRÉDITO FINDETER',
      'description' => 'EXCEDENTES FINANCIEROS CRÉDITO FINDETER',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente54 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => $idFuente76,
      'code' => '1.7.12',
      'name' => 'EXCEDENTES FINANCIEROS - APORTES CONVENIOS - SSF SIN SITUACIÓN DE FONDOS',
      'description' => 'EXCEDENTES FINANCIEROS - APORTES CONVENIOS - SSF SIN SITUACIÓN DE FONDOS',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente55 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => $idFuente75,
      'code' => '1.6.3',
      'name' => 'FONDO FIAB - TASAS RETRIBUTIVAS DTTO CAP',
      'description' => 'FONDO FIAB - TASAS RETRIBUTIVAS DTTO CAP',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente58 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => $idFuente75,
      'code' => '1.6.4',
      'name' => 'FONDO FIAB - RENDIMIENTOS FINANC % AMB DTTO',
      'description' => 'FONDO FIAB - RENDIMIENTOS FINANC % AMB DTTO',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente59 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => $idFuente75,
      'code' => '1.6.5',
      'name' => 'FONDO FIAB - RENDIMIENTOS FINANC TASAS RET DTTO CAP',
      'description' => 'FONDO FIAB - RENDIMIENTOS FINANC TASAS RET DTTO CAP',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente60 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => $idFuente75,
      'code' => '1.6.6',
      'name' => 'FONDO FIAB - APORTES CONVENIOS - CSF CON SITUACIÓN DE FONDOS',
      'description' => 'FONDO FIAB - APORTES CONVENIOS - CSF CON SITUACIÓN DE FONDOS',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente62 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => $idFuente75,
      'code' => '1.6.7',
      'name' => 'FONDO FIAB - APORTES CONVENIOS - SSF SIN SITUACIÓN DE FONDOS',
      'description' => 'FONDO FIAB - APORTES CONVENIOS - SSF SIN SITUACIÓN DE FONDOS',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente63 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => $idFuente75,
      'code' => '1.6.8',
      'name' => 'FONDO FIAB - EXC. FINANC. % AMBIENTAL DTTO CAP',
      'description' => 'FONDO FIAB - EXC. FINANC. % AMBIENTAL DTTO CAP',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente64 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => $idFuente75,
      'code' => '1.6.9',
      'name' => 'FONDO FIAB - EXC. FINANC. TASAS RET DTTO CAP',
      'description' => 'FONDO FIAB - EXC. FINANC. TASAS RET DTTO CAP',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente65 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => $idFuente75,
      'code' => '1.6.1',
      'name' => 'FONDO FIAB - EXC. FINANC. RENDIMIENTOS FINANCIEROS',
      'description' => 'FONDO FIAB - EXC. FINANC. RENDIMIENTOS FINANCIEROS',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente66 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => $idFuente75,
      'code' => '1.6.11',
      'name' => 'FONDO FIAB - EXC. FINANC. RECURSOS CRÉDITO BANCO MUNDIAL',
      'description' => 'FONDO FIAB - EXC. FINANC. RECURSOS CRÉDITO BANCO MUNDIAL',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente67 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => $idFuente75,
      'code' => '1.6.12',
      'name' => 'FONDO FIAB - RENDIMIENTOS FINANCIEROS - APORTES CONVENIOS - CSF CON SITUACIÓN DE FONDOS',
      'description' => 'FONDO FIAB - RENDIMIENTOS FINANCIEROS - APORTES CONVENIOS - CSF CON SITUACIÓN DE FONDOS',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente68 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => $idFuente75,
      'code' => '1.6.13',
      'name' => 'FONDO FIAB - EXCEDENTES FINANCIEROS - APORTES CONVENIOS - CSF CON SITUACIÓN DE FONDOS',
      'description' => 'FONDO FIAB - EXCEDENTES FINANCIEROS - APORTES CONVENIOS - CSF CON SITUACIÓN DE FONDOS',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente69 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 1,
      'code' => '1.8',
      'name' => 'Aportes SGR',
      'description' => 'Aportes SGR',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente77 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => $idFuente77,
      'code' => '1.8.1',
      'name' => 'APORTES SGR (SGR-FDR-FUQ) - LAGUNA DE FÚQUENE - SSF SIN SITUACIÓN DE FONDOS',
      'description' => 'APORTES SGR (SGR-FDR-FUQ) - LAGUNA DE FÚQUENE - SSF SIN SITUACIÓN DE FONDOS',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente70 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => $idFuente77,
      'code' => '1.8.2',
      'name' => 'APORTES SGR (SGR-FDR-FUS) - FUSACATÁN - SSF SIN SITUACIÓN DE FONDOS',
      'description' => 'APORTES SGR (SGR-FDR-FUS) - FUSACATÁN - SSF SIN SITUACIÓN DE FONDOS',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente71 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => $idFuente77,
      'code' => '1.8.3',
      'name' => 'APORTES SGR (SGR-FDR-RAQ) - LAGUNA DE FÚQUENE - SSF SIN SITUACIÓN DE FONDOS',
      'description' => 'APORTES SGR (SGR-FDR-RAQ) - LAGUNA DE FÚQUENE - SSF SIN SITUACIÓN DE FONDOS',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente72 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => $idFuente77,
      'code' => '1.8.4',
      'name' => 'APORTES SGR (SGR-FCR-RAQ) - LAGUNA DE FÚQUENE - SSF SIN SITUACIÓN DE FONDOS',
      'description' => 'APORTES SGR (SGR-FCR-RAQ) - LAGUNA DE FÚQUENE - SSF SIN SITUACIÓN DE FONDOS',
      'type_id' => 22,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente73 = DB::getPdo()->lastInsertId();
       
     DB::table('financing_sources')->insert([
      'father_id' => 118,
      'code' => '1.1.2.5.1.1.2',
      'name' => 'Aportes de la Nación para Inversión',
      'description' => 'Aportes de la Nación para Inversión',
      'type_id' => 23,
      'final_level' => true,
      'group_id' => 3,
      ]);
      $idFuente74 = DB::getPdo()->lastInsertId();
       

            
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente1,
              'value' => 176320985000,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 176320985000,
              'year' => 1,
              ]);
              $idPlan1 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente2,
              'value' => 56086797000,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 56086797000,
              'year' => 1,
              ]);
              $idPlan2 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente3,
              'value' => 112373000,
              'functioning_percentage' => 100,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 0,
              'functioning' => 112373000,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 0,
              'year' => 1,
              ]);
              $idPlan3 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente4,
              'value' => 1629476000,
              'functioning_percentage' => 100,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 0,
              'functioning' => 1629476000,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 0,
              'year' => 1,
              ]);
              $idPlan4 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente5,
              'value' => 1734657000,
              'functioning_percentage' => 100,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 0,
              'functioning' => 1734657000,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 0,
              'year' => 1,
              ]);
              $idPlan5 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente6,
              'value' => 350000000,
              'functioning_percentage' => 100,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 0,
              'functioning' => 350000000,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 0,
              'year' => 1,
              ]);
              $idPlan6 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente7,
              'value' => 10000000,
              'functioning_percentage' => 100,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 0,
              'functioning' => 10000000,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 0,
              'year' => 1,
              ]);
              $idPlan7 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente8,
              'value' => 1932400000,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 1932400000,
              'year' => 1,
              ]);
              $idPlan8 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente9,
              'value' => 6847946000,
              'functioning_percentage' => 10,
              'debt_service_percentage' => 0,
              'fund_percentage' => 20,
              'investment_percentage' => 70,
              'functioning' => 684794600,
              'debt_service' => 0,
              'fund' => 1369589200,
              'investment' => 4793562200,
              'year' => 1,
              ]);
              $idPlan9 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente10,
              'value' => 1377625000,
              'functioning_percentage' => 10,
              'debt_service_percentage' => 0,
              'fund_percentage' => 20,
              'investment_percentage' => 70,
              'functioning' => 137762500,
              'debt_service' => 0,
              'fund' => 275525000,
              'investment' => 964337500,
              'year' => 1,
              ]);
              $idPlan10 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente11,
              'value' => 890880000,
              'functioning_percentage' => 10,
              'debt_service_percentage' => 0,
              'fund_percentage' => 20,
              'investment_percentage' => 70,
              'functioning' => 89088000,
              'debt_service' => 0,
              'fund' => 178176000,
              'investment' => 623616000,
              'year' => 1,
              ]);
              $idPlan11 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente12,
              'value' => 9637000,
              'functioning_percentage' => 10,
              'debt_service_percentage' => 0,
              'fund_percentage' => 20,
              'investment_percentage' => 70,
              'functioning' => 963700,
              'debt_service' => 0,
              'fund' => 1927400,
              'investment' => 6745900,
              'year' => 1,
              ]);
              $idPlan12 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente13,
              'value' => 590704000,
              'functioning_percentage' => 10,
              'debt_service_percentage' => 0,
              'fund_percentage' => 20,
              'investment_percentage' => 70,
              'functioning' => 59070400,
              'debt_service' => 0,
              'fund' => 118140800,
              'investment' => 413492800,
              'year' => 1,
              ]);
              $idPlan13 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente14,
              'value' => 750506000,
              'functioning_percentage' => 10,
              'debt_service_percentage' => 0,
              'fund_percentage' => 20,
              'investment_percentage' => 70,
              'functioning' => 75050600,
              'debt_service' => 0,
              'fund' => 150101200,
              'investment' => 525354200,
              'year' => 1,
              ]);
              $idPlan14 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente16,
              'value' => 3570898324,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 3570898324,
              'year' => 1,
              ]);
              $idPlan15 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente17,
              'value' => 4766391000,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 9,
              'investment_percentage' => 91,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 428975190,
              'investment' => 4337415810,
              'year' => 1,
              ]);
              $idPlan16 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente18,
              'value' => 1581000000,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 10,
              'investment_percentage' => 90,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 158100000,
              'investment' => 1422900000,
              'year' => 1,
              ]);
              $idPlan17 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente19,
              'value' => 356251000,
              'functioning_percentage' => 100,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 0,
              'functioning' => 356251000,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 0,
              'year' => 1,
              ]);
              $idPlan18 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente20,
              'value' => 106192000,
              'functioning_percentage' => 100,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 0,
              'functioning' => 106192000,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 0,
              'year' => 1,
              ]);
              $idPlan19 = DB::getPdo()->lastInsertId();
      
      DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente21,
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
        $idPlan245 = DB::getPdo()->lastInsertId();

            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente26,
              'value' => 13892423000,
              'functioning_percentage' => 100,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 0,
              'functioning' => 13892423000,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 0,
              'year' => 1,
              ]);
              $idPlan20 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente27,
              'value' => 2531000000,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 2531000000,
              'year' => 1,
              ]);
              $idPlan21 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente28,
              'value' => 6511000000,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 6511000000,
              'year' => 1,
              ]);
              $idPlan22 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente29,
              'value' => 20000000,
              'functioning_percentage' => 100,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 0,
              'functioning' => 20000000,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 0,
              'year' => 1,
              ]);
              $idPlan23 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente30,
              'value' => 18000000,
              'functioning_percentage' => 100,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 0,
              'functioning' => 18000000,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 0,
              'year' => 1,
              ]);
              $idPlan24 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente31,
              'value' => 4440000000,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 4440000000,
              'year' => 1,
              ]);
              $idPlan25 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente32,
              'value' => 575769000,
              'functioning_percentage' => 56.9298,
              'debt_service_percentage' => 18.4408,
              'fund_percentage' => 11.7497,
              'investment_percentage' => 12.8797,
              'functioning' => 327784140.162,
              'debt_service' => 106176409.752,
              'fund' => 67651130.193,
              'investment' => 74157319.893,
              'year' => 1,
              ]);
              $idPlan26 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente35,
              'value' => 7000000000,
              'functioning_percentage' => 100,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 0,
              'functioning' => 7000000000,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 0,
              'year' => 1,
              ]);
              $idPlan27 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente36,
              'value' => 2451117000,
              'functioning_percentage' => 100,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 0,
              'functioning' => 2451117000,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 0,
              'year' => 1,
              ]);
              $idPlan28 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente37,
              'value' => 2503935000,
              'functioning_percentage' => 10,
              'debt_service_percentage' => 0,
              'fund_percentage' => 20,
              'investment_percentage' => 70,
              'functioning' => 250393500,
              'debt_service' => 0,
              'fund' => 500787000,
              'investment' => 1752754500,
              'year' => 1,
              ]);
              $idPlan29 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente38,
              'value' => 150000000,
              'functioning_percentage' => 10,
              'debt_service_percentage' => 0,
              'fund_percentage' => 20,
              'investment_percentage' => 70,
              'functioning' => 15000000,
              'debt_service' => 0,
              'fund' => 30000000,
              'investment' => 105000000,
              'year' => 1,
              ]);
              $idPlan30 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente39,
              'value' => 364941000,
              'functioning_percentage' => 10,
              'debt_service_percentage' => 0,
              'fund_percentage' => 20,
              'investment_percentage' => 70,
              'functioning' => 36494100,
              'debt_service' => 0,
              'fund' => 72988200,
              'investment' => 255458700,
              'year' => 1,
              ]);
              $idPlan31 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente40,
              'value' => 1152000,
              'functioning_percentage' => 10,
              'debt_service_percentage' => 0,
              'fund_percentage' => 20,
              'investment_percentage' => 70,
              'functioning' => 115200,
              'debt_service' => 0,
              'fund' => 230400,
              'investment' => 806400,
              'year' => 1,
              ]);
              $idPlan32 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente41,
              'value' => 287685000,
              'functioning_percentage' => 10,
              'debt_service_percentage' => 0,
              'fund_percentage' => 20,
              'investment_percentage' => 70,
              'functioning' => 28768500,
              'debt_service' => 0,
              'fund' => 57537000,
              'investment' => 201379500,
              'year' => 1,
              ]);
              $idPlan33 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente42,
              'value' => 76000000,
              'functioning_percentage' => 10,
              'debt_service_percentage' => 0,
              'fund_percentage' => 20,
              'investment_percentage' => 70,
              'functioning' => 7600000,
              'debt_service' => 0,
              'fund' => 15200000,
              'investment' => 53200000,
              'year' => 1,
              ]);
              $idPlan34 = DB::getPdo()->lastInsertId();

            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente44,
              'value' => 183011243,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 183011243,
              'year' => 1,
              ]);
              $idPlan35 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente45,
              'value' => 1602559556,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 1602559556,
              'year' => 1,
              ]);
              $idPlan36 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente46,
              'value' => 484389442,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 484389442,
              'year' => 1,
              ]);
              $idPlan37 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente47,
              'value' => 1529844085,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 1529844085,
              'year' => 1,
              ]);
              $idPlan38 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente48,
              'value' => 188355,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 188355,
              'year' => 1,
              ]);
              $idPlan39 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente49,
              'value' => 78139614114,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 78139614114,
              'year' => 1,
              ]);
              $idPlan40 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente50,
              'value' => 10253286719,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 10253286719,
              'year' => 1,
              ]);
              $idPlan41 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente51,
              'value' => 50952385,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 50952385,
              'year' => 1,
              ]);
              $idPlan42 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente53,
              'value' => 415520792,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 415520792,
              'year' => 1,
              ]);
              $idPlan43 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente54,
              'value' => 18124511707,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 18124511707,
              'year' => 1,
              ]);
              $idPlan44 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente55,
              'value' => 199543813,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 199543813,
              'year' => 1,
              ]);
              $idPlan45 = DB::getPdo()->lastInsertId();
              
             
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente57,
              'value' => 183320985000,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 183320985000,
              'year' => 1,
              ]);
              $idPlan46 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente58,
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
              $idPlan47 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente59,
              'value' => 17812809000,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 17812809000,
              'year' => 1,
              ]);
              $idPlan48 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente60,
              'value' => 2254214000,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 2254214000,
              'year' => 1,
              ]);
              $idPlan49 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente61,
              'value' => 4500000000,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 4500000000,
              'year' => 1,
              ]);
              $idPlan50 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente62,
              'value' => 1550000000,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 1550000000,
              'year' => 1,
              ]);
              $idPlan51 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente64,
              'value' => 457132216845,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 457132216845,
              'year' => 1,
              ]);
              $idPlan52 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente65,
              'value' => 16041297383,
              'functioning_percentage' => 23,
              'debt_service_percentage' => 12,
              'fund_percentage' => 0,
              'investment_percentage' => 65,
              'functioning' => 3689498398.09,
              'debt_service' => 1924955685.96,
              'fund' => 0,
              'investment' => 10426843298.95,
              'year' => 1,
              ]);
              $idPlan53 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente66,
              'value' => 42134631326,
              'functioning_percentage' => 100,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 0,
              'functioning' => 42134631326,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 0,
              'year' => 1,
              ]);
              $idPlan54 = DB::getPdo()->lastInsertId();
              
            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente67,
              'value' => 33518191554,
              'functioning_percentage' => 66,
              'debt_service_percentage' => 34,
              'fund_percentage' => 0,
              'investment_percentage' => 0,
              'functioning' => 22122006425.64,
              'debt_service' => 11396185128.36,
              'fund' => 0,
              'investment' => 0,
              'year' => 1,
              ]);
              $idPlan55 = DB::getPdo()->lastInsertId();

            DB::table('financial_plans')->insert([
              'p_a_i_id' => $idpai1,
              'source_id' => $idFuente74,
              'value' => 3000000000,
              'functioning_percentage' => 0,
              'debt_service_percentage' => 0,
              'fund_percentage' => 0,
              'investment_percentage' => 100,
              'functioning' => 0,
              'debt_service' => 0,
              'fund' => 0,
              'investment' => 3000000000,
              'year' => 1,
              ]);
              $idPlan56 = DB::getPdo()->lastInsertId();
              
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente1,
                'value' => 203311500000,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 100,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 203311500000,
                'year' => 2,
                ]);
                $idPlan57 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente2,
                'value' => 64180904500,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 100,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 64180904500,
                'year' => 2,
                ]);
                $idPlan58 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente3,
                'value' => 85571000,
                'functioning_percentage' => 100,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 0,
                'functioning' => 85571000,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 0,
                'year' => 2,
                ]);
                $idPlan59 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente4,
                'value' => 1806474000,
                'functioning_percentage' => 100,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 0,
                'functioning' => 1806474000,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 0,
                'year' => 2,
                ]);
                $idPlan60 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente5,
                'value' => 2149654900,
                'functioning_percentage' => 90,
                'debt_service_percentage' => 0,
                'fund_percentage' => 10,
                'investment_percentage' => 0,
                'functioning' => 1934689410,
                'debt_service' => 0,
                'fund' => 214965490,
                'investment' => 0,
                'year' => 2,
                ]);
                $idPlan61 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente6,
                'value' => 600000000,
                'functioning_percentage' => 100,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 0,
                'functioning' => 600000000,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 0,
                'year' => 2,
                ]);
                $idPlan62 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente7,
                'value' => 100000000,
                'functioning_percentage' => 100,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 0,
                'functioning' => 100000000,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 0,
                'year' => 2,
                ]);
                $idPlan63 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente8,
                'value' => 2655217465,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 100,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 2655217465,
                'year' => 2,
                ]);
                $idPlan64 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente9,
                'value' => 5568905300,
                'functioning_percentage' => 10,
                'debt_service_percentage' => 0,
                'fund_percentage' => 20,
                'investment_percentage' => 70,
                'functioning' => 556890530,
                'debt_service' => 0,
                'fund' => 1113781060,
                'investment' => 3898233710,
                'year' => 2,
                ]);
                $idPlan65 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente10,
                'value' => 667373200,
                'functioning_percentage' => 10,
                'debt_service_percentage' => 0,
                'fund_percentage' => 20,
                'investment_percentage' => 70,
                'functioning' => 66737320,
                'debt_service' => 0,
                'fund' => 133474640,
                'investment' => 467161240,
                'year' => 2,
                ]);
                $idPlan66 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente11,
                'value' => 670509200,
                'functioning_percentage' => 10,
                'debt_service_percentage' => 0,
                'fund_percentage' => 20,
                'investment_percentage' => 70,
                'functioning' => 67050920,
                'debt_service' => 0,
                'fund' => 134101840,
                'investment' => 469356440,
                'year' => 2,
                ]);
                $idPlan67 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente12,
                'value' => 10118900,
                'functioning_percentage' => 10,
                'debt_service_percentage' => 0,
                'fund_percentage' => 20,
                'investment_percentage' => 70,
                'functioning' => 1011890,
                'debt_service' => 0,
                'fund' => 2023780,
                'investment' => 7083230,
                'year' => 2,
                ]);
                $idPlan68 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente13,
                'value' => 673041400,
                'functioning_percentage' => 10,
                'debt_service_percentage' => 0,
                'fund_percentage' => 20,
                'investment_percentage' => 70,
                'functioning' => 67304140,
                'debt_service' => 0,
                'fund' => 134608280,
                'investment' => 471128980,
                'year' => 2,
                ]);
                $idPlan69 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente14,
                'value' => 4984100000,
                'functioning_percentage' => 10,
                'debt_service_percentage' => 0,
                'fund_percentage' => 20,
                'investment_percentage' => 70,
                'functioning' => 498410000,
                'debt_service' => 0,
                'fund' => 996820000,
                'investment' => 3488870000,
                'year' => 2,
                ]);
                $idPlan70 = DB::getPdo()->lastInsertId();
                
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente17,
                'value' => 288867800,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 10,
                'investment_percentage' => 90,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 28886780,
                'investment' => 259981020,
                'year' => 2,
                ]);
                $idPlan71 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente18,
                'value' => 1036703300,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 10,
                'investment_percentage' => 90,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 103670330,
                'investment' => 933032970,
                'year' => 2,
                ]);
                $idPlan72 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente19,
                'value' => 700000000,
                'functioning_percentage' => 100,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 0,
                'functioning' => 700000000,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 0,
                'year' => 2,
                ]);
                $idPlan73 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente20,
                'value' => 222098700,
                'functioning_percentage' => 100,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 0,
                'functioning' => 222098700,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 0,
                'year' => 2,
                ]);
                $idPlan74 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente21,
                'value' => 61800000,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 10,
                'investment_percentage' => 90,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 6180000,
                'investment' => 55620000,
                'year' => 2,
                ]);
                $idPlan75 = DB::getPdo()->lastInsertId();
                
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente24,
                'value' => 122486496723,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 100,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 122486496723,
                'year' => 2,
                ]);
                $idPlan76 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente26,
                'value' => 14332916400,
                'functioning_percentage' => 100,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 0,
                'functioning' => 14332916400,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 0,
                'year' => 2,
                ]);
                $idPlan77 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente27,
                'value' => 1893653800,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 9.8943,
                'investment_percentage' => 90.1057,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 187363787.9334,
                'investment' => 1706290012.0666,
                'year' => 2,
                ]);
                $idPlan78 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente28,
                'value' => 4833216900,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 10,
                'fund_percentage' => 0,
                'investment_percentage' => 90,
                'functioning' => 0,
                'debt_service' => 483321690,
                'fund' => 0,
                'investment' => 4349895210,
                'year' => 2,
                ]);
                $idPlan79 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente29,
                'value' => 20000000,
                'functioning_percentage' => 100,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 0,
                'functioning' => 20000000,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 0,
                'year' => 2,
                ]);
                $idPlan80 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente30,
                'value' => 18900000,
                'functioning_percentage' => 100,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 0,
                'functioning' => 18900000,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 0,
                'year' => 2,
                ]);
                $idPlan81 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente31,
                'value' => 4339911900,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 10,
                'investment_percentage' => 90,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 433991190,
                'investment' => 3905920710,
                'year' => 2,
                ]);
                $idPlan82 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente32,
                'value' => 1295118000,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 90,
                'fund_percentage' => 10,
                'investment_percentage' => 0,
                'functioning' => 0,
                'debt_service' => 1165606200,
                'fund' => 129511800,
                'investment' => 0,
                'year' => 2,
                ]);
                $idPlan83 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente35,
                'value' => 6481000000,
                'functioning_percentage' => 21.10524,
                'debt_service_percentage' => 73.51778,
                'fund_percentage' => 0,
                'investment_percentage' => 5.37698,
                'functioning' => 1367830604.4,
                'debt_service' => 4764687321.8,
                'fund' => 0,
                'investment' => 348482073.8,
                'year' => 2,
                ]);
                $idPlan84 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente36,
                'value' => 2700000000,
                'functioning_percentage' => 100,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 0,
                'functioning' => 2700000000,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 0,
                'year' => 2,
                ]);
                $idPlan85 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente37,
                'value' => 2048088800,
                'functioning_percentage' => 10,
                'debt_service_percentage' => 0,
                'fund_percentage' => 20,
                'investment_percentage' => 70,
                'functioning' => 204808880,
                'debt_service' => 0,
                'fund' => 409617760,
                'investment' => 1433662160,
                'year' => 2,
                ]);
                $idPlan86 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente38,
                'value' => 1461853800,
                'functioning_percentage' => 10,
                'debt_service_percentage' => 0,
                'fund_percentage' => 20,
                'investment_percentage' => 70,
                'functioning' => 146185380,
                'debt_service' => 0,
                'fund' => 292370760,
                'investment' => 1023297660,
                'year' => 2,
                ]);
                $idPlan87 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente39,
                'value' => 205567300,
                'functioning_percentage' => 10,
                'debt_service_percentage' => 0,
                'fund_percentage' => 20,
                'investment_percentage' => 70,
                'functioning' => 20556730,
                'debt_service' => 0,
                'fund' => 41113460,
                'investment' => 143897110,
                'year' => 2,
                ]);
                $idPlan88 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente40,
                'value' => 1299200,
                'functioning_percentage' => 10,
                'debt_service_percentage' => 0,
                'fund_percentage' => 20,
                'investment_percentage' => 70,
                'functioning' => 129920,
                'debt_service' => 0,
                'fund' => 259840,
                'investment' => 909440,
                'year' => 2,
                ]);
                $idPlan89 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente41,
                'value' => 302069300,
                'functioning_percentage' => 10,
                'debt_service_percentage' => 0,
                'fund_percentage' => 20,
                'investment_percentage' => 70,
                'functioning' => 30206930,
                'debt_service' => 0,
                'fund' => 60413860,
                'investment' => 211448510,
                'year' => 2,
                ]);
                $idPlan90 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente42,
                'value' => 478100000,
                'functioning_percentage' => 10,
                'debt_service_percentage' => 0,
                'fund_percentage' => 20,
                'investment_percentage' => 70,
                'functioning' => 47810000,
                'debt_service' => 0,
                'fund' => 95620000,
                'investment' => 334670000,
                'year' => 2,
                ]);
                $idPlan91 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente44,
                'value' => 973505793,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 100,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 973505793,
                'year' => 2,
                ]);
                $idPlan92 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente45,
                'value' => 449943589,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 100,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 449943589,
                'year' => 2,
                ]);
                $idPlan93 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente46,
                'value' => 772881966,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 100,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 772881966,
                'year' => 2,
                ]);
                $idPlan94 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente47,
                'value' => 588498390,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 100,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 588498390,
                'year' => 2,
                ]);
                $idPlan95 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente48,
                'value' => 5568248,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 100,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 5568248,
                'year' => 2,
                ]);
                $idPlan96 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente49,
                'value' => 127301562707,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 100,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 127301562707,
                'year' => 2,
                ]);
                $idPlan97 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente50,
                'value' => 7973678975,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 100,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 7973678975,
                'year' => 2,
                ]);
                $idPlan98 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente51,
                'value' => 417347004,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 100,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 417347004,
                'year' => 2,
                ]);
                $idPlan99 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente53,
                'value' => 38434496,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 100,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 38434496,
                'year' => 2,
                ]);
                $idPlan100 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente55,
                'value' => 797849993,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 100,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 797849993,
                'year' => 2,
                ]);
                $idPlan101 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente57,
                'value' => 209792500000,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 100,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 209792500000,
                'year' => 2,
                ]);
                $idPlan102 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente58,
                'value' => 18945000000,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 100,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 18945000000,
                'year' => 2,
                ]);
                $idPlan103 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente59,
                'value' => 23473263200,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 100,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 23473263200,
                'year' => 2,
                ]);
                $idPlan104 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente60,
                'value' => 2893963900,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 100,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 2893963900,
                'year' => 2,
                ]);
                $idPlan105 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente61,
                'value' => 5787927900,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 100,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 5787927900,
                'year' => 2,
                ]);
                $idPlan106 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente62,
                'value' => 362000000,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 100,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 362000000,
                'year' => 2,
                ]);
                $idPlan107 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente64,
                'value' => 312849724845,
                'functioning_percentage' => 0,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 100,
                'functioning' => 0,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 312849724845,
                'year' => 2,
                ]);
                $idPlan108 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente65,
                'value' => 49070169917,
                'functioning_percentage' => 20,
                'debt_service_percentage' => 80,
                'fund_percentage' => 0,
                'investment_percentage' => 0,
                'functioning' => 9814033983.4,
                'debt_service' => 39256135933.6,
                'fund' => 0,
                'investment' => 0,
                'year' => 2,
                ]);
                $idPlan109 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente66,
                'value' => 154333456348,
                'functioning_percentage' => 50,
                'debt_service_percentage' => 0,
                'fund_percentage' => 0,
                'investment_percentage' => 50,
                'functioning' => 77166728174,
                'debt_service' => 0,
                'fund' => 0,
                'investment' => 77166728174,
                'year' => 2,
                ]);
                $idPlan110 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_plans')->insert([
                'p_a_i_id' => $idpai1,
                'source_id' => $idFuente68,
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
                $idPlan111 = DB::getPdo()->lastInsertId();
                
                
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente1,
                  'value' => 219594000000,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 219594000000,
                  'year' => 3,
                  ]);
                  $idPlan112 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente2,
                  'value' => 73760353500,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 73760353500,
                  'year' => 3,
                  ]);
                  $idPlan113 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente3,
                  'value' => 109637000,
                  'functioning_percentage' => 96.582,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 3.418,
                  'investment_percentage' => 0,
                  'functioning' => 105889607.34,
                  'debt_service' => 0,
                  'fund' => 3747392.66,
                  'investment' => 0,
                  'year' => 3,
                  ]);
                  $idPlan114 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente4,
                  'value' => 2577717400,
                  'functioning_percentage' => 95,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 5,
                  'investment_percentage' => 0,
                  'functioning' => 2448831530,
                  'debt_service' => 0,
                  'fund' => 128885870,
                  'investment' => 0,
                  'year' => 3,
                  ]);
                  $idPlan115 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente5,
                  'value' => 3605000000,
                  'functioning_percentage' => 90,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 10,
                  'investment_percentage' => 0,
                  'functioning' => 3244500000,
                  'debt_service' => 0,
                  'fund' => 360500000,
                  'investment' => 0,
                  'year' => 3,
                  ]);
                  $idPlan116 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente6,
                  'value' => 850000000,
                  'functioning_percentage' => 100,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 0,
                  'functioning' => 850000000,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 0,
                  'year' => 3,
                  ]);
                  $idPlan117 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente7,
                  'value' => 525318700,
                  'functioning_percentage' => 100,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 0,
                  'functioning' => 525318700,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 0,
                  'year' => 3,
                  ]);
                  $idPlan118 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente8,
                  'value' => 3141588494,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 3141588494,
                  'year' => 3,
                  ]);
                  $idPlan119 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente9,
                  'value' => 6050210300,
                  'functioning_percentage' => 10,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 20,
                  'investment_percentage' => 70,
                  'functioning' => 605021030,
                  'debt_service' => 0,
                  'fund' => 1210042060,
                  'investment' => 4235147210,
                  'year' => 3,
                  ]);
                  $idPlan120 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente10,
                  'value' => 1806000000,
                  'functioning_percentage' => 10,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 20,
                  'investment_percentage' => 70,
                  'functioning' => 180600000,
                  'debt_service' => 0,
                  'fund' => 361200000,
                  'investment' => 1264200000,
                  'year' => 3,
                  ]);
                  $idPlan121 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente11,
                  'value' => 223000000,
                  'functioning_percentage' => 10,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 20,
                  'investment_percentage' => 70,
                  'functioning' => 22300000,
                  'debt_service' => 0,
                  'fund' => 44600000,
                  'investment' => 156100000,
                  'year' => 3,
                  ]);
                  $idPlan122 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente12,
                  'value' => 10487000,
                  'functioning_percentage' => 10,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 20,
                  'investment_percentage' => 70,
                  'functioning' => 1048700,
                  'debt_service' => 0,
                  'fund' => 2097400,
                  'investment' => 7340900,
                  'year' => 3,
                  ]);
                  $idPlan123 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente13,
                  'value' => 725856200,
                  'functioning_percentage' => 10,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 20,
                  'investment_percentage' => 70,
                  'functioning' => 72585620,
                  'debt_service' => 0,
                  'fund' => 145171240,
                  'investment' => 508099340,
                  'year' => 3,
                  ]);
                  $idPlan124 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente14,
                  'value' => 992401000,
                  'functioning_percentage' => 10,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 20,
                  'investment_percentage' => 70,
                  'functioning' => 99240100,
                  'debt_service' => 0,
                  'fund' => 198480200,
                  'investment' => 694680700,
                  'year' => 3,
                  ]);
                  $idPlan125 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente15,
                  'value' => 0,
                  'functioning_percentage' => 10,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 20,
                  'investment_percentage' => 70,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 0,
                  'year' => 3,
                  ]);
                  $idPlan126 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente16,
                  'value' => 236000000,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 236000000,
                  'year' => 3,
                  ]);
                  $idPlan127 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente17,
                  'value' => 596980600,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 10,
                  'investment_percentage' => 90,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 59698060,
                  'investment' => 537282540,
                  'year' => 3,
                  ]);
                  $idPlan128 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente18,
                  'value' => 1903500000,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 10,
                  'investment_percentage' => 90,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 190350000,
                  'investment' => 1713150000,
                  'year' => 3,
                  ]);
                  $idPlan129 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente19,
                  'value' => 2765952900,
                  'functioning_percentage' => 100,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 0,
                  'functioning' => 2765952900,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 0,
                  'year' => 3,
                  ]);
                  $idPlan130 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente20,
                  'value' => 247962400,
                  'functioning_percentage' => 100,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 0,
                  'functioning' => 247962400,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 0,
                  'year' => 3,
                  ]);
                  $idPlan131 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente21,
                  'value' => 20358400,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 10,
                  'investment_percentage' => 90,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 2035840,
                  'investment' => 18322560,
                  'year' => 3,
                  ]);
                  $idPlan132 = DB::getPdo()->lastInsertId();
                  
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente23,
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
                  $idPlan133 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente24,
                  'value' => 315000000000,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 315000000000,
                  'year' => 3,
                  ]);
                  $idPlan134 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente26,
                  'value' => 14028127365,
                  'functioning_percentage' => 100,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 0,
                  'functioning' => 14028127365,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 0,
                  'year' => 3,
                  ]);
                  $idPlan135 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente27,
                  'value' => 1463000000,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 9.8943,
                  'investment_percentage' => 90.1057,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 144753609,
                  'investment' => 1318246391,
                  'year' => 3,
                  ]);
                  $idPlan136 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente28,
                  'value' => 4399000000,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 10,
                  'investment_percentage' => 90,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 439900000,
                  'investment' => 3959100000,
                  'year' => 3,
                  ]);
                  $idPlan137 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente29,
                  'value' => 50000000,
                  'functioning_percentage' => 100,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 0,
                  'functioning' => 50000000,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 0,
                  'year' => 3,
                  ]);
                  $idPlan138 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente30,
                  'value' => 0,
                  'functioning_percentage' => 100,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 0,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 0,
                  'year' => 3,
                  ]);
                  $idPlan139 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente31,
                  'value' => 4399000000,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 10,
                  'investment_percentage' => 90,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 439900000,
                  'investment' => 3959100000,
                  'year' => 3,
                  ]);
                  $idPlan140 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente32,
                  'value' => 1653000000,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 90,
                  'fund_percentage' => 10,
                  'investment_percentage' => 0,
                  'functioning' => 0,
                  'debt_service' => 1487700000,
                  'fund' => 165300000,
                  'investment' => 0,
                  'year' => 3,
                  ]);
                  $idPlan141 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente35,
                  'value' => 6500000000,
                  'functioning_percentage' => 29.5093,
                  'debt_service_percentage' => 44.94694,
                  'fund_percentage' => 0,
                  'investment_percentage' => 25.54376,
                  'functioning' => 1918104500,
                  'debt_service' => 2921551100,
                  'fund' => 0,
                  'investment' => 1660344400,
                  'year' => 3,
                  ]);
                  $idPlan142 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente36,
                  'value' => 2800000000,
                  'functioning_percentage' => 100,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 0,
                  'functioning' => 2800000000,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 0,
                  'year' => 3,
                  ]);
                  $idPlan143 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente37,
                  'value' => 1858281700,
                  'functioning_percentage' => 10,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 20,
                  'investment_percentage' => 70,
                  'functioning' => 185828170,
                  'debt_service' => 0,
                  'fund' => 371656340,
                  'investment' => 1300797190,
                  'year' => 3,
                  ]);
                  $idPlan144 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente38,
                  'value' => 134000000,
                  'functioning_percentage' => 10,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 20,
                  'investment_percentage' => 70,
                  'functioning' => 13400000,
                  'debt_service' => 0,
                  'fund' => 26800000,
                  'investment' => 93800000,
                  'year' => 3,
                  ]);
                  $idPlan145 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente39,
                  'value' => 20000000,
                  'functioning_percentage' => 10,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 20,
                  'investment_percentage' => 70,
                  'functioning' => 2000000,
                  'debt_service' => 0,
                  'fund' => 4000000,
                  'investment' => 14000000,
                  'year' => 3,
                  ]);
                  $idPlan146 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente40,
                  'value' => 1000000,
                  'functioning_percentage' => 10,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 20,
                  'investment_percentage' => 70,
                  'functioning' => 100000,
                  'debt_service' => 0,
                  'fund' => 200000,
                  'investment' => 700000,
                  'year' => 3,
                  ]);
                  $idPlan147 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente41,
                  'value' => 174275600,
                  'functioning_percentage' => 10,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 20,
                  'investment_percentage' => 70,
                  'functioning' => 17427560,
                  'debt_service' => 0,
                  'fund' => 34855120,
                  'investment' => 121992920,
                  'year' => 3,
                  ]);
                  $idPlan148 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente42,
                  'value' => 89468500,
                  'functioning_percentage' => 10,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 20,
                  'investment_percentage' => 70,
                  'functioning' => 8946850,
                  'debt_service' => 0,
                  'fund' => 17893700,
                  'investment' => 62627950,
                  'year' => 3,
                  ]);
                  $idPlan149 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente44,
                  'value' => 747688057,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 747688057,
                  'year' => 3,
                  ]);
                  $idPlan150 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente45,
                  'value' => 2593523688,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 2593523688,
                  'year' => 3,
                  ]);
                  $idPlan151 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente46,
                  'value' => 2002817208,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 2002817208,
                  'year' => 3,
                  ]);
                  $idPlan152 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente47,
                  'value' => 4569370513,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 4569370513,
                  'year' => 3,
                  ]);
                  $idPlan153 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente48,
                  'value' => 4112158,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 4112158,
                  'year' => 3,
                  ]);
                  $idPlan154 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente49,
                  'value' => 157294826133,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 157294826133,
                  'year' => 3,
                  ]);
                  $idPlan155 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente50,
                  'value' => 14441751081,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 14441751081,
                  'year' => 3,
                  ]);
                  $idPlan156 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente51,
                  'value' => 557218051,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 557218051,
                  'year' => 3,
                  ]);
                  $idPlan157 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente52,
                  'value' => 220049881,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 100,
                  'fund_percentage' => 0,
                  'investment_percentage' => 0,
                  'functioning' => 0,
                  'debt_service' => 220049881,
                  'fund' => 0,
                  'investment' => 0,
                  'year' => 3,
                  ]);
                  $idPlan158 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente53,
                  'value' => 882663882,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 882663882,
                  'year' => 3,
                  ]);
                  $idPlan159 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente54,
                  'value' => 18124511707,
                  'functioning_percentage' => 1,
                  'debt_service_percentage' => 89,
                  'fund_percentage' => 0,
                  'investment_percentage' => 10,
                  'functioning' => 181245117.07,
                  'debt_service' => 16130815419.23,
                  'fund' => 0,
                  'investment' => 1812451170.7,
                  'year' => 3,
                  ]);
                  $idPlan160 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente55,
                  'value' => 3570898324,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 3570898324,
                  'year' => 3,
                  ]);
                  $idPlan161 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente56,
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
                  $idPlan162 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente57,
                  'value' => 226094000000,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 226094000000,
                  'year' => 3,
                  ]);
                  $idPlan163 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente58,
                  'value' => 19446000000,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 19446000000,
                  'year' => 3,
                  ]);
                  $idPlan164 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente59,
                  'value' => 14596875600,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 14596875600,
                  'year' => 3,
                  ]);
                  $idPlan165 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente60,
                  'value' => 1799614800,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 1799614800,
                  'year' => 3,
                  ]);
                  $idPlan166 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente61,
                  'value' => 3599229600,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 3599229600,
                  'year' => 3,
                  ]);
                  $idPlan167 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente62,
                  'value' => 1475504978,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 1475504978,
                  'year' => 3,
                  ]);
                  $idPlan168 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente63,
                  'value' => 345054321,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 345054321,
                  'year' => 3,
                  ]);
                  $idPlan169 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente64,
                  'value' => 413171353806,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 0,
                  'fund_percentage' => 0,
                  'investment_percentage' => 100,
                  'functioning' => 0,
                  'debt_service' => 0,
                  'fund' => 0,
                  'investment' => 413171353806,
                  'year' => 3,
                  ]);
                  $idPlan170 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente65,
                  'value' => 72766805832,
                  'functioning_percentage' => 21,
                  'debt_service_percentage' => 79,
                  'fund_percentage' => 0,
                  'investment_percentage' => 0,
                  'functioning' => 15281029224.72,
                  'debt_service' => 57485776607.28,
                  'fund' => 0,
                  'investment' => 0,
                  'year' => 3,
                  ]);
                  $idPlan171 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente66,
                  'value' => 185494572139,
                  'functioning_percentage' => 45,
                  'debt_service_percentage' => 41,
                  'fund_percentage' => 0,
                  'investment_percentage' => 14,
                  'functioning' => 83472557462.55,
                  'debt_service' => 76052774576.99,
                  'fund' => 0,
                  'investment' => 25969240099.46,
                  'year' => 3,
                  ]);
                  $idPlan172 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente67,
                  'value' => 33518191554,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 100,
                  'fund_percentage' => 0,
                  'investment_percentage' => 0,
                  'functioning' => 0,
                  'debt_service' => 33518191554,
                  'fund' => 0,
                  'investment' => 0,
                  'year' => 3,
                  ]);
                  $idPlan173 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente68,
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
                  $idPlan174 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_plans')->insert([
                  'p_a_i_id' => $idpai1,
                  'source_id' => $idFuente69,
                  'value' => 1550000000,
                  'functioning_percentage' => 0,
                  'debt_service_percentage' => 100,
                  'fund_percentage' => 0,
                  'investment_percentage' => 0,
                  'functioning' => 0,
                  'debt_service' => 1550000000,
                  'fund' => 0,
                  'investment' => 0,
                  'year' => 3,
                  ]);
                  $idPlan175 = DB::getPdo()->lastInsertId();
                  
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente1,
                    'value' => 239273646150,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 239273646150,
                    'year' => 4,
                    ]);
                    $idPlan176 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente2,
                    'value' => 75973000000,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 75973000000,
                    'year' => 4,
                    ]);
                    $idPlan177 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente3,
                    'value' => 244500000,
                    'functioning_percentage' => 100,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 0,
                    'functioning' => 244500000,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 0,
                    'year' => 4,
                    ]);
                    $idPlan178 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente4,
                    'value' => 2785591100,
                    'functioning_percentage' => 100,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 0,
                    'functioning' => 2785591100,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 0,
                    'year' => 4,
                    ]);
                    $idPlan179 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente5,
                    'value' => 3713150000,
                    'functioning_percentage' => 90,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 10,
                    'investment_percentage' => 0,
                    'functioning' => 3341835000,
                    'debt_service' => 0,
                    'fund' => 371315000,
                    'investment' => 0,
                    'year' => 4,
                    ]);
                    $idPlan180 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente6,
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
                    $idPlan181 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente7,
                    'value' => 50000000,
                    'functioning_percentage' => 100,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 0,
                    'functioning' => 50000000,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 0,
                    'year' => 4,
                    ]);
                    $idPlan182 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente8,
                    'value' => 607654645,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 607654645,
                    'year' => 4,
                    ]);
                    $idPlan183 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente9,
                    'value' => 7515000000,
                    'functioning_percentage' => 10,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 20,
                    'investment_percentage' => 70,
                    'functioning' => 751500000,
                    'debt_service' => 0,
                    'fund' => 1503000000,
                    'investment' => 5260500000,
                    'year' => 4,
                    ]);
                    $idPlan184 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente10,
                    'value' => 2000000000,
                    'functioning_percentage' => 10,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 20,
                    'investment_percentage' => 70,
                    'functioning' => 200000000,
                    'debt_service' => 0,
                    'fund' => 400000000,
                    'investment' => 1400000000,
                    'year' => 4,
                    ]);
                    $idPlan185 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente11,
                    'value' => 886055000,
                    'functioning_percentage' => 10,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 20,
                    'investment_percentage' => 70,
                    'functioning' => 88605500,
                    'debt_service' => 0,
                    'fund' => 177211000,
                    'investment' => 620238500,
                    'year' => 4,
                    ]);
                    $idPlan186 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente12,
                    'value' => 10801600,
                    'functioning_percentage' => 10,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 20,
                    'investment_percentage' => 70,
                    'functioning' => 1080160,
                    'debt_service' => 0,
                    'fund' => 2160320,
                    'investment' => 7561120,
                    'year' => 4,
                    ]);
                    $idPlan187 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente13,
                    'value' => 906868000,
                    'functioning_percentage' => 10,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 20,
                    'investment_percentage' => 70,
                    'functioning' => 90686800,
                    'debt_service' => 0,
                    'fund' => 181373600,
                    'investment' => 634807600,
                    'year' => 4,
                    ]);
                    $idPlan188 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente14,
                    'value' => 1391240900,
                    'functioning_percentage' => 10,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 20,
                    'investment_percentage' => 70,
                    'functioning' => 139124090,
                    'debt_service' => 0,
                    'fund' => 278248180,
                    'investment' => 973868630,
                    'year' => 4,
                    ]);
                    $idPlan189 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente15,
                    'value' => 0,
                    'functioning_percentage' => 10,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 20,
                    'investment_percentage' => 70,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 0,
                    'year' => 4,
                    ]);
                    $idPlan190 = DB::getPdo()->lastInsertId();
                    
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente17,
                    'value' => 4937957600,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 10,
                    'investment_percentage' => 90,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 493795760,
                    'investment' => 4444161840,
                    'year' => 4,
                    ]);
                    $idPlan191 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente18,
                    'value' => 1914739800,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 10,
                    'investment_percentage' => 90,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 191473980,
                    'investment' => 1723265820,
                    'year' => 4,
                    ]);
                    $idPlan192 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente19,
                    'value' => 1867000000,
                    'functioning_percentage' => 100,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 0,
                    'functioning' => 1867000000,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 0,
                    'year' => 4,
                    ]);
                    $idPlan193 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente20,
                    'value' => 810485300,
                    'functioning_percentage' => 100,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 0,
                    'functioning' => 810485300,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 0,
                    'year' => 4,
                    ]);
                    $idPlan194 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente21,
                    'value' => 11410600,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 10,
                    'investment_percentage' => 90,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 1141060,
                    'investment' => 10269540,
                    'year' => 4,
                    ]);
                    $idPlan195 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente22,
                    'value' => 204970000,
                    'functioning_percentage' => 40,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 17.008,
                    'investment_percentage' => 42.992,
                    'functioning' => 81988000,
                    'debt_service' => 0,
                    'fund' => 34861297.6,
                    'investment' => 88120702.4,
                    'year' => 4,
                    ]);
                    $idPlan196 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente23,
                    'value' => 5098500,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 10,
                    'investment_percentage' => 90,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 509850,
                    'investment' => 4588650,
                    'year' => 4,
                    ]);
                    $idPlan197 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente24,
                    'value' => 302060789586,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 302060789586,
                    'year' => 4,
                    ]);
                    $idPlan198 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente25,
                    'value' => 90000000000,
                    'functioning_percentage' => 100,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 0,
                    'functioning' => 90000000000,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 0,
                    'year' => 4,
                    ]);
                    $idPlan199 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente26,
                    'value' => 13239783300,
                    'functioning_percentage' => 100,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 0,
                    'functioning' => 13239783300,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 0,
                    'year' => 4,
                    ]);
                    $idPlan200 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente27,
                    'value' => 587000000,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 9.8943,
                    'investment_percentage' => 90.1057,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 58079541,
                    'investment' => 528920459,
                    'year' => 4,
                    ]);
                    $idPlan201 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente28,
                    'value' => 2433000000,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 10,
                    'investment_percentage' => 90,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 243300000,
                    'investment' => 2189700000,
                    'year' => 4,
                    ]);
                    $idPlan202 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente29,
                    'value' => 20000000,
                    'functioning_percentage' => 100,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 0,
                    'functioning' => 20000000,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 0,
                    'year' => 4,
                    ]);
                    $idPlan203 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente30,
                    'value' => 0,
                    'functioning_percentage' => 100,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 0,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 0,
                    'year' => 4,
                    ]);
                    $idPlan204 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente31,
                    'value' => 4291000000,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 10,
                    'investment_percentage' => 90,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 429100000,
                    'investment' => 3861900000,
                    'year' => 4,
                    ]);
                    $idPlan205 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente32,
                    'value' => 1996000000,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 90,
                    'fund_percentage' => 10,
                    'investment_percentage' => 0,
                    'functioning' => 0,
                    'debt_service' => 1796400000,
                    'fund' => 199600000,
                    'investment' => 0,
                    'year' => 4,
                    ]);
                    $idPlan206 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente33,
                    'value' => 199000000,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 10,
                    'investment_percentage' => 90,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 19900000,
                    'investment' => 179100000,
                    'year' => 4,
                    ]);
                    $idPlan207 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente34,
                    'value' => 0,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 10,
                    'investment_percentage' => 90,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 0,
                    'year' => 4,
                    ]);
                    $idPlan208 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente35,
                    'value' => 9285122350,
                    'functioning_percentage' => 24.46237,
                    'debt_service_percentage' => 50.06497,
                    'fund_percentage' => 0,
                    'investment_percentage' => 25.47266,
                    'functioning' => 2271360984.2097,
                    'debt_service' => 4648593718.9908,
                    'fund' => 0,
                    'investment' => 2365167646.79951,
                    'year' => 4,
                    ]);
                    $idPlan209 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente36,
                    'value' => 4320865200,
                    'functioning_percentage' => 100,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 0,
                    'functioning' => 4320865200,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 0,
                    'year' => 4,
                    ]);
                    $idPlan210 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente37,
                    'value' => 2988318700,
                    'functioning_percentage' => 10,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 20,
                    'investment_percentage' => 70,
                    'functioning' => 298831870,
                    'debt_service' => 0,
                    'fund' => 597663740,
                    'investment' => 2091823090,
                    'year' => 4,
                    ]);
                    $idPlan211 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente38,
                    'value' => 100000000,
                    'functioning_percentage' => 10,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 20,
                    'investment_percentage' => 70,
                    'functioning' => 10000000,
                    'debt_service' => 0,
                    'fund' => 20000000,
                    'investment' => 70000000,
                    'year' => 4,
                    ]);
                    $idPlan212 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente39,
                    'value' => 182591000,
                    'functioning_percentage' => 10,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 20,
                    'investment_percentage' => 70,
                    'functioning' => 18259100,
                    'debt_service' => 0,
                    'fund' => 36518200,
                    'investment' => 127813700,
                    'year' => 4,
                    ]);
                    $idPlan213 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente40,
                    'value' => 1059800,
                    'functioning_percentage' => 10,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 20,
                    'investment_percentage' => 70,
                    'functioning' => 105980,
                    'debt_service' => 0,
                    'fund' => 211960,
                    'investment' => 741860,
                    'year' => 4,
                    ]);
                    $idPlan214 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente41,
                    'value' => 269229000,
                    'functioning_percentage' => 10,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 20,
                    'investment_percentage' => 70,
                    'functioning' => 26922900,
                    'debt_service' => 0,
                    'fund' => 53845800,
                    'investment' => 188460300,
                    'year' => 4,
                    ]);
                    $idPlan215 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente42,
                    'value' => 126370400,
                    'functioning_percentage' => 10,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 20,
                    'investment_percentage' => 70,
                    'functioning' => 12637040,
                    'debt_service' => 0,
                    'fund' => 25274080,
                    'investment' => 88459280,
                    'year' => 4,
                    ]);
                    $idPlan216 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente43,
                    'value' => 0,
                    'functioning_percentage' => 10,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 20,
                    'investment_percentage' => 70,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 0,
                    'year' => 4,
                    ]);
                    $idPlan217 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente44,
                    'value' => 3657187947,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 3657187947,
                    'year' => 4,
                    ]);
                    $idPlan218 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente45,
                    'value' => 786690513,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 786690513,
                    'year' => 4,
                    ]);
                    $idPlan219 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente46,
                    'value' => 3352142124,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 3352142124,
                    'year' => 4,
                    ]);
                    $idPlan220 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente47,
                    'value' => 12204404876,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 12204404876,
                    'year' => 4,
                    ]);
                    $idPlan221 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente48,
                    'value' => 17755095,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 17755095,
                    'year' => 4,
                    ]);
                    $idPlan222 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente49,
                    'value' => 192730554647,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 192730554647,
                    'year' => 4,
                    ]);
                    $idPlan223 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente50,
                    'value' => 21553520261,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 21553520261,
                    'year' => 4,
                    ]);
                    $idPlan224 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente51,
                    'value' => 1619879562,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 1619879562,
                    'year' => 4,
                    ]);
                    $idPlan225 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente52,
                    'value' => 220870448,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 220870448,
                    'year' => 4,
                    ]);
                    $idPlan226 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente53,
                    'value' => 140390823,
                    'functioning_percentage' => 100,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 0,
                    'functioning' => 140390823,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 0,
                    'year' => 4,
                    ]);
                    $idPlan227 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente55,
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
                    $idPlan228 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente56,
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
                    $idPlan229 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente57,
                    'value' => 248558768500,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 248558768500,
                    'year' => 4,
                    ]);
                    $idPlan230 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente58,
                    'value' => 20217944000,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 20217944000,
                    'year' => 4,
                    ]);
                    $idPlan231 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente59,
                    'value' => 10938174000,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 10938174000,
                    'year' => 4,
                    ]);
                    $idPlan232 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente60,
                    'value' => 1348542000,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 1348542000,
                    'year' => 4,
                    ]);
                    $idPlan233 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente61,
                    'value' => 2697084000,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 2697084000,
                    'year' => 4,
                    ]);
                    $idPlan234 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente62,
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
                    $idPlan235 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente64,
                    'value' => 247873981217,
                    'functioning_percentage' => 13,
                    'debt_service_percentage' => 6,
                    'fund_percentage' => 0,
                    'investment_percentage' => 81,
                    'functioning' => 32223617558.21,
                    'debt_service' => 14872438873.02,
                    'fund' => 0,
                    'investment' => 200777924785.77,
                    'year' => 4,
                    ]);
                    $idPlan236 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente65,
                    'value' => 62041020591,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 100,
                    'fund_percentage' => 0,
                    'investment_percentage' => 0,
                    'functioning' => 0,
                    'debt_service' => 62041020591,
                    'fund' => 0,
                    'investment' => 0,
                    'year' => 4,
                    ]);
                    $idPlan237 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente66,
                    'value' => 230980900624,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 100,
                    'fund_percentage' => 0,
                    'investment_percentage' => 0,
                    'functioning' => 0,
                    'debt_service' => 230980900624,
                    'fund' => 0,
                    'investment' => 0,
                    'year' => 4,
                    ]);
                    $idPlan238 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente67,
                    'value' => 15370474463,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 100,
                    'fund_percentage' => 0,
                    'investment_percentage' => 0,
                    'functioning' => 0,
                    'debt_service' => 15370474463,
                    'fund' => 0,
                    'investment' => 0,
                    'year' => 4,
                    ]);
                    $idPlan239 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente68,
                    'value' => 35394000,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 100,
                    'fund_percentage' => 0,
                    'investment_percentage' => 0,
                    'functioning' => 0,
                    'debt_service' => 35394000,
                    'fund' => 0,
                    'investment' => 0,
                    'year' => 4,
                    ]);
                    $idPlan240 = DB::getPdo()->lastInsertId();
                    
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente70,
                    'value' => 18000000000,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 18000000000,
                    'year' => 4,
                    ]);
                    $idPlan241 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente71,
                    'value' => 1376558725,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 1376558725,
                    'year' => 4,
                    ]);
                    $idPlan242 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente72,
                    'value' => 4965930257,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 4965930257,
                    'year' => 4,
                    ]);
                    $idPlan243 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente73,
                    'value' => 340048595,
                    'functioning_percentage' => 0,
                    'debt_service_percentage' => 0,
                    'fund_percentage' => 0,
                    'investment_percentage' => 100,
                    'functioning' => 0,
                    'debt_service' => 0,
                    'fund' => 0,
                    'investment' => 340048595,
                    'year' => 4,
                    ]);
                    $idPlan244 = DB::getPdo()->lastInsertId();
                   
          DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente21,
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
                    $idPlan245 = DB::getPdo()->lastInsertId();
                  
        DB::table('financial_plans')->insert([
                    'p_a_i_id' => $idpai1,
                    'source_id' => $idFuente56,
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
                    $idPlan246 = DB::getPdo()->lastInsertId();

        DB::table('implementations')->insert([
                      'p_a_i_s_id'=>$idpai1,
                      ]);
                      $idImplementation1 = DB::getPdo()->lastInsertId();

                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 192549791062,
                      'financial_plans_id' => $idPlan1,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo1 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 63001599145.18,
                      'financial_plans_id' => $idPlan2,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo2 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 109720829,
                      'financial_plans_id' => $idPlan3,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo3 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 1438524334,
                      'financial_plans_id' => $idPlan4,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo4 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 3220072862.58,
                      'financial_plans_id' => $idPlan5,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo5 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 718431033,
                      'financial_plans_id' => $idPlan6,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo6 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 12711472,
                      'financial_plans_id' => $idPlan7,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo7 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 1679920000,
                      'financial_plans_id' => $idPlan8,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo8 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 6221380156,
                      'financial_plans_id' => $idPlan9,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo9 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 1585832408,
                      'financial_plans_id' => $idPlan10,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo10 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 993511639,
                      'financial_plans_id' => $idPlan11,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo11 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 6424242,
                      'financial_plans_id' => $idPlan12,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo12 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 678524598,
                      'financial_plans_id' => $idPlan13,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo13 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 498097340,
                      'financial_plans_id' => $idPlan14,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo14 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 3570898324,
                      'financial_plans_id' => $idPlan15,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo15 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 5766979434.69,
                      'financial_plans_id' => $idPlan16,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo16 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 1840596453,
                      'financial_plans_id' => $idPlan17,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo17 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 1083550687.22,
                      'financial_plans_id' => $idPlan18,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo18 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 1331045404.2,
                      'financial_plans_id' => $idPlan19,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo19 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 66783176.3,
                      'financial_plans_id' => $idPlan245,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo245 = DB::getPdo()->lastInsertId();
                                              
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 21959036808.96,
                      'financial_plans_id' => $idPlan20,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo20 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 2749772100,
                      'financial_plans_id' => $idPlan21,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo21 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 3405963329.86,
                      'financial_plans_id' => $idPlan22,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo22 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 29515550,
                      'financial_plans_id' => $idPlan23,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo23 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 725812999,
                      'financial_plans_id' => $idPlan24,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo24 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 1643007894,
                      'financial_plans_id' => $idPlan25,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo25 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 679035673,
                      'financial_plans_id' => $idPlan26,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo26 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 5312154037,
                      'financial_plans_id' => $idPlan27,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo27 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 2108553151,
                      'financial_plans_id' => $idPlan28,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo28 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 1419275487,
                      'financial_plans_id' => $idPlan29,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo29 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 113361494,
                      'financial_plans_id' => $idPlan30,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo30 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 688471800,
                      'financial_plans_id' => $idPlan31,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo31 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 1261320,
                      'financial_plans_id' => $idPlan32,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo32 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 166324857,
                      'financial_plans_id' => $idPlan33,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo33 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 38997883,
                      'financial_plans_id' => $idPlan34,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo34 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 183011243,
                      'financial_plans_id' => $idPlan35,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo35 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 1602559556,
                      'financial_plans_id' => $idPlan36,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo36 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 484389442,
                      'financial_plans_id' => $idPlan37,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo37 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 1529844085,
                      'financial_plans_id' => $idPlan38,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo38 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 188355,
                      'financial_plans_id' => $idPlan39,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo39 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 78139614114,
                      'financial_plans_id' => $idPlan40,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo40 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 10253286719,
                      'financial_plans_id' => $idPlan41,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo41 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 50952385,
                      'financial_plans_id' => $idPlan42,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo42 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 415520792,
                      'financial_plans_id' => $idPlan43,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo43 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 18124511707,
                      'financial_plans_id' => $idPlan44,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo44 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 199543813,
                      'financial_plans_id' => $idPlan45,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo45 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 4584142564,
                      'financial_plans_id' => $idPlan246,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo246 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 197861945101,
                      'financial_plans_id' => $idPlan46,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo46 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 17222817664,
                      'financial_plans_id' => $idPlan47,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo47 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 60784071428.19,
                      'financial_plans_id' => $idPlan48,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo48 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 4385184571.57,
                      'financial_plans_id' => $idPlan49,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo49 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 4607353387,
                      'financial_plans_id' => $idPlan50,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo50 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 0,
                      'financial_plans_id' => $idPlan51,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo51 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 457625353090,
                      'financial_plans_id' => $idPlan52,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo52 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 16041297383,
                      'financial_plans_id' => $idPlan53,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo53 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 42134631326,
                      'financial_plans_id' => $idPlan54,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo54 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 33518191554,
                      'financial_plans_id' => $idPlan55,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo55 = DB::getPdo()->lastInsertId();
                      
                    DB::table('fundraisings')->insert([
                      'date' => '2016-12-31',
                      'value' => 3000000000,
                      'financial_plans_id' => $idPlan56,
                      'implementation_id' => $idImplementation1,
                      ]);
                      $idRecaudo56 = DB::getPdo()->lastInsertId();
                      
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 215148310634.5,
                        'financial_plans_id' => $idPlan57,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo57 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 73162872065.97,
                        'financial_plans_id' => $idPlan58,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo58 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 97289003,
                        'financial_plans_id' => $idPlan59,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo59 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 2792607072,
                        'financial_plans_id' => $idPlan60,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo60 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 3763069463.32,
                        'financial_plans_id' => $idPlan61,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo61 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 1094326666,
                        'financial_plans_id' => $idPlan62,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo62 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 34316077,
                        'financial_plans_id' => $idPlan63,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo63 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 1600731020,
                        'financial_plans_id' => $idPlan64,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo64 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 6662554520,
                        'financial_plans_id' => $idPlan65,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo65 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 1485708735,
                        'financial_plans_id' => $idPlan66,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo66 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 189332232,
                        'financial_plans_id' => $idPlan67,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo67 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 4780921,
                        'financial_plans_id' => $idPlan68,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo68 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 596534002,
                        'financial_plans_id' => $idPlan69,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo69 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 951485135,
                        'financial_plans_id' => $idPlan70,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo70 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 5332560865,
                        'financial_plans_id' => $idPlan71,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo71 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 2367934596,
                        'financial_plans_id' => $idPlan72,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo72 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 1174231831.16,
                        'financial_plans_id' => $idPlan73,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo73 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 171910697.27,
                        'financial_plans_id' => $idPlan74,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo74 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 24109642.82,
                        'financial_plans_id' => $idPlan75,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo75 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 122486496723,
                        'financial_plans_id' => $idPlan76,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo76 = DB::getPdo()->lastInsertId();

                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 22063762976.76,
                        'financial_plans_id' => $idPlan77,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo77 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 745967154.39,
                        'financial_plans_id' => $idPlan78,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo78 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 2312741694,
                        'financial_plans_id' => $idPlan79,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo79 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 86788347.51,
                        'financial_plans_id' => $idPlan80,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo80 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 152695611,
                        'financial_plans_id' => $idPlan81,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo81 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 1229287079.5,
                        'financial_plans_id' => $idPlan82,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo82 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 140313900,
                        'financial_plans_id' => $idPlan83,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo83 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 6132714075,
                        'financial_plans_id' => $idPlan84,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo84 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 2376199276,
                        'financial_plans_id' => $idPlan85,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo85 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 2670574815,
                        'financial_plans_id' => $idPlan86,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo86 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 98626833,
                        'financial_plans_id' => $idPlan87,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo87 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 53652135,
                        'financial_plans_id' => $idPlan88,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo88 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 1093590,
                        'financial_plans_id' => $idPlan89,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo89 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 199491785,
                        'financial_plans_id' => $idPlan90,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo90 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 87040319,
                        'financial_plans_id' => $idPlan91,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo91 = DB::getPdo()->lastInsertId();

                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 973505793,
                        'financial_plans_id' => $idPlan92,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo92 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 449943589,
                        'financial_plans_id' => $idPlan93,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo93 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 772881966,
                        'financial_plans_id' => $idPlan94,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo94 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 588498390,
                        'financial_plans_id' => $idPlan95,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo95 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 5568248,
                        'financial_plans_id' => $idPlan96,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo96 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 127968767009.63,
                        'financial_plans_id' => $idPlan97,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo97 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 7973678975,
                        'financial_plans_id' => $idPlan98,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo98 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 417347004,
                        'financial_plans_id' => $idPlan99,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo99 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 38434496,
                        'financial_plans_id' => $idPlan100,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo100 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 797849993,
                        'financial_plans_id' => $idPlan101,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo101 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 221281024709.5,
                        'financial_plans_id' => $idPlan102,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo102 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 27040994278,
                        'financial_plans_id' => $idPlan103,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo103 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 69156390003.72,
                        'financial_plans_id' => $idPlan104,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo104 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 5350633231.95,
                        'financial_plans_id' => $idPlan105,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo105 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 6062452085,
                        'financial_plans_id' => $idPlan106,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo106 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 650000000,
                        'financial_plans_id' => $idPlan107,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo107 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 312849724845,
                        'financial_plans_id' => $idPlan108,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo108 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 49070169917,
                        'financial_plans_id' => $idPlan109,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo109 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 154333456348,
                        'financial_plans_id' => $idPlan110,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo110 = DB::getPdo()->lastInsertId();
                        
                      DB::table('fundraisings')->insert([
                        'date' => '2017-12-31',
                        'value' => 29110717.22,
                        'financial_plans_id' => $idPlan111,
                        'implementation_id' => $idImplementation1,
                        ]);
                        $idRecaudo111 = DB::getPdo()->lastInsertId();
          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 232432129613,
                          'financial_plans_id' => $idPlan112,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo112 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 76008739302,
                          'financial_plans_id' => $idPlan113,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo113 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 191702360,
                          'financial_plans_id' => $idPlan114,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo114 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 2775969929,
                          'financial_plans_id' => $idPlan115,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo115 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 3418023007,
                          'financial_plans_id' => $idPlan116,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo116 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 1174032746,
                          'financial_plans_id' => $idPlan117,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo117 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 24753321,
                          'financial_plans_id' => $idPlan118,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo118 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 3026076893,
                          'financial_plans_id' => $idPlan119,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo119 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 8685434549,
                          'financial_plans_id' => $idPlan120,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo120 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 2407265033,
                          'financial_plans_id' => $idPlan121,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo121 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 210606217,
                          'financial_plans_id' => $idPlan122,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo122 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 10506348,
                          'financial_plans_id' => $idPlan123,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo123 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 744697659,
                          'financial_plans_id' => $idPlan124,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo124 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 974255573,
                          'financial_plans_id' => $idPlan125,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo125 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 27715410,
                          'financial_plans_id' => $idPlan126,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo126 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 236000000,
                          'financial_plans_id' => $idPlan127,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo127 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 7531629940,
                          'financial_plans_id' => $idPlan128,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo128 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 2373781372,
                          'financial_plans_id' => $idPlan129,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo129 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 924326919,
                          'financial_plans_id' => $idPlan130,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo130 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 956462845,
                          'financial_plans_id' => $idPlan131,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo131 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 228560670,
                          'financial_plans_id' => $idPlan132,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo132 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 11417082,
                          'financial_plans_id' => $idPlan133,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo133 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 325751562722,
                          'financial_plans_id' => $idPlan134,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo134 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 24865224188,
                          'financial_plans_id' => $idPlan135,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo135 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 316089458,
                          'financial_plans_id' => $idPlan136,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo136 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 1012410386,
                          'financial_plans_id' => $idPlan137,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo137 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 55695020,
                          'financial_plans_id' => $idPlan138,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo138 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 116308550,
                          'financial_plans_id' => $idPlan139,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo139 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 2148419221,
                          'financial_plans_id' => $idPlan140,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo140 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 543885290,
                          'financial_plans_id' => $idPlan141,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo141 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 9372381189,
                          'financial_plans_id' => $idPlan142,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo142 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 4185106666,
                          'financial_plans_id' => $idPlan143,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo143 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 2398996907,
                          'financial_plans_id' => $idPlan144,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo144 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 60533189,
                          'financial_plans_id' => $idPlan145,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo145 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 27476450,
                          'financial_plans_id' => $idPlan146,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo146 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 1028922,
                          'financial_plans_id' => $idPlan147,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo147 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 177180208,
                          'financial_plans_id' => $idPlan148,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo148 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 94517348,
                          'financial_plans_id' => $idPlan149,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo149 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 747688057,
                          'financial_plans_id' => $idPlan150,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo150 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 2593523688,
                          'financial_plans_id' => $idPlan151,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo151 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 2002817208,
                          'financial_plans_id' => $idPlan152,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo152 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 4569370513,
                          'financial_plans_id' => $idPlan153,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo153 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 4112158,
                          'financial_plans_id' => $idPlan154,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo154 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 157533314015,
                          'financial_plans_id' => $idPlan155,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo155 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 14441751081,
                          'financial_plans_id' => $idPlan156,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo156 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 557218051,
                          'financial_plans_id' => $idPlan157,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo157 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 220049881,
                          'financial_plans_id' => $idPlan158,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo158 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 882663882,
                          'financial_plans_id' => $idPlan159,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo159 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 18124511707,
                          'financial_plans_id' => $idPlan160,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo160 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 3570898324,
                          'financial_plans_id' => $idPlan161,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo161 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 75208416,
                          'financial_plans_id' => $idPlan162,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo162 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 241804510803,
                          'financial_plans_id' => $idPlan163,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo163 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 12445394973,
                          'financial_plans_id' => $idPlan164,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo164 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 47300616022,
                          'financial_plans_id' => $idPlan165,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo165 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 4173661696,
                          'financial_plans_id' => $idPlan166,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo166 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 3678628040,
                          'financial_plans_id' => $idPlan167,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo167 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 1475504977,
                          'financial_plans_id' => $idPlan168,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo168 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 345054321,
                          'financial_plans_id' => $idPlan169,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo169 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 500171353806,
                          'financial_plans_id' => $idPlan170,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo170 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 72766805832,
                          'financial_plans_id' => $idPlan171,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo171 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 185494572139,
                          'financial_plans_id' => $idPlan172,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo172 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 33518191554,
                          'financial_plans_id' => $idPlan173,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo173 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 60821200,
                          'financial_plans_id' => $idPlan174,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo174 = DB::getPdo()->lastInsertId();
                          
                        DB::table('fundraisings')->insert([
                          'date' => '2018-12-31',
                          'value' => 1182000000,
                          'financial_plans_id' => $idPlan175,
                          'implementation_id' => $idImplementation1,
                          ]);
                          $idRecaudo175 = DB::getPdo()->lastInsertId();
                          
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 258483733900,
                            'financial_plans_id' => $idPlan176,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo176 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 82647534705,
                            'financial_plans_id' => $idPlan177,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo177 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 230661480,
                            'financial_plans_id' => $idPlan178,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo178 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 3308729647,
                            'financial_plans_id' => $idPlan179,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo179 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 3339873508,
                            'financial_plans_id' => $idPlan180,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo180 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 1904927050,
                            'financial_plans_id' => $idPlan181,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo181 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 86992650,
                            'financial_plans_id' => $idPlan182,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo182 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 700083259,
                            'financial_plans_id' => $idPlan183,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo183 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 9439991404,
                            'financial_plans_id' => $idPlan184,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo184 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 2303927123,
                            'financial_plans_id' => $idPlan185,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo185 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 1127783138,
                            'financial_plans_id' => $idPlan186,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo186 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 11568504,
                            'financial_plans_id' => $idPlan187,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo187 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 999986151,
                            'financial_plans_id' => $idPlan188,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo188 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 1148239672,
                            'financial_plans_id' => $idPlan189,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo189 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 52660124,
                            'financial_plans_id' => $idPlan190,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo190 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 6621730358,
                            'financial_plans_id' => $idPlan191,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo191 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 3270669337,
                            'financial_plans_id' => $idPlan192,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo192 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 3322562224,
                            'financial_plans_id' => $idPlan193,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo193 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 690933560,
                            'financial_plans_id' => $idPlan194,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo194 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 58763595,
                            'financial_plans_id' => $idPlan195,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo195 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 219651469,
                            'financial_plans_id' => $idPlan196,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo196 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 15002309,
                            'financial_plans_id' => $idPlan197,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo197 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 302060789586,
                            'financial_plans_id' => $idPlan198,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo198 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 34000000000,
                            'financial_plans_id' => $idPlan199,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo199 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 23087720737,
                            'financial_plans_id' => $idPlan200,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo200 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 561625616,
                            'financial_plans_id' => $idPlan201,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo201 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 997729754,
                            'financial_plans_id' => $idPlan202,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo202 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 264530876,
                            'financial_plans_id' => $idPlan203,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo203 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 29058404,
                            'financial_plans_id' => $idPlan204,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo204 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 3550209994,
                            'financial_plans_id' => $idPlan205,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo205 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 594236766,
                            'financial_plans_id' => $idPlan206,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo206 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 168431052,
                            'financial_plans_id' => $idPlan207,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo207 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 3616225,
                            'financial_plans_id' => $idPlan208,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo208 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 10692484633,
                            'financial_plans_id' => $idPlan209,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo209 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 4383549481,
                            'financial_plans_id' => $idPlan210,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo210 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 2906949278,
                            'financial_plans_id' => $idPlan211,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo211 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 69773030,
                            'financial_plans_id' => $idPlan212,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo212 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 168792605,
                            'financial_plans_id' => $idPlan213,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo213 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 805209,
                            'financial_plans_id' => $idPlan214,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo214 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 180375415,
                            'financial_plans_id' => $idPlan215,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo215 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 110409498,
                            'financial_plans_id' => $idPlan216,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo216 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 26491693,
                            'financial_plans_id' => $idPlan217,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo217 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 3657187947,
                            'financial_plans_id' => $idPlan218,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo218 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 786690513,
                            'financial_plans_id' => $idPlan219,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo219 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 3352142124,
                            'financial_plans_id' => $idPlan220,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo220 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 12212675953,
                            'financial_plans_id' => $idPlan221,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo221 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 17755095,
                            'financial_plans_id' => $idPlan222,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo222 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 193324543813,
                            'financial_plans_id' => $idPlan223,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo223 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 22393931432,
                            'financial_plans_id' => $idPlan224,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo224 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 1619879562,
                            'financial_plans_id' => $idPlan225,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo225 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 220870448,
                            'financial_plans_id' => $idPlan226,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo226 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 140390823,
                            'financial_plans_id' => $idPlan227,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo227 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 196273837,
                            'financial_plans_id' => $idPlan229,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo229 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 269176218533,
                            'financial_plans_id' => $idPlan230,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo230 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 16125617504,
                            'financial_plans_id' => $idPlan231,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo231 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 43345905817,
                            'financial_plans_id' => $idPlan232,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo232 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 4101956809,
                            'financial_plans_id' => $idPlan233,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo233 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 2971455524,
                            'financial_plans_id' => $idPlan234,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo234 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 436140000,
                            'financial_plans_id' => $idPlan235,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo235 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 254126494600,
                            'financial_plans_id' => $idPlan236,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo236 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 67364480396,
                            'financial_plans_id' => $idPlan237,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo237 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 230980900624,
                            'financial_plans_id' => $idPlan238,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo238 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 15370474463,
                            'financial_plans_id' => $idPlan239,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo239 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 35394000,
                            'financial_plans_id' => $idPlan240,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo240 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 18000000000,
                            'financial_plans_id' => $idPlan241,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo241 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 1376558725,
                            'financial_plans_id' => $idPlan242,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo242 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 4965930257,
                            'financial_plans_id' => $idPlan243,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo243 = DB::getPdo()->lastInsertId();
                            
                          DB::table('fundraisings')->insert([
                            'date' => '2019-12-31',
                            'value' => 340048595,
                            'financial_plans_id' => $idPlan244,
                            'implementation_id' => $idImplementation1,
                            ]);
                            $idRecaudo244 = DB::getPdo()->lastInsertId();
              
             DB::table('cost_sources')->insert([
              'father_id' => 2,
              'code' => '2.1.1',
              'name' => 'GASTOS DE PERSONAL',
              'description' => 'GASTOS DE PERSONAL',
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'group_id' => 3,
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
              'group_id' => 3,
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
              'group_id' => 3,
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
              'group_id' => 3,
              ]);
              $idFuenteGasto9 = DB::getPdo()->lastInsertId();
              
               
             DB::table('cost_sources')->insert([
              'father_id' => 13,
              'code' => '2.1.3.1.2.1',
              'name' => 'Aportes a ASOCARS',
              'description' => 'Aportes a ASOCARS',
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'group_id' => 3,
              ]);
              $idFuenteGasto11 = DB::getPdo()->lastInsertId();
              
               
             DB::table('cost_sources')->insert([
              'father_id' => 19,
              'code' => '2.1.3.3.1',
              'name' => 'Comisiones y otros gastos',
              'description' => 'Comisiones y otros gastos',
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'group_id' => 3,
              ]);
              $idFuenteGasto12 = DB::getPdo()->lastInsertId();
              
               
             DB::table('cost_sources')->insert([
              'father_id' => 29,
              'code' => '2.1.4.3.1',
              'name' => 'Cuota de fiscalización y auditaje',
              'description' => 'Cuota de fiscalización y auditaje',
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'group_id' => 3,
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
              'group_id' => 3,
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
              'group_id' => 3,
              ]);
              $idFuenteGasto15 = DB::getPdo()->lastInsertId();
              
               
             DB::table('cost_sources')->insert([
              'father_id' => 16,
              'code' => '2.1.3.2.1.1',
              'name' => 'Mesadas pensionales (de pensiones)',
              'description' => 'Mesadas pensionales (de pensiones)',
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'group_id' => 3,
              ]);
              $idFuenteGasto6 = DB::getPdo()->lastInsertId();
              
               
             DB::table('cost_sources')->insert([
              'father_id' => 2,
              'code' => '2.1.5',
              'name' => 'FONDO ACUERDOS COLECTIVOS ASERCAR',
              'description' => 'FONDO ACUERDOS COLECTIVOS ASERCAR',
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'group_id' => 3,
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
              'group_id' => 3,
              ]);
              $idFuenteGasto8 = DB::getPdo()->lastInsertId();
              
               
             DB::table('cost_sources')->insert([
              'father_id' => 16,
              'code' => '2.1.3.2.1.2',
              'name' => 'Bonos pensionales (de pensiones)',
              'description' => 'Bonos pensionales (de pensiones)',
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'group_id' => 3,
              ]);
              $idFuenteGasto10 = DB::getPdo()->lastInsertId();
              
               
             DB::table('cost_sources')->insert([
              'father_id' => 19,
              'code' => '2.1.3.3.3',
              'name' => 'SENTENCIAS, CONCILIACIONES Y CONTINGENCIAS - REND FINANC FIAB',
              'description' => 'SENTENCIAS, CONCILIACIONES Y CONTINGENCIAS - REND FINANC FIAB',
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'group_id' => 3,
              ]);
              $idFuenteGasto13 = DB::getPdo()->lastInsertId();

            DB::table('cost_sources')->insert([
                'father_id' => 10,
                'code' => '2.1.3.1.1.1.3',
                'name' => 'FONDO NACIONAL AMBIENTAL - LEY DE PARAMOS',
                'description' => 'FONDO NACIONAL AMBIENTAL - LEY DE PARAMOS',
                'functioning' => FALSE,
                'compensation' => TRUE,
                'debt_service' => FALSE,
                'group_id' => 3,
                ]);
                $idFuenteGasto14 = DB::getPdo()->lastInsertId();
              
               
               DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 65395726812,
              'value_comitted' => 56110020736,
              'value_paid' => 53810659466,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto1,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto1 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 3398261885,
              'value_comitted' => 1533496987,
              'value_paid' => 1279301561,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto2,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto2 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 18465145792,
              'value_comitted' => 12284728180,
              'value_paid' => 8973359039,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto3,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto3 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 1570600000,
              'value_comitted' => 1069192552,
              'value_paid' => 1069192552,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto4,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto4 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 1010000000,
              'value_comitted' => 968893228,
              'value_paid' => 968893228,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto5,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto5 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 3680300000,
              'value_comitted' => 3669391738,
              'value_paid' => 3669391738,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto6,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto6 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 10000000,
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
              'group_id' => 3,
              ]);
              $idGasto7 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 3500000000,
              'value_comitted' => 967909441,
              'value_paid' => 967909441,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto8,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto8 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 3424928781,
              'value_comitted' => 3210885318,
              'value_paid' => 2874481215,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => FALSE,
              'compensation' => TRUE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto9,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto9 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 166000000,
              'value_comitted' => 164237492,
              'value_paid' => 163069242,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto10,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto10 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 128475840,
              'value_comitted' => 122698843,
              'value_paid' => 122698843,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto11,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto11 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 15000000,
              'value_comitted' => 0,
              'value_paid' => 0,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto12,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto12 = DB::getPdo()->lastInsertId();
               
             DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 13427317326,
              'value_comitted' => 13187207866,
              'value_paid' => 13187207866,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => FALSE,
              'compensation' => FALSE,
              'debt_service' => TRUE,
              'cost_sources_id' => $idFuenteGasto15,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto13 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 67480930635,
              'value_comitted' => 62159633955,
              'value_paid' => 59674308092,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto1,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto14 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 3476850000,
              'value_comitted' => 3116594663,
              'value_paid' => 1865423230,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto2,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto15 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 25636030531,
              'value_comitted' => 17781951125,
              'value_paid' => 12922839640,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto3,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto16 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 1714904982,
              'value_comitted' => 1121979816,
              'value_paid' => 1121979816,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto4,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto17 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 1304761173,
              'value_comitted' => 1304761173,
              'value_paid' => 1304761173,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto5,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto18 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 4108414520,
              'value_comitted' => 3703712316,
              'value_paid' => 3703712316,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto6,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto19 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 10000000,
              'value_comitted' => 689454,
              'value_paid' => 689454,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto7,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto20 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 3510974849,
              'value_comitted' => 211733995,
              'value_paid' => 211733995,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto8,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto21 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 4518774557,
              'value_comitted' => 4419382643,
              'value_paid' => 3051254968,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => FALSE,
              'compensation' => TRUE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto9,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto22 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 182828800,
              'value_comitted' => 95393990,
              'value_paid' => 95393990,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto10,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto23 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 134899632,
              'value_comitted' => 130995945,
              'value_paid' => 130995945,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto11,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto24 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 15750000,
              'value_comitted' => 0,
              'value_paid' => 0,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto12,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto25 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 5000000000,
              'value_comitted' => 0,
              'value_paid' => 0,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto13,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto26 = DB::getPdo()->lastInsertId();
              
             DB::table('financial_costs')->insert([
              'year' => 2,
              'value_bugeted' => 21661337118,
              'value_comitted' => 21661337118,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => FALSE,
              'compensation' => FALSE,
              'debt_service' => TRUE,
              'cost_sources_id' => $idFuenteGasto15,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto27 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 78867873203,
              'value_comitted' => 69177010248,
              'value_paid' => 64621817799,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto1,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto28 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 5429728419,
              'value_comitted' => 2635385537,
              'value_paid' => 1875791356,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto2,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto29 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 34962382673,
              'value_comitted' => 26223393650,
              'value_paid' => 21827774083,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto3,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto30 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 1825495911,
              'value_comitted' => 1540390994,
              'value_paid' => 1540390994,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto4,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto31 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 1820000000,
              'value_comitted' => 1812911462,
              'value_paid' => 1812911462,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto5,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto32 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 3777447800,
              'value_comitted' => 3510877295,
              'value_paid' => 3510877295,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto6,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto33 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 10000000,
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
              'group_id' => 3,
              ]);
              $idGasto34 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 2178080183,
              'value_comitted' => 206428110,
              'value_paid' => 206428110,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto8,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto35 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 4352067308,
              'value_comitted' => 4352067308,
              'value_paid' => 3933012202,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => FALSE,
              'compensation' => TRUE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto9,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto36 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 237009640,
              'value_comitted' => 77711344,
              'value_paid' => 77711344,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto10,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto37 = DB::getPdo()->lastInsertId();
              
              
               
             DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 20000000,
              'value_comitted' => 0,
              'value_paid' => 0,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto12,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto38 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 3,
              'value_bugeted' => 189366859072,
              'value_comitted' => 181134197479,
              'value_paid' => 181130572516,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => FALSE,
              'compensation' => FALSE,
              'debt_service' => TRUE,
              'cost_sources_id' => $idFuenteGasto15,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto39 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 4,
              'value_bugeted' => 83400955306,
              'value_comitted' => 71922889545,
              'value_paid' => 67903505248,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto1,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto40 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 4,
              'value_bugeted' => 5413395034,
              'value_comitted' => 3745065300,
              'value_paid' => 2456981474,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto2,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto41 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 4,
              'value_bugeted' => 38325704180,
              'value_comitted' => 24932164066,
              'value_paid' => 17560289401,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto3,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto42 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 4,
              'value_bugeted' => 3312260000,
              'value_comitted' => 2631506032,
              'value_paid' => 2630711910,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto4,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto43 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 4,
              'value_bugeted' => 2400000000,
              'value_comitted' => 1414493800,
              'value_paid' => 1414493800,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto5,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto44 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 4,
              'value_bugeted' => 3649259771,
              'value_comitted' => 3383973123,
              'value_paid' => 3383973123,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto6,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto45 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 4,
              'value_bugeted' => 10000000,
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
              'group_id' => 3,
              ]);
              $idGasto46 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 4,
              'value_bugeted' => 17178080183,
              'value_comitted' => 235455033,
              'value_paid' => 200596022,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto8,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto47 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 4,
              'value_bugeted' => 5318583388,
              'value_comitted' => 5252459153,
              'value_paid' => 4928847368,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => FALSE,
              'compensation' => TRUE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto9,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto48 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 4,
              'value_bugeted' => 248860122,
              'value_comitted' => 234478711,
              'value_paid' => 224427299,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto10,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto49 = DB::getPdo()->lastInsertId();
               
             DB::table('financial_costs')->insert([
              'year' => 4,
              'value_bugeted' => 20000000,
              'value_comitted' => 0,
              'value_paid' => 0,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto12,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto50 = DB::getPdo()->lastInsertId();
               
             DB::table('financial_costs')->insert([
              'year' => 4,
              'value_bugeted' => 1076656690,
              'value_comitted' => 0,
              'value_paid' => 0,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto14,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto51 = DB::getPdo()->lastInsertId();
              
               
             DB::table('financial_costs')->insert([
              'year' => 4,
              'value_bugeted' => 329745222417,
              'value_comitted' => 284881237313,
              'value_paid' => 284876648598,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => FALSE,
              'compensation' => FALSE,
              'debt_service' => TRUE,
              'cost_sources_id' => $idFuenteGasto15,
              'p_a_i_id' => $idpai1,
              'group_id' => 3,
              ]);
              $idGasto52 = DB::getPdo()->lastInsertId();

        
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity1,
            'source_id' =>$idPlan1,
            'value' => 2304284742,
            'goal' => 0,
            'evidence_balance' => 2304284742,
            'age' => 1,
            ]);
            $idactivitySource1 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity8,
            'source_id' =>$idPlan1,
            'value' => 9765526408,
            'goal' => 0,
            'evidence_balance' => 9765526408,
            'age' => 1,
            ]);
            $idactivitySource2 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity9,
            'source_id' =>$idPlan1,
            'value' => 112000000,
            'goal' => 0,
            'evidence_balance' => 112000000,
            'age' => 1,
            ]);
            $idactivitySource3 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity26,
            'source_id' =>$idPlan1,
            'value' => 40736964213,
            'goal' => 0,
            'evidence_balance' => 40736964213,
            'age' => 1,
            ]);
            $idactivitySource4 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity29,
            'source_id' =>$idPlan1,
            'value' => 2355953302,
            'goal' => 0,
            'evidence_balance' => 2355953302,
            'age' => 1,
            ]);
            $idactivitySource5 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity37,
            'source_id' =>$idPlan1,
            'value' => 8452545426,
            'goal' => 0,
            'evidence_balance' => 8452545426,
            'age' => 1,
            ]);
            $idactivitySource6 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity47,
            'source_id' =>$idPlan1,
            'value' => 13108979746,
            'goal' => 0,
            'evidence_balance' => 13108979746,
            'age' => 1,
            ]);
            $idactivitySource7 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity48,
            'source_id' =>$idPlan1,
            'value' => 708100249,
            'goal' => 0,
            'evidence_balance' => 708100249,
            'age' => 1,
            ]);
            $idactivitySource8 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity54,
            'source_id' =>$idPlan1,
            'value' => 9736436172,
            'goal' => 0,
            'evidence_balance' => 9736436172,
            'age' => 1,
            ]);
            $idactivitySource9 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity58,
            'source_id' =>$idPlan1,
            'value' => 4256893761,
            'goal' => 0,
            'evidence_balance' => 4256893761,
            'age' => 1,
            ]);
            $idactivitySource10 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity68,
            'source_id' =>$idPlan1,
            'value' => 5385799852,
            'goal' => 0,
            'evidence_balance' => 5385799852,
            'age' => 1,
            ]);
            $idactivitySource12 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity73,
            'source_id' =>$idPlan1,
            'value' => 3533526852,
            'goal' => 0,
            'evidence_balance' => 3533526852,
            'age' => 1,
            ]);
            $idactivitySource13 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity80,
            'source_id' =>$idPlan1,
            'value' => 4248595945,
            'goal' => 0,
            'evidence_balance' => 4248595945,
            'age' => 1,
            ]);
            $idactivitySource14 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity84,
            'source_id' =>$idPlan1,
            'value' => 67921207391,
            'goal' => 0,
            'evidence_balance' => 67921207391,
            'age' => 1,
            ]);
            $idactivitySource15 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity90,
            'source_id' =>$idPlan2,
            'value' => 53587745151,
            'goal' => 0,
            'evidence_balance' => 53587745151,
            'age' => 1,
            ]);
            $idactivitySource16 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity102,
            'source_id' =>$idPlan53,
            'value' => 5312610834.95,
            'goal' => 0,
            'evidence_balance' => 5312610834.95,
            'age' => 1,
            ]);
            $idactivitySource17 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity109,
            'source_id' =>$idPlan44,
            'value' => 1658471092,
            'goal' => 0,
            'evidence_balance' => 1658471092,
            'age' => 1,
            ]);
            $idactivitySource18 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity116,
            'source_id' =>$idPlan44,
            'value' => 1895496355.95,
            'goal' => 0,
            'evidence_balance' => 1895496355.95,
            'age' => 1,
            ]);
            $idactivitySource19 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity119,
            'source_id' =>$idPlan41,
            'value' => 4360021114.95,
            'goal' => 0,
            'evidence_balance' => 4360021114.95,
            'age' => 1,
            ]);
            $idactivitySource20 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity120,
            'source_id' =>$idPlan40,
            'value' => 1500000000,
            'goal' => 0,
            'evidence_balance' => 1500000000,
            'age' => 1,
            ]);
            $idactivitySource21 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity129,
            'source_id' =>$idPlan40,
            'value' => 61208240932.95,
            'goal' => 0,
            'evidence_balance' => 61208240932.95,
            'age' => 1,
            ]);
            $idactivitySource22 = DB::getPdo()->lastInsertId();
            
            
            
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity84,
              'source_id' =>$idPlan2,
              'value' => 2499051849,
              'goal' => 0,
              'evidence_balance' => 2499051849,
              'age' => 1,
              ]);
              $idactivitySource23 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity90,
              'source_id' =>$idPlan48,
              'value' => 17812809000,
              'goal' => 0,
              'evidence_balance' => 17812809000,
              'age' => 1,
              ]);
              $idactivitySource24 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity102,
              'source_id' =>$idPlan44,
              'value' => 14570544259.05,
              'goal' => 0,
              'evidence_balance' => 14570544259.05,
              'age' => 1,
              ]);
              $idactivitySource25 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity116,
              'source_id' =>$idPlan41,
              'value' => 5893265604.05,
              'goal' => 0,
              'evidence_balance' => 5893265604.05,
              'age' => 1,
              ]);
              $idactivitySource27 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity119,
              'source_id' =>$idPlan40,
              'value' => 15431373181.05,
              'goal' => 0,
              'evidence_balance' => 15431373181.05,
              'age' => 1,
              ]);
              $idactivitySource28 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity129,
              'source_id' =>$idPlan8,
              'value' => 1932400000,
              'goal' => 0,
              'evidence_balance' => 1932400000,
              'age' => 1,
              ]);
              $idactivitySource29 = DB::getPdo()->lastInsertId();
              
              
              
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity90,
                'source_id' =>$idPlan53,
                'value' => 5114232464,
                'goal' => 0,
                'evidence_balance' => 5114232464,
                'age' => 1,
                ]);
                $idactivitySource30 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity129,
                'source_id' =>$idPlan9,
                'value' => 4793562200,
                'goal' => 0,
                'evidence_balance' => 4793562200,
                'age' => 1,
                ]);
                $idactivitySource31 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan10,
                  'value' => 964337500,
                  'goal' => 0,
                  'evidence_balance' => 964337500,
                  'age' => 1,
                  ]);
                  $idactivitySource32 = DB::getPdo()->lastInsertId();
                  
                  
                    DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan11,
                  'value' => 623616000,
                  'goal' => 0,
                  'evidence_balance' => 623616000,
                  'age' => 1,
                  ]);
                  $idactivitySource33 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan12,
                  'value' => 6745900,
                  'goal' => 0,
                  'evidence_balance' => 6745900,
                  'age' => 1,
                  ]);
                  $idactivitySource34 = DB::getPdo()->lastInsertId();
                  
                  
                    DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan13,
                  'value' => 413492800,
                  'goal' => 0,
                  'evidence_balance' => 413492800,
                  'age' => 1,
                  ]);
                  $idactivitySource35 = DB::getPdo()->lastInsertId();
                  
                  
                    DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan14,
                  'value' => 525354200,
                  'goal' => 0,
                  'evidence_balance' => 525354200,
                  'age' => 1,
                  ]);
                  $idactivitySource36 = DB::getPdo()->lastInsertId();
                  
                  
                    DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan15,
                  'value' => 3570898324,
                  'goal' => 0,
                  'evidence_balance' => 3570898324,
                  'age' => 1,
                  ]);
                  $idactivitySource37 = DB::getPdo()->lastInsertId();
                  
                  
                    DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan16,
                  'value' => 4337415810,
                  'goal' => 0,
                  'evidence_balance' => 4337415810,
                  'age' => 1,
                  ]);
                  $idactivitySource38 = DB::getPdo()->lastInsertId();
                  
                  
                    DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan17,
                  'value' => 1422900000,
                  'goal' => 0,
                  'evidence_balance' => 1422900000,
                  'age' => 1,
                  ]);
                  $idactivitySource39 = DB::getPdo()->lastInsertId();
                  
                  
                    DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan21,
                  'value' => 2531000000,
                  'goal' => 0,
                  'evidence_balance' => 2531000000,
                  'age' => 1,
                  ]);
                  $idactivitySource40 = DB::getPdo()->lastInsertId();
                  
                  
                    DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan22,
                  'value' => 6511000000,
                  'goal' => 0,
                  'evidence_balance' => 6511000000,
                  'age' => 1,
                  ]);
                  $idactivitySource41 = DB::getPdo()->lastInsertId();
                  
                  
                    DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan25,
                  'value' => 4440000000,
                  'goal' => 0,
                  'evidence_balance' => 4440000000,
                  'age' => 1,
                  ]);
                  $idactivitySource42 = DB::getPdo()->lastInsertId();
                  
                  
                    DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan26,
                  'value' => 74157319.893,
                  'goal' => 0,
                  'evidence_balance' => 74157319.893,
                  'age' => 1,
                  ]);
                  $idactivitySource43 = DB::getPdo()->lastInsertId();
                  
                  
                    DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan29,
                  'value' => 1752754500,
                  'goal' => 0,
                  'evidence_balance' => 1752754500,
                  'age' => 1,
                  ]);
                  $idactivitySource44 = DB::getPdo()->lastInsertId();
                  
                  
                    DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan30,
                  'value' => 105000000,
                  'goal' => 0,
                  'evidence_balance' => 105000000,
                  'age' => 1,
                  ]);
                  $idactivitySource45 = DB::getPdo()->lastInsertId();
                  
                  
                    DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan31,
                  'value' => 255458700,
                  'goal' => 0,
                  'evidence_balance' => 255458700,
                  'age' => 1,
                  ]);
                  $idactivitySource46 = DB::getPdo()->lastInsertId();
                  
                  
                    DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan32,
                  'value' => 806400,
                  'goal' => 0,
                  'evidence_balance' => 806400,
                  'age' => 1,
                  ]);
                  $idactivitySource47 = DB::getPdo()->lastInsertId();
                  
                  
                    DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan33,
                  'value' => 201379500,
                  'goal' => 0,
                  'evidence_balance' => 201379500,
                  'age' => 1,
                  ]);
                  $idactivitySource48 = DB::getPdo()->lastInsertId();
                  
                  
                    DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan34,
                  'value' => 53200000,
                  'goal' => 0,
                  'evidence_balance' => 53200000,
                  'age' => 1,
                  ]);
                  $idactivitySource49 = DB::getPdo()->lastInsertId();
                  
                  
                    DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan35,
                  'value' => 183011243,
                  'goal' => 0,
                  'evidence_balance' => 183011243,
                  'age' => 1,
                  ]);
                  $idactivitySource50 = DB::getPdo()->lastInsertId();
                  
                  
                    DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan36,
                  'value' => 1602559556,
                  'goal' => 0,
                  'evidence_balance' => 1602559556,
                  'age' => 1,
                  ]);
                  $idactivitySource51 = DB::getPdo()->lastInsertId();
                  
                  
                    DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan37,
                  'value' => 484389442,
                  'goal' => 0,
                  'evidence_balance' => 484389442,
                  'age' => 1,
                  ]);
                  $idactivitySource52 = DB::getPdo()->lastInsertId();
                  
                  
                    DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan38,
                  'value' => 1529844085,
                  'goal' => 0,
                  'evidence_balance' => 1529844085,
                  'age' => 1,
                  ]);
                  $idactivitySource53 = DB::getPdo()->lastInsertId();
                  
                  
                    DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan39,
                  'value' => 188355,
                  'goal' => 0,
                  'evidence_balance' => 188355,
                  'age' => 1,
                  ]);
                  $idactivitySource54 = DB::getPdo()->lastInsertId();
                  
                  
                    DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan42,
                  'value' => 50952385,
                  'goal' => 0,
                  'evidence_balance' => 50952385,
                  'age' => 1,
                  ]);
                  $idactivitySource55 = DB::getPdo()->lastInsertId();
                  
                  
                    DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan43,
                  'value' => 415520792,
                  'goal' => 0,
                  'evidence_balance' => 415520792,
                  'age' => 1,
                  ]);
                  $idactivitySource56 = DB::getPdo()->lastInsertId();
                  
                  
                    DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan45,
                  'value' => 199543813,
                  'goal' => 0,
                  'evidence_balance' => 199543813,
                  'age' => 1,
                  ]);
                  $idactivitySource57 = DB::getPdo()->lastInsertId();
                  
                  
                    DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan46,
                  'value' => 183320985000,
                  'goal' => 0,
                  'evidence_balance' => 183320985000,
                  'age' => 1,
                  ]);
                  $idactivitySource58 = DB::getPdo()->lastInsertId();
                  
                  
                    DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan49,
                  'value' => 2254214000,
                  'goal' => 0,
                  'evidence_balance' => 2254214000,
                  'age' => 1,
                  ]);
                  $idactivitySource59 = DB::getPdo()->lastInsertId();
                  
                  
                    DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan50,
                  'value' => 4500000000,
                  'goal' => 0,
                  'evidence_balance' => 4500000000,
                  'age' => 1,
                  ]);
                  $idactivitySource60 = DB::getPdo()->lastInsertId();
                  
                  
                    DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan51,
                  'value' => 1550000000,
                  'goal' => 0,
                  'evidence_balance' => 1550000000,
                  'age' => 1,
                  ]);
                  $idactivitySource61 = DB::getPdo()->lastInsertId();
                  
                  
                    DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan52,
                  'value' => 457132216845,
                  'goal' => 0,
                  'evidence_balance' => 457132216845,
                  'age' => 1,
                  ]);
                  $idactivitySource62 = DB::getPdo()->lastInsertId();
                  
                  
                    DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity129,
                  'source_id' =>$idPlan56,
                  'value' => 3000000000,
                  'goal' => 0,
                  'evidence_balance' => 3000000000,
                  'age' => 1,
                  ]);
                  $idactivitySource63 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia1,
                    'activity_source_id' =>$idactivitySource1,
                    'value' => 2267069054,
                    ]);
                    $idevidenceFinancial1 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia8,
                    'activity_source_id' =>$idactivitySource2,
                    'value' => 9248106868,
                    ]);
                    $idevidenceFinancial2 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia9,
                    'activity_source_id' =>$idactivitySource3,
                    'value' => 70296350,
                    ]);
                    $idevidenceFinancial3 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia26,
                    'activity_source_id' =>$idactivitySource4,
                    'value' => 34789995544,
                    ]);
                    $idevidenceFinancial4 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia29,
                    'activity_source_id' =>$idactivitySource5,
                    'value' => 1922525118,
                    ]);
                    $idevidenceFinancial5 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia37,
                    'activity_source_id' =>$idactivitySource6,
                    'value' => 7176836869,
                    ]);
                    $idevidenceFinancial6 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia47,
                    'activity_source_id' =>$idactivitySource7,
                    'value' => 9625231058,
                    ]);
                    $idevidenceFinancial7 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia48,
                    'activity_source_id' =>$idactivitySource8,
                    'value' => 525945197,
                    ]);
                    $idevidenceFinancial8 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia54,
                    'activity_source_id' =>$idactivitySource9,
                    'value' => 6530418005,
                    ]);
                    $idevidenceFinancial9 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia58,
                    'activity_source_id' =>$idactivitySource10,
                    'value' => 4108289855,
                    ]);
                    $idevidenceFinancial10 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia68,
                    'activity_source_id' =>$idactivitySource12,
                    'value' => 4937670095,
                    ]);
                    $idevidenceFinancial12 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia73,
                    'activity_source_id' =>$idactivitySource13,
                    'value' => 3379593479,
                    ]);
                    $idevidenceFinancial13 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia79,
                    'activity_source_id' =>$idactivitySource14,
                    'value' => 3222861871,
                    ]);
                    $idevidenceFinancial14 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia83,
                    'activity_source_id' =>$idactivitySource15,
                    'value' => 67921207391,
                    ]);
                    $idevidenceFinancial15 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia89,
                    'activity_source_id' =>$idactivitySource16,
                    'value' => 53587745151,
                    ]);
                    $idevidenceFinancial16 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia98,
                    'activity_source_id' =>$idactivitySource17,
                    'value' => 5312610834.95,
                    ]);
                    $idevidenceFinancial17 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia104,
                    'activity_source_id' =>$idactivitySource18,
                    'value' => 1496202583,
                    ]);
                    $idevidenceFinancial18 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia111,
                    'activity_source_id' =>$idactivitySource19,
                    'value' => 1895496355.95,
                    ]);
                    $idevidenceFinancial19 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia114,
                    'activity_source_id' =>$idactivitySource20,
                    'value' => 4360021114.95,
                    ]);
                    $idevidenceFinancial20 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia115,
                    'activity_source_id' =>$idactivitySource21,
                    'value' => 1477146231,
                    ]);
                    $idevidenceFinancial21 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia123,
                    'activity_source_id' =>$idactivitySource22,
                    'value' => 61208240932.95,
                    ]);
                    $idevidenceFinancial22 = DB::getPdo()->lastInsertId();
                    
                    
                    
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia83,
                      'activity_source_id' =>$idactivitySource23,
                      'value' => 702000921,
                      ]);
                      $idevidenceFinancial23 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia89,
                      'activity_source_id' =>$idactivitySource24,
                      'value' => 13067829898,
                      ]);
                      $idevidenceFinancial24 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia98,
                      'activity_source_id' =>$idactivitySource25,
                      'value' => 9745502498.05,
                      ]);
                      $idevidenceFinancial25 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia111,
                      'activity_source_id' =>$idactivitySource27,
                      'value' => 5772123453.05,
                      ]);
                      $idevidenceFinancial27 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia114,
                      'activity_source_id' =>$idactivitySource28,
                      'value' => 15120429968.05,
                      ]);
                      $idevidenceFinancial28 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia123,
                      'activity_source_id' =>$idactivitySource29,
                      'value' => 1932400000,
                      ]);
                      $idevidenceFinancial29 = DB::getPdo()->lastInsertId();
                      
                      
                      
                             
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource31,
                        'value' => 4793562200,
                        ]);
                        $idevidenceFinancial31 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource32,
                        'value' => 964337500,
                        ]);
                        $idevidenceFinancial32 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource33,
                        'value' => 623616000,
                        ]);
                        $idevidenceFinancial33 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource34,
                        'value' => 6745900,
                        ]);
                        $idevidenceFinancial34 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource35,
                        'value' => 413492800,
                        ]);
                        $idevidenceFinancial35 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource36,
                        'value' => 525354200,
                        ]);
                        $idevidenceFinancial36 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource37,
                        'value' => 3570898324,
                        ]);
                        $idevidenceFinancial37 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource38,
                        'value' => 4337415810,
                        ]);
                        $idevidenceFinancial38 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource39,
                        'value' => 413492800,
                        ]);
                        $idevidenceFinancial244 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource40,
                        'value' => 2531000000,
                        ]);
                        $idevidenceFinancial40 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource41,
                        'value' => 6511000000,
                        ]);
                        $idevidenceFinancial41 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource42,
                        'value' => 4440000000,
                        ]);
                        $idevidenceFinancial42 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource43,
                        'value' => 74157319.893,
                        ]);
                        $idevidenceFinancial43 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource44,
                        'value' => 1752754500,
                        ]);
                        $idevidenceFinancial44 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource45,
                        'value' => 105000000,
                        ]);
                        $idevidenceFinancial45 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource46,
                        'value' => 255458700,
                        ]);
                        $idevidenceFinancial46 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource47,
                        'value' => 806400,
                        ]);
                        $idevidenceFinancial47 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource48,
                        'value' => 201379500,
                        ]);
                        $idevidenceFinancial48 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource49,
                        'value' => 53200000,
                        ]);
                        $idevidenceFinancial49 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource50,
                        'value' => 183011243,
                        ]);
                        $idevidenceFinancial50 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource51,
                        'value' => 1602559556,
                        ]);
                        $idevidenceFinancial51 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource52,
                        'value' => 484389442,
                        ]);
                        $idevidenceFinancial52 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource53,
                        'value' => 1529844085,
                        ]);
                        $idevidenceFinancial53 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource54,
                        'value' => 188355,
                        ]);
                        $idevidenceFinancial54 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource55,
                        'value' => 50952385,
                        ]);
                        $idevidenceFinancial55 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource56,
                        'value' => 415520792,
                        ]);
                        $idevidenceFinancial56 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource57,
                        'value' => 199543813,
                        ]);
                        $idevidenceFinancial57 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource58,
                        'value' => 183320985000,
                        ]);
                        $idevidenceFinancial58 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource59,
                        'value' => 2254214000,
                        ]);
                        $idevidenceFinancial59 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource60,
                        'value' => 4500000000,
                        ]);
                        $idevidenceFinancial60 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource61,
                        'value' => 1550000000,
                        ]);
                        $idevidenceFinancial61 = DB::getPdo()->lastInsertId();
                        
                        
                          DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia123,
                        'activity_source_id' =>$idactivitySource62,
                        'value' => 318297672669.157,
                        ]);
                        $idevidenceFinancial62 = DB::getPdo()->lastInsertId();
                        
                        
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity1,
                          'source_id' =>$idPlan108,
                          'value' => 1678128964,
                          'goal' => 0,
                          'evidence_balance' => 1678128964,
                          'age' => 2,
                          ]);
                          $idactivitySource64 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity8,
                          'source_id' =>$idPlan108,
                          'value' => 12791837170,
                          'goal' => 0,
                          'evidence_balance' => 12791837170,
                          'age' => 2,
                          ]);
                          $idactivitySource65 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity9,
                          'source_id' =>$idPlan108,
                          'value' => 100000000,
                          'goal' => 0,
                          'evidence_balance' => 100000000,
                          'age' => 2,
                          ]);
                          $idactivitySource66 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity26,
                          'source_id' =>$idPlan108,
                          'value' => 43108512770,
                          'goal' => 0,
                          'evidence_balance' => 43108512770,
                          'age' => 2,
                          ]);
                          $idactivitySource67 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity29,
                          'source_id' =>$idPlan108,
                          'value' => 3821966749,
                          'goal' => 0,
                          'evidence_balance' => 3821966749,
                          'age' => 2,
                          ]);
                          $idactivitySource68 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity37,
                          'source_id' =>$idPlan108,
                          'value' => 10387690183,
                          'goal' => 0,
                          'evidence_balance' => 10387690183,
                          'age' => 2,
                          ]);
                          $idactivitySource69 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity47,
                          'source_id' =>$idPlan108,
                          'value' => 21168247543,
                          'goal' => 0,
                          'evidence_balance' => 21168247543,
                          'age' => 2,
                          ]);
                          $idactivitySource70 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity48,
                          'source_id' =>$idPlan108,
                          'value' => 1107894651,
                          'goal' => 0,
                          'evidence_balance' => 1107894651,
                          'age' => 2,
                          ]);
                          $idactivitySource71 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity54,
                          'source_id' =>$idPlan108,
                          'value' => 14072198506,
                          'goal' => 0,
                          'evidence_balance' => 14072198506,
                          'age' => 2,
                          ]);
                          $idactivitySource72 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity58,
                          'source_id' =>$idPlan108,
                          'value' => 1745419581,
                          'goal' => 0,
                          'evidence_balance' => 1745419581,
                          'age' => 2,
                          ]);
                          $idactivitySource73 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity68,
                          'source_id' =>$idPlan108,
                          'value' => 4539530760,
                          'goal' => 0,
                          'evidence_balance' => 4539530760,
                          'age' => 2,
                          ]);
                          $idactivitySource75 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity73,
                          'source_id' =>$idPlan108,
                          'value' => 2440734368,
                          'goal' => 0,
                          'evidence_balance' => 2440734368,
                          'age' => 2,
                          ]);
                          $idactivitySource76 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity80,
                          'source_id' =>$idPlan108,
                          'value' => 10475840763,
                          'goal' => 0,
                          'evidence_balance' => 10475840763,
                          'age' => 2,
                          ]);
                          $idactivitySource77 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity84,
                          'source_id' =>$idPlan108,
                          'value' => 61447825251,
                          'goal' => 0,
                          'evidence_balance' => 61447825251,
                          'age' => 2,
                          ]);
                          $idactivitySource78 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity90,
                          'source_id' =>$idPlan108,
                          'value' => 106450873321,
                          'goal' => 0,
                          'evidence_balance' => 106450873321,
                          'age' => 2,
                          ]);
                          $idactivitySource79 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity102,
                          'source_id' =>$idPlan108,
                          'value' => 13852138193,
                          'goal' => 0,
                          'evidence_balance' => 13852138193,
                          'age' => 2,
                          ]);
                          $idactivitySource80 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity109,
                          'source_id' =>$idPlan110,
                          'value' => 3214890431,
                          'goal' => 0,
                          'evidence_balance' => 3214890431,
                          'age' => 2,
                          ]);
                          $idactivitySource81 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity116,
                          'source_id' =>$idPlan110,
                          'value' => 7402308543,
                          'goal' => 0,
                          'evidence_balance' => 7402308543,
                          'age' => 2,
                          ]);
                          $idactivitySource82 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity119,
                          'source_id' =>$idPlan110,
                          'value' => 16148432907,
                          'goal' => 0,
                          'evidence_balance' => 16148432907,
                          'age' => 2,
                          ]);
                          $idactivitySource83 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity120,
                          'source_id' =>$idPlan110,
                          'value' => 1337848214,
                          'goal' => 0,
                          'evidence_balance' => 1337848214,
                          'age' => 2,
                          ]);
                          $idactivitySource84 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity129,
                          'source_id' =>$idPlan110,
                          'value' => 40306377849,
                          'goal' => 0,
                          'evidence_balance' => 40306377849,
                          'age' => 2,
                          ]);
                          $idactivitySource85 = DB::getPdo()->lastInsertId();
                          
                          
                          
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity102,
                            'source_id' =>$idPlan110,
                            'value' => 8756870230,
                            'goal' => 0,
                            'evidence_balance' => 8756870230,
                            'age' => 2,
                            ]);
                            $idactivitySource86 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity129,
                            'source_id' =>$idPlan57,
                            'value' => 203311500000,
                            'goal' => 0,
                            'evidence_balance' => 203311500000,
                            'age' => 2,
                            ]);
                            $idactivitySource87 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan58,
                              'value' => 64180904500,
                              'goal' => 0,
                              'evidence_balance' => 64180904500,
                              'age' => 2,
                              ]);
                              $idactivitySource88 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan64,
                              'value' => 2655217465,
                              'goal' => 0,
                              'evidence_balance' => 2655217465,
                              'age' => 2,
                              ]);
                              $idactivitySource89 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan65,
                              'value' => 3898233710,
                              'goal' => 0,
                              'evidence_balance' => 3898233710,
                              'age' => 2,
                              ]);
                              $idactivitySource90 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan66,
                              'value' => 467161240,
                              'goal' => 0,
                              'evidence_balance' => 467161240,
                              'age' => 2,
                              ]);
                              $idactivitySource91 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan67,
                              'value' => 469356440,
                              'goal' => 0,
                              'evidence_balance' => 469356440,
                              'age' => 2,
                              ]);
                              $idactivitySource92 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan68,
                              'value' => 7083230,
                              'goal' => 0,
                              'evidence_balance' => 7083230,
                              'age' => 2,
                              ]);
                              $idactivitySource93 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan69,
                              'value' => 471128980,
                              'goal' => 0,
                              'evidence_balance' => 471128980,
                              'age' => 2,
                              ]);
                              $idactivitySource94 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan70,
                              'value' => 3488870000,
                              'goal' => 0,
                              'evidence_balance' => 3488870000,
                              'age' => 2,
                              ]);
                              $idactivitySource95 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan71,
                              'value' => 259981020,
                              'goal' => 0,
                              'evidence_balance' => 259981020,
                              'age' => 2,
                              ]);
                              $idactivitySource96 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan72,
                              'value' => 933032970,
                              'goal' => 0,
                              'evidence_balance' => 933032970,
                              'age' => 2,
                              ]);
                              $idactivitySource97 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan75,
                              'value' => 55620000,
                              'goal' => 0,
                              'evidence_balance' => 55620000,
                              'age' => 2,
                              ]);
                              $idactivitySource98 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan76,
                              'value' => 122486496723,
                              'goal' => 0,
                              'evidence_balance' => 122486496723,
                              'age' => 2,
                              ]);
                              $idactivitySource99 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan78,
                              'value' => 1706290012.0666,
                              'goal' => 0,
                              'evidence_balance' => 1706290012.0666,
                              'age' => 2,
                              ]);
                              $idactivitySource100 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan79,
                              'value' => 4349895210,
                              'goal' => 0,
                              'evidence_balance' => 4349895210,
                              'age' => 2,
                              ]);
                              $idactivitySource101 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan82,
                              'value' => 3905920710,
                              'goal' => 0,
                              'evidence_balance' => 3905920710,
                              'age' => 2,
                              ]);
                              $idactivitySource102 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan84,
                              'value' => 348482073.8,
                              'goal' => 0,
                              'evidence_balance' => 348482073.8,
                              'age' => 2,
                              ]);
                              $idactivitySource103 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan86,
                              'value' => 1433662160,
                              'goal' => 0,
                              'evidence_balance' => 1433662160,
                              'age' => 2,
                              ]);
                              $idactivitySource104 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan87,
                              'value' => 1023297660,
                              'goal' => 0,
                              'evidence_balance' => 1023297660,
                              'age' => 2,
                              ]);
                              $idactivitySource105 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan88,
                              'value' => 143897110,
                              'goal' => 0,
                              'evidence_balance' => 143897110,
                              'age' => 2,
                              ]);
                              $idactivitySource106 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan89,
                              'value' => 909440,
                              'goal' => 0,
                              'evidence_balance' => 909440,
                              'age' => 2,
                              ]);
                              $idactivitySource107 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan90,
                              'value' => 211448510,
                              'goal' => 0,
                              'evidence_balance' => 211448510,
                              'age' => 2,
                              ]);
                              $idactivitySource108 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan91,
                              'value' => 334670000,
                              'goal' => 0,
                              'evidence_balance' => 334670000,
                              'age' => 2,
                              ]);
                              $idactivitySource109 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan92,
                              'value' => 973505793,
                              'goal' => 0,
                              'evidence_balance' => 973505793,
                              'age' => 2,
                              ]);
                              $idactivitySource110 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan93,
                              'value' => 449943589,
                              'goal' => 0,
                              'evidence_balance' => 449943589,
                              'age' => 2,
                              ]);
                              $idactivitySource111 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan94,
                              'value' => 772881966,
                              'goal' => 0,
                              'evidence_balance' => 772881966,
                              'age' => 2,
                              ]);
                              $idactivitySource112 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan112,
                              'value' => 588498390,
                              'goal' => 0,
                              'evidence_balance' => 588498390,
                              'age' => 2,
                              ]);
                              $idactivitySource113 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan96,
                              'value' => 5568248,
                              'goal' => 0,
                              'evidence_balance' => 5568248,
                              'age' => 2,
                              ]);
                              $idactivitySource114 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan97,
                              'value' => 127301562707,
                              'goal' => 0,
                              'evidence_balance' => 127301562707,
                              'age' => 2,
                              ]);
                              $idactivitySource115 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan98,
                              'value' => 7973678975,
                              'goal' => 0,
                              'evidence_balance' => 7973678975,
                              'age' => 2,
                              ]);
                              $idactivitySource116 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan99,
                              'value' => 417347004,
                              'goal' => 0,
                              'evidence_balance' => 417347004,
                              'age' => 2,
                              ]);
                              $idactivitySource117 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan100,
                              'value' => 38434496,
                              'goal' => 0,
                              'evidence_balance' => 38434496,
                              'age' => 2,
                              ]);
                              $idactivitySource118 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan101,
                              'value' => 797849993,
                              'goal' => 0,
                              'evidence_balance' => 797849993,
                              'age' => 2,
                              ]);
                              $idactivitySource119 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan102,
                              'value' => 209792500000,
                              'goal' => 0,
                              'evidence_balance' => 209792500000,
                              'age' => 2,
                              ]);
                              $idactivitySource120 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan103,
                              'value' => 18945000000,
                              'goal' => 0,
                              'evidence_balance' => 18945000000,
                              'age' => 2,
                              ]);
                              $idactivitySource121 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan104,
                              'value' => 23473263200,
                              'goal' => 0,
                              'evidence_balance' => 23473263200,
                              'age' => 2,
                              ]);
                              $idactivitySource122 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan105,
                              'value' => 2893963900,
                              'goal' => 0,
                              'evidence_balance' => 2893963900,
                              'age' => 2,
                              ]);
                              $idactivitySource123 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan106,
                              'value' => 5787927900,
                              'goal' => 0,
                              'evidence_balance' => 5787927900,
                              'age' => 2,
                              ]);
                              $idactivitySource124 = DB::getPdo()->lastInsertId();
                              
                              
                                DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity129,
                              'source_id' =>$idPlan107,
                              'value' => 362000000,
                              'goal' => 0,
                              'evidence_balance' => 362000000,
                              'age' => 2,
                              ]);
                              $idactivitySource125 = DB::getPdo()->lastInsertId();
                              
                              
                              
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia124,
                                'activity_source_id' =>$idactivitySource64,
                                'value' => 1674507806,
                                ]);
                                $idevidenceFinancial64 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia131,
                                'activity_source_id' =>$idactivitySource65,
                                'value' => 11904639374,
                                ]);
                                $idevidenceFinancial65 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia132,
                                'activity_source_id' =>$idactivitySource66,
                                'value' => 54444167,
                                ]);
                                $idevidenceFinancial66 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia149,
                                'activity_source_id' =>$idactivitySource67,
                                'value' => 34035591695,
                                ]);
                                $idevidenceFinancial67 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia152,
                                'activity_source_id' =>$idactivitySource68,
                                'value' => 3780309607,
                                ]);
                                $idevidenceFinancial68 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia160,
                                'activity_source_id' =>$idactivitySource69,
                                'value' => 9506826796,
                                ]);
                                $idevidenceFinancial69 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia170,
                                'activity_source_id' =>$idactivitySource70,
                                'value' => 20279610788,
                                ]);
                                $idevidenceFinancial70 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia171,
                                'activity_source_id' =>$idactivitySource71,
                                'value' => 621495210,
                                ]);
                                $idevidenceFinancial71 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia177,
                                'activity_source_id' =>$idactivitySource72,
                                'value' => 12961015041,
                                ]);
                                $idevidenceFinancial72 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia181,
                                'activity_source_id' =>$idactivitySource73,
                                'value' => 1449209576,
                                ]);
                                $idevidenceFinancial73 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia191,
                                'activity_source_id' =>$idactivitySource75,
                                'value' => 4290731512,
                                ]);
                                $idevidenceFinancial75 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia196,
                                'activity_source_id' =>$idactivitySource76,
                                'value' => 2438373012,
                                ]);
                                $idevidenceFinancial76 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia202,
                                'activity_source_id' =>$idactivitySource77,
                                'value' => 8934150892,
                                ]);
                                $idevidenceFinancial77 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia206,
                                'activity_source_id' =>$idactivitySource78,
                                'value' => 37884700035,
                                ]);
                                $idevidenceFinancial78 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia212,
                                'activity_source_id' =>$idactivitySource79,
                                'value' => 71293823328,
                                ]);
                                $idevidenceFinancial79 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia223,
                                'activity_source_id' =>$idactivitySource80,
                                'value' => 13852138193,
                                ]);
                                $idevidenceFinancial80 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia230,
                                'activity_source_id' =>$idactivitySource81,
                                'value' => 3106751934,
                                ]);
                                $idevidenceFinancial81 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia236,
                                'activity_source_id' =>$idactivitySource82,
                                'value' => 7217153014,
                                ]);
                                $idevidenceFinancial82 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia239,
                                'activity_source_id' =>$idactivitySource83,
                                'value' => 16010406120,
                                ]);
                                $idevidenceFinancial83 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia240,
                                'activity_source_id' =>$idactivitySource84,
                                'value' => 951538549,
                                ]);
                                $idevidenceFinancial84 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia248,
                                'activity_source_id' =>$idactivitySource85,
                                'value' => 40306377849,
                                ]);
                                $idevidenceFinancial85 = DB::getPdo()->lastInsertId();
                                
                                
                                
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia223,
                                  'activity_source_id' =>$idactivitySource86,
                                  'value' => 5324426735,
                                  ]);
                                  $idevidenceFinancial86 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia248,
                                  'activity_source_id' =>$idactivitySource87,
                                  'value' => 203311500000,
                                  ]);
                                  $idevidenceFinancial87 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia248,
                                    'activity_source_id' =>$idactivitySource88,
                                    'value' => 64180904500,
                                    ]);
                                    $idevidenceFinancial88 = DB::getPdo()->lastInsertId();
                                    
                                    
                                      DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia248,
                                    'activity_source_id' =>$idactivitySource89,
                                    'value' => 2655217465,
                                    ]);
                                    $idevidenceFinancial89 = DB::getPdo()->lastInsertId();
                                    
                                    
                                      DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia248,
                                    'activity_source_id' =>$idactivitySource90,
                                    'value' => 3898233710,
                                    ]);
                                    $idevidenceFinancial90 = DB::getPdo()->lastInsertId();
                                    
                                    
                                      DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia248,
                                    'activity_source_id' =>$idactivitySource91,
                                    'value' => 467161240,
                                    ]);
                                    $idevidenceFinancial91 = DB::getPdo()->lastInsertId();
                                    
                                    
                                      DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia248,
                                    'activity_source_id' =>$idactivitySource92,
                                    'value' => 469356440,
                                    ]);
                                    $idevidenceFinancial92 = DB::getPdo()->lastInsertId();
                                    
                                    
                                      DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia248,
                                    'activity_source_id' =>$idactivitySource93,
                                    'value' => 7083230,
                                    ]);
                                    $idevidenceFinancial93 = DB::getPdo()->lastInsertId();
                                    
                                    
                                      DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia248,
                                    'activity_source_id' =>$idactivitySource94,
                                    'value' => 471128980,
                                    ]);
                                    $idevidenceFinancial94 = DB::getPdo()->lastInsertId();
                                    
                                    
                                      DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia248,
                                    'activity_source_id' =>$idactivitySource95,
                                    'value' => 3488870000,
                                    ]);
                                    $idevidenceFinancial95 = DB::getPdo()->lastInsertId();
                                    
                                    
                                      DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia248,
                                    'activity_source_id' =>$idactivitySource96,
                                    'value' => 259981020,
                                    ]);
                                    $idevidenceFinancial96 = DB::getPdo()->lastInsertId();
                                    
                                    
                                      DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia248,
                                    'activity_source_id' =>$idactivitySource97,
                                    'value' => 933032970,
                                    ]);
                                    $idevidenceFinancial97 = DB::getPdo()->lastInsertId();
                                    
                                    
                                      DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia248,
                                    'activity_source_id' =>$idactivitySource98,
                                    'value' => 55620000,
                                    ]);
                                    $idevidenceFinancial98 = DB::getPdo()->lastInsertId();
                                    
                                    
                                      DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia248,
                                    'activity_source_id' =>$idactivitySource99,
                                    'value' => 122486496723,
                                    ]);
                                    $idevidenceFinancial99 = DB::getPdo()->lastInsertId();
                                    
                                    
                                      DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia248,
                                    'activity_source_id' =>$idactivitySource100,
                                    'value' => 1706290012.0666,
                                    ]);
                                    $idevidenceFinancial100 = DB::getPdo()->lastInsertId();
                                    
                                    
                                      DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia248,
                                    'activity_source_id' =>$idactivitySource101,
                                    'value' => 4349895210,
                                    ]);
                                    $idevidenceFinancial101 = DB::getPdo()->lastInsertId();
                                    
                                    
                                      DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia248,
                                    'activity_source_id' =>$idactivitySource102,
                                    'value' => 3905920710,
                                    ]);
                                    $idevidenceFinancial102 = DB::getPdo()->lastInsertId();
                                    
                                    
                                      DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia248,
                                    'activity_source_id' =>$idactivitySource103,
                                    'value' => 348482073.8,
                                    ]);
                                    $idevidenceFinancial103 = DB::getPdo()->lastInsertId();
                                    
                                    
                                      DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia248,
                                    'activity_source_id' =>$idactivitySource104,
                                    'value' => 1433662160,
                                    ]);
                                    $idevidenceFinancial104 = DB::getPdo()->lastInsertId();
                                    
                                    
                                      DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia248,
                                    'activity_source_id' =>$idactivitySource105,
                                    'value' => 1023297660,
                                    ]);
                                    $idevidenceFinancial105 = DB::getPdo()->lastInsertId();
                                    
                                    
                                      DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia248,
                                    'activity_source_id' =>$idactivitySource106,
                                    'value' => 143897110,
                                    ]);
                                    $idevidenceFinancial106 = DB::getPdo()->lastInsertId();
                                    
                                    
                                      DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia248,
                                    'activity_source_id' =>$idactivitySource107,
                                    'value' => 909440,
                                    ]);
                                    $idevidenceFinancial107 = DB::getPdo()->lastInsertId();
                                    
                                    
                                      DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia248,
                                    'activity_source_id' =>$idactivitySource108,
                                    'value' => 211448510,
                                    ]);
                                    $idevidenceFinancial108 = DB::getPdo()->lastInsertId();
                                    
                                    
                                      DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia248,
                                    'activity_source_id' =>$idactivitySource109,
                                    'value' => 334670000,
                                    ]);
                                    $idevidenceFinancial109 = DB::getPdo()->lastInsertId();
                                    
                                    
                                      DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia248,
                                    'activity_source_id' =>$idactivitySource110,
                                    'value' => 973505793,
                                    ]);
                                    $idevidenceFinancial110 = DB::getPdo()->lastInsertId();
                                    
                                    
                                      DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia248,
                                    'activity_source_id' =>$idactivitySource111,
                                    'value' => 449943589,
                                    ]);
                                    $idevidenceFinancial111 = DB::getPdo()->lastInsertId();
                                    
                                    
                                      DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia248,
                                    'activity_source_id' =>$idactivitySource112,
                                    'value' => 772881966,
                                    ]);
                                    $idevidenceFinancial112 = DB::getPdo()->lastInsertId();
                                    
                                    
                                      DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia248,
                                    'activity_source_id' =>$idactivitySource113,
                                    'value' => 588498390,
                                    ]);
                                    $idevidenceFinancial113 = DB::getPdo()->lastInsertId();
                                    
                                    
                                      DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia248,
                                    'activity_source_id' =>$idactivitySource114,
                                    'value' => 5568248,
                                    ]);
                                    $idevidenceFinancial114 = DB::getPdo()->lastInsertId();
                                    
                                    
                                      DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia248,
                                    'activity_source_id' =>$idactivitySource115,
                                    'value' => 37760192766.1334,
                                    ]);
                                    $idevidenceFinancial115 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity1,
                                      'source_id' =>$idPlan112,
                                      'value' => 1206963946,
                                      'goal' => 0,
                                      'evidence_balance' => 1206963946,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource126 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity8,
                                      'source_id' =>$idPlan112,
                                      'value' => 11816987853,
                                      'goal' => 0,
                                      'evidence_balance' => 11816987853,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource127 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity9,
                                      'source_id' =>$idPlan112,
                                      'value' => 180117000,
                                      'goal' => 0,
                                      'evidence_balance' => 180117000,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource128 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity26,
                                      'source_id' =>$idPlan112,
                                      'value' => 51307544230,
                                      'goal' => 0,
                                      'evidence_balance' => 51307544230,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource129 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity29,
                                      'source_id' =>$idPlan112,
                                      'value' => 3172503373,
                                      'goal' => 0,
                                      'evidence_balance' => 3172503373,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource130 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity37,
                                      'source_id' =>$idPlan112,
                                      'value' => 12481945672,
                                      'goal' => 0,
                                      'evidence_balance' => 12481945672,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource131 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity47,
                                      'source_id' =>$idPlan112,
                                      'value' => 26831742701,
                                      'goal' => 0,
                                      'evidence_balance' => 26831742701,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource132 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity48,
                                      'source_id' =>$idPlan112,
                                      'value' => 3143700100,
                                      'goal' => 0,
                                      'evidence_balance' => 3143700100,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource133 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity54,
                                      'source_id' =>$idPlan112,
                                      'value' => 16925503133,
                                      'goal' => 0,
                                      'evidence_balance' => 16925503133,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource134 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity58,
                                      'source_id' =>$idPlan112,
                                      'value' => 69896706575,
                                      'goal' => 0,
                                      'evidence_balance' => 69896706575,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource135 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity63,
                                      'source_id' =>$idPlan112,
                                      'value' => 3615561154,
                                      'goal' => 0,
                                      'evidence_balance' => 3615561154,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource136 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity68,
                                      'source_id' =>$idPlan112,
                                      'value' => 6008279958,
                                      'goal' => 0,
                                      'evidence_balance' => 6008279958,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource137 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity73,
                                      'source_id' =>$idPlan112,
                                      'value' => 3741987772,
                                      'goal' => 0,
                                      'evidence_balance' => 3741987772,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource138 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity80,
                                      'source_id' =>$idPlan112,
                                      'value' => 8240578571,
                                      'goal' => 0,
                                      'evidence_balance' => 8240578571,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource139 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity84,
                                      'source_id' =>$idPlan112,
                                      'value' => 1023877962,
                                      'goal' => 0,
                                      'evidence_balance' => 1023877962,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource140 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity90,
                                      'source_id' =>$idPlan170,
                                      'value' => 82045793223,
                                      'goal' => 0,
                                      'evidence_balance' => 82045793223,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource141 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity102,
                                      'source_id' =>$idPlan170,
                                      'value' => 18808573998,
                                      'goal' => 0,
                                      'evidence_balance' => 18808573998,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource142 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity109,
                                      'source_id' =>$idPlan170,
                                      'value' => 2553979204,
                                      'goal' => 0,
                                      'evidence_balance' => 2553979204,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource143 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity116,
                                      'source_id' =>$idPlan170,
                                      'value' => 3558354919,
                                      'goal' => 0,
                                      'evidence_balance' => 3558354919,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource144 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity119,
                                      'source_id' =>$idPlan170,
                                      'value' => 10615585464,
                                      'goal' => 0,
                                      'evidence_balance' => 10615585464,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource145 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity120,
                                      'source_id' =>$idPlan170,
                                      'value' => 1286417500,
                                      'goal' => 0,
                                      'evidence_balance' => 1286417500,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource146 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity129,
                                      'source_id' =>$idPlan170,
                                      'value' => 212268685205,
                                      'goal' => 0,
                                      'evidence_balance' => 212268685205,
                                      'age' => 3,
                                      ]);
                                      $idactivitySource147 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity84,
                                        'source_id' =>$idPlan170,
                                        'value' => 82033964293,
                                        'goal' => 0,
                                        'evidence_balance' => 82033964293,
                                        'age' => 4,
                                        ]);
                                        $idactivitySource148 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity129,
                                        'source_id' =>$idPlan113,
                                        'value' => 73760353500,
                                        'goal' => 0,
                                        'evidence_balance' => 73760353500,
                                        'age' => 4,
                                        ]);
                                        $idactivitySource149 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan119,
                                          'value' => 3141588494,
                                          'goal' => 0,
                                          'evidence_balance' => 3141588494,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource150 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan120,
                                          'value' => 4235147210,
                                          'goal' => 0,
                                          'evidence_balance' => 4235147210,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource151 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan121,
                                          'value' => 1264200000,
                                          'goal' => 0,
                                          'evidence_balance' => 1264200000,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource152 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan122,
                                          'value' => 156100000,
                                          'goal' => 0,
                                          'evidence_balance' => 156100000,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource153 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan123,
                                          'value' => 7340900,
                                          'goal' => 0,
                                          'evidence_balance' => 7340900,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource154 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan124,
                                          'value' => 508099340,
                                          'goal' => 0,
                                          'evidence_balance' => 508099340,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource155 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan125,
                                          'value' => 694680700,
                                          'goal' => 0,
                                          'evidence_balance' => 694680700,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource156 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan127,
                                          'value' => 236000000,
                                          'goal' => 0,
                                          'evidence_balance' => 236000000,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource157 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan128,
                                          'value' => 537282540,
                                          'goal' => 0,
                                          'evidence_balance' => 537282540,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource158 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan129,
                                          'value' => 1713150000,
                                          'goal' => 0,
                                          'evidence_balance' => 1713150000,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource159 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan132,
                                          'value' => 18322560,
                                          'goal' => 0,
                                          'evidence_balance' => 18322560,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource160 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan134,
                                          'value' => 315000000000,
                                          'goal' => 0,
                                          'evidence_balance' => 315000000000,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource161 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan136,
                                          'value' => 1318246391,
                                          'goal' => 0,
                                          'evidence_balance' => 1318246391,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource162 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan137,
                                          'value' => 3959100000,
                                          'goal' => 0,
                                          'evidence_balance' => 3959100000,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource163 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan140,
                                          'value' => 3959100000,
                                          'goal' => 0,
                                          'evidence_balance' => 3959100000,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource164 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan142,
                                          'value' => 1660344400,
                                          'goal' => 0,
                                          'evidence_balance' => 1660344400,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource165 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan144,
                                          'value' => 1300797190,
                                          'goal' => 0,
                                          'evidence_balance' => 1300797190,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource166 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan145,
                                          'value' => 93800000,
                                          'goal' => 0,
                                          'evidence_balance' => 93800000,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource167 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan146,
                                          'value' => 14000000,
                                          'goal' => 0,
                                          'evidence_balance' => 14000000,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource168 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan147,
                                          'value' => 700000,
                                          'goal' => 0,
                                          'evidence_balance' => 700000,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource169 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan148,
                                          'value' => 121992920,
                                          'goal' => 0,
                                          'evidence_balance' => 121992920,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource170 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan149,
                                          'value' => 62627950,
                                          'goal' => 0,
                                          'evidence_balance' => 62627950,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource171 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan150,
                                          'value' => 747688057,
                                          'goal' => 0,
                                          'evidence_balance' => 747688057,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource172 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan151,
                                          'value' => 2593523688,
                                          'goal' => 0,
                                          'evidence_balance' => 2593523688,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource173 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan152,
                                          'value' => 2002817208,
                                          'goal' => 0,
                                          'evidence_balance' => 2002817208,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource174 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan153,
                                          'value' => 4569370513,
                                          'goal' => 0,
                                          'evidence_balance' => 4569370513,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource175 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan154,
                                          'value' => 4112158,
                                          'goal' => 0,
                                          'evidence_balance' => 4112158,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource176 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan155,
                                          'value' => 157294826133,
                                          'goal' => 0,
                                          'evidence_balance' => 157294826133,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource177 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan156,
                                          'value' => 14441751081,
                                          'goal' => 0,
                                          'evidence_balance' => 14441751081,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource178 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan157,
                                          'value' => 557218051,
                                          'goal' => 0,
                                          'evidence_balance' => 557218051,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource179 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan159,
                                          'value' => 882663882,
                                          'goal' => 0,
                                          'evidence_balance' => 882663882,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource180 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan160,
                                          'value' => 1812451170.7,
                                          'goal' => 0,
                                          'evidence_balance' => 1812451170.7,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource181 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan161,
                                          'value' => 3570898324,
                                          'goal' => 0,
                                          'evidence_balance' => 3570898324,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource182 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan163,
                                          'value' => 226094000000,
                                          'goal' => 0,
                                          'evidence_balance' => 226094000000,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource183 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan164,
                                          'value' => 19446000000,
                                          'goal' => 0,
                                          'evidence_balance' => 19446000000,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource184 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan165,
                                          'value' => 14596875600,
                                          'goal' => 0,
                                          'evidence_balance' => 14596875600,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource185 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan166,
                                          'value' => 1799614800,
                                          'goal' => 0,
                                          'evidence_balance' => 1799614800,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource186 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan167,
                                          'value' => 3599229600,
                                          'goal' => 0,
                                          'evidence_balance' => 3599229600,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource187 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan168,
                                          'value' => 1475504978,
                                          'goal' => 0,
                                          'evidence_balance' => 1475504978,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource188 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan169,
                                          'value' => 345054321,
                                          'goal' => 0,
                                          'evidence_balance' => 345054321,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource189 = DB::getPdo()->lastInsertId();
                                          
                                          
                                            DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity129,
                                          'source_id' =>$idPlan172,
                                          'value' => 25969240099.46,
                                          'goal' => 0,
                                          'evidence_balance' => 25969240099.46,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource190 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia249,
                                            'activity_source_id' =>$idactivitySource126,
                                            'value' => 866763507,
                                            ]);
                                            $idevidenceFinancial126 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia256,
                                            'activity_source_id' =>$idactivitySource127,
                                            'value' => 9425518222,
                                            ]);
                                            $idevidenceFinancial127 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia257,
                                            'activity_source_id' =>$idactivitySource128,
                                            'value' => 121612419,
                                            ]);
                                            $idevidenceFinancial128 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia274,
                                            'activity_source_id' =>$idactivitySource129,
                                            'value' => 24572658809,
                                            ]);
                                            $idevidenceFinancial129 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia277,
                                            'activity_source_id' =>$idactivitySource130,
                                            'value' => 2483074772,
                                            ]);
                                            $idevidenceFinancial130 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia285,
                                            'activity_source_id' =>$idactivitySource131,
                                            'value' => 10738113142,
                                            ]);
                                            $idevidenceFinancial131 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia295,
                                            'activity_source_id' =>$idactivitySource132,
                                            'value' => 24382298324,
                                            ]);
                                            $idevidenceFinancial132 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia296,
                                            'activity_source_id' =>$idactivitySource133,
                                            'value' => 688099904,
                                            ]);
                                            $idevidenceFinancial133 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia302,
                                            'activity_source_id' =>$idactivitySource134,
                                            'value' => 14519754150,
                                            ]);
                                            $idevidenceFinancial134 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia306,
                                            'activity_source_id' =>$idactivitySource135,
                                            'value' => 68727433332,
                                            ]);
                                            $idevidenceFinancial135 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia311,
                                            'activity_source_id' =>$idactivitySource136,
                                            'value' => 3600967096,
                                            ]);
                                            $idevidenceFinancial136 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia315,
                                            'activity_source_id' =>$idactivitySource137,
                                            'value' => 5692454870,
                                            ]);
                                            $idevidenceFinancial137 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia320,
                                            'activity_source_id' =>$idactivitySource138,
                                            'value' => 2594181163,
                                            ]);
                                            $idevidenceFinancial138 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia326,
                                            'activity_source_id' =>$idactivitySource139,
                                            'value' => 3378733181,
                                            ]);
                                            $idevidenceFinancial139 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia330,
                                            'activity_source_id' =>$idactivitySource140,
                                            'value' => 1023877962,
                                            ]);
                                            $idevidenceFinancial140 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia336,
                                            'activity_source_id' =>$idactivitySource141,
                                            'value' => 61567051304,
                                            ]);
                                            $idevidenceFinancial141 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia347,
                                            'activity_source_id' =>$idactivitySource142,
                                            'value' => 14010072866,
                                            ]);
                                            $idevidenceFinancial142 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia354,
                                            'activity_source_id' =>$idactivitySource143,
                                            'value' => 979088459,
                                            ]);
                                            $idevidenceFinancial143 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia361,
                                            'activity_source_id' =>$idactivitySource144,
                                            'value' => 3343963240,
                                            ]);
                                            $idevidenceFinancial144 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia364,
                                            'activity_source_id' =>$idactivitySource145,
                                            'value' => 5498703341,
                                            ]);
                                            $idevidenceFinancial145 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia365,
                                            'activity_source_id' =>$idactivitySource146,
                                            'value' => 1190815951,
                                            ]);
                                            $idevidenceFinancial146 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia373,
                                            'activity_source_id' =>$idactivitySource147,
                                            'value' => 212268685205,
                                            ]);
                                            $idevidenceFinancial147 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia330,
                                              'activity_source_id' =>$idactivitySource148,
                                              'value' => 60073509164,
                                              ]);
                                              $idevidenceFinancial148 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia373,
                                              'activity_source_id' =>$idactivitySource149,
                                              'value' => 73760353500,
                                              ]);
                                              $idevidenceFinancial149 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                              DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia373,
                                                'activity_source_id' =>$idactivitySource150,
                                                'value' => 3141588494,
                                                ]);
                                                $idevidenceFinancial150 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia373,
                                                'activity_source_id' =>$idactivitySource151,
                                                'value' => 4235147210,
                                                ]);
                                                $idevidenceFinancial151 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia373,
                                                'activity_source_id' =>$idactivitySource152,
                                                'value' => 1264200000,
                                                ]);
                                                $idevidenceFinancial152 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia373,
                                                'activity_source_id' =>$idactivitySource153,
                                                'value' => 156100000,
                                                ]);
                                                $idevidenceFinancial153 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia373,
                                                'activity_source_id' =>$idactivitySource154,
                                                'value' => 7340900,
                                                ]);
                                                $idevidenceFinancial154 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia373,
                                                'activity_source_id' =>$idactivitySource155,
                                                'value' => 508099340,
                                                ]);
                                                $idevidenceFinancial155 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia373,
                                                'activity_source_id' =>$idactivitySource156,
                                                'value' => 694680700,
                                                ]);
                                                $idevidenceFinancial156 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia373,
                                                'activity_source_id' =>$idactivitySource157,
                                                'value' => 236000000,
                                                ]);
                                                $idevidenceFinancial157 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia373,
                                                'activity_source_id' =>$idactivitySource158,
                                                'value' => 537282540,
                                                ]);
                                                $idevidenceFinancial158 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia373,
                                                'activity_source_id' =>$idactivitySource159,
                                                'value' => 1713150000,
                                                ]);
                                                $idevidenceFinancial159 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia373,
                                                'activity_source_id' =>$idactivitySource160,
                                                'value' => 18322560,
                                                ]);
                                                $idevidenceFinancial160 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia373,
                                                'activity_source_id' =>$idactivitySource161,
                                                'value' => 315000000000,
                                                ]);
                                                $idevidenceFinancial161 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia373,
                                                'activity_source_id' =>$idactivitySource162,
                                                'value' => 1318246391,
                                                ]);
                                                $idevidenceFinancial162 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia373,
                                                'activity_source_id' =>$idactivitySource163,
                                                'value' => 3959100000,
                                                ]);
                                                $idevidenceFinancial163 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia373,
                                                'activity_source_id' =>$idactivitySource164,
                                                'value' => 3959100000,
                                                ]);
                                                $idevidenceFinancial164 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia373,
                                                'activity_source_id' =>$idactivitySource165,
                                                'value' => 1660344400,
                                                ]);
                                                $idevidenceFinancial165 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia373,
                                                'activity_source_id' =>$idactivitySource166,
                                                'value' => 1300797190,
                                                ]);
                                                $idevidenceFinancial166 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia373,
                                                'activity_source_id' =>$idactivitySource167,
                                                'value' => 93800000,
                                                ]);
                                                $idevidenceFinancial167 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia373,
                                                'activity_source_id' =>$idactivitySource168,
                                                'value' => 14000000,
                                                ]);
                                                $idevidenceFinancial168 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia373,
                                                'activity_source_id' =>$idactivitySource169,
                                                'value' => 700000,
                                                ]);
                                                $idevidenceFinancial169 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia373,
                                                'activity_source_id' =>$idactivitySource170,
                                                'value' => 121992920,
                                                ]);
                                                $idevidenceFinancial170 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia373,
                                                'activity_source_id' =>$idactivitySource171,
                                                'value' => 62627950,
                                                ]);
                                                $idevidenceFinancial171 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia373,
                                                'activity_source_id' =>$idactivitySource172,
                                                'value' => 747688057,
                                                ]);
                                                $idevidenceFinancial172 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia373,
                                                'activity_source_id' =>$idactivitySource173,
                                                'value' => 2593523688,
                                                ]);
                                                $idevidenceFinancial173 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia373,
                                                'activity_source_id' =>$idactivitySource174,
                                                'value' => 2002817208,
                                                ]);
                                                $idevidenceFinancial174 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia373,
                                                'activity_source_id' =>$idactivitySource175,
                                                'value' => 4569370513,
                                                ]);
                                                $idevidenceFinancial175 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia373,
                                                'activity_source_id' =>$idactivitySource176,
                                                'value' => 4112158,
                                                ]);
                                                $idevidenceFinancial176 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                  DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia373,
                                                'activity_source_id' =>$idactivitySource177,
                                                'value' => 123871535160,
                                                ]);
                                                $idevidenceFinancial177 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity1,
                                                  'source_id' =>$idPlan176,
                                                  'value' => 2592950519,
                                                  'goal' => 0,
                                                  'evidence_balance' => 2592950519,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource191 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity8,
                                                  'source_id' =>$idPlan176,
                                                  'value' => 23636930561,
                                                  'goal' => 0,
                                                  'evidence_balance' => 23636930561,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource192 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity9,
                                                  'source_id' =>$idPlan176,
                                                  'value' => 189122850,
                                                  'goal' => 0,
                                                  'evidence_balance' => 189122850,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource193 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity26,
                                                  'source_id' =>$idPlan176,
                                                  'value' => 71000342936,
                                                  'goal' => 0,
                                                  'evidence_balance' => 71000342936,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource194 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity29,
                                                  'source_id' =>$idPlan176,
                                                  'value' => 4044547468,
                                                  'goal' => 0,
                                                  'evidence_balance' => 4044547468,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource195 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity37,
                                                  'source_id' =>$idPlan176,
                                                  'value' => 13411702495,
                                                  'goal' => 0,
                                                  'evidence_balance' => 13411702495,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource196 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity47,
                                                  'source_id' =>$idPlan176,
                                                  'value' => 36225953304,
                                                  'goal' => 0,
                                                  'evidence_balance' => 36225953304,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource197 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity48,
                                                  'source_id' =>$idPlan176,
                                                  'value' => 2220000000,
                                                  'goal' => 0,
                                                  'evidence_balance' => 2220000000,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource198 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity54,
                                                  'source_id' =>$idPlan176,
                                                  'value' => 27496985005,
                                                  'goal' => 0,
                                                  'evidence_balance' => 27496985005,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource199 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity58,
                                                  'source_id' =>$idPlan176,
                                                  'value' => 7557197546,
                                                  'goal' => 0,
                                                  'evidence_balance' => 7557197546,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource200 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity63,
                                                  'source_id' =>$idPlan176,
                                                  'value' => 4350363651,
                                                  'goal' => 0,
                                                  'evidence_balance' => 4350363651,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource201 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity68,
                                                  'source_id' =>$idPlan176,
                                                  'value' => 3871277486,
                                                  'goal' => 0,
                                                  'evidence_balance' => 3871277486,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource202 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity80,
                                                  'source_id' =>$idPlan176,
                                                  'value' => 9422822985,
                                                  'goal' => 0,
                                                  'evidence_balance' => 9422822985,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource204 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity84,
                                                  'source_id' =>$idPlan176,
                                                  'value' => 28941319070,
                                                  'goal' => 0,
                                                  'evidence_balance' => 28941319070,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource205 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity90,
                                                  'source_id' =>$idPlan177,
                                                  'value' => 34276271157,
                                                  'goal' => 0,
                                                  'evidence_balance' => 34276271157,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource206 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity102,
                                                  'source_id' =>$idPlan236,
                                                  'value' => 48215656955,
                                                  'goal' => 0,
                                                  'evidence_balance' => 48215656955,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource207 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity109,
                                                  'source_id' =>$idPlan236,
                                                  'value' => 2064526464.76999,
                                                  'goal' => 0,
                                                  'evidence_balance' => 2064526464.76999,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource208 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity116,
                                                  'source_id' =>$idPlan230,
                                                  'value' => 10740652519,
                                                  'goal' => 0,
                                                  'evidence_balance' => 10740652519,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource209 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity119,
                                                  'source_id' =>$idPlan230,
                                                  'value' => 34140263209,
                                                  'goal' => 0,
                                                  'evidence_balance' => 34140263209,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource210 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity120,
                                                  'source_id' =>$idPlan230,
                                                  'value' => 1209939668,
                                                  'goal' => 0,
                                                  'evidence_balance' => 1209939668,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource211 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity129,
                                                  'source_id' =>$idPlan230,
                                                  'value' => 296438961923.23,
                                                  'goal' => 0,
                                                  'evidence_balance' => 296438961923.23,
                                                  'age' => 4,
                                                  ]);
                                                  $idactivitySource212 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity84,
                                                    'source_id' =>$idPlan177,
                                                    'value' => 41696728843,
                                                    'goal' => 0,
                                                    'evidence_balance' => 41696728843,
                                                    'age' => 4,
                                                    ]);
                                                    $idactivitySource213 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity90,
                                                    'source_id' =>$idPlan236,
                                                    'value' => 150497741366,
                                                    'goal' => 0,
                                                    'evidence_balance' => 150497741366,
                                                    'age' => 4,
                                                    ]);
                                                    $idactivitySource214 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity109,
                                                    'source_id' =>$idPlan230,
                                                    'value' => 1789338027.23001,
                                                    'goal' => 0,
                                                    'evidence_balance' => 1789338027.23001,
                                                    'age' => 4,
                                                    ]);
                                                    $idactivitySource215 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity129,
                                                    'source_id' =>$idPlan183,
                                                    'value' => 607654645,
                                                    'goal' => 0,
                                                    'evidence_balance' => 607654645,
                                                    'age' => 4,
                                                    ]);
                                                    $idactivitySource216 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan184,
                                                      'value' => 5260500000,
                                                      'goal' => 0,
                                                      'evidence_balance' => 5260500000,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource217 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan185,
                                                      'value' => 1400000000,
                                                      'goal' => 0,
                                                      'evidence_balance' => 1400000000,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource218 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan186,
                                                      'value' => 620238500,
                                                      'goal' => 0,
                                                      'evidence_balance' => 620238500,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource219 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan187,
                                                      'value' => 7561120,
                                                      'goal' => 0,
                                                      'evidence_balance' => 7561120,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource220 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan188,
                                                      'value' => 634807600,
                                                      'goal' => 0,
                                                      'evidence_balance' => 634807600,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource221 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan189,
                                                      'value' => 973868630,
                                                      'goal' => 0,
                                                      'evidence_balance' => 973868630,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource222 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan191,
                                                      'value' => 4444161840,
                                                      'goal' => 0,
                                                      'evidence_balance' => 4444161840,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource223 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan192,
                                                      'value' => 1723265820,
                                                      'goal' => 0,
                                                      'evidence_balance' => 1723265820,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource224 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan195,
                                                      'value' => 10269540,
                                                      'goal' => 0,
                                                      'evidence_balance' => 10269540,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource225 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan196,
                                                      'value' => 88120702.4,
                                                      'goal' => 0,
                                                      'evidence_balance' => 88120702.4,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource226 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan197,
                                                      'value' => 4588650,
                                                      'goal' => 0,
                                                      'evidence_balance' => 4588650,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource227 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan198,
                                                      'value' => 302060789586,
                                                      'goal' => 0,
                                                      'evidence_balance' => 302060789586,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource228 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan201,
                                                      'value' => 528920459,
                                                      'goal' => 0,
                                                      'evidence_balance' => 528920459,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource229 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan202,
                                                      'value' => 2189700000,
                                                      'goal' => 0,
                                                      'evidence_balance' => 2189700000,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource230 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan205,
                                                      'value' => 3861900000,
                                                      'goal' => 0,
                                                      'evidence_balance' => 3861900000,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource231 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan207,
                                                      'value' => 179100000,
                                                      'goal' => 0,
                                                      'evidence_balance' => 179100000,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource232 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan209,
                                                      'value' => 2365167646.79951,
                                                      'goal' => 0,
                                                      'evidence_balance' => 2365167646.79951,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource233 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan211,
                                                      'value' => 2091823090,
                                                      'goal' => 0,
                                                      'evidence_balance' => 2091823090,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource234 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan212,
                                                      'value' => 70000000,
                                                      'goal' => 0,
                                                      'evidence_balance' => 70000000,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource235 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan213,
                                                      'value' => 127813700,
                                                      'goal' => 0,
                                                      'evidence_balance' => 127813700,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource236 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan214,
                                                      'value' => 741860,
                                                      'goal' => 0,
                                                      'evidence_balance' => 741860,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource237 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan215,
                                                      'value' => 188460300,
                                                      'goal' => 0,
                                                      'evidence_balance' => 188460300,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource238 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan216,
                                                      'value' => 88459280,
                                                      'goal' => 0,
                                                      'evidence_balance' => 88459280,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource239 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan218,
                                                      'value' => 3657187947,
                                                      'goal' => 0,
                                                      'evidence_balance' => 3657187947,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource240 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan219,
                                                      'value' => 786690513,
                                                      'goal' => 0,
                                                      'evidence_balance' => 786690513,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource241 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan220,
                                                      'value' => 3352142124,
                                                      'goal' => 0,
                                                      'evidence_balance' => 3352142124,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource242 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan221,
                                                      'value' => 12204404876,
                                                      'goal' => 0,
                                                      'evidence_balance' => 12204404876,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource243 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan222,
                                                      'value' => 17755095,
                                                      'goal' => 0,
                                                      'evidence_balance' => 17755095,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource244 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan223,
                                                      'value' => 192730554647,
                                                      'goal' => 0,
                                                      'evidence_balance' => 192730554647,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource245 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan224,
                                                      'value' => 21553520261,
                                                      'goal' => 0,
                                                      'evidence_balance' => 21553520261,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource246 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan225,
                                                      'value' => 1619879562,
                                                      'goal' => 0,
                                                      'evidence_balance' => 1619879562,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource247 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan226,
                                                      'value' => 220870448,
                                                      'goal' => 0,
                                                      'evidence_balance' => 220870448,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource248 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan231,
                                                      'value' => 20217944000,
                                                      'goal' => 0,
                                                      'evidence_balance' => 20217944000,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource249 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan232,
                                                      'value' => 10938174000,
                                                      'goal' => 0,
                                                      'evidence_balance' => 10938174000,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource250 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan233,
                                                      'value' => 1348542000,
                                                      'goal' => 0,
                                                      'evidence_balance' => 1348542000,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource251 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan234,
                                                      'value' => 2697084000,
                                                      'goal' => 0,
                                                      'evidence_balance' => 2697084000,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource252 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan241,
                                                      'value' => 18000000000,
                                                      'goal' => 0,
                                                      'evidence_balance' => 18000000000,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource253 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan242,
                                                      'value' => 1376558725,
                                                      'goal' => 0,
                                                      'evidence_balance' => 1376558725,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource254 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan243,
                                                      'value' => 4965930257,
                                                      'goal' => 0,
                                                      'evidence_balance' => 4965930257,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource255 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                        DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity129,
                                                      'source_id' =>$idPlan244,
                                                      'value' => 340048595,
                                                      'goal' => 0,
                                                      'evidence_balance' => 340048595,
                                                      'age' => 4,
                                                      ]);
                                                      $idactivitySource256 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia374,
                                                        'activity_source_id' =>$idactivitySource191,
                                                        'value' => 1786674148,
                                                        ]);
                                                        $idevidenceFinancial191 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia381,
                                                        'activity_source_id' =>$idactivitySource192,
                                                        'value' => 19824685860,
                                                        ]);
                                                        $idevidenceFinancial192 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia382,
                                                        'activity_source_id' =>$idactivitySource193,
                                                        'value' => 102367238,
                                                        ]);
                                                        $idevidenceFinancial193 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia399,
                                                        'activity_source_id' =>$idactivitySource194,
                                                        'value' => 40447814929,
                                                        ]);
                                                        $idevidenceFinancial194 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia402,
                                                        'activity_source_id' =>$idactivitySource195,
                                                        'value' => 3999505004,
                                                        ]);
                                                        $idevidenceFinancial195 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia410,
                                                        'activity_source_id' =>$idactivitySource196,
                                                        'value' => 12227017808,
                                                        ]);
                                                        $idevidenceFinancial196 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia420,
                                                        'activity_source_id' =>$idactivitySource197,
                                                        'value' => 24839398503,
                                                        ]);
                                                        $idevidenceFinancial197 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia421,
                                                        'activity_source_id' =>$idactivitySource198,
                                                        'value' => 1754037521,
                                                        ]);
                                                        $idevidenceFinancial198 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia427,
                                                        'activity_source_id' =>$idactivitySource199,
                                                        'value' => 25621817651,
                                                        ]);
                                                        $idevidenceFinancial199 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia430,
                                                        'activity_source_id' =>$idactivitySource200,
                                                        'value' => 1376830545,
                                                        ]);
                                                        $idevidenceFinancial200 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia435,
                                                        'activity_source_id' =>$idactivitySource201,
                                                        'value' => 3898497576,
                                                        ]);
                                                        $idevidenceFinancial201 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia440,
                                                        'activity_source_id' =>$idactivitySource202,
                                                        'value' => 3323507662,
                                                        ]);
                                                        $idevidenceFinancial202 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia451,
                                                        'activity_source_id' =>$idactivitySource204,
                                                        'value' => 8990755608,
                                                        ]);
                                                        $idevidenceFinancial204 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia455,
                                                        'activity_source_id' =>$idactivitySource205,
                                                        'value' => 28941319070,
                                                        ]);
                                                        $idevidenceFinancial205 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia461,
                                                        'activity_source_id' =>$idactivitySource206,
                                                        'value' => 34276271157,
                                                        ]);
                                                        $idevidenceFinancial206 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia472,
                                                        'activity_source_id' =>$idactivitySource207,
                                                        'value' => 23864330120,
                                                        ]);
                                                        $idevidenceFinancial207 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia479,
                                                        'activity_source_id' =>$idactivitySource208,
                                                        'value' => 2064526464.76999,
                                                        ]);
                                                        $idevidenceFinancial208 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia485,
                                                        'activity_source_id' =>$idactivitySource209,
                                                        'value' => 6640972251,
                                                        ]);
                                                        $idevidenceFinancial209 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia488,
                                                        'activity_source_id' =>$idactivitySource210,
                                                        'value' => 17947778021,
                                                        ]);
                                                        $idevidenceFinancial210 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia489,
                                                        'activity_source_id' =>$idactivitySource211,
                                                        'value' => 1124815068,
                                                        ]);
                                                        $idevidenceFinancial211 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia498,
                                                        'activity_source_id' =>$idactivitySource212,
                                                        'value' => 296438961923.23,
                                                        ]);
                                                        $idevidenceFinancial212 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                        DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia455,
                                                          'activity_source_id' =>$idactivitySource213,
                                                          'value' => 32989540982,
                                                          ]);
                                                          $idevidenceFinancial213 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                          
                                                        DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia461,
                                                          'activity_source_id' =>$idactivitySource214,
                                                          'value' => 63586559097,
                                                          ]);
                                                          $idevidenceFinancial214 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                          
                                                        DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia479,
                                                          'activity_source_id' =>$idactivitySource215,
                                                          'value' => 888684728.230011,
                                                          ]);
                                                          $idevidenceFinancial215 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                          
                                                        DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia498,
                                                          'activity_source_id' =>$idactivitySource216,
                                                          'value' => 607654645,
                                                          ]);
                                                          $idevidenceFinancial216 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                          
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia498,
                                                            'activity_source_id' =>$idactivitySource217,
                                                            'value' => 5260500000,
                                                            ]);
                                                            $idevidenceFinancial217 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                              DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia498,
                                                            'activity_source_id' =>$idactivitySource218,
                                                            'value' => 1400000000,
                                                            ]);
                                                            $idevidenceFinancial218 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                              DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia498,
                                                            'activity_source_id' =>$idactivitySource219,
                                                            'value' => 620238500,
                                                            ]);
                                                            $idevidenceFinancial219 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                              DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia498,
                                                            'activity_source_id' =>$idactivitySource220,
                                                            'value' => 7561120,
                                                            ]);
                                                            $idevidenceFinancial220 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                              DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia498,
                                                            'activity_source_id' =>$idactivitySource221,
                                                            'value' => 634807600,
                                                            ]);
                                                            $idevidenceFinancial221 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                              DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia498,
                                                            'activity_source_id' =>$idactivitySource222,
                                                            'value' => 973868630,
                                                            ]);
                                                            $idevidenceFinancial222 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                              DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia498,
                                                            'activity_source_id' =>$idactivitySource223,
                                                            'value' => 4444161840,
                                                            ]);
                                                            $idevidenceFinancial223 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                              DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia498,
                                                            'activity_source_id' =>$idactivitySource224,
                                                            'value' => 1723265820,
                                                            ]);
                                                            $idevidenceFinancial224 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                              DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia498,
                                                            'activity_source_id' =>$idactivitySource225,
                                                            'value' => 10269540,
                                                            ]);
                                                            $idevidenceFinancial225 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                              DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia498,
                                                            'activity_source_id' =>$idactivitySource226,
                                                            'value' => 88120702.4,
                                                            ]);
                                                            $idevidenceFinancial226 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                              DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia498,
                                                            'activity_source_id' =>$idactivitySource227,
                                                            'value' => 4588650,
                                                            ]);
                                                            $idevidenceFinancial227 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                              DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia498,
                                                            'activity_source_id' =>$idactivitySource228,
                                                            'value' => 136801510067.37,
                                                            ]);
                                                            $idevidenceFinancial228 = DB::getPdo()->lastInsertId();
            
     }
}