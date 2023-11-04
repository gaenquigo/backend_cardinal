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
 * Class HistoricPAI_CORPOURABA_Seeder
 */
class HistoricPAI_CORPOURABA_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $pai=PAI::create([
        'name' => 'Plan de Acción Institucional 2016-2019 “CORPORACIÓN PARA EL DESARROLLO SOSTENIBLE DEL URABÁ CORPOURABA ”',
        'start_date' => '2016-01-01',
        'end_date' => '2019-12-31',
        'director_name' => 'VANESSA PAREDES ZUÑIGA',
        'group_id' => 27,
        'approved' => 1,
        ]);
        $idpai1 = DB::getPdo()->lastInsertId();
        
        DB::table('strategic_lines')->insert([
          'name' => 'PROGRAMA No 1 Ordenamiento Ambiental y Gestión',
          'weighing' => 25,
          'p_a_i_id' => $idpai1,
          ]);
          $idline1 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => 'PROGRAMA No 2. . Gestión en Recursos hídricos',
          'weighing' => 25,
          'p_a_i_id' => $idpai1,
          ]);
          $idline2 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => 'PROGRAMA No. 3   Gestión en Calidad de Vida',
          'weighing' => 25,
          'p_a_i_id' => $idpai1,
          ]);
          $idline3 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => 'PROGRAMA No. 4 Gestión en Fortalecimiento sistémicos',
          'weighing' => 25,
          'p_a_i_id' => $idpai1,
          ]);
          $idline4 = DB::getPdo()->lastInsertId();
          
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'SUBPROGRAMA No.1.1. Ordenamiento y manejo de ecosistemas estratégicos y áreas protegidas',
            'weighing' => 33,
            ]);
            $idprogram1 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'SUBPROGRAMA: No 1.2 Unidad Ambiental Costera del Darién',
            'weighing' => 33,
            ]);
            $idprogram2 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'SUBPROGRAMA No 1.3. Gestión en Bosques',
            'weighing' => 34,
            ]);
            $idprogram3 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline2,
            'national_program_id' => 799,
            'car_program' => 'SUBPROGRAMA 2.1 Ordenación de cuencas y aguas',
            'weighing' => 50,
            ]);
            $idprogram4 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline2,
            'national_program_id' => 799,
            'car_program' => 'SUBPROGRAMA 2.2. Legalización, manejo y uso eficiente',
            'weighing' => 50,
            ]);
            $idprogram5 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline3,
            'national_program_id' => 799,
            'car_program' => 'SUBPROGRAMA 3.1. Proyectos en saneamiento',
            'weighing' => 33,
            ]);
            $idprogram6 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline3,
            'national_program_id' => 799,
            'car_program' => 'SUBPROGRAMA 3.2. Gestión del Riesgo y del Cambio Climático',
            'weighing' => 33,
            ]);
            $idprogram7 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline3,
            'national_program_id' => 799,
            'car_program' => 'SUBPROGRAMA 3.3.Procesos Productivos Sostenibles',
            'weighing' => 34,
            ]);
            $idprogram8 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline4,
            'national_program_id' => 799,
            'car_program' => 'SUBPROGRAMA 4.1 Fortalecimiento Institucional',
            'weighing' => 50,
            ]);
            $idprogram9 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline4,
            'national_program_id' => 799,
            'car_program' => 'SUBPROGRAMA 4.2 Educación  y Cultura Ambiental',
            'weighing' => 50,
            ]);
            $idprogram10 = DB::getPdo()->lastInsertId();
            
            
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No 1.1.1. Implementar el plan de manejo de los humedales del Atrato',
              'weighing' => 10,
              ]);
              $idproject1 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No 1.1.2.Rehabilitación de bosques en el Bajo Atrato Antioqueño',
              'weighing' => 10,
              ]);
              $idproject2 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No 1.1.2.Rehabilitación de bosques en el Bajo Atrato Antioqueño',
              'weighing' => 10,
              ]);
              $idproject3 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No 1.1.4. Rehabilitación de Bosques degradados en territorios colectivos de comunidades negras de la jurisdicción de CORPOURABA Antioquia- FONAM',
              'weighing' => 10,
              ]);
              $idproject4 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No 1.1.2. Ordenamiento y manejo del Complejo de Páramos Frontino- Urrao ',
              'weighing' => 10,
              ]);
              $idproject5 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No 1.1.6. Construcción de una herramienta de planificación, ordenamiento y manejo del Complejo de Páramos Frontino- Urrao, Antioquia (FCA-2017)',
              'weighing' => 10,
              ]);
              $idproject6 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => ' Proyecto No 1.1.7. Implementación de la primera fase del Plan de Ordenamiento y manejo del Complejo de Páramos Frontino- Urrao y su entorno local, Antioquia (FCA, 2018)',
              'weighing' => 10,
              ]);
              $idproject7 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No 1.1.3. Consolidación sistema regional de áreas protegidas de la jurisdicción de CORPOURABA ',
              'weighing' => 10,
              ]);
              $idproject8 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No 1.1.9. Conformación del sistema de áreas protegidas en la jurisdicción de Corpouraba y Codechoco Antioquia, Choco',
              'weighing' => 10,
              ]);
              $idproject9 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No 1.1.10. Formulacion de planes de manejo para especies de fauna silvestre en categoria de amenaza y con presion de uso en dos areas protegidas de la jurisdiccion de CORPOURABA, Antioquia',
              'weighing' => 10,
              ]);
              $idproject10 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto No: 1.2.1. Implementación de acciones en manejo integrado de zonas costeras en el departamento de Antioquia.',
              'weighing' => 50,
              ]);
              $idproject11 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto No: 1.2.2.  Ajuste e  Implementación  Plan de Manejo Unidad Ambiental Costera del Darién MADS',
              'weighing' => 50,
              ]);
              $idproject12 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => 'Proyecto No 1.3.1. Plan regional de conservación y restauración de bosques',
              'weighing' => 33,
              ]);
              $idproject13 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => 'Proyecto No 1.3.3. Conservacion y restauracion del bosque bajo esquema P.S.A en Jurisdicción de CORPOURABA. Departamento de Antioquia',
              'weighing' => 33,
              ]);
              $idproject14 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => 'Proyecto No 1.3.4. Rehabilitación ecológica participativa en áreas de aptitud ambiental y forestal en el municipio de San Pedro de Uraba del Departamento de Antioquia',
              'weighing' => 34,
              ]);
              $idproject15 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => 'Proyecto No 2.2.1. Ordenación de cuencas',
              'weighing' => 16,
              ]);
              $idproject16 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => 'Proyecto No 2.1.2. Formulación del plan de ordenación para el manejo sostenible de la cuenca del rio sucio alto, en sus etapas de aprestamiento y diagnostico – Antioquia',
              'weighing' => 16,
              ]);
              $idproject17 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => 'Proyecto No 2.2.2. Plan integral de protección y manejo de aguas subterráneas',
              'weighing' => 17,
              ]);
              $idproject18 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => 'Proyecto No 2.2.3. Protección integral de agua subterránea en la región de Urabá - FCA',
              'weighing' => 17,
              ]);
              $idproject19 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => 'Proyecto No 2.1.5. Protección integral de agua subterránea en la región de Urabá - Antioquia-FCA',
              'weighing' => 17,
              ]);
              $idproject20 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => 'Proyecto No 2.1.6. Implementacion de acciones de protección del agua subterránea en la región de Urabá, Antioquia',
              'weighing' => 17,
              ]);
              $idproject21 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram5,
              'project' => 'Proyecto No 2.2.1.  Regulación del uso de recurso hídrico e instrumentos económicos',
              'weighing' => 20,
              ]);
              $idproject22 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram5,
              'project' => 'Proyecto N° 2.2.2 Implementación de estrategias para el control de la contaminación del recurso hídrico en cuerpos de agua priorizados en la jurisdicción de CORPOURABA – FCA',
              'weighing' => 20,
              ]);
              $idproject23 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram5,
              'project' => 'Proyecto N° 2.2.3  Formulacion del Plan de Ordenamiento del Recurso hidrico del rio Turbo- CORPOURABA- Antioquia',
              'weighing' => 20,
              ]);
              $idproject24 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram5,
              'project' => 'Proyecto No 2.1.3 Formulacion del plan de ordenacion para el manejo sostenible de la cuenca del rio sucio alto en sus fases de prospectiva y formulacion',
              'weighing' => 20,
              ]);
              $idproject25 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram5,
              'project' => 'Proyecto N. 2.2.4. Estudios de metales pesados en cuerpos de agua de la cuenca del río  Atrato Antioquia Chocó',
              'weighing' => 20,
              ]);
              $idproject26 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram6,
              'project' => 'Proyecto No  3.1.1.  Cofinanciación  F.R.D.H',
              'weighing' => 33,
              ]);
              $idproject27 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram6,
              'project' => 'Proyecto No  3.1.2. Saneamiento ambiental',
              'weighing' => 33,
              ]);
              $idproject28 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram6,
              'project' => 'Proyecto 3.1.3. Implementación de huertos leñeros asociados a la construcción de 400 estufas eficientes para disminuir el uso del bosque como proveedor de leña en área rural de los municipios de la jurisdicción de CORPOURABA – FCA',
              'weighing' => 34,
              ]);
              $idproject29 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram7,
              'project' => 'Proyecto No  3.2.1. Apoyo en la gestión del riesgo y adaptación al cambio climático',
              'weighing' => 50,
              ]);
              $idproject30 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram7,
              'project' => 'Proyecto 3.2.2. Implementación de medidas de adaptación y mitigación de inundaciones, a través del control hidráulico del cauce bajo del río Chigorodó, en zona rural del municipio de Chigorodó, Antioquia - FONAM',
              'weighing' => 50,
              ]);
              $idproject31 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram8,
              'project' => 'Proyecto No 3.3.1.  Apoyo a la implementación de producción y consumo sostenible',
              'weighing' => 33,
              ]);
              $idproject32 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram8,
              'project' => 'Proyecto No 3.3.2. Estudios de línea base de suelos degradados para su recuperación o rehabilitación',
              'weighing' => 33,
              ]);
              $idproject33 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram8,
              'project' => 'Proyecto No 3.3.2  Implementacion del plan nacional de negocios verdes como estrategia de desarrollo sostenible en la jurisdicion de CORPOURABA departamento de antioquia',
              'weighing' => 34,
              ]);
              $idproject34 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram9,
              'project' => 'Proyecto No. 4.1.1. Fortalecimiento de la gestion',
              'weighing' => 12,
              ]);
              $idproject35 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram9,
              'project' => ' Proyecto No. 4.1.2. Mejoramiento continuo de la gestión misional',
              'weighing' => 12,
              ]);
              $idproject36 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram9,
              'project' => ' Proyecto No. 4.1.3. Estrategias Ambientales que apoyen la construcción de Paz',
              'weighing' => 12,
              ]);
              $idproject37 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram9,
              'project' => 'Proyecto No. 4.1.4. Fortalecimiento del laboratorio',
              'weighing' => 12,
              ]);
              $idproject38 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram9,
              'project' => 'Proyecto No. 4.1.5. Consolidación del hogar de paso de fauna silvestre',
              'weighing' => 13,
              ]);
              $idproject39 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram9,
              'project' => 'Proyecto 4.1.6. Fortalecimiento operacional del hogar de paso de fauna silvestre de CORPOURABA – FCA',
              'weighing' => 13,
              ]);
              $idproject40 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram9,
              'project' => 'Proyecto No. 4.1.7. Fortalecimiento de la gestión como autoridad ambiental',
              'weighing' => 13,
              ]);
              $idproject41 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram9,
              'project' => 'Proyecto No. 4.1.8. Actualización de la plataforma de la red de datos, energía y seguridad informática en la sede central y regionales de CORPOURABA – FCA',
              'weighing' => 13,
              ]);
              $idproject42 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram10,
              'project' => 'Proyecto No 4.2.1. Educación ambiental',
              'weighing' => 50,
              ]);
              $idproject43 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram10,
              'project' => 'Proyecto No 4.2.1.2. Comunicación y divulgación para la promoción de una cultura ambiental',
              'weighing' => 50,
              ]);
              $idproject44 = DB::getPdo()->lastInsertId();
              
              
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
                'weighing' => 101,
                ]);
                $idobjective44 = DB::getPdo()->lastInsertId();
                
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 100,
					'goal_2' => 37.5,
					'goal_3' => 21.5,
					'goal_4' => 4,
					'goal_1_balance' => 100,
					'goal_2_balance' => 37.5,
					'goal_3_balance' => 21.5,
					'goal_4_balance' => 4,
					'total_goal' => 163,
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
					'goal_1' => 30,
					'goal_2' => 10,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 30,
					'goal_2_balance' => 10,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 40,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct9 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 100,
					'goal_2' => 69.5,
					'goal_3' => 100,
					'goal_4' => 100,
					'goal_1_balance' => 100,
					'goal_2_balance' => 69.5,
					'goal_3_balance' => 100,
					'goal_4_balance' => 100,
					'total_goal' => 369.5,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct10 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 4,
					'goal_2' => 4,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 4,
					'goal_2_balance' => 4,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 8,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
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
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 60,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 60,
					'goal_4_balance' => 0,
					'total_goal' => 60,
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
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 20,
					'goal_4' => 11,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 20,
					'goal_4_balance' => 11,
					'total_goal' => 31,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
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
					'weighing' => 1,
					]);
					$idobjectiveproduct16 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 100,
					'goal_2' => 52.5,
					'goal_3' => 5,
					'goal_4' => 52.5,
					'goal_1_balance' => 100,
					'goal_2_balance' => 52.5,
					'goal_3_balance' => 5,
					'goal_4_balance' => 52.5,
					'total_goal' => 210,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct17 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 0,
					'goal_2' => 10,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 10,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 10,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct18 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 50,
					'goal_2' => 5,
					'goal_3' => 95,
					'goal_4' => 0,
					'goal_1_balance' => 50,
					'goal_2_balance' => 5,
					'goal_3_balance' => 95,
					'goal_4_balance' => 0,
					'total_goal' => 150,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct19 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 2,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 2,
					'total_goal' => 2,
					'unit_goal' => 76,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 24,
					]);
					$idobjectiveproduct20 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
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
					$idobjectiveproduct21 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 0,
					'goal_2' => 10,
					'goal_3' => 30,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 10,
					'goal_3_balance' => 30,
					'goal_4_balance' => 0,
					'total_goal' => 40,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct22 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
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
					'unit_goal' => 76,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 49,
					]);
					$idobjectiveproduct23 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
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
					'objective_id' => $idobjective10,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 10,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 10,
					'total_goal' => 10,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct25 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct26 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 5,
					'goal_2' => 59,
					'goal_3' => 100,
					'goal_4' => 52,
					'goal_1_balance' => 5,
					'goal_2_balance' => 59,
					'goal_3_balance' => 100,
					'goal_4_balance' => 52,
					'total_goal' => 216,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct27 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 73.5,
					'goal_2' => 5,
					'goal_3' => 95,
					'goal_4' => 0,
					'goal_1_balance' => 73.5,
					'goal_2_balance' => 5,
					'goal_3_balance' => 95,
					'goal_4_balance' => 0,
					'total_goal' => 173.5,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 49,
					]);
					$idobjectiveproduct28 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
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
					$idobjectiveproduct29 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
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
					'weighing' => 100,
					]);
					$idobjectiveproduct30 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 20,
					]);
					$idobjectiveproduct31 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 40,
					'goal_2' => 100,
					'goal_3' => 100,
					'goal_4' => 100,
					'goal_1_balance' => 40,
					'goal_2_balance' => 100,
					'goal_3_balance' => 100,
					'goal_4_balance' => 100,
					'total_goal' => 340,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct32 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 440,
					'goal_2' => 242,
					'goal_3' => 10,
					'goal_4' => 160,
					'goal_1_balance' => 440,
					'goal_2_balance' => 242,
					'goal_3_balance' => 10,
					'goal_4_balance' => 160,
					'total_goal' => 852,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct33 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 112.5,
					'goal_2' => 10,
					'goal_3' => 0,
					'goal_4' => 10,
					'goal_1_balance' => 112.5,
					'goal_2_balance' => 10,
					'goal_3_balance' => 0,
					'goal_4_balance' => 10,
					'total_goal' => 132.5,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct34 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 19,
					]);
					$idobjectiveproduct35 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
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
					$idobjectiveproduct36 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 130,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 130,
					'total_goal' => 130,
					'unit_goal' => 39,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct37 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
					'product_id' => null,
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
					'weighing' => 25,
					]);
					$idobjectiveproduct38 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
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
					'unit_goal' => 22,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct39 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 2,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 2,
					'total_goal' => 2,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 24,
					]);
					$idobjectiveproduct40 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
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
					$idobjectiveproduct41 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective15,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 2,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 2,
					'total_goal' => 2,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct42 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective15,
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
					$idobjectiveproduct43 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective16,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 40,
					'goal_2' => 20,
					'goal_3' => 26.7,
					'goal_4' => 13.3,
					'goal_1_balance' => 40,
					'goal_2_balance' => 20,
					'goal_3_balance' => 26.7,
					'goal_4_balance' => 13.3,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct44 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective16,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 4,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 4,
					'total_goal' => 4,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct45 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective16,
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
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct46 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective16,
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
					$idobjectiveproduct47 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective17,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 7,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 7,
					'goal_4_balance' => 0,
					'total_goal' => 7,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct48 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective17,
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
					$idobjectiveproduct49 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 2,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 2,
					'total_goal' => 2,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct50 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct51 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective19,
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
					'weighing' => 33,
					]);
					$idobjectiveproduct52 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective19,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 0,
					'goal_2' => 2,
					'goal_3' => 2,
					'goal_4' => 2,
					'goal_1_balance' => 0,
					'goal_2_balance' => 2,
					'goal_3_balance' => 2,
					'goal_4_balance' => 2,
					'total_goal' => 6,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct53 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective19,
					'product_id' => null,
					'product_other' => 'Producto 3',
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
					'weighing' => 33,
					]);
					$idobjectiveproduct54 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective19,
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
					$idobjectiveproduct55 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective20,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 0,
					'goal_2' => 12,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 12,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 12,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct56 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct57 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective21,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 0,
					'goal_2' => 4,
					'goal_3' => 2,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 4,
					'goal_3_balance' => 2,
					'goal_4_balance' => 0,
					'total_goal' => 6,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct58 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct59 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective22,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 8,
					'goal_2' => 0,
					'goal_3' => 4,
					'goal_4' => 8,
					'goal_1_balance' => 8,
					'goal_2_balance' => 0,
					'goal_3_balance' => 4,
					'goal_4_balance' => 8,
					'total_goal' => 20,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct60 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct61 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective23,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 100,
					'goal_2' => 100,
					'goal_3' => 93.33,
					'goal_4' => 100,
					'goal_1_balance' => 100,
					'goal_2_balance' => 100,
					'goal_3_balance' => 93.33,
					'goal_4_balance' => 100,
					'total_goal' => 393.33,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct62 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective23,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 0,
					'goal_2' => 100,
					'goal_3' => 80,
					'goal_4' => 100,
					'goal_1_balance' => 0,
					'goal_2_balance' => 100,
					'goal_3_balance' => 80,
					'goal_4_balance' => 100,
					'total_goal' => 280,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 49,
					]);
					$idobjectiveproduct63 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct64 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective24,
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
					'weighing' => 99,
					]);
					$idobjectiveproduct65 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective24,
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
					$idobjectiveproduct66 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective25,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 40,
					'goal_4' => 60,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 40,
					'goal_4_balance' => 60,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct67 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct68 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective26,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 2,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 2,
					'goal_4_balance' => 0,
					'total_goal' => 2,
					'unit_goal' => 34,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct69 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct70 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective27,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 1,
					'goal_2' => 1,
					'goal_3' => 0,
					'goal_4' => 3,
					'goal_1_balance' => 1,
					'goal_2_balance' => 1,
					'goal_3_balance' => 0,
					'goal_4_balance' => 3,
					'total_goal' => 5,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct71 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective27,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 1,
					'goal_2' => 2,
					'goal_3' => 3,
					'goal_4' => 6,
					'goal_1_balance' => 1,
					'goal_2_balance' => 2,
					'goal_3_balance' => 3,
					'goal_4_balance' => 6,
					'total_goal' => 12,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 49,
					]);
					$idobjectiveproduct72 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective27,
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
					$idobjectiveproduct73 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective28,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 1,
					'goal_2' => 2,
					'goal_3' => 2,
					'goal_4' => 11,
					'goal_1_balance' => 1,
					'goal_2_balance' => 2,
					'goal_3_balance' => 2,
					'goal_4_balance' => 11,
					'total_goal' => 16,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct74 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective28,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct75 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective28,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 100,
					'goal_2' => 3,
					'goal_3' => 1,
					'goal_4' => 2,
					'goal_1_balance' => 100,
					'goal_2_balance' => 3,
					'goal_3_balance' => 1,
					'goal_4_balance' => 2,
					'total_goal' => 106,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct76 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective28,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 1,
					'goal_2' => 0,
					'goal_3' => 50,
					'goal_4' => 0,
					'goal_1_balance' => 1,
					'goal_2_balance' => 0,
					'goal_3_balance' => 50,
					'goal_4_balance' => 0,
					'total_goal' => 51,
					'unit_goal' => 49,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 24,
					]);
					$idobjectiveproduct77 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective28,
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
					$idobjectiveproduct78 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective29,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 150,
					'goal_2' => 250,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 150,
					'goal_2_balance' => 250,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 400,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct79 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective29,
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
					$idobjectiveproduct80 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective30,
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
					'weighing' => 16,
					]);
					$idobjectiveproduct81 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective30,
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
					'weighing' => 16,
					]);
					$idobjectiveproduct82 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective30,
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
					'weighing' => 16,
					]);
					$idobjectiveproduct83 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective30,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 19,
					'goal_2' => 19,
					'goal_3' => 19,
					'goal_4' => 19,
					'goal_1_balance' => 19,
					'goal_2_balance' => 19,
					'goal_3_balance' => 19,
					'goal_4_balance' => 19,
					'total_goal' => 76,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct84 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective30,
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
					'weighing' => 17,
					]);
					$idobjectiveproduct85 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective30,
					'product_id' => null,
					'product_other' => 'Producto 6',
					'goal_1' => 0,
					'goal_2' => 5.1,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 5.1,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 5.1,
					'unit_goal' => 42,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct86 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct87 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective31,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 1,
					'goal_2' => 4000,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 1,
					'goal_2_balance' => 4000,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 4001,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct88 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective31,
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
					$idobjectiveproduct89 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective32,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 100,
					'goal_2' => 2,
					'goal_3' => 1,
					'goal_4' => 2,
					'goal_1_balance' => 100,
					'goal_2_balance' => 2,
					'goal_3_balance' => 1,
					'goal_4_balance' => 2,
					'total_goal' => 105,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct90 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective32,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 20,
					'goal_2' => 40,
					'goal_3' => 40,
					'goal_4' => 0,
					'goal_1_balance' => 20,
					'goal_2_balance' => 40,
					'goal_3_balance' => 40,
					'goal_4_balance' => 0,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 49,
					]);
					$idobjectiveproduct91 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective32,
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
					$idobjectiveproduct92 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective33,
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
					'weighing' => 99,
					]);
					$idobjectiveproduct93 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective33,
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
					'weighing' => 1,
					]);
					$idobjectiveproduct94 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective34,
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
					'weighing' => 99,
					]);
					$idobjectiveproduct95 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective34,
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
					$idobjectiveproduct96 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective35,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 8,
					'goal_2' => 3.5,
					'goal_3' => 100,
					'goal_4' => 5.5,
					'goal_1_balance' => 8,
					'goal_2_balance' => 3.5,
					'goal_3_balance' => 100,
					'goal_4_balance' => 5.5,
					'total_goal' => 117,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct97 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective35,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 5,
					'goal_2' => 6,
					'goal_3' => 1,
					'goal_4' => 7,
					'goal_1_balance' => 5,
					'goal_2_balance' => 6,
					'goal_3_balance' => 1,
					'goal_4_balance' => 7,
					'total_goal' => 19,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 49,
					]);
					$idobjectiveproduct98 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective35,
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
					$idobjectiveproduct99 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective36,
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
					$idobjectiveproduct100 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective36,
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
					'unit_goal' => 2,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 49,
					]);
					$idobjectiveproduct101 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective36,
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
					$idobjectiveproduct102 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective37,
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
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct103 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective37,
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
					$idobjectiveproduct104 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective38,
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
					'weighing' => 99,
					]);
					$idobjectiveproduct105 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective38,
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
					$idobjectiveproduct106 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective39,
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
					$idobjectiveproduct107 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective39,
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
					$idobjectiveproduct108 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective40,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 50,
					'goal_2' => 50,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 50,
					'goal_2_balance' => 50,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct109 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective40,
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
					$idobjectiveproduct110 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective41,
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
					$idobjectiveproduct111 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective41,
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
					$idobjectiveproduct112 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective41,
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
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct113 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective41,
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
					$idobjectiveproduct114 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective42,
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
					$idobjectiveproduct115 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective42,
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
					$idobjectiveproduct116 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective43,
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
					$idobjectiveproduct117 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective43,
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
					$idobjectiveproduct118 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective44,
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
					$idobjectiveproduct119 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective44,
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
					$idobjectiveproduct120 = DB::getPdo()->lastInsertId();
	
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct1,
                    'name' => 'Acción No 1.1.1.1 Implementación del PM de los',
                    'goal_1' => 100,
                    'goal_2' => 37.5,
                    'goal_3' => 21.5,
                    'goal_4' => 4,
                    'goal' => 163,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity1 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct2,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity2 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct3,
                    'name' => 'Acción No 1.1.2.1. Implementación del PM de los humedales del Atrato',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 200,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity3 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct4,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity4 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct5,
                    'name' => 'Acción No 1.1.3.1. Implementación del PM de los humedales del Atrato',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 200,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity5 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct6,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity6 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct7,
                    'name' => 'Acción No 1.1.4.1. Implementación del PM de los humedales del Atrato',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 200,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity7 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct8,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity8 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct9,
                    'name' => 'Acción No 1.1.2.1. Formulación del Plan de Manejo, incluye zonificacion y determinación del régimen de usos con resolución de adopción de la información en el SIAC.',
                    'goal_1' => 30,
                    'goal_2' => 10,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 40,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity9 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct10,
                    'name' => 'Acción No. 1.1.2.2. Implementación del Plan de Manejo ',
                    'goal_1' => 100,
                    'goal_2' => 69.5,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 369.5,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity10 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct11,
                    'name' => 'Acción No 1.1.2.3. Medidas de manejo y conservación',
                    'goal_1' => 4,
                    'goal_2' => 4,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 8,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity11 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct12,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity12 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct13,
                    'name' => 'Acción No 1.1.6.1. Formulación del Plan de Manejo, incluye zonificación y determinación del régimen de usos con resolución de adopción',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 60,
                    'goal_4' => 0,
                    'goal' => 60,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity13 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct14,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity14 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct15,
                    'name' => 'Acción No 1.1.7.1. Implementación del Plan de Manejo',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 20,
                    'goal_4' => 11,
                    'goal' => 31,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity15 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct16,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity16 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct17,
                    'name' => 'Acción No 1.1.3.1. Implementación de Plan de manejo de áreas protegidas regionales declaradas',
                    'goal_1' => 100,
                    'goal_2' => 52.5,
                    'goal_3' => 5,
                    'goal_4' => 52.5,
                    'goal' => 210,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity17 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct18,
                    'name' => 'Acción No 1.1.8.2. Declaratoria de Areas Protegidas a partir de la Resolución 1814/2015',
                    'goal_1' => 0,
                    'goal_2' => 10,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 10,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity18 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct19,
                    'name' => 'Acción No 1.1.3.2. Declaratoria de Areas Protegidas a partir de la Resolución 1814/2015',
                    'goal_1' => 50,
                    'goal_2' => 5,
                    'goal_3' => 95,
                    'goal_4' => 0,
                    'goal' => 150,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity19 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct20,
                    'name' => ' Acción No 1.1.3.3.  Formulación del PM de áreas protegidas',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 2,
                    'goal' => 2,
                    'weighing' => 24,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity20 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct21,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity21 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct22,
                    'name' => 'Acción No 1.1.9.1. Declaratoria de Áreas Protegidas a partir de la Resolución 1814/2015',
                    'goal_1' => 0,
                    'goal_2' => 10,
                    'goal_3' => 30,
                    'goal_4' => 0,
                    'goal' => 40,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity22 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct23,
                    'name' => 'Acción No 1.1.9.2. Formulación del PM de áreas protegidas',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 1,
                    'goal_4' => 0,
                    'goal' => 1,
                    'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity23 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct24,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity24 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct25,
                    'name' => 'Acción No 1.1.10.1. Implementación PM de áreas protegidas regionales declaradas',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 10,
                    'goal' => 10,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity25 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct26,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity26 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct27,
                    'name' => 'Acción No 1.2.1.1.Implementación de acciones en manejo integrado de zonas costeras en el departamento de Antioquia. planes de manejo en ejecución.',
                    'goal_1' => 5,
                    'goal_2' => 59,
                    'goal_3' => 100,
                    'goal_4' => 52,
                    'goal' => 216,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity27 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct28,
                    'name' => 'Acción No 1.2.1.2. Porcentaje de redes y estaciones de monitoreo en operación',
                    'goal_1' => 73.5,
                    'goal_2' => 5,
                    'goal_3' => 95,
                    'goal_4' => 0,
                    'goal' => 173.5,
                    'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity28 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct29,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity29 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct30,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity30 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct31,
                    'name' => 'Acción No 1.3.1.1. Área de predios adquiridos  con acciones de control y vigilancia',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity31 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct32,
                    'name' => 'Acción No. 1.3.1.2. Áreas con restauración (incluye BanCO2)',
                    'goal_1' => 40,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 340,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity32 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct33,
                    'name' => 'Acción No. 1.3.1.3. Áreas restauradas con mantenimiento',
                    'goal_1' => 440,
                    'goal_2' => 242,
                    'goal_3' => 10,
                    'goal_4' => 160,
                    'goal' => 852,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity33 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct34,
                    'name' => 'Acción No. 1.3.1.4. Fortalecimiento de la Gobernanza Forestal  ',
                    'goal_1' => 112.5,
                    'goal_2' => 10,
                    'goal_3' => 0,
                    'goal_4' => 10,
                    'goal' => 132.5,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity34 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct35,
                    'name' => '5.  Establecimiento, Mantenimiento, restauracion y conservacion de bosques (TSE)',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 19,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity35 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct36,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity36 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct37,
                    'name' => 'Acción No 1.3.3.1. Áreas con restauración (incluye Banco 2)',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 130,
                    'goal' => 130,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity37 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct38,
                    'name' => 'Acción No 1.3.3.2. Evaluación de la línea base de suelos degradados',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 100,
                    'goal' => 100,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity38 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct39,
                    'name' => 'Acción  No 1.3.3.3 Evaluación de las áreas de importancia estratégica para la conservación de los recursos hídricos',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 1,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity39 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct40,
                    'name' => 'Acción  No 1.3.3.4 Áreas con restauración ',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 2,
                    'goal' => 2,
                    'weighing' => 24,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity40 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct41,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity41 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective15,
                    'product_id' =>$idobjectiveproduct42,
                    'name' => 'Acción 1.3.4.1. Áreas con restauración ',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 2,
                    'goal' => 2,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity42 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective15,
                    'product_id' =>$idobjectiveproduct43,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity43 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective16,
                    'product_id' =>$idobjectiveproduct44,
                    'name' => 'Acción No 2.2.1.1. Formulación de 3 planes de ordenación de cuencas POMCA',
                    'goal_1' => 40,
                    'goal_2' => 20,
                    'goal_3' => 26.7,
                    'goal_4' => 13.3,
                    'goal' => 100,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity44 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective16,
                    'product_id' =>$idobjectiveproduct45,
                    'name' => ' Acción No 2.2.1.2. Implementación de Planes de',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 4,
                    'goal' => 4,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity45 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective16,
                    'product_id' =>$idobjectiveproduct46,
                    'name' => ' Acción No 2.1.1.3. Implementación de acciones para el manejo, conservación y preservación de las cuencas',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 1,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity46 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective16,
                    'product_id' =>$idobjectiveproduct47,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity47 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective17,
                    'product_id' =>$idobjectiveproduct48,
                    'name' => 'Acción 2.1.2.1. Formulacion del POMCA Rio Sucio Alto',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 7,
                    'goal_4' => 0,
                    'goal' => 7,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity48 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective17,
                    'product_id' =>$idobjectiveproduct49,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity49 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective18,
                    'product_id' =>$idobjectiveproduct50,
                    'name' => 'Acción No 2.1.3.1. Desarrollo de las fases prospectiva y formulación',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 2,
                    'goal' => 2,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity50 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective18,
                    'product_id' =>$idobjectiveproduct51,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity51 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective19,
                    'product_id' =>$idobjectiveproduct52,
                    'name' => ' Acción No 2.2.2.1 PMA del acuífero golfo de Urabá actualizado y adoptado',
                    'goal_1' => 100,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity52 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective19,
                    'product_id' =>$idobjectiveproduct53,
                    'name' => '  Acción No 2.1.3.2 PMA del acuífero golfo de Urabá ',
                    'goal_1' => 0,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 2,
                    'goal' => 6,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity53 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective19,
                    'product_id' =>$idobjectiveproduct54,
                    'name' => '  Acción No 2.2.2.2. Acciones de manejo y monitoreo del acuífero',
                    'goal_1' => 100,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity54 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective19,
                    'product_id' =>$idobjectiveproduct55,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity55 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective20,
                    'product_id' =>$idobjectiveproduct56,
                    'name' => 'Acción No 2.1.4.1. Ampliación de la red de monitoreo',
                    'goal_1' => 0,
                    'goal_2' => 12,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 12,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity56 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective20,
                    'product_id' =>$idobjectiveproduct57,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity57 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective21,
                    'product_id' =>$idobjectiveproduct58,
                    'name' => 'Acción No 2.1.6.1. PMA de los acuiferos del Golfo de Urabá',
                    'goal_1' => 0,
                    'goal_2' => 4,
                    'goal_3' => 2,
                    'goal_4' => 0,
                    'goal' => 6,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity58 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective21,
                    'product_id' =>$idobjectiveproduct59,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity59 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective22,
                    'product_id' =>$idobjectiveproduct60,
                    'name' => 'Acción No 2.1.6.1. PMA de los acuiferos del Golfo de Urabá',
                    'goal_1' => 8,
                    'goal_2' => 0,
                    'goal_3' => 4,
                    'goal_4' => 8,
                    'goal' => 20,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity60 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective22,
                    'product_id' =>$idobjectiveproduct61,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity61 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective23,
                    'product_id' =>$idobjectiveproduct62,
                    'name' => 'Acción No 2.2.2.1  Planificación, regulación y administración del Recurso hídrico',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 93.33,
                    'goal_4' => 100,
                    'goal' => 393.33,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity62 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective23,
                    'product_id' =>$idobjectiveproduct63,
                    'name' => ' Acción No 2.2.2.2  Seguimiento a la calidad y cantidad del recuro hidrico superficial',
                    'goal_1' => 0,
                    'goal_2' => 100,
                    'goal_3' => 80,
                    'goal_4' => 100,
                    'goal' => 280,
                    'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity63 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective23,
                    'product_id' =>$idobjectiveproduct64,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity64 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective24,
                    'product_id' =>$idobjectiveproduct65,
                    'name' => 'Acción N° 2.2.2.1. Plan de ordenamiento del recurso hídrico (PORH) adoptados para los principales tributarios del río León',
                    'goal_1' => 30,
                    'goal_2' => 70,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity65 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective24,
                    'product_id' =>$idobjectiveproduct66,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity66 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective25,
                    'product_id' =>$idobjectiveproduct67,
                    'name' => 'Acción N° 2.2.3.1. Plan de ordenamiento del recurso hídrico (PORH)  del río Turbo',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 40,
                    'goal_4' => 60,
                    'goal' => 100,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity67 = DB::getPdo()->lastInsertId();
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective25,
                    'product_id' =>$idobjectiveproduct68,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity68 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective26,
                    'product_id' =>$idobjectiveproduct69,
                    'name' => 'Acción  No. 2.2.4.1. Elaboracion de dos documentos ',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 2,
                    'goal_4' => 0,
                    'goal' => 2,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity69 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective26,
                    'product_id' =>$idobjectiveproduct70,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity70 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective27,
                    'product_id' =>$idobjectiveproduct71,
                    'name' => 'Acción No. 3.1.1.1. Cofinanciación de proyectos de saneamiento de PTAR',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 3,
                    'goal' => 5,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity71 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective27,
                    'product_id' =>$idobjectiveproduct72,
                    'name' => 'Acción No. 3.1.1.2. Cofinanciación de proyectos de saneamiento -Unisafas',
                    'goal_1' => 1,
                    'goal_2' => 2,
                    'goal_3' => 3,
                    'goal_4' => 6,
                    'goal' => 12,
                    'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity72 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective27,
                    'product_id' =>$idobjectiveproduct73,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity73 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective28,
                    'product_id' =>$idobjectiveproduct74,
                    'name' => 'Acción No 3.1.2.1 Abastecimiento de comunidades étnicas',
                    'goal_1' => 1,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 11,
                    'goal' => 16,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity74 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective28,
                    'product_id' =>$idobjectiveproduct75,
                    'name' => 'Acción No 3.1.2.2 Implementación de estufas eficientes y huertos leñeros',
                    'goal_1' => 0,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 300,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity75 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective28,
                    'product_id' =>$idobjectiveproduct76,
                    'name' => 'Acción No 3.1.2.3 Seguimiento a la implementación de los PGIR',
                    'goal_1' => 100,
                    'goal_2' => 3,
                    'goal_3' => 1,
                    'goal_4' => 2,
                    'goal' => 106,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity76 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective28,
                    'product_id' =>$idobjectiveproduct77,
                    'name' => 'Acción No 3.1.2.4 Apoyo a la implementación de PGIRS',
                    'goal_1' => 1,
                    'goal_2' => 0,
                    'goal_3' => 50,
                    'goal_4' => 0,
                    'goal' => 51,
                    'weighing' => 24,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity77 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective28,
                    'product_id' =>$idobjectiveproduct78,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity78 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective29,
                    'product_id' =>$idobjectiveproduct79,
                    'name' => 'Acción 3.1.3.1. Numero de estufas eficientes asociados a huertos leñeros implementados',
                    'goal_1' => 150,
                    'goal_2' => 250,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 400,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity79 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective29,
                    'product_id' =>$idobjectiveproduct80,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity80 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective30,
                    'product_id' =>$idobjectiveproduct81,
                    'name' => 'Acción No N. 3.2.1.1. Formulación del Plan Regional de Cambio Climático y Paz',
                    'goal_1' => 100,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity81 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective30,
                    'product_id' =>$idobjectiveproduct82,
                    'name' => ' Acción No N. 3.2.1.2. Implementación del Plan Regional de Cambio Climático y Paz',
                    'goal_1' => 0,
                    'goal_2' => 10,
                    'goal_3' => 10,
                    'goal_4' => 10,
                    'goal' => 30,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity82 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective30,
                    'product_id' =>$idobjectiveproduct83,
                    'name' => 'Acción No N. 3.2.1.3. Asesoría y/o asistencia a los municipios en la elaboración de Planes de adaptación y mitigación al cambio climático',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity83 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective30,
                    'product_id' =>$idobjectiveproduct84,
                    'name' => 'Acción No N. 3.2.1.4. Acompañamiento y asesoría al 100% de los CMGR',
                    'goal_1' => 19,
                    'goal_2' => 19,
                    'goal_3' => 19,
                    'goal_4' => 19,
                    'goal' => 76,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity84 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective30,
                    'product_id' =>$idobjectiveproduct85,
                    'name' => ' Acción No N. 3.2.1.5. Actualización e Implementación  del plan de contingencia del fenómeno de El Niño y La Niña (incluye incendios forestales)',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity85 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective30,
                    'product_id' =>$idobjectiveproduct86,
                    'name' => 'Acción No N. 3.2.1.6. Cofinanciación de la limpieza y la restauracion ecologica en inmedicaciones de la cuenca del rio León: Canal El Chorro del rio Surquí, sectores Palo Pelao y Aguas Negras',
                    'goal_1' => 0,
                    'goal_2' => 5.1,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 5.1,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity86 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective30,
                    'product_id' =>$idobjectiveproduct87,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity87 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective31,
                    'product_id' =>$idobjectiveproduct88,
                    'name' => 'Acción 3.2.2.1. Jarillón para el control de inundaciónes construido',
                    'goal_1' => 1,
                    'goal_2' => 4000,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 4001,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity88 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective31,
                    'product_id' =>$idobjectiveproduct89,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity89 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective32,
                    'product_id' =>$idobjectiveproduct90,
                    'name' => 'Acción No  3.3.1.1 Acompañamiento a sectores productivos que apoyan la reconversión de los sistemas sostenibles de producción',
                    'goal_1' => 100,
                    'goal_2' => 2,
                    'goal_3' => 1,
                    'goal_4' => 2,
                    'goal' => 105,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity90 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective32,
                    'product_id' =>$idobjectiveproduct91,
                    'name' => 'Acción No  3.3.1.2. Plan regional de fortalecimiento a iniciativas de negocios verdes',
                    'goal_1' => 20,
                    'goal_2' => 40,
                    'goal_3' => 40,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity91 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective32,
                    'product_id' =>$idobjectiveproduct92,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity92 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective33,
                    'product_id' =>$idobjectiveproduct93,
                    'name' => ' Acción No  3.3.2.1. Proyecto piloto de evaluación de la línea base de suelos degradados',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity93 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective33,
                    'product_id' =>$idobjectiveproduct94,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 1,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity94 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective34,
                    'product_id' =>$idobjectiveproduct95,
                    'name' => 'Acción No 3.3.2.1. Fortalecimiento de negocios verdes',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 1,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity95 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective34,
                    'product_id' =>$idobjectiveproduct96,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity96 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective35,
                    'product_id' =>$idobjectiveproduct97,
                    'name' => '  Acción No. 4.1.1.1.  Municipios apoyados en la gestión territorial ambiental',
                    'goal_1' => 8,
                    'goal_2' => 3.5,
                    'goal_3' => 100,
                    'goal_4' => 5.5,
                    'goal' => 117,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity97 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective35,
                    'product_id' =>$idobjectiveproduct98,
                    'name' => ' Acción No. 4.1.1.2 Territorios étnicos apoyados en el ordenamiento ambiental del territorio',
                    'goal_1' => 5,
                    'goal_2' => 6,
                    'goal_3' => 1,
                    'goal_4' => 7,
                    'goal' => 19,
                    'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity98 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective35,
                    'product_id' =>$idobjectiveproduct99,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity99 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective36,
                    'product_id' =>$idobjectiveproduct100,
                    'name' => 'Acción No. 4.1.2.1 Implementación del SGC',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity100 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective36,
                    'product_id' =>$idobjectiveproduct101,
                    'name' => ' Acción No. 4.1.2.1  Fortalecimiento tecnológico y de sistemas',
                    'goal_1' => 2,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 2,
                    'goal' => 8,
                    'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity101 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective36,
                    'product_id' =>$idobjectiveproduct102,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity102 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective37,
                    'product_id' =>$idobjectiveproduct103,
                    'name' => ' Acción No. 4.1.3.1 Desarrollo de estrategias ambientales que apoyen la construcción de Paz',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 1,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity103 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective37,
                    'product_id' =>$idobjectiveproduct104,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity104 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective38,
                    'product_id' =>$idobjectiveproduct105,
                    'name' => 'Acción No. 4.1.4.1 Plan de fortalecimiento técnico y administrativo del laboratorio de aguas ',
                    'goal_1' => 25,
                    'goal_2' => 25,
                    'goal_3' => 25,
                    'goal_4' => 25,
                    'goal' => 100,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity105 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective38,
                    'product_id' =>$idobjectiveproduct106,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity106 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective39,
                    'product_id' =>$idobjectiveproduct107,
                    'name' => ' Acción No. 4.1.5.1 Operación del Hogar de paso',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity107 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective39,
                    'product_id' =>$idobjectiveproduct108,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity108 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective40,
                    'product_id' =>$idobjectiveproduct109,
                    'name' => 'Acción 4.1.6.1. Mejoramiento de instalaciones',
                    'goal_1' => 50,
                    'goal_2' => 50,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity109 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective40,
                    'product_id' =>$idobjectiveproduct110,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity110 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective41,
                    'product_id' =>$idobjectiveproduct111,
                    'name' => 'Acción No. 4.1.7.1 Actualización de determinantes ambientales y Seguimiento al cumplimiento de los asuntos ambientales de los POT y planes parciales ',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity111 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective41,
                    'product_id' =>$idobjectiveproduct112,
                    'name' => ' Acción No. 4.1.7.2 Articulación del SIA Regional con el SIAC',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity112 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective41,
                    'product_id' =>$idobjectiveproduct113,
                    'name' => 'Acción No. 4.1.7.3 Sgto, control y vigilancia al uso y manejo de los recursos naturales y el medio ambientales',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity113 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective41,
                    'product_id' =>$idobjectiveproduct114,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity114 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective42,
                    'product_id' =>$idobjectiveproduct115,
                    'name' => 'Acción 4.1.8.1. fortalecimiento tecnológico de la plataforma de red de datos, de energía y seguridad informática',
                    'goal_1' => 100,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity115 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective42,
                    'product_id' =>$idobjectiveproduct116,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity116 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective43,
                    'product_id' =>$idobjectiveproduct117,
                    'name' => 'Acción No. 4.2.1.1 Aplicación de la política de educación ambiental ',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity117 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective43,
                    'product_id' =>$idobjectiveproduct118,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity118 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective44,
                    'product_id' =>$idobjectiveproduct119,
                    'name' => 'Acción No. 4.2.2.1 Implementacion de una estrategia de comunicación y participacion en la jurisdicción',
                    'goal_1' => 0,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 300,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity119 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective44,
                    'product_id' =>$idobjectiveproduct120,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity120 = DB::getPdo()->lastInsertId();
					
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>1,
						'value' => 100,
						'description' => 'Seguimiento y control aprovechamientos forestales en Vigía del Fuerte y Murindó a través de los Consejos Comunitarios. Capacitación a líderes comunitarios en manejo forestal y ajuste de reglamentos de aprovechamiento forestal en el Consejo Comunitario PDI',
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
						'value' => 30,
						'description' => 'Se desarrollan 5 acciones en el marco del IMG:
					planificación y ordenamiento de la UAC DARIEN. Gestión de zonas costeras. Articulación con entes territoriales en el MIZSC. Educación y participación. Gestión de información. ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia9 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>1,
						'value' => 100,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia10 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>1,
						'value' => 4,
						'description' => 'Las cuatros acciones fueron desarrolladas en: 

					Acciones en educación ambiental
					 
					Promoción de la conservación

					Articulación Interinstitucional

					Ordenamiento Territorial',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia11 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia12 = DB::getPdo()->lastInsertId(); 

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
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia16 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>1,
						'value' => 100,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia17 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>1,
						'value' => 50,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia19 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia21 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia24 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia26 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>1,
						'value' => 5,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia27 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>1,
						'value' => 92,
						'description' => '5 campañas de monitoreo realizada en 27 estaciones ',
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
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia30 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>1,
						'value' => 100,
						'description' => 'En las 1872 Has se realizaron acciones de: alinderamiento, instalación de mojones, guardabosques, vallas y talleres. Adicionalmente se realizaron actividades similares en 130 has del predio El Silencio de Uramita.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia31 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>1,
						'value' => 111.5,
						'description' => 'Seapoya la conservacion de 845 Ha en las territoriales Centro y Nutibara y se fomenta la restuarcion en 92 has.  Para la vigencia del PAI deberá mantenerse esta´área en conservacion y restauración.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia32 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>1,
						'value' => 383,
						'description' => 'Se realizó mantenimiento a 383 Has en Turbo, Abriaquí y Urrao',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia33 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>1,
						'value' => 111.5,
						'description' => 'Se realizó implemententacion de directrices de la ordenacion forestal en las tres unidades ordenadas, relacionadas con calsificacion, especies vedadas, directrices de manejo y orientaciones socilaes para un total de 1.069.534 has. ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia34 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia36 = DB::getPdo()->lastInsertId(); 




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
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia43 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>1,
						'value' => 29,
						'description' => '100% Fase de aprestamiento POMCAS Río Sucio, Río Turbo- Currulao y Río León. 

					50% fase diagnóstico cuenca rio Turbo-Currulao. 

					10% fase aprestamiento cuenca Río León.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia44 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia47 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia49 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia51 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>1,
						'value' => 100,
						'description' => 'Plan de manejo con 10 proyectos estructurado, mesa de trabajo para la ejecución del PM con 36 actores interinstitucionales y un plan adoptado por Acto administrativo',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia52 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>1,
						'value' => 100,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia54 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>1,
						'value' => 1,
						'description' => 'Establecidos 6 piezómetros en Apartadó y Turbo',
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
						'activity_id' => $idactivity59,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia59 = DB::getPdo()->lastInsertId(); 

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
						'value' => 100,
						'description' => 'Se facturó Tasas por Uso y Tasas retributivas a 482 usuarios.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia62 = DB::getPdo()->lastInsertId(); 

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
						'value' => 30,
						'description' => 'Diagnóstico de la situación actual de cuerpo de agua en ordenamiento, potencialidades, conflictos y restricciones del mismo. ',
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
						'activity_id' => $idactivity68,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia68 = DB::getPdo()->lastInsertId(); 

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
						'value' => 1,
						'description' => 'Cofinanciación de colector caño Bohios - Chigorodó',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia71 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>1,
						'value' => 1,
						'description' => 'Cofinanciado proyecto de 30 Unisafas en las veredas el Tigre y Angelito, municipio Uramita',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia72 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia73 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>1,
						'value' => 1,
						'description' => 'Estudios de fuentes alternativa de aguas de abastecimiento para las comunidades étnicas',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia74 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>1,
						'value' => 100,
						'description' => 'Seguimiento al 100% de los PGIRS',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia76 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity77,
						'year' =>1,
						'value' => 1,
						'description' => 'Apoyado implementación del PGIRS del municipio de Peque.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia77 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia78 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>1,
						'value' => 80,
						'description' => 'Realizado 80 huertos leñeros de 200 m2 cada uno, proceso de socialización y convenios, pendiente las estufas eficientes asocadas a estos huertos. En gestión la construcción de las estufas',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia79 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia80 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity81,
						'year' =>1,
						'value' => 100,
						'description' => 'Formulado el plan y socializado resultado a los actores regionales. ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia81 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity83,
						'year' =>1,
						'value' => 100,
						'description' => 'Asesorado la totalidad de los municipios en capacitaciones, socialización de lineamientos del plan de cambio climático y asesoría ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia83 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity84,
						'year' =>1,
						'value' => 19,
						'description' => 'Realizado acompañamiento a la totalidad de los CMGR en coordinación con el DAPARD',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia84 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>1,
						'value' => 100,
						'description' => 'Formulado e implementado dos planes:  plan de contingencia del fenómeno del Niño y la Niña',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia85 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia87 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity89,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia89 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>1,
						'value' => 100,
						'description' => 'Se acompaño al Sector Cafetero en la territorial Nutibara',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia90 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity91,
						'year' =>1,
						'value' => 20,
						'description' => 'Realizado diagnóstico de iniciativas de Negocios Verdes, Evaluación y premiación de iniciativas. Foro regional de Negocios Verdes. Feria agroindustrial',
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
						'activity_id' => $idactivity96,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia96 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity97,
						'year' =>1,
						'value' => 8,
						'description' => 'Realizada ocho acciones de gestión ambiental urbana en Apartadó, Turbo, Carepa, Arboletes, Chigorodó. ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia97 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity98,
						'year' =>1,
						'value' => 5,
						'description' => 'Apoyados en ordenamiento ambiental los resguardos: Las Playas, Polines, Yaveraradó, Jaikerazabi y Chontadural Cañero',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia98 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity99,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia99 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity100,
						'year' =>1,
						'value' => 100,
						'description' => 'Auditoria del IDEAM para el Laboratorio, 30 funcionarios capacitados en norma ISO 9001:2015, Programa de auditoria interna implementado, desarrollada auditoria externa del ICONTEC. ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia100 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity101,
						'year' =>1,
						'value' => 2,
						'description' => 'Fortalecida áreas técnicas y de sistemas ycon actualziacion del sitio web, soporte de red y seguridad informática y mantenimineineto de equipos. ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia101 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity102,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia102 = DB::getPdo()->lastInsertId(); 

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
						'value' => 25,
						'description' => 'Desarrollado Plan de calibración y mantenimiento. Adquisición de equipos para medición de turbiedad y cloro residual. Auditoria del IDEA. ',
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
						'value' => 100,
						'description' => 'Atención y valoracion de 865 especimenes que ingresan al Hogar de Paso, que se encuentran en estado de amenaza y/o peligro de extinción',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia107 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity108,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia108 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity109,
						'year' =>1,
						'value' => 25,
						'description' => 'Obras civiles de excavaciones, envarillado de soporte para cimientos en 281 Mts',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia109 = DB::getPdo()->lastInsertId(); 
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
						'value' => 100,
						'description' => 'Seguimiento y apoyo al 100% de los municipios en la revisión de la aplicación de los determinantes y asuntos ambientales',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia111 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity112,
						'year' =>1,
						'value' => 87,
						'description' => 'Actualizados los modulos de: SIRH,  y SIUR con RUA y RESPEL',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia112 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity113,
						'year' =>1,
						'value' => 115.7,
						'description' => 'Del 80% de sgtos a autorizaciones, permisos ambientales se ha hecho seguimiento al 80% del 80%, para un total del 64%',
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
						'description' => 'Acciones desarrolladas: Red de datos, red de energía, sistema de filtro de contenidos, seguridad perimetral implementadas',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia115 = DB::getPdo()->lastInsertId(); 
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
						'description' => 'Apoyado 26 PROCEDAS, 4 PRAES, y 8 CIDEAM',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia117 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity118,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia118 = DB::getPdo()->lastInsertId(); 

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
						'value' => 2.7,
						'description' => 'Esta meta se eliminó por acuerdo Acuerdo N° 100-02-02-01-013-2017
					19 de octubre  de 2017,',
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
						'activity_id' => $idactivity8,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia128 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>2,
						'value' => 10,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia129 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>2,
						'value' => 107,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia130 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>2,
						'value' => 4,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia131 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia132 = DB::getPdo()->lastInsertId(); 

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
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia136 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>2,
						'value' => 52.5,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia137 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>2,
						'value' => 10,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia138 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>2,
						'value' => 5,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia139 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia141 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>2,
						'value' => 10,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia142 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia144 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia146 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>2,
						'value' => 66.5,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia147 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>2,
						'value' => 5,
						'description' => '',
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
						'activity_id' => $idactivity30,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia150 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>2,
						'value' => 100,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia151 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>2,
						'value' => 128.98,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia152 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>2,
						'value' => 242,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia153 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>2,
						'value' => 10,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia154 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia156 = DB::getPdo()->lastInsertId(); 




					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia161 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia163 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>2,
						'value' => 25,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia164 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia167 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia169 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia171 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>2,
						'value' => 2,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia173 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia175 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>2,
						'value' => 14,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia176 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia177 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>2,
						'value' => 4,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia178 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia179 = DB::getPdo()->lastInsertId(); 

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
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia182 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>2,
						'value' => 100,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia183 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia184 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>2,
						'value' => 70,
						'description' => '',
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
						'activity_id' => $idactivity68,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia188 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia190 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia191 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>2,
						'value' => 3,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia192 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia193 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>2,
						'value' => 2,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia194 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>2,
						'value' => 100,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia195 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>2,
						'value' => 3,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia196 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia198 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>2,
						'value' => 330,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia199 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia200 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>2,
						'value' => 10,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia202 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity83,
						'year' =>2,
						'value' => 100,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia203 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity84,
						'year' =>2,
						'value' => 19,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia204 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>2,
						'value' => 100,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia205 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity86,
						'year' =>2,
						'value' => 5.1,
						'description' => '',
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
						'value' => 4000,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia208 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity89,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia209 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>2,
						'value' => 2,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia210 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity91,
						'year' =>2,
						'value' => 40,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia211 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity92,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia212 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity94,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia214 = DB::getPdo()->lastInsertId(); 

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
						'value' => 3.5,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia217 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity98,
						'year' =>2,
						'value' => 6,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia218 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity99,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia219 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity100,
						'year' =>2,
						'value' => 100,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia220 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity101,
						'year' =>2,
						'value' => 2,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia221 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity102,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia222 = DB::getPdo()->lastInsertId(); 

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
						'value' => 25,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia225 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity106,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia226 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity107,
						'year' =>2,
						'value' => 100,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia227 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity108,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia228 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity109,
						'year' =>2,
						'value' => 50,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia229 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity110,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia230 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity111,
						'year' =>2,
						'value' => 100,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia231 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity112,
						'year' =>2,
						'value' => 100,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia232 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity113,
						'year' =>2,
						'value' => 49.15,
						'description' => '',
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
						'activity_id' => $idactivity116,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia236 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity117,
						'year' =>2,
						'value' => 100,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia237 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity118,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia238 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity119,
						'year' =>2,
						'value' => 100,
						'description' => '',
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
						'value' => 10,
						'description' => 'Formulado los POMCAS de los rios León y Turbo Currulao',
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
						'value' => 100,
						'description' => '',
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
						'description' => '',
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
						'activity_id' => $idactivity10,
						'year' =>3,
						'value' => 28.33,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia250 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>3,
						'value' => 4,
						'description' => '',
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
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia256 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>3,
						'value' => 5,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia257 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>3,
						'value' => 95,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia259 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia261 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>3,
						'value' => 30,
						'description' => '',
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
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia264 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia266 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>3,
						'value' => 100,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia267 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>3,
						'value' => 95,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia268 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia269 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia270 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>3,
						'value' => 100,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia271 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>3,
						'value' => 93.78,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia272 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>3,
						'value' => 10,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia273 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia276 = DB::getPdo()->lastInsertId(); 




					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia281 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia283 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>3,
						'value' => 26.7,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia284 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia287 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>3,
						'value' => 7,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia288 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia289 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia291 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>3,
						'value' => 2,
						'description' => 'Evaluación de 268 tramites de aguas subterráneas. Monitoreo de niveles 103 pozos. Monitoreo de calidad 168 pozos. ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia293 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia295 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia297 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>3,
						'value' => 2,
						'description' => 'Defiinción de mapas en la zona de recarga. Definición marco normativo',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia298 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia299 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>3,
						'value' => 1.2,
						'description' => 'Actualización de lneamiento técnicos para exploración y explotación del recurso aguas subterráneas. Definición de medidas para mitigar efectos de contaminación',
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
						'value' => 100,
						'description' => 'Realizado seguimiento al 100% de los PSMV de los municipios de la jurisdicción',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia302 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>3,
						'value' => 100,
						'description' => 'Red de monitoreo con 119 estaciones en 50 cuerpos de agua',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia303 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia304 = DB::getPdo()->lastInsertId(); 

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
						'value' => 40,
						'description' => '
					• Análisis de información disponible.
					• Ubicación del cuerpo de agua.
					• Delimitar el área de trabajo.
					• Revisión del estado de redes de monitoreo.
					• Identificación y revisión de instrumentos de planificación ambiental e información existente.
					• Clasificación de información para el Registro de Usuarios del Recurso Hídrico.
					• Identificación de usos existentes del recurso hídrico y obras hidráulicas en el cuerpo de agua.
					• Revisión y análisis de quejas.
					• Análisis de la distribución y tamaño de predios.
					• Estrategia de participación.

					',
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
						'value' => 0.2,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia309 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia310 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>3,
						'value' => 6,
						'description' => 'Apoyado proyecto UNISAFAS  Vigia del Fuerte, San Pedro de Urabá, Cañasgordas, Giraldo,Turbo y Necoclí',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia312 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia313 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>3,
						'value' => 2,
						'description' => 'Apyoyado acueductos de Taparales (Dabeiba) y Guapá (Chigorodó)',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia314 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>3,
						'value' => 100,
						'description' => 'Seguimiento al 100% de los PGIRS municipales.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia315 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>3,
						'value' => 1,
						'description' => 'Apoyado municipio de Giraldo con el programa de educación ambiental',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia316 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity77,
						'year' =>3,
						'value' => 47,
						'description' => 'Desarrollado 47 estufas asociadas a huertos leñeros en municipios de Giraldo y Cañasgordas',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia317 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia318 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia320 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>3,
						'value' => 10,
						'description' => 'Implementado el 10% del plan Clima y Paz',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia322 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity83,
						'year' =>3,
						'value' => 100,
						'description' => 'Asesoria personalizada a cada administración municipal en temas de cambio climático',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia323 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity84,
						'year' =>3,
						'value' => 19,
						'description' => 'Asistida y asesorado el 100% de los CMGR con la asistencia permanente de un funcionario por municipio',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia324 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>3,
						'value' => 100,
						'description' => 'Plan contingencia para temporada de lluvias y temporadas secas. Apoyada en capacitación de 32 bomberos. Seguimiento y monitoreo en la emergencia de Hidroituango . Peque',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia325 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia327 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity89,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia329 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>3,
						'value' => 1,
						'description' => 'Apoyado el sector panelero con la construcción de 25 modulos de compostaje en el municipio de Frontino',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia330 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity91,
						'year' =>3,
						'value' => 40,
						'description' => 'Desarrollada la feria regional de negocios verdes y formadas empresarialmente a 30 iniciativas de negocios verdes',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia331 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity92,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia332 = DB::getPdo()->lastInsertId(); 



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
						'value' => 125,
						'description' => 'Acciones apoyadas de gestión ambiental urbana, seguimiento a los planes parciales, y POT - componente ambiental. Acompañados 19 CMGRD. Seguimiento al recurso hídrico de las áreas suburbanas. Acompañamiento en campas de residuos sólidos. Seguimiento residuos peligrosos RESPEL. Apoyados PRAES urbanos de Apartadó, Turbo  ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia337 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity98,
						'year' =>3,
						'value' => 1,
						'description' => 'Se apoyó el ordenamiento ambiental indigena en los resguardos de Chigorodó y Mutatá',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia338 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity99,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia339 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity100,
						'year' =>3,
						'value' => 100,
						'description' => 'Capacitación a 30 funcionarios en ISO 9001 del 2015. Cumplimiento del 90% del IEDI. Renovada la certificación en ISO 9000: 2015',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia340 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity101,
						'year' =>3,
						'value' => 2,
						'description' => 'Apoyadas las áreas de Secretaría General y Sistemas',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia341 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity102,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia342 = DB::getPdo()->lastInsertId(); 

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
						'value' => 25,
						'description' => 'Facturado 670.099.768 pesos con un incremento de 8,5% con respecto al año 2017. Participación en pruebas de desempeño y calibración PICCAP. Renovación de la acreditación del Laboratorio',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia345 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity106,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia346 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity107,
						'year' =>3,
						'value' => 100,
						'description' => 'Recolectados 1117,3 kilogramos de caracol africano:  762,3 kilogramos en Cañasgordas y 355 kilogramdos en Turbo',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia347 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity108,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia348 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity110,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia350 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity111,
						'year' =>3,
						'value' => 100,
						'description' => 'Seguimiento al 100% de los asuntos de POT. Asesorados en la actualización de determinantes ambientales. Seguimiento a 30 planes parciales',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia351 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity112,
						'year' =>3,
						'value' => 99,
						'description' => 'Habilitados seís modulos del SIAC',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia352 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity113,
						'year' =>3,
						'value' => 44.25,
						'description' => '',
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
						'activity_id' => $idactivity116,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia356 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity117,
						'year' =>3,
						'value' => 100,
						'description' => 'Apoyados 10 PRAES de Apartadó, Carepa, Chigrodó y Turbo. Apoyado 8 CIDEAM de Abriaquí, Apartadó, Carepa, Cañasgordas, Frontino, Mutatá y Urrao. Apoyados 6 PROCEDAS EN Apartadó, Necoclí, Cañasgordas, Mutatá y Carepa.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia357 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity118,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia358 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity119,
						'year' =>3,
						'value' => 100,
						'description' => '551 publicaciones. Implementación de la Estrategia 100% en la jurisdicción. Eventos 50 años de vida institucional',
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
						'value' => 4,
						'description' => 'Restauración pasiva de 91 has bajo esquema PSA, beneficiando 91 familias de comunidades de Belén (31 familias) e Isleta (60 familias) de Vigía del Fuerte',
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
						'value' => 100,
						'description' => 'Acciones en: Articulación interinstitucional. Gestión Ambiental. Educación y participación. Gestión en Conocimiento de información. ',
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
						'value' => 100,
						'description' => 'Se avanzó con la producción del material vegetal de 150 Has en Vigía del Fuerte y Murindó. Capacitación Consejos Comunitarios. ',
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
						'value' => 100,
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
						'activity_id' => $idactivity10,
						'year' =>4,
						'value' => 57,
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
						'activity_id' => $idactivity14,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia374 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>4,
						'value' => 11,
						'description' => 'Se ejecuta a través de tres líneas: educación ambiental, culminado establecimiento de plantaciones forestales de 50 Has, implementación PSA',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia375 = DB::getPdo()->lastInsertId(); 
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
						'value' => 52.5,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia377 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>4,
						'value' => 2,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia380 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia381 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia384 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>4,
						'value' => 10,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia385 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia386 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>4,
						'value' => 52,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia387 = DB::getPdo()->lastInsertId(); 

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
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia390 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>4,
						'value' => 100,
						'description' => 'Acciones de control y vigilancia con guardabosques para 1872 Has. Adicionalmente se reciben 4 predios por Compensación obligatoria de 211,8 Has en Turbo y Necoclí (4 proyectos de vías Licenciados por ANLA)',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia391 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>4,
						'value' => 142.69,
						'description' => 'Superada la meta del año, se restauraron 2842,87 Has bajo la estrategia Banco 2 en los municipios de Apartadó, Arboletes, Frontino, San Pedro de Urabá, San Juan de Urabá, Necoclí, Turbo, Vigía del Fuerte y Uramita',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia392 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>4,
						'value' => 160,
						'description' => 'Realizado seguimiento a 160 Has en san Juan de Urabá, Necoclí, Turbo, Apartadó y Carepa. ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia393 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>4,
						'value' => 10,
						'description' => 'Diplomados para 43 Jueces y Fiscales. Convenios con Cabildos Indigenas Chigorodó y Mutatá. Participación del CIFFA departamental. Apoyo promotores Ambientales en Peque y San Pedro de Urabá. Educación ambiental, entre otros',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia394 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia396 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>4,
						'value' => 30,
						'description' => '30 Has en Apartadó, Carepa, Chigordó y Turbo',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia397 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>4,
						'value' => 100,
						'description' => 'Realizado modelo cartografico en escala 1:100000 para toda la jurisdicción y uno en 1:25000 para los 10 municipios objetos del proyecto',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia398 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>4,
						'value' => 1,
						'description' => 'Definidosareas para restaurar y rehabilitar por degradación de suelos. ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia399 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>4,
						'value' => 2,
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
						'value' => 2,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia402 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia403 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>4,
						'value' => 13.3,
						'description' => 'Cofinanciación de consolidación de las etapas de prospección y formulación de la cuenca Río Sucio Alto.

					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia404 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>4,
						'value' => 4,
						'description' => 'Implementado el 2% del POMCA Río Turbo - Currulao y 2% en Río León, así: fortalecidos Consejos de cuencas y diferentes organizaciones socioambientales. Educación ambiental. Delimitación de zonas recargas de acuiferos. Seguimiento acuerdos de consulta previa.  ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia405 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>4,
						'value' => 1,
						'description' => 'Implementación de 80 estufas asociado a huertos leñeros en Dabeiba. ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia406 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia407 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia409 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>4,
						'value' => 2,
						'description' => 'Realizada fases de formulación y prospectiva. Ejecución de etapas de publicidad y aprobación. Finalizadas consultas previas. ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia410 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia411 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>4,
						'value' => 2,
						'description' => 'Acompañamiento a la legalización de 21 acueductos veredales. Atención de 253 tramites y solicitudes en aguas subterráneas. 3 campañas de monitoreo de niveles a 11 pozos. Monitoreo de calidad a 68 pozos',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia413 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia415 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia417 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia419 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>4,
						'value' => 8,
						'description' => '73 actores capcitados mediante diplomado en hidroenergía. 27 proyectos capacitados en proyectos. Lineamientos para la explotación y exploración de aguas subterráneas. 6 sesiones de la mesa ambiental del acuifero - MACURA ',
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
						'value' => 100,
						'description' => 'Facturadas tasas retributivas y de uso para un total de 941 liquidaciones a usuarios, por $3.259.421.499 para Tasas Retributivas y $239.807.800 de Tasas por Uso',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia422 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>4,
						'value' => 100,
						'description' => 'Realizado monitoreo de la calidad y cantidad de 50 cuerpos de agua en 119 estaciones ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia423 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia424 = DB::getPdo()->lastInsertId(); 

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
						'value' => 60,
						'description' => 'Culminada etapas de diagnóstivo, prospectiva y formulación',
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
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia429 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia430 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>4,
						'value' => 3,
						'description' => 'Cofinanciada PTARS en los municipio de: Abriaquí (vereda Potreros), Carepa (vereda Eucalipto) y Urrao (Área urbana). ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia431 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>4,
						'value' => 6,
						'description' => '6 proyectos con 472 UNISAFAS en municipio de Apartadó, Giraldo, San Pedro Urabá, Vigía del Fuerte y Turbo',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia432 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia433 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>4,
						'value' => 11,
						'description' => '11 Comunidades con sistemas de abstecimiento de agua en Vigia del Fuerte, Necoclí, Murindó, Necoclí, San Pedro Urabá, Apartadó y Turbo',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia434 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>4,
						'value' => 100,
						'description' => 'Seguimiento PGIRS de todos los municipios de la jurisdicción. ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia435 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>4,
						'value' => 2,
						'description' => 'Apoyado municipios: Mutatá (apoyo programa separación residuos sólidos en la fuente y Giraldo (acciones de educación ambiental)',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia436 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia438 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia440 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>4,
						'value' => 10,
						'description' => 'Asesoría da totalidad de los municipios en temas de cambio climático, Se apoyó al municipio de Necoclí en el ajuste del PBOT bajo el esquema de riesgo y cambio climático',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia442 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity83,
						'year' =>4,
						'value' => 100,
						'description' => 'Asesorados y capacitados a los 19 municipios en materia de gestión del riesgo. Acompañamiento a CMGRD.   ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia443 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity84,
						'year' =>4,
						'value' => 19,
						'description' => 'Medidas de planificación para tempradas de lluvias y periodos secos. Capacitación en gestión del riesgo y atención incendios forestales. 13 acompañamientos en la atención de eventos de amenazas y riesgos. Suministro de 280 tanques de abastecimiento de aguas en fenómeno del niño en comunidades étnicas. Apoyados y fortalecidos de 4 bomberos',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia444 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia445 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia447 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity89,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia449 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>4,
						'value' => 2,
						'description' => 'Realizado acompañamiento al sector cacaotero del municipio de Apartadó. Apoyado sector panelero en municipio de Frontino',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia450 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity92,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia452 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity95,
						'year' =>4,
						'value' => 1,
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
						'value' => 5.5,
						'description' => 'Seguimiento a la política ambiental urbana mediante 8 acciones. ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia457 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity98,
						'year' =>4,
						'value' => 7,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia458 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity99,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia459 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity100,
						'year' =>4,
						'value' => 100,
						'description' => 'Apoyado 13 territorios Indígenas en los municipios de: Apartadó, Chigorodó, Mutatá, Vigía del Furte, Necoclí, San Pedro Urabá, Dabeiba y Murindó',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia460 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity101,
						'year' =>4,
						'value' => 2,
						'description' => 'Capacitación por ICONTEC  27 funcionarios en gestión de salidas no conformes. Fortalecida de la primera línea de defensa relacionada con autocontrol a través de la actualización de documentos, revisión normativa, entre otros. Avances en la implementación del código de integridad.Renovada certificación ISO 9001:2015',
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
						'value' => 1,
						'description' => 'Formalizados convenios en el marco de Banco2 para realizar talleres de acompañamiento a las familias que sufrieron el conflicto armado',
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
						'value' => 25,
						'description' => 'Acreditación Laboratorio por al IDEAM con 73 parámetros. Capacitación al personal en análisis de sedimentos y granuglometría. Analizadas 4973 muestras. Inscripción en PICCAP',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia465 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity106,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia466 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity107,
						'year' =>4,
						'value' => 100,
						'description' => '700 Especímenes en peligro de extinción valoradas y atendidas. 1207 personas capacitadas sobre tráfico ilegal de especies amenazas en peligro de extinción. ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia467 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity108,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia468 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity110,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia470 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity111,
						'year' =>4,
						'value' => 100,
						'description' => 'Capacitados en determinantes ambientales 100% de los municipios',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia471 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity112,
						'year' =>4,
						'value' => 100,
						'description' => 'Implementación del SIAC en concesiones y RUA',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia472 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity113,
						'year' =>4,
						'value' => 60.11,
						'description' => 'En el año se resolvieron 8 licencias en un tiempo promedio de 100 días',
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
						'activity_id' => $idactivity116,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia476 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity117,
						'year' =>4,
						'value' => 100,
						'description' => 'Se avance con el apoyo a: 
					18PRAES. 6 CIDEAM. 15 PROCEDAS',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia477 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity118,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia478 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity119,
						'year' =>4,
						'value' => 100,
						'description' => '800 publicaciones en medios escritos y hablados. 5557seguidores en Facebook, 9478 seguidores en Twitter y 1556 en INSTAGRAM  ',
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
						'group_id' => 27,
						]);
						$idFuente1 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 90,
						'code' => '1.1.2.4.2.3',
						'name' => 'Venta de bienes y servicios',
						'description' => 'Venta de bienes y servicios',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 27,
						]);
						$idFuente2 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 70,
						'code' => '1.1.2.2.2.5.1',
						'name' => 'Venta de Servicios de Laboratorio e Información (vigencia actual)',
						'description' => 'Venta de Servicios de Laboratorio e Información (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 27,
						]);
						$idFuente6 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 58,
						'code' => '1.1.2.2.2.1.1',
						'name' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
						'description' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 27,
						]);
						$idFuente3 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 61,
						'code' => '1.1.2.2.2.2.1',
						'name' => 'Seguimiento a licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
						'description' => 'Seguimiento a licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 27,
						]);
						$idFuente4 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 79,
						'code' => '1.1.2.2.2.8.2',
						'name' => ' Arrendamientos y Otros.',
						'description' => ' Arrendamientos y Otros.',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 27,
						]);
						$idFuente5 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 79,
						'code' => '1.1.2.2.2.8.3',
						'name' => 'Otros por Venta de Bienes y Servicios',
						'description' => 'Otros por Venta de Bienes y Servicios',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 27,
						]);
						$idFuente7 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 27,
						'code' => '1.1.2.1.1.1.1.1',
						'name' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
						'description' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 27,
						]);
						$idFuente8 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 208,
						'code' => '1.2.5.1.3',
						'name' => 'Otros Convenios',
						'description' => 'Otros Convenios',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 27,
						]);
						$idFuente9 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 3,
						'code' => '1.1.1.2',
						'name' => 'Otros Aportes de Otras Entidades',
						'description' => 'Otros Aportes de Otras Entidades',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 27,
						]);
						$idFuente10 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 42,
						'code' => '1.1.2.2.1.1.1.1',
						'name' => 'Tasa retributiva (vigencia actual)',
						'description' => 'Tasa retributiva (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 27,
						]);
						$idFuente11 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 45,
						'code' => '1.1.2.2.1.1.2.1',
						'name' => 'Tasa por el uso del agua (vigencia actual)',
						'description' => 'Tasa por el uso del agua (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 27,
						]);
						$idFuente12 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 41,
						'code' => '1.1.2.2.1.1.4',
						'name' => 'Tasa compensatoria por caza de Fauna Silvestre',
						'description' => 'se dirige a las autoridades ambientales competentes a que se refiere el artículo 2.2.9.10.1 .3, y a
							léls personas naturales o jurídicas que cacen la fauna silvestre nativa en el país, en adelante denominadas usuarios',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 27,
						]);
						$idFuente13 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 48,
						'code' => '1.1.2.2.1.1.3.1',
						'name' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
						'description' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 27,
						]);
						$idFuente14 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 84,
						'code' => '1.1.2.3.1.1.1',
						'name' => 'Multas ambientales (vigencia actual)',
						'description' => 'Multas ambientales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 27,
						]);
						$idFuente15 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 79,
						'code' => '1.1.2.2.2.8.1',
						'name' => 'Otros servicios (vigencia actual)',
						'description' => 'Otros servicios (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 27,
						]);
						$idFuente16 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 145,
						'code' => '1.2.2.6',
						'name' => 'Rendimientos financieros',
						'description' => 'Rendimientos financieros',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 27,
						]);
						$idFuente17 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 136,
						'code' => '1.2.1.2',
						'name' => 'Venta de Activos',
						'description' => 'Venta de Activos',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 27,
						]);
						$idFuente18 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 145,
						'code' => '1.2.2.7',
						'name' => 'Excedentes financieros',
						'description' => 'Excedentes financieros',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 27,
						]);
						$idFuente19 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 279,
						'code' => '1.2.7.3.3.5',
						'name' => 'Cancelación de reservas Otras tasas',
						'description' => 'Cancelación de reservas Otras tasas',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 27,
						]);
						$idFuente20 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 241,
						'code' => '1.2.6.3.5',
						'name' => 'Recuperación de cartera Otras tasas',
						'description' => 'Recuperación de cartera Otras tasas',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 27,
						]);
						$idFuente21 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 250,
						'code' => '1.2.7.4',
						'name' => 'Otros recursos del balance',
						'description' => 'Otros recursos del balance',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 27,
						]);
						$idFuente22 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 119,
						'code' => '1.1.2.5.1.1.1.4',
						'name' => 'Aportes de la Nación Funcionamiento',
						'description' => 'Aportes de la Nación Funcionamiento',
						'type_id' => 23,
						'final_level' => true,
						'group_id' => 27,
						]);
						$idFuente23 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 118,
						'code' => '1.1.2.5.1.1.2',
						'name' => 'Aportes de la Nación para Inversión',
						'description' => 'Aportes de la Nación para Inversión',
						'type_id' => 23,
						'final_level' => true,
						'group_id' => 27,
						]);
						$idFuente24 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 3200000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 3200000000,
						'year' => 1,
						]);
						$idPlan1 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 540000000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 540000000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan2 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 50000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 50000000,
						'year' => 1,
						]);
						$idPlan3 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 470000000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 470000000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan4 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 1692267777,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1692267777,
						'year' => 1,
						]);
						$idPlan5 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 787000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 787000000,
						'year' => 1,
						]);
						$idPlan6 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 120000000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 120000000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan7 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 240000000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 240000000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan8 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 50000000,
						'functioning_percentage' => 56.5287,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 43.4713,
						'functioning' => 28264350,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 21735650,
						'year' => 1,
						]);
						$idPlan9 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente16,
						'value' => 200755348,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 200755348,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan10 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente17,
						'value' => 20000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 20000000,
						'year' => 1,
						]);
						$idPlan11 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente20,
						'value' => 172000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 172000000,
						'year' => 1,
						]);
						$idPlan12 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente21,
						'value' => 2370000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2370000000,
						'year' => 1,
						]);
						$idPlan13 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente22,
						'value' => 154259538,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 154259538,
						'year' => 1,
						]);
						$idPlan14 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente23,
						'value' => 3785924210,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 3785924210,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan15 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente24,
						'value' => 7976869374,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 7976869374,
						'year' => 1,
						]);
						$idPlan16 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 3400000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 3400000000,
						'year' => 2,
						]);
						$idPlan17 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 225000000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 225000000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan18 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 100000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 100000000,
						'year' => 2,
						]);
						$idPlan19 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 636100000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 636100000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan20 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 470000000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 470000000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan21 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 641461000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 641461000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan22 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 900000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 900000000,
						'year' => 2,
						]);
						$idPlan23 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 150000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 150000000,
						'year' => 2,
						]);
						$idPlan24 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 506000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 506000000,
						'year' => 2,
						]);
						$idPlan25 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 60000000,
						'functioning_percentage' => 76.384,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 23.616,
						'functioning' => 45830400,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 14169600,
						'year' => 2,
						]);
						$idPlan26 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente16,
						'value' => 125791395,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 125791395,
						'year' => 2,
						]);
						$idPlan27 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente17,
						'value' => 50000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 50000000,
						'year' => 2,
						]);
						$idPlan28 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente21,
						'value' => 2847500000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2847500000,
						'year' => 2,
						]);
						$idPlan29 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente23,
						'value' => 4263685112,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 4263685112,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan30 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente24,
						'value' => 6218777046,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 6218777046,
						'year' => 2,
						]);
						$idPlan31 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 4284760000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 4284760000,
						'year' => 3,
						]);
						$idPlan32 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 176500000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 176500000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan33 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 73500000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 73500000,
						'year' => 3,
						]);
						$idPlan34 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente5,
						'value' => 120863500,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 120863500,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan35 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 538034500,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 538034500,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan36 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 482560000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 482560000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan37 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 150000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 150000000,
						'year' => 3,
						]);
						$idPlan38 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 798800000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 798800000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan39 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 1084412000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1084412000,
						'year' => 3,
						]);
						$idPlan40 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 317817003,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 317817003,
						'year' => 3,
						]);
						$idPlan41 = DB::getPdo()->lastInsertId();
						 
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
						'year' => 3,
						]);
						$idPlan42 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 450000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 450000000,
						'year' => 3,
						]);
						$idPlan43 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 64400000,
						'functioning_percentage' => 84.785,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 15.215,
						'functioning' => 54601540,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 9798460,
						'year' => 3,
						]);
						$idPlan44 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente16,
						'value' => 129161000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 129161000,
						'year' => 3,
						]);
						$idPlan45 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente17,
						'value' => 28500000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 28500000,
						'year' => 3,
						]);
						$idPlan46 = DB::getPdo()->lastInsertId();
						 
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
						$idPlan65 = DB::getPdo()->lastInsertId();
						 


					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente21,
						'value' => 2428539000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2428539000,
						'year' => 3,
						]);
						$idPlan47 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente23,
						'value' => 4179221419,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 4179221419,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan48 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente24,
						'value' => 3448907566,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 3448907566,
						'year' => 3,
						]);
						$idPlan49 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 4605370894,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 4605370894,
						'year' => 4,
						]);
						$idPlan50 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 120539891,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 120539891,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan51 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 573302411,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 573302411,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan52 = DB::getPdo()->lastInsertId();
						 
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
						'year' => 4,
						]);
						$idPlan66 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 549000000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 549000000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan53 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 459296336,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 459296336,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan54 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 528200000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 528200000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan55 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 1866678457,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1866678457,
						'year' => 4,
						]);
						$idPlan56 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 319488066,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 319488066,
						'year' => 4,
						]);
						$idPlan57 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 0,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan67 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 504702225,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 504702225,
						'year' => 4,
						]);
						$idPlan58 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 244605860,
						'functioning_percentage' => 32.313,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 67.687,
						'functioning' => 79039491.5418,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 165566368.4582,
						'year' => 4,
						]);
						$idPlan59 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente16,
						'value' => 0,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan68 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente17,
						'value' => 25000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 25000000,
						'year' => 4,
						]);
						$idPlan60 = DB::getPdo()->lastInsertId();
						 
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
						'year' => 4,
						]);
						$idPlan69 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente19,
						'value' => 830000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 830000000,
						'year' => 4,
						]);
						$idPlan61 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente21,
						'value' => 2068000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2068000000,
						'year' => 4,
						]);
						$idPlan62 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente23,
						'value' => 4355376565,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 4355376565,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan63 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente24,
						'value' => 4851391879,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 4851391879,
						'year' => 4,
						]);
						$idPlan64 = DB::getPdo()->lastInsertId();
						 
                      DB::table('implementations')->insert([
                        'p_a_i_s_id'=>$idpai1,
                        ]);
                        $idImplementation1 = DB::getPdo()->lastInsertId();
						
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 3483978707,
						'financial_plans_id' => $idPlan1,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo1 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 721187670,
						'financial_plans_id' => $idPlan2,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo2 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 20142950,
						'financial_plans_id' => $idPlan3,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo3 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 344445113,
						'financial_plans_id' => $idPlan4,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo4 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 992963999,
						'financial_plans_id' => $idPlan5,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo5 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 1939850625,
						'financial_plans_id' => $idPlan6,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo6 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 141482792,
						'financial_plans_id' => $idPlan7,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo7 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 195476064,
						'financial_plans_id' => $idPlan8,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo8 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 7482188,
						'financial_plans_id' => $idPlan9,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo9 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 298743319,
						'financial_plans_id' => $idPlan10,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo10 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 4834921,
						'financial_plans_id' => $idPlan11,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo11 = DB::getPdo()->lastInsertId();
						 


					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 172000000,
						'financial_plans_id' => $idPlan12,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo12 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 336704780,
						'financial_plans_id' => $idPlan13,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo13 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 154259538,
						'financial_plans_id' => $idPlan14,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo14 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 3576958870,
						'financial_plans_id' => $idPlan15,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo15 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 2538666221,
						'financial_plans_id' => $idPlan16,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo16 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 3784591115,
						'financial_plans_id' => $idPlan17,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo17 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 452000,
						'financial_plans_id' => $idPlan18,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo18 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 530922044,
						'financial_plans_id' => $idPlan19,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo19 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 440861488,
						'financial_plans_id' => $idPlan20,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo20 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 444478428,
						'financial_plans_id' => $idPlan21,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo21 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 480000000,
						'financial_plans_id' => $idPlan22,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo22 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 1737280442,
						'financial_plans_id' => $idPlan23,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo23 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 167278300,
						'financial_plans_id' => $idPlan24,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo24 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 298217473,
						'financial_plans_id' => $idPlan25,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo25 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 266500,
						'financial_plans_id' => $idPlan26,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo26 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 92828916,
						'financial_plans_id' => $idPlan27,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo27 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 46671564,
						'financial_plans_id' => $idPlan28,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo28 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 838118125,
						'financial_plans_id' => $idPlan29,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo29 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 4005677940,
						'financial_plans_id' => $idPlan30,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo30 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 1538579026,
						'financial_plans_id' => $idPlan31,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo31 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 3989564525,
						'financial_plans_id' => $idPlan32,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo32 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 654400,
						'financial_plans_id' => $idPlan33,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo33 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 372029915,
						'financial_plans_id' => $idPlan34,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo34 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 33412871,
						'financial_plans_id' => $idPlan35,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo35 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 568788317,
						'financial_plans_id' => $idPlan36,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo36 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 465887245,
						'financial_plans_id' => $idPlan37,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo37 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 150000000,
						'financial_plans_id' => $idPlan38,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo38 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 319602982,
						'financial_plans_id' => $idPlan39,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo39 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 2235650199,
						'financial_plans_id' => $idPlan40,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo40 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 360338316,
						'financial_plans_id' => $idPlan41,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo41 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 7262254,
						'financial_plans_id' => $idPlan42,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo42 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 384678815,
						'financial_plans_id' => $idPlan43,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo43 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 4244449,
						'financial_plans_id' => $idPlan44,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo44 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 167253708,
						'financial_plans_id' => $idPlan45,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo45 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 98538331,
						'financial_plans_id' => $idPlan46,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo46 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 54080000,
						'financial_plans_id' => $idPlan65,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo65 = DB::getPdo()->lastInsertId();
						 


					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 225261192,
						'financial_plans_id' => $idPlan47,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo47 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 4127913944,
						'financial_plans_id' => $idPlan48,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo48 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 948043632,
						'financial_plans_id' => $idPlan49,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo49 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 4154830964.52,
						'financial_plans_id' => $idPlan50,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo50 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 185359141.21,
						'financial_plans_id' => $idPlan51,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo51 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 426720348,
						'financial_plans_id' => $idPlan52,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo52 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 21882187.22,
						'financial_plans_id' => $idPlan66,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo66 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 505383203.4,
						'financial_plans_id' => $idPlan53,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo53 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 482826223,
						'financial_plans_id' => $idPlan54,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo54 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 953449800,
						'financial_plans_id' => $idPlan55,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo55 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 2323794210,
						'financial_plans_id' => $idPlan56,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo56 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 212589448,
						'financial_plans_id' => $idPlan57,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo57 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 2863768,
						'financial_plans_id' => $idPlan67,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo67 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 163542239.42,
						'financial_plans_id' => $idPlan58,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo58 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 2481202726.57,
						'financial_plans_id' => $idPlan59,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo59 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 165950173,
						'financial_plans_id' => $idPlan68,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo68 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 138741805.92,
						'financial_plans_id' => $idPlan60,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo60 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 103000000,
						'financial_plans_id' => $idPlan69,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo69 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 830000000,
						'financial_plans_id' => $idPlan61,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo61 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 1980212685.21,
						'financial_plans_id' => $idPlan62,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo62 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 3794911201,
						'financial_plans_id' => $idPlan63,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo63 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 2464145221,
						'financial_plans_id' => $idPlan64,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo64 = DB::getPdo()->lastInsertId();
						 
						DB::table('cost_sources')->insert([
							'father_id' => 2,
							'code' => '2.1.1',
							'name' => 'GASTOS DE PERSONAL',
							'description' => 'GASTOS DE PERSONAL',
							'functioning' => TRUE,
							'compensation' => FALSE,
							'debt_service' => FALSE,
							'group_id' => 27,
							]);
							$idFuenteGasto1 = DB::getPdo()->lastInsertId();
							
							
						DB::table('cost_sources')->insert([
							'father_id' => 4,
							'code' => '2.1.2.1',
							'name' => 'Adquisiciones diferentes de activos',
							'description' => 'Adquisiciones diferentes de activos',
							'functioning' => TRUE,
							'compensation' => FALSE,
							'debt_service' => FALSE,
							'group_id' => 27,
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
							'group_id' => 27,
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
							'group_id' => 27,
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
							'group_id' => 27,
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
							'group_id' => 27,
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
							'group_id' => 27,
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
							'group_id' => 27,
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
							'group_id' => 27,
							]);
							$idFuenteGasto3 = DB::getPdo()->lastInsertId();
							
							
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 660226640,
								'value_comitted' => 519214496,
								'value_paid' => 462743806,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto1,
								'p_a_i_id' => $idpai1,
								'group_id' => 27,
								]);
								$idGasto1 = DB::getPdo()->lastInsertId();
								
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 844657920,
								'value_comitted' => 670464561,
								'value_paid' => 642924952,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto2,
								'p_a_i_id' => $idpai1,
								'group_id' => 27,
								]);
								$idGasto2 = DB::getPdo()->lastInsertId();
								
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 75830025,
								'value_comitted' => 63690765,
								'value_paid' => 63690765,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto3,
								'p_a_i_id' => $idpai1,
								'group_id' => 27,
								]);
								$idGasto3 = DB::getPdo()->lastInsertId();
								
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 8305000,
								'value_comitted' => 28598,
								'value_paid' => 28598,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto4,
								'p_a_i_id' => $idpai1,
								'group_id' => 27,
								]);
								$idGasto4 = DB::getPdo()->lastInsertId();

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
								'cost_sources_id' => $idFuenteGasto9,
								'p_a_i_id' => $idpai1,
								'group_id' => 27,
								]);
								$idGasto5 = DB::getPdo()->lastInsertId();
								
								
								DB::table('financial_costs')->insert([
									'year' => 1,
									'value_bugeted' => 3530341454,
									'value_comitted' => 3468716321,
									'value_paid' => 3391118724,
									'own' => FALSE,
									'nation' => TRUE,
									'royalties' => FALSE,
									'funds' => FALSE,
									'functioning' => TRUE,
									'compensation' => FALSE,
									'debt_service' => FALSE,
									'cost_sources_id' => $idFuenteGasto1,
									'p_a_i_id' => $idpai1,
									'group_id' => 27,
									]);
									$idGasto6 = DB::getPdo()->lastInsertId();
									
									
								DB::table('financial_costs')->insert([
									'year' => 1,
									'value_bugeted' => 217905756,
									'value_comitted' => 215219820,
									'value_paid' => 152426764,
									'own' => FALSE,
									'nation' => TRUE,
									'royalties' => FALSE,
									'funds' => FALSE,
									'functioning' => TRUE,
									'compensation' => FALSE,
									'debt_service' => FALSE,
									'cost_sources_id' => $idFuenteGasto2,
									'p_a_i_id' => $idpai1,
									'group_id' => 27,
									]);
									$idGasto7 = DB::getPdo()->lastInsertId();
									
								DB::table('financial_costs')->insert([
									'year' => 1,
									'value_bugeted' => 17677000,
									'value_comitted' => 17677000,
									'value_paid' => 17677000,
									'own' => FALSE,
									'nation' => TRUE,
									'royalties' => FALSE,
									'funds' => FALSE,
									'functioning' => TRUE,
									'compensation' => FALSE,
									'debt_service' => FALSE,
									'cost_sources_id' => $idFuenteGasto4,
									'p_a_i_id' => $idpai1,
									'group_id' => 27,
									]);
									$idGasto8 = DB::getPdo()->lastInsertId();

								DB::table('financial_costs')->insert([
									'year' => 1,
									'value_bugeted' => 20000000,
									'value_comitted' => 20000000,
									'value_paid' => 20000000,
									'own' => FALSE,
									'nation' => TRUE,
									'royalties' => FALSE,
									'funds' => FALSE,
									'functioning' => TRUE,
									'compensation' => FALSE,
									'debt_service' => FALSE,
									'cost_sources_id' => $idFuenteGasto8,
									'p_a_i_id' => $idpai1,
									'group_id' => 27,
									]);
									$idGasto9 = DB::getPdo()->lastInsertId();
									
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 1313498483,
										'value_comitted' => 821482103,
										'value_paid' => 754590592,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto1,
										'p_a_i_id' => $idpai1,
										'group_id' => 27,
										]);
										$idGasto10 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 564690348,
										'value_comitted' => 550025515,
										'value_paid' => 498383448,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto2,
										'p_a_i_id' => $idpai1,
										'group_id' => 27,
										]);
										$idGasto11 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 126482081,
										'value_comitted' => 116671427,
										'value_paid' => 116671427,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto3,
										'p_a_i_id' => $idpai1,
										'group_id' => 27,
										]);
										$idGasto12 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 3360500,
										'value_comitted' => 2485101,
										'value_paid' => 2485101,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto4,
										'p_a_i_id' => $idpai1,
										'group_id' => 27,
										]);
										$idGasto13 = DB::getPdo()->lastInsertId();
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 10350683,
										'value_comitted' => 513000,
										'value_paid' => 513000,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto9,
										'p_a_i_id' => $idpai1,
										'group_id' => 27,
										]);
										$idGasto14 = DB::getPdo()->lastInsertId();
										
										
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 3722567799,
											'value_comitted' => 3657534400,
											'value_paid' => 3645141719,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto1,
											'p_a_i_id' => $idpai1,
											'group_id' => 27,
											]);
											$idGasto37 = DB::getPdo()->lastInsertId();
											
											
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 218689150,
											'value_comitted' => 213448929,
											'value_paid' => 199777674,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto2,
											'p_a_i_id' => $idpai1,
											'group_id' => 27,
											]);
											$idGasto15 = DB::getPdo()->lastInsertId();
											
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 17677000,
											'value_comitted' => 17677000,
											'value_paid' => 17677000,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto4,
											'p_a_i_id' => $idpai1,
											'group_id' => 27,
											]);
											$idGasto16 = DB::getPdo()->lastInsertId();
											
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 21150000,
											'value_comitted' => 21150000,
											'value_paid' => 21150000,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto7,
											'p_a_i_id' => $idpai1,
											'group_id' => 27,
											]);
											$idGasto17 = DB::getPdo()->lastInsertId();
											
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 283610463,
											'value_comitted' => 256152435,
											'value_paid' => 256152435,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto9,
											'p_a_i_id' => $idpai1,
											'group_id' => 27,
											]);
											$idGasto18 = DB::getPdo()->lastInsertId();
											
											
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 1424660768,
												'value_comitted' => 959863384,
												'value_paid' => 892782189,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto1,
												'p_a_i_id' => $idpai1,
												'group_id' => 27,
												]);
												$idGasto19 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 671387000,
												'value_comitted' => 658687983,
												'value_paid' => 516266233,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto2,
												'p_a_i_id' => $idpai1,
												'group_id' => 27,
												]);
												$idGasto20 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 61889000,
												'value_comitted' => 57643919,
												'value_paid' => 57643919,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto3,
												'p_a_i_id' => $idpai1,
												'group_id' => 27,
												]);
												$idGasto21 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 2338000,
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
												'group_id' => 27,
												]);
												$idGasto22 = DB::getPdo()->lastInsertId();
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 11085000,
												'value_comitted' => 1872375,
												'value_paid' => 1872375,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto9,
												'p_a_i_id' => $idpai1,
												'group_id' => 27,
												]);
												$idGasto23 = DB::getPdo()->lastInsertId();
												
												
												DB::table('financial_costs')->insert([
													'year' => 3,
													'value_bugeted' => 3911415713,
													'value_comitted' => 3889871433,
													'value_paid' => 3889871433,
													'own' => FALSE,
													'nation' => TRUE,
													'royalties' => FALSE,
													'funds' => FALSE,
													'functioning' => TRUE,
													'compensation' => FALSE,
													'debt_service' => FALSE,
													'cost_sources_id' => $idFuenteGasto1,
													'p_a_i_id' => $idpai1,
													'group_id' => 27,
													]);
													$idGasto24 = DB::getPdo()->lastInsertId();
													
													
												DB::table('financial_costs')->insert([
													'year' => 3,
													'value_bugeted' => 227623856,
													'value_comitted' => 225255969,
													'value_paid' => 137948931,
													'own' => FALSE,
													'nation' => TRUE,
													'royalties' => FALSE,
													'funds' => FALSE,
													'functioning' => TRUE,
													'compensation' => FALSE,
													'debt_service' => FALSE,
													'cost_sources_id' => $idFuenteGasto2,
													'p_a_i_id' => $idpai1,
													'group_id' => 27,
													]);
													$idGasto25 = DB::getPdo()->lastInsertId();
													
												DB::table('financial_costs')->insert([
													'year' => 3,
													'value_bugeted' => 18207000,
													'value_comitted' => 0,
													'value_paid' => 0,
													'own' => FALSE,
													'nation' => TRUE,
													'royalties' => FALSE,
													'funds' => FALSE,
													'functioning' => TRUE,
													'compensation' => FALSE,
													'debt_service' => FALSE,
													'cost_sources_id' => $idFuenteGasto4,
													'p_a_i_id' => $idpai1,
													'group_id' => 27,
													]);
													$idGasto26 = DB::getPdo()->lastInsertId();
													
												DB::table('financial_costs')->insert([
													'year' => 3,
													'value_bugeted' => 21974850,
													'value_comitted' => 21974850,
													'value_paid' => 21974850,
													'own' => FALSE,
													'nation' => TRUE,
													'royalties' => FALSE,
													'funds' => FALSE,
													'functioning' => TRUE,
													'compensation' => FALSE,
													'debt_service' => FALSE,
													'cost_sources_id' => $idFuenteGasto7,
													'p_a_i_id' => $idpai1,
													'group_id' => 27,
													]);
													$idGasto27 = DB::getPdo()->lastInsertId();
													
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
														'group_id' => 27,
														]);
														$idGasto28 = DB::getPdo()->lastInsertId();
														
														
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
														'group_id' => 27,
														]);
														$idGasto29 = DB::getPdo()->lastInsertId();
														
														
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
														'group_id' => 27,
														]);
														$idGasto30 = DB::getPdo()->lastInsertId();
														
														
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
														'group_id' => 27,
														]);
														$idGasto31 = DB::getPdo()->lastInsertId();
														
														
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
														'group_id' => 27,
														]);
														$idGasto32 = DB::getPdo()->lastInsertId();
														
														
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
														'group_id' => 27,
														]);
														$idGasto33 = DB::getPdo()->lastInsertId();
														
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
														'cost_sources_id' => $idFuenteGasto9,
														'p_a_i_id' => $idpai1,
														'group_id' => 27,
														]);
														$idGasto34 = DB::getPdo()->lastInsertId();
														
														
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
															'group_id' => 27,
															]);
															$idGasto35 = DB::getPdo()->lastInsertId();
															
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
															'group_id' => 27,
															]);
															$idGasto36 = DB::getPdo()->lastInsertId();
						
            
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity2,
              'source_id' =>$idPlan16,
              'value' => 150331610,
              'goal' => 0,
              'evidence_balance' => 150331610,
              'age' => 1,
              ]);
              $idactivitySource1 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity12,
              'source_id' =>$idPlan16,
              'value' => 140000000,
              'goal' => 0,
              'evidence_balance' => 140000000,
              'age' => 1,
              ]);
              $idactivitySource2 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity21,
              'source_id' =>$idPlan16,
              'value' => 150000000,
              'goal' => 0,
              'evidence_balance' => 150000000,
              'age' => 1,
              ]);
              $idactivitySource3 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity29,
              'source_id' =>$idPlan16,
              'value' => 1407000000,
              'goal' => 0,
              'evidence_balance' => 1407000000,
              'age' => 1,
              ]);
              $idactivitySource4 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity30,
              'source_id' =>$idPlan16,
              'value' => 95814278,
              'goal' => 0,
              'evidence_balance' => 95814278,
              'age' => 1,
              ]);
              $idactivitySource5 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity36,
              'source_id' =>$idPlan16,
              'value' => 2787368385,
              'goal' => 0,
              'evidence_balance' => 2787368385,
              'age' => 1,
              ]);
              $idactivitySource6 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity47,
              'source_id' =>$idPlan16,
              'value' => 199668390,
              'goal' => 0,
              'evidence_balance' => 199668390,
              'age' => 1,
              ]);
              $idactivitySource7 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity55,
              'source_id' =>$idPlan16,
              'value' => 200000000,
              'goal' => 0,
              'evidence_balance' => 200000000,
              'age' => 1,
              ]);
              $idactivitySource8 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity64,
              'source_id' =>$idPlan16,
              'value' => 730000000,
              'goal' => 0,
              'evidence_balance' => 730000000,
              'age' => 1,
              ]);
              $idactivitySource10 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity66,
              'source_id' =>$idPlan16,
              'value' => 796904514,
              'goal' => 0,
              'evidence_balance' => 796904514,
              'age' => 1,
              ]);
              $idactivitySource11 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity73,
              'source_id' =>$idPlan16,
              'value' => 330433253,
              'goal' => 0,
              'evidence_balance' => 330433253,
              'age' => 1,
              ]);
              $idactivitySource12 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity78,
              'source_id' =>$idPlan13,
              'value' => 300000000,
              'goal' => 0,
              'evidence_balance' => 300000000,
              'age' => 1,
              ]);
              $idactivitySource13 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity80,
              'source_id' =>$idPlan13,
              'value' => 215000000,
              'goal' => 0,
              'evidence_balance' => 215000000,
              'age' => 1,
              ]);
              $idactivitySource14 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity87,
              'source_id' =>$idPlan13,
              'value' => 200000000,
              'goal' => 0,
              'evidence_balance' => 200000000,
              'age' => 1,
              ]);
              $idactivitySource15 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity89,
              'source_id' =>$idPlan13,
              'value' => 658433253,
              'goal' => 0,
              'evidence_balance' => 658433253,
              'age' => 1,
              ]);
              $idactivitySource16 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity92,
              'source_id' =>$idPlan5,
              'value' => 150000000,
              'goal' => 0,
              'evidence_balance' => 150000000,
              'age' => 1,
              ]);
              $idactivitySource17 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity99,
              'source_id' =>$idPlan5,
              'value' => 150000000,
              'goal' => 0,
              'evidence_balance' => 150000000,
              'age' => 1,
              ]);
              $idactivitySource18 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity102,
              'source_id' =>$idPlan5,
              'value' => 320000000,
              'goal' => 0,
              'evidence_balance' => 320000000,
              'age' => 1,
              ]);
              $idactivitySource19 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity106,
              'source_id' =>$idPlan5,
              'value' => 300000000,
              'goal' => 0,
              'evidence_balance' => 300000000,
              'age' => 1,
              ]);
              $idactivitySource20 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity108,
              'source_id' =>$idPlan5,
              'value' => 270000000,
              'goal' => 0,
              'evidence_balance' => 270000000,
              'age' => 1,
              ]);
              $idactivitySource21 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity110,
              'source_id' =>$idPlan5,
              'value' => 177933648,
              'goal' => 0,
              'evidence_balance' => 177933648,
              'age' => 1,
              ]);
              $idactivitySource22 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity114,
              'source_id' =>$idPlan5,
              'value' => 116731292,
              'goal' => 0,
              'evidence_balance' => 116731292,
              'age' => 1,
              ]);
              $idactivitySource23 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity116,
              'source_id' =>$idPlan6,
              'value' => 206650877,
              'goal' => 0,
              'evidence_balance' => 206650877,
              'age' => 1,
              ]);
              $idactivitySource24 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity118,
              'source_id' =>$idPlan12,
              'value' => 54004699,
              'goal' => 0,
              'evidence_balance' => 54004699,
              'age' => 1,
              ]);
              $idactivitySource25 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity120,
              'source_id' =>$idPlan14,
              'value' => 8264237,
              'goal' => 0,
              'evidence_balance' => 8264237,
              'age' => 1,
              ]);
              $idactivitySource26 = DB::getPdo()->lastInsertId();
              
              
              
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity73,
                'source_id' =>$idPlan13,
                'value' => 996566747,
                'goal' => 0,
                'evidence_balance' => 996566747,
                'age' => 1,
                ]);
                $idactivitySource27 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity89,
                'source_id' =>$idPlan1,
                'value' => 3200000000,
                'goal' => 0,
                'evidence_balance' => 3200000000,
                'age' => 1,
                ]);
                $idactivitySource28 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity114,
                'source_id' =>$idPlan6,
                'value' => 580349123,
                'goal' => 0,
                'evidence_balance' => 580349123,
                'age' => 1,
                ]);
                $idactivitySource29 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity116,
                'source_id' =>$idPlan12,
                'value' => 117995301,
                'goal' => 0,
                'evidence_balance' => 117995301,
                'age' => 1,
                ]);
                $idactivitySource30 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity118,
                'source_id' =>$idPlan14,
                'value' => 145995301,
                'goal' => 0,
                'evidence_balance' => 145995301,
                'age' => 1,
                ]);
                $idactivitySource31 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity120,
                'source_id' =>$idPlan3,
                'value' => 50000000,
                'goal' => 0,
                'evidence_balance' => 50000000,
                'age' => 1,
                ]);
                $idactivitySource32 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity89,
                  'source_id' =>$idPlan5,
                  'value' => 207602837,
                  'goal' => 0,
                  'evidence_balance' => 207602837,
                  'age' => 1,
                  ]);
                  $idactivitySource33 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity120,
                  'source_id' =>$idPlan9,
                  'value' => 21735650,
                  'goal' => 0,
                  'evidence_balance' => 21735650,
                  'age' => 1,
                  ]);
                  $idactivitySource34 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity120,
                    'source_id' =>$idPlan11,
                    'value' => 20000000,
                    'goal' => 0,
                    'evidence_balance' => 20000000,
                    'age' => 1,
                    ]);
                    $idactivitySource35 = DB::getPdo()->lastInsertId();
                    
                    
                    
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia2,
                      'activity_source_id' =>$idactivitySource1,
                      'value' => 148090151,
                      ]);
                      $idevidenceFinancial1 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia12,
                      'activity_source_id' =>$idactivitySource2,
                      'value' => 125136364,
                      ]);
                      $idevidenceFinancial2 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia21,
                      'activity_source_id' =>$idactivitySource3,
                      'value' => 143368388,
                      ]);
                      $idevidenceFinancial3 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia29,
                      'activity_source_id' =>$idactivitySource4,
                      'value' => 1406433581,
                      ]);
                      $idevidenceFinancial4 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia30,
                      'activity_source_id' =>$idactivitySource5,
                      'value' => 95814278,
                      ]);
                      $idevidenceFinancial5 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia36,
                      'activity_source_id' =>$idactivitySource6,
                      'value' => 2243347158,
                      ]);
                      $idevidenceFinancial6 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia47,
                      'activity_source_id' =>$idactivitySource7,
                      'value' => 199156065,
                      ]);
                      $idevidenceFinancial7 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia55,
                      'activity_source_id' =>$idactivitySource8,
                      'value' => 199862870,
                      ]);
                      $idevidenceFinancial8 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia64,
                      'activity_source_id' =>$idactivitySource10,
                      'value' => 727418169,
                      ]);
                      $idevidenceFinancial10 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia66,
                      'activity_source_id' =>$idactivitySource11,
                      'value' => 796772509,
                      ]);
                      $idevidenceFinancial11 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia73,
                      'activity_source_id' =>$idactivitySource12,
                      'value' => 330433253,
                      ]);
                      $idevidenceFinancial12 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia78,
                      'activity_source_id' =>$idactivitySource13,
                      'value' => 168575094,
                      ]);
                      $idevidenceFinancial13 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia80,
                      'activity_source_id' =>$idactivitySource14,
                      'value' => 215000000,
                      ]);
                      $idevidenceFinancial14 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia87,
                      'activity_source_id' =>$idactivitySource15,
                      'value' => 198144742,
                      ]);
                      $idevidenceFinancial15 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia89,
                      'activity_source_id' =>$idactivitySource16,
                      'value' => 658433253,
                      ]);
                      $idevidenceFinancial16 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia92,
                      'activity_source_id' =>$idactivitySource17,
                      'value' => 145419886,
                      ]);
                      $idevidenceFinancial17 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia99,
                      'activity_source_id' =>$idactivitySource18,
                      'value' => 131684000,
                      ]);
                      $idevidenceFinancial18 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia102,
                      'activity_source_id' =>$idactivitySource19,
                      'value' => 302068134,
                      ]);
                      $idevidenceFinancial19 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia106,
                      'activity_source_id' =>$idactivitySource20,
                      'value' => 297310350,
                      ]);
                      $idevidenceFinancial20 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia108,
                      'activity_source_id' =>$idactivitySource21,
                      'value' => 266102561,
                      ]);
                      $idevidenceFinancial21 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia110,
                      'activity_source_id' =>$idactivitySource22,
                      'value' => 176245841,
                      ]);
                      $idevidenceFinancial22 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia114,
                      'activity_source_id' =>$idactivitySource23,
                      'value' => 116731292,
                      ]);
                      $idevidenceFinancial23 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia116,
                      'activity_source_id' =>$idactivitySource24,
                      'value' => 206650877,
                      ]);
                      $idevidenceFinancial24 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia118,
                      'activity_source_id' =>$idactivitySource25,
                      'value' => 54004699,
                      ]);
                      $idevidenceFinancial25 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia120,
                      'activity_source_id' =>$idactivitySource26,
                      'value' => 8264237,
                      ]);
                      $idevidenceFinancial26 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia73,
                        'activity_source_id' =>$idactivitySource27,
                        'value' => 193310525,
                        ]);
                        $idevidenceFinancial27 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia89,
                        'activity_source_id' =>$idactivitySource28,
                        'value' => 3200000000,
                        ]);
                        $idevidenceFinancial28 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia114,
                        'activity_source_id' =>$idactivitySource29,
                        'value' => 566573061,
                        ]);
                        $idevidenceFinancial29 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia116,
                        'activity_source_id' =>$idactivitySource30,
                        'value' => 117995301,
                        ]);
                        $idevidenceFinancial30 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia118,
                        'activity_source_id' =>$idactivitySource31,
                        'value' => 120745081,
                        ]);
                        $idevidenceFinancial31 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia120,
                        'activity_source_id' =>$idactivitySource32,
                        'value' => 50000000,
                        ]);
                        $idevidenceFinancial32 = DB::getPdo()->lastInsertId();
                        
                        
                        
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia89,
                          'activity_source_id' =>$idactivitySource33,
                          'value' => 207602837,
                          ]);
                          $idevidenceFinancial33 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia120,
                          'activity_source_id' =>$idactivitySource34,
                          'value' => 21735650,
                          ]);
                          $idevidenceFinancial34 = DB::getPdo()->lastInsertId();
                          
                          
                          
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia120,
                            'activity_source_id' =>$idactivitySource35,
                            'value' => 19968478,
                            ]);
                            $idevidenceFinancial35 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity2,
                              'source_id' =>$idPlan31,
                              'value' => 150000000,
                              'goal' => 0,
                              'evidence_balance' => 150000000,
                              'age' => 2,
                              ]);
                              $idactivitySource36 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity4,
                              'source_id' =>$idPlan31,
                              'value' => 300000000,
                              'goal' => 0,
                              'evidence_balance' => 300000000,
                              'age' => 2,
                              ]);
                              $idactivitySource37 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity8,
                              'source_id' =>$idPlan31,
                              'value' => 2110675175,
                              'goal' => 0,
                              'evidence_balance' => 2110675175,
                              'age' => 2,
                              ]);
                              $idactivitySource38 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity12,
                              'source_id' =>$idPlan31,
                              'value' => 140000000,
                              'goal' => 0,
                              'evidence_balance' => 140000000,
                              'age' => 2,
                              ]);
                              $idactivitySource39 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity14,
                              'source_id' =>$idPlan31,
                              'value' => 282600000,
                              'goal' => 0,
                              'evidence_balance' => 282600000,
                              'age' => 2,
                              ]);
                              $idactivitySource40 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity21,
                              'source_id' =>$idPlan31,
                              'value' => 230000000,
                              'goal' => 0,
                              'evidence_balance' => 230000000,
                              'age' => 2,
                              ]);
                              $idactivitySource41 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity24,
                              'source_id' =>$idPlan31,
                              'value' => 787700000,
                              'goal' => 0,
                              'evidence_balance' => 787700000,
                              'age' => 2,
                              ]);
                              $idactivitySource42 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity29,
                              'source_id' =>$idPlan31,
                              'value' => 1433400000,
                              'goal' => 0,
                              'evidence_balance' => 1433400000,
                              'age' => 2,
                              ]);
                              $idactivitySource43 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity36,
                              'source_id' =>$idPlan31,
                              'value' => 784401871,
                              'goal' => 0,
                              'evidence_balance' => 784401871,
                              'age' => 2,
                              ]);
                              $idactivitySource44 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity47,
                              'source_id' =>$idPlan17,
                              'value' => 200000000,
                              'goal' => 0,
                              'evidence_balance' => 200000000,
                              'age' => 2,
                              ]);
                              $idactivitySource45 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity49,
                              'source_id' =>$idPlan17,
                              'value' => 915761871,
                              'goal' => 0,
                              'evidence_balance' => 915761871,
                              'age' => 2,
                              ]);
                              $idactivitySource46 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity55,
                              'source_id' =>$idPlan17,
                              'value' => 200000000,
                              'goal' => 0,
                              'evidence_balance' => 200000000,
                              'age' => 2,
                              ]);
                              $idactivitySource47 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity59,
                              'source_id' =>$idPlan17,
                              'value' => 463640000,
                              'goal' => 0,
                              'evidence_balance' => 463640000,
                              'age' => 2,
                              ]);
                              $idactivitySource48 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity64,
                              'source_id' =>$idPlan17,
                              'value' => 780000000,
                              'goal' => 0,
                              'evidence_balance' => 780000000,
                              'age' => 2,
                              ]);
                              $idactivitySource49 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity73,
                              'source_id' =>$idPlan17,
                              'value' => 394000000,
                              'goal' => 0,
                              'evidence_balance' => 394000000,
                              'age' => 2,
                              ]);
                              $idactivitySource50 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity78,
                              'source_id' =>$idPlan29,
                              'value' => 250000000,
                              'goal' => 0,
                              'evidence_balance' => 250000000,
                              'age' => 2,
                              ]);
                              $idactivitySource51 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity87,
                              'source_id' =>$idPlan29,
                              'value' => 394461000,
                              'goal' => 0,
                              'evidence_balance' => 394461000,
                              'age' => 2,
                              ]);
                              $idactivitySource52 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity92,
                              'source_id' =>$idPlan29,
                              'value' => 450000000,
                              'goal' => 0,
                              'evidence_balance' => 450000000,
                              'age' => 2,
                              ]);
                              $idactivitySource53 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity99,
                              'source_id' =>$idPlan29,
                              'value' => 210000000,
                              'goal' => 0,
                              'evidence_balance' => 210000000,
                              'age' => 2,
                              ]);
                              $idactivitySource54 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity102,
                              'source_id' =>$idPlan29,
                              'value' => 405000000,
                              'goal' => 0,
                              'evidence_balance' => 405000000,
                              'age' => 2,
                              ]);
                              $idactivitySource55 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity104,
                              'source_id' =>$idPlan29,
                              'value' => 2000000,
                              'goal' => 0,
                              'evidence_balance' => 2000000,
                              'age' => 2,
                              ]);
                              $idactivitySource56 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity106,
                              'source_id' =>$idPlan29,
                              'value' => 90039000,
                              'goal' => 0,
                              'evidence_balance' => 90039000,
                              'age' => 2,
                              ]);
                              $idactivitySource57 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity108,
                              'source_id' =>$idPlan25,
                              'value' => 196039000,
                              'goal' => 0,
                              'evidence_balance' => 196039000,
                              'age' => 2,
                              ]);
                              $idactivitySource58 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity114,
                              'source_id' =>$idPlan24,
                              'value' => 76039000,
                              'goal' => 0,
                              'evidence_balance' => 76039000,
                              'age' => 2,
                              ]);
                              $idactivitySource59 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity118,
                              'source_id' =>$idPlan27,
                              'value' => 122830395,
                              'goal' => 0,
                              'evidence_balance' => 122830395,
                              'age' => 2,
                              ]);
                              $idactivitySource61 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity120,
                              'source_id' =>$idPlan19,
                              'value' => 35830395,
                              'goal' => 0,
                              'evidence_balance' => 35830395,
                              'age' => 2,
                              ]);
                              $idactivitySource62 = DB::getPdo()->lastInsertId();
                              
                              
                              
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity36,
                                'source_id' =>$idPlan17,
                                'value' => 446598129,
                                'goal' => 0,
                                'evidence_balance' => 446598129,
                                'age' => 2,
                                ]);
                                $idactivitySource63 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity73,
                                'source_id' =>$idPlan29,
                                'value' => 1046000000,
                                'goal' => 0,
                                'evidence_balance' => 1046000000,
                                'age' => 2,
                                ]);
                                $idactivitySource64 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity106,
                                'source_id' =>$idPlan25,
                                'value' => 309961000,
                                'goal' => 0,
                                'evidence_balance' => 309961000,
                                'age' => 2,
                                ]);
                                $idactivitySource65 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity108,
                                'source_id' =>$idPlan24,
                                'value' => 73961000,
                                'goal' => 0,
                                'evidence_balance' => 73961000,
                                'age' => 2,
                                ]);
                                $idactivitySource66 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity114,
                                'source_id' =>$idPlan23,
                                'value' => 900000000,
                                'goal' => 0,
                                'evidence_balance' => 900000000,
                                'age' => 2,
                                ]);
                                $idactivitySource67 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity118,
                                'source_id' =>$idPlan19,
                                'value' => 64169605,
                                'goal' => 0,
                                'evidence_balance' => 64169605,
                                'age' => 2,
                                ]);
                                $idactivitySource68 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity120,
                                'source_id' =>$idPlan28,
                                'value' => 50000000,
                                'goal' => 0,
                                'evidence_balance' => 50000000,
                                'age' => 2,
                                ]);
                                $idactivitySource69 = DB::getPdo()->lastInsertId();
                                
                                
                                
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity120,
                                  'source_id' =>$idPlan26,
                                  'value' => 14169600,
                                  'goal' => 0,
                                  'evidence_balance' => 14169600,
                                  'age' => 2,
                                  ]);
                                  $idactivitySource71 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia122,
                                    'activity_source_id' =>$idactivitySource36,
                                    'value' => 123894077,
                                    ]);
                                    $idevidenceFinancial36 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia124,
                                    'activity_source_id' =>$idactivitySource37,
                                    'value' => 300000000,
                                    ]);
                                    $idevidenceFinancial37 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia128,
                                    'activity_source_id' =>$idactivitySource38,
                                    'value' => 2110587633,
                                    ]);
                                    $idevidenceFinancial38 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia132,
                                    'activity_source_id' =>$idactivitySource39,
                                    'value' => 129010606,
                                    ]);
                                    $idevidenceFinancial39 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia134,
                                    'activity_source_id' =>$idactivitySource40,
                                    'value' => 282600000,
                                    ]);
                                    $idevidenceFinancial40 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia141,
                                    'activity_source_id' =>$idactivitySource41,
                                    'value' => 176758605,
                                    ]);
                                    $idevidenceFinancial41 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia144,
                                    'activity_source_id' =>$idactivitySource42,
                                    'value' => 787700000,
                                    ]);
                                    $idevidenceFinancial42 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia149,
                                    'activity_source_id' =>$idactivitySource43,
                                    'value' => 1400275293,
                                    ]);
                                    $idevidenceFinancial43 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia156,
                                    'activity_source_id' =>$idactivitySource44,
                                    'value' => 784401871,
                                    ]);
                                    $idevidenceFinancial44 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia167,
                                    'activity_source_id' =>$idactivitySource45,
                                    'value' => 198708452,
                                    ]);
                                    $idevidenceFinancial45 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia169,
                                    'activity_source_id' =>$idactivitySource46,
                                    'value' => 915761871,
                                    ]);
                                    $idevidenceFinancial46 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia175,
                                    'activity_source_id' =>$idactivitySource47,
                                    'value' => 186487682,
                                    ]);
                                    $idevidenceFinancial47 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia179,
                                    'activity_source_id' =>$idactivitySource48,
                                    'value' => 463640000,
                                    ]);
                                    $idevidenceFinancial48 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia184,
                                    'activity_source_id' =>$idactivitySource49,
                                    'value' => 772767761,
                                    ]);
                                    $idevidenceFinancial49 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia193,
                                    'activity_source_id' =>$idactivitySource50,
                                    'value' => 394000000,
                                    ]);
                                    $idevidenceFinancial50 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia198,
                                    'activity_source_id' =>$idactivitySource51,
                                    'value' => 219416012,
                                    ]);
                                    $idevidenceFinancial51 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia207,
                                    'activity_source_id' =>$idactivitySource52,
                                    'value' => 390515559,
                                    ]);
                                    $idevidenceFinancial52 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia212,
                                    'activity_source_id' =>$idactivitySource53,
                                    'value' => 448805793,
                                    ]);
                                    $idevidenceFinancial53 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia219,
                                    'activity_source_id' =>$idactivitySource54,
                                    'value' => 209759888,
                                    ]);
                                    $idevidenceFinancial54 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia222,
                                    'activity_source_id' =>$idactivitySource55,
                                    'value' => 388210132,
                                    ]);
                                    $idevidenceFinancial55 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia224,
                                    'activity_source_id' =>$idactivitySource56,
                                    'value' => 2000000,
                                    ]);
                                    $idevidenceFinancial56 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia226,
                                    'activity_source_id' =>$idactivitySource57,
                                    'value' => 90039000,
                                    ]);
                                    $idevidenceFinancial57 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia228,
                                    'activity_source_id' =>$idactivitySource58,
                                    'value' => 196039000,
                                    ]);
                                    $idevidenceFinancial58 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia234,
                                    'activity_source_id' =>$idactivitySource59,
                                    'value' => 76039000,
                                    ]);
                                    $idevidenceFinancial59 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia238,
                                    'activity_source_id' =>$idactivitySource61,
                                    'value' => 122830395,
                                    ]);
                                    $idevidenceFinancial61 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia240,
                                    'activity_source_id' =>$idactivitySource62,
                                    'value' => 35830395,
                                    ]);
                                    $idevidenceFinancial62 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia156,
                                      'activity_source_id' =>$idactivitySource63,
                                      'value' => 393328331,
                                      ]);
                                      $idevidenceFinancial63 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia193,
                                      'activity_source_id' =>$idactivitySource64,
                                      'value' => 852277203,
                                      ]);
                                      $idevidenceFinancial64 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia226,
                                      'activity_source_id' =>$idactivitySource65,
                                      'value' => 307605321,
                                      ]);
                                      $idevidenceFinancial65 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia234,
                                      'activity_source_id' =>$idactivitySource67,
                                      'value' => 758045478,
                                      ]);
                                      $idevidenceFinancial67 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia238,
                                      'activity_source_id' =>$idactivitySource68,
                                      'value' => 43481877,
                                      ]);
                                      $idevidenceFinancial68 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia240,
                                      'activity_source_id' =>$idactivitySource69,
                                      'value' => 50000000,
                                      ]);
                                      $idevidenceFinancial69 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia240,
                                        'activity_source_id' =>$idactivitySource71,
                                        'value' => 6414964,
                                        ]);
                                        $idevidenceFinancial71 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity2,
                                          'source_id' =>$idPlan32,
                                          'value' => 138837935,
                                          'goal' => 0,
                                          'evidence_balance' => 138837935,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource72 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity6,
                                          'source_id' =>$idPlan32,
                                          'value' => 300000000,
                                          'goal' => 0,
                                          'evidence_balance' => 300000000,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource73 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity12,
                                          'source_id' =>$idPlan32,
                                          'value' => 100000000,
                                          'goal' => 0,
                                          'evidence_balance' => 100000000,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource74 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity16,
                                          'source_id' =>$idPlan32,
                                          'value' => 473909219,
                                          'goal' => 0,
                                          'evidence_balance' => 473909219,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource75 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity21,
                                          'source_id' =>$idPlan32,
                                          'value' => 200000000,
                                          'goal' => 0,
                                          'evidence_balance' => 200000000,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource76 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity29,
                                          'source_id' =>$idPlan32,
                                          'value' => 500000000,
                                          'goal' => 0,
                                          'evidence_balance' => 500000000,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource77 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity36,
                                          'source_id' =>$idPlan32,
                                          'value' => 1665104000,
                                          'goal' => 0,
                                          'evidence_balance' => 1665104000,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource78 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity47,
                                          'source_id' =>$idPlan32,
                                          'value' => 291043768,
                                          'goal' => 0,
                                          'evidence_balance' => 291043768,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource79 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity55,
                                          'source_id' =>$idPlan32,
                                          'value' => 180000000,
                                          'goal' => 0,
                                          'evidence_balance' => 180000000,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource80 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity61,
                                          'source_id' =>$idPlan32,
                                          'value' => 435865078,
                                          'goal' => 0,
                                          'evidence_balance' => 435865078,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource81 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity64,
                                          'source_id' =>$idPlan49,
                                          'value' => 773093852,
                                          'goal' => 0,
                                          'evidence_balance' => 773093852,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource82 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity68,
                                          'source_id' =>$idPlan49,
                                          'value' => 844247166,
                                          'goal' => 0,
                                          'evidence_balance' => 844247166,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource83 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity70,
                                          'source_id' =>$idPlan49,
                                          'value' => 863101000,
                                          'goal' => 0,
                                          'evidence_balance' => 863101000,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource84 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity73,
                                          'source_id' =>$idPlan49,
                                          'value' => 436680445,
                                          'goal' => 0,
                                          'evidence_balance' => 436680445,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource85 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity78,
                                          'source_id' =>$idPlan47,
                                          'value' => 228898000,
                                          'goal' => 0,
                                          'evidence_balance' => 228898000,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource86 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity87,
                                          'source_id' =>$idPlan47,
                                          'value' => 200000000,
                                          'goal' => 0,
                                          'evidence_balance' => 200000000,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource87 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity92,
                                          'source_id' =>$idPlan47,
                                          'value' => 100000000,
                                          'goal' => 0,
                                          'evidence_balance' => 100000000,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource88 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity99,
                                          'source_id' =>$idPlan47,
                                          'value' => 250000000,
                                          'goal' => 0,
                                          'evidence_balance' => 250000000,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource89 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity102,
                                          'source_id' =>$idPlan47,
                                          'value' => 282435789,
                                          'goal' => 0,
                                          'evidence_balance' => 282435789,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource90 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity106,
                                          'source_id' =>$idPlan40,
                                          'value' => 404226305,
                                          'goal' => 0,
                                          'evidence_balance' => 404226305,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource91 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity108,
                                          'source_id' =>$idPlan40,
                                          'value' => 350000000,
                                          'goal' => 0,
                                          'evidence_balance' => 350000000,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource92 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity114,
                                          'source_id' =>$idPlan40,
                                          'value' => 168740325,
                                          'goal' => 0,
                                          'evidence_balance' => 168740325,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource93 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity118,
                                          'source_id' =>$idPlan41,
                                          'value' => 88201768,
                                          'goal' => 0,
                                          'evidence_balance' => 88201768,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource94 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity120,
                                          'source_id' =>$idPlan34,
                                          'value' => 61701768,
                                          'goal' => 0,
                                          'evidence_balance' => 61701768,
                                          'age' => 3,
                                          ]);
                                          $idactivitySource95 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity61,
                                            'source_id' =>$idPlan49,
                                            'value' => 531785103,
                                            'goal' => 0,
                                            'evidence_balance' => 531785103,
                                            'age' => 3,
                                            ]);
                                            $idactivitySource96 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity73,
                                            'source_id' =>$idPlan47,
                                            'value' => 1367205211,
                                            'goal' => 0,
                                            'evidence_balance' => 1367205211,
                                            'age' => 3,
                                            ]);
                                            $idactivitySource97 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity102,
                                            'source_id' =>$idPlan40,
                                            'value' => 161445370,
                                            'goal' => 0,
                                            'evidence_balance' => 161445370,
                                            'age' => 3,
                                            ]);
                                            $idactivitySource98 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity114,
                                            'source_id' =>$idPlan43,
                                            'value' => 450000000,
                                            'goal' => 0,
                                            'evidence_balance' => 450000000,
                                            'age' => 3,
                                            ]);
                                            $idactivitySource99 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity118,
                                            'source_id' =>$idPlan34,
                                            'value' => 11798232,
                                            'goal' => 0,
                                            'evidence_balance' => 11798232,
                                            'age' => 3,
                                            ]);
                                            $idactivitySource100 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity120,
                                            'source_id' =>$idPlan44,
                                            'value' => 9798460,
                                            'goal' => 0,
                                            'evidence_balance' => 9798460,
                                            'age' => 3,
                                            ]);
                                            $idactivitySource101 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity114,
                                              'source_id' =>$idPlan38,
                                              'value' => 150000000,
                                              'goal' => 0,
                                              'evidence_balance' => 150000000,
                                              'age' => 3,
                                              ]);
                                              $idactivitySource102 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('activity_sources')->insert([
                                              'activity_id' => $idactivity120,
                                              'source_id' =>$idPlan46,
                                              'value' => 28500000,
                                              'goal' => 0,
                                              'evidence_balance' => 28500000,
                                              'age' => 3,
                                              ]);
                                              $idactivitySource103 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                              DB::table('activity_sources')->insert([
                                                'activity_id' => $idactivity114,
                                                'source_id' =>$idPlan45,
                                                'value' => 129161000,
                                                'goal' => 0,
                                                'evidence_balance' => 129161000,
                                                'age' => 3,
                                                ]);
                                                $idactivitySource104 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                
                                                DB::table('activity_sources')->insert([
                                                  'activity_id' => $idactivity114,
                                                  'source_id' =>$idPlan41,
                                                  'value' => 229615235,
                                                  'goal' => 0,
                                                  'evidence_balance' => 229615235,
                                                  'age' => 3,
                                                  ]);
                                                  $idactivitySource105 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia242,
                                                    'activity_source_id' =>$idactivitySource72,
                                                    'value' => 137712376,
                                                    ]);
                                                    $idevidenceFinancial72 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia246,
                                                    'activity_source_id' =>$idactivitySource73,
                                                    'value' => 300000000,
                                                    ]);
                                                    $idevidenceFinancial73 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia252,
                                                    'activity_source_id' =>$idactivitySource74,
                                                    'value' => 92496295,
                                                    ]);
                                                    $idevidenceFinancial74 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia256,
                                                    'activity_source_id' =>$idactivitySource75,
                                                    'value' => 473909219,
                                                    ]);
                                                    $idevidenceFinancial75 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia261,
                                                    'activity_source_id' =>$idactivitySource76,
                                                    'value' => 173508569,
                                                    ]);
                                                    $idevidenceFinancial76 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia269,
                                                    'activity_source_id' =>$idactivitySource77,
                                                    'value' => 498146824,
                                                    ]);
                                                    $idevidenceFinancial77 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia276,
                                                    'activity_source_id' =>$idactivitySource78,
                                                    'value' => 1597512672,
                                                    ]);
                                                    $idevidenceFinancial78 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia287,
                                                    'activity_source_id' =>$idactivitySource79,
                                                    'value' => 290453534,
                                                    ]);
                                                    $idevidenceFinancial79 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia295,
                                                    'activity_source_id' =>$idactivitySource80,
                                                    'value' => 172483416,
                                                    ]);
                                                    $idevidenceFinancial80 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia301,
                                                    'activity_source_id' =>$idactivitySource81,
                                                    'value' => 435865078,
                                                    ]);
                                                    $idevidenceFinancial81 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia304,
                                                    'activity_source_id' =>$idactivitySource82,
                                                    'value' => 773093852,
                                                    ]);
                                                    $idevidenceFinancial82 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia308,
                                                    'activity_source_id' =>$idactivitySource83,
                                                    'value' => 844247166,
                                                    ]);
                                                    $idevidenceFinancial83 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia310,
                                                    'activity_source_id' =>$idactivitySource84,
                                                    'value' => 862190614,
                                                    ]);
                                                    $idevidenceFinancial84 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia313,
                                                    'activity_source_id' =>$idactivitySource85,
                                                    'value' => 436680445,
                                                    ]);
                                                    $idevidenceFinancial85 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia318,
                                                    'activity_source_id' =>$idactivitySource86,
                                                    'value' => 221546453,
                                                    ]);
                                                    $idevidenceFinancial86 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia327,
                                                    'activity_source_id' =>$idactivitySource87,
                                                    'value' => 198133940,
                                                    ]);
                                                    $idevidenceFinancial87 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia332,
                                                    'activity_source_id' =>$idactivitySource88,
                                                    'value' => 95139302,
                                                    ]);
                                                    $idevidenceFinancial88 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia339,
                                                    'activity_source_id' =>$idactivitySource89,
                                                    'value' => 250000000,
                                                    ]);
                                                    $idevidenceFinancial89 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia342,
                                                    'activity_source_id' =>$idactivitySource90,
                                                    'value' => 282435789,
                                                    ]);
                                                    $idevidenceFinancial90 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia346,
                                                    'activity_source_id' =>$idactivitySource91,
                                                    'value' => 403949224,
                                                    ]);
                                                    $idevidenceFinancial91 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia348,
                                                    'activity_source_id' =>$idactivitySource92,
                                                    'value' => 309412684,
                                                    ]);
                                                    $idevidenceFinancial92 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia354,
                                                    'activity_source_id' =>$idactivitySource93,
                                                    'value' => 168740325,
                                                    ]);
                                                    $idevidenceFinancial93 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia358,
                                                    'activity_source_id' =>$idactivitySource94,
                                                    'value' => 88201768,
                                                    ]);
                                                    $idevidenceFinancial94 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia360,
                                                    'activity_source_id' =>$idactivitySource95,
                                                    'value' => 61701768,
                                                    ]);
                                                    $idevidenceFinancial95 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia301,
                                                      'activity_source_id' =>$idactivitySource96,
                                                      'value' => 531785103,
                                                      ]);
                                                      $idevidenceFinancial96 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia313,
                                                      'activity_source_id' =>$idactivitySource97,
                                                      'value' => 969012704,
                                                      ]);
                                                      $idevidenceFinancial97 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia342,
                                                      'activity_source_id' =>$idactivitySource98,
                                                      'value' => 157015254,
                                                      ]);
                                                      $idevidenceFinancial98 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia354,
                                                      'activity_source_id' =>$idactivitySource99,
                                                      'value' => 450000000,
                                                      ]);
                                                      $idevidenceFinancial99 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia358,
                                                      'activity_source_id' =>$idactivitySource100,
                                                      'value' => 8866192,
                                                      ]);
                                                      $idevidenceFinancial100 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('evidence_financial')->insert([
                                                      'evidence_id' => $idevidencia360,
                                                      'activity_source_id' =>$idactivitySource101,
                                                      'value' => 9798460,
                                                      ]);
                                                      $idevidenceFinancial101 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia354,
                                                        'activity_source_id' =>$idactivitySource102,
                                                        'value' => 150000000,
                                                        ]);
                                                        $idevidenceFinancial102 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('evidence_financial')->insert([
                                                        'evidence_id' => $idevidencia360,
                                                        'activity_source_id' =>$idactivitySource103,
                                                        'value' => 23187878,
                                                        ]);
                                                        $idevidenceFinancial103 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                        DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia354,
                                                          'activity_source_id' =>$idactivitySource104,
                                                          'value' => 150000000,
                                                          ]);
                                                          $idevidenceFinancial102 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                          	DB::table('evidence_financial')->insert([
                                                          'evidence_id' => $idevidencia354,
                                                          'activity_source_id' =>$idactivitySource105,
                                                          'value' => 174458465,
                                                          ]);
                                                          $idevidenceFinancial105 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                          
                                                          DB::table('activity_sources')->insert([
                                                            'activity_id' => $idactivity2,
                                                            'source_id' =>$idPlan64,
                                                            'value' => 103000000,
                                                            'goal' => 0,
                                                            'evidence_balance' => 103000000,
                                                            'age' => 4,
                                                            ]);
                                                            $idactivitySource106 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('activity_sources')->insert([
                                                            'activity_id' => $idactivity12,
                                                            'source_id' =>$idPlan64,
                                                            'value' => 569296336,
                                                            'goal' => 0,
                                                            'evidence_balance' => 569296336,
                                                            'age' => 4,
                                                            ]);
                                                            $idactivitySource107 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('activity_sources')->insert([
                                                            'activity_id' => $idactivity21,
                                                            'source_id' =>$idPlan64,
                                                            'value' => 200000000,
                                                            'goal' => 0,
                                                            'evidence_balance' => 200000000,
                                                            'age' => 4,
                                                            ]);
                                                            $idactivitySource108 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('activity_sources')->insert([
                                                            'activity_id' => $idactivity26,
                                                            'source_id' =>$idPlan64,
                                                            'value' => 300000000,
                                                            'goal' => 0,
                                                            'evidence_balance' => 300000000,
                                                            'age' => 4,
                                                            ]);
                                                            $idactivitySource109 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('activity_sources')->insert([
                                                            'activity_id' => $idactivity36,
                                                            'source_id' =>$idPlan64,
                                                            'value' => 566255023,
                                                            'goal' => 0,
                                                            'evidence_balance' => 566255023,
                                                            'age' => 4,
                                                            ]);
                                                            $idactivitySource111 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('activity_sources')->insert([
                                                            'activity_id' => $idactivity41,
                                                            'source_id' =>$idPlan64,
                                                            'value' => 1300000000,
                                                            'goal' => 0,
                                                            'evidence_balance' => 1300000000,
                                                            'age' => 4,
                                                            ]);
                                                            $idactivitySource112 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('activity_sources')->insert([
                                                            'activity_id' => $idactivity43,
                                                            'source_id' =>$idPlan64,
                                                            'value' => 912840520,
                                                            'goal' => 0,
                                                            'evidence_balance' => 912840520,
                                                            'age' => 4,
                                                            ]);
                                                            $idactivitySource113 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('activity_sources')->insert([
                                                            'activity_id' => $idactivity47,
                                                            'source_id' =>$idPlan50,
                                                            'value' => 333000000,
                                                            'goal' => 0,
                                                            'evidence_balance' => 333000000,
                                                            'age' => 4,
                                                            ]);
                                                            $idactivitySource114 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('activity_sources')->insert([
                                                            'activity_id' => $idactivity51,
                                                            'source_id' =>$idPlan50,
                                                            'value' => 776391879,
                                                            'goal' => 0,
                                                            'evidence_balance' => 776391879,
                                                            'age' => 4,
                                                            ]);
                                                            $idactivitySource115 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('activity_sources')->insert([
                                                            'activity_id' => $idactivity55,
                                                            'source_id' =>$idPlan50,
                                                            'value' => 170037142,
                                                            'goal' => 0,
                                                            'evidence_balance' => 170037142,
                                                            'age' => 4,
                                                            ]);
                                                            $idactivitySource116 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('activity_sources')->insert([
                                                            'activity_id' => $idactivity64,
                                                            'source_id' =>$idPlan50,
                                                            'value' => 909938814,
                                                            'goal' => 0,
                                                            'evidence_balance' => 909938814,
                                                            'age' => 4,
                                                            ]);
                                                            $idactivitySource117 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('activity_sources')->insert([
                                                            'activity_id' => $idactivity73,
                                                            'source_id' =>$idPlan50,
                                                            'value' => 2253843579,
                                                            'goal' => 0,
                                                            'evidence_balance' => 2253843579,
                                                            'age' => 4,
                                                            ]);
                                                            $idactivitySource118 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('activity_sources')->insert([
                                                            'activity_id' => $idactivity78,
                                                            'source_id' =>$idPlan56,
                                                            'value' => 280000000,
                                                            'goal' => 0,
                                                            'evidence_balance' => 280000000,
                                                            'age' => 4,
                                                            ]);
                                                            $idactivitySource119 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('activity_sources')->insert([
                                                            'activity_id' => $idactivity87,
                                                            'source_id' =>$idPlan56,
                                                            'value' => 200000000,
                                                            'goal' => 0,
                                                            'evidence_balance' => 200000000,
                                                            'age' => 4,
                                                            ]);
                                                            $idactivitySource120 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('activity_sources')->insert([
                                                            'activity_id' => $idactivity92,
                                                            'source_id' =>$idPlan56,
                                                            'value' => 167897999,
                                                            'goal' => 0,
                                                            'evidence_balance' => 167897999,
                                                            'age' => 4,
                                                            ]);
                                                            $idactivitySource121 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('activity_sources')->insert([
                                                            'activity_id' => $idactivity96,
                                                            'source_id' =>$idPlan56,
                                                            'value' => 419433470,
                                                            'goal' => 0,
                                                            'evidence_balance' => 419433470,
                                                            'age' => 4,
                                                            ]);
                                                            $idactivitySource122 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('activity_sources')->insert([
                                                            'activity_id' => $idactivity99,
                                                            'source_id' =>$idPlan62,
                                                            'value' => 528200000,
                                                            'goal' => 0,
                                                            'evidence_balance' => 528200000,
                                                            'age' => 4,
                                                            ]);
                                                            $idactivitySource123 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('activity_sources')->insert([
                                                            'activity_id' => $idactivity102,
                                                            'source_id' =>$idPlan62,
                                                            'value' => 500000000,
                                                            'goal' => 0,
                                                            'evidence_balance' => 500000000,
                                                            'age' => 4,
                                                            ]);
                                                            $idactivitySource124 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('activity_sources')->insert([
                                                            'activity_id' => $idactivity104,
                                                            'source_id' =>$idPlan62,
                                                            'value' => 50000000,
                                                            'goal' => 0,
                                                            'evidence_balance' => 50000000,
                                                            'age' => 4,
                                                            ]);
                                                            $idactivitySource125 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('activity_sources')->insert([
                                                            'activity_id' => $idactivity106,
                                                            'source_id' =>$idPlan62,
                                                            'value' => 405000000,
                                                            'goal' => 0,
                                                            'evidence_balance' => 405000000,
                                                            'age' => 4,
                                                            ]);
                                                            $idactivitySource126 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('activity_sources')->insert([
                                                            'activity_id' => $idactivity108,
                                                            'source_id' =>$idPlan62,
                                                            'value' => 504233470,
                                                            'goal' => 0,
                                                            'evidence_balance' => 504233470,
                                                            'age' => 4,
                                                            ]);
                                                            $idactivitySource127 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('activity_sources')->insert([
                                                            'activity_id' => $idactivity114,
                                                            'source_id' =>$idPlan58,
                                                            'value' => 318935695,
                                                            'goal' => 0,
                                                            'evidence_balance' => 318935695,
                                                            'age' => 4,
                                                            ]);
                                                            $idactivitySource129 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('activity_sources')->insert([
                                                            'activity_id' => $idactivity118,
                                                            'source_id' =>$idPlan59,
                                                            'value' => 156461741.4582,
                                                            'goal' => 0,
                                                            'evidence_balance' => 156461741.4582,
                                                            'age' => 4,
                                                            ]);
                                                            $idactivitySource130 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('activity_sources')->insert([
                                                            'activity_id' => $idactivity120,
                                                            'source_id' =>$idPlan57,
                                                            'value' => 174999717.4582,
                                                            'goal' => 0,
                                                            'evidence_balance' => 174999717.4582,
                                                            'age' => 4,
                                                            ]);
                                                            $idactivitySource131 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity43,
                                                              'source_id' =>$idPlan50,
                                                              'value' => 162159480,
                                                              'goal' => 0,
                                                              'evidence_balance' => 162159480,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource132 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity73,
                                                              'source_id' =>$idPlan56,
                                                              'value' => 799346988,
                                                              'goal' => 0,
                                                              'evidence_balance' => 799346988,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource133 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity96,
                                                              'source_id' =>$idPlan62,
                                                              'value' => 80566530,
                                                              'goal' => 0,
                                                              'evidence_balance' => 80566530,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource134 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity108,
                                                              'source_id' =>$idPlan58,
                                                              'value' => 185766530,
                                                              'goal' => 0,
                                                              'evidence_balance' => 185766530,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource135 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity114,
                                                              'source_id' =>$idPlan61,
                                                              'value' => 830000000,
                                                              'goal' => 0,
                                                              'evidence_balance' => 830000000,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource136 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('activity_sources')->insert([
                                                              'activity_id' => $idactivity120,
                                                              'source_id' =>$idPlan60,
                                                              'value' => 25000000,
                                                              'goal' => 0,
                                                              'evidence_balance' => 25000000,
                                                              'age' => 4,
                                                              ]);
                                                              $idactivitySource138 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                              DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia362,
                                                                'activity_source_id' =>$idactivitySource106,
                                                                'value' => 73304110,
                                                                ]);
                                                                $idevidenceFinancial106 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                
                                                              DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia372,
                                                                'activity_source_id' =>$idactivitySource107,
                                                                'value' => 568264587,
                                                                ]);
                                                                $idevidenceFinancial107 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                
                                                              DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia381,
                                                                'activity_source_id' =>$idactivitySource108,
                                                                'value' => 181568962,
                                                                ]);
                                                                $idevidenceFinancial108 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                
                                                              DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia386,
                                                                'activity_source_id' =>$idactivitySource109,
                                                                'value' => 300000000,
                                                                ]);
                                                                $idevidenceFinancial109 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                
                                                              DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia396,
                                                                'activity_source_id' =>$idactivitySource111,
                                                                'value' => 486482083,
                                                                ]);
                                                                $idevidenceFinancial111 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                
                                                              DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia401,
                                                                'activity_source_id' =>$idactivitySource112,
                                                                'value' => 1300000000,
                                                                ]);
                                                                $idevidenceFinancial112 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                
                                                              DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia403,
                                                                'activity_source_id' =>$idactivitySource113,
                                                                'value' => 912840520,
                                                                ]);
                                                                $idevidenceFinancial113 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                
                                                              DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia407,
                                                                'activity_source_id' =>$idactivitySource114,
                                                                'value' => 289972166,
                                                                ]);
                                                                $idevidenceFinancial114 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                
                                                              DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia411,
                                                                'activity_source_id' =>$idactivitySource115,
                                                                'value' => 776390000,
                                                                ]);
                                                                $idevidenceFinancial115 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                
                                                              DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia415,
                                                                'activity_source_id' =>$idactivitySource116,
                                                                'value' => 165872516,
                                                                ]);
                                                                $idevidenceFinancial116 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                
                                                              DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia424,
                                                                'activity_source_id' =>$idactivitySource117,
                                                                'value' => 876550371,
                                                                ]);
                                                                $idevidenceFinancial117 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                
                                                              DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia433,
                                                                'activity_source_id' =>$idactivitySource118,
                                                                'value' => 2253843579,
                                                                ]);
                                                                $idevidenceFinancial118 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                
                                                              DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia438,
                                                                'activity_source_id' =>$idactivitySource119,
                                                                'value' => 257092664,
                                                                ]);
                                                                $idevidenceFinancial119 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                
                                                              DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia447,
                                                                'activity_source_id' =>$idactivitySource120,
                                                                'value' => 192385182,
                                                                ]);
                                                                $idevidenceFinancial120 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                
                                                              DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia452,
                                                                'activity_source_id' =>$idactivitySource121,
                                                                'value' => 163244363.62,
                                                                ]);
                                                                $idevidenceFinancial121 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                
                                                              DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia456,
                                                                'activity_source_id' =>$idactivitySource122,
                                                                'value' => 419433470,
                                                                ]);
                                                                $idevidenceFinancial122 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                
                                                              DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia459,
                                                                'activity_source_id' =>$idactivitySource123,
                                                                'value' => 526973149,
                                                                ]);
                                                                $idevidenceFinancial123 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                
                                                              DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia462,
                                                                'activity_source_id' =>$idactivitySource124,
                                                                'value' => 459233381,
                                                                ]);
                                                                $idevidenceFinancial124 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                
                                                              DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia464,
                                                                'activity_source_id' =>$idactivitySource125,
                                                                'value' => 50000000,
                                                                ]);
                                                                $idevidenceFinancial125 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                
                                                              DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia466,
                                                                'activity_source_id' =>$idactivitySource126,
                                                                'value' => 402219038,
                                                                ]);
                                                                $idevidenceFinancial126 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                
                                                              DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia468,
                                                                'activity_source_id' =>$idactivitySource127,
                                                                'value' => 504233470,
                                                                ]);
                                                                $idevidenceFinancial127 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                
                                                              DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia474,
                                                                'activity_source_id' =>$idactivitySource129,
                                                                'value' => 318935695,
                                                                ]);
                                                                $idevidenceFinancial129 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                
                                                              DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia478,
                                                                'activity_source_id' =>$idactivitySource130,
                                                                'value' => 144488348.5418,
                                                                ]);
                                                                $idevidenceFinancial130 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                
                                                              DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia480,
                                                                'activity_source_id' =>$idactivitySource131,
                                                                'value' => 25000000,
                                                                ]);
                                                                $idevidenceFinancial131 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia403,
                                                                  'activity_source_id' =>$idactivitySource132,
                                                                  'value' => 162159480,
                                                                  ]);
                                                                  $idevidenceFinancial132 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia433,
                                                                  'activity_source_id' =>$idactivitySource133,
                                                                  'value' => 474910923,
                                                                  ]);
                                                                  $idevidenceFinancial133 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia456,
                                                                  'activity_source_id' =>$idactivitySource134,
                                                                  'value' => 65260062,
                                                                  ]);
                                                                  $idevidenceFinancial134 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia468,
                                                                  'activity_source_id' =>$idactivitySource135,
                                                                  'value' => 62320645,
                                                                  ]);
                                                                  $idevidenceFinancial135 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia474,
                                                                  'activity_source_id' =>$idactivitySource136,
                                                                  'value' => 804597045,
                                                                  ]);
                                                                  $idevidenceFinancial136 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia480,
                                                                  'activity_source_id' =>$idactivitySource138,
                                                                  'value' => 156695994.02,
                                                                  ]);
                                                                  $idevidenceFinancial138 = DB::getPdo()->lastInsertId();
                                                                  
    }
}