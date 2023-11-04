<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCar2022 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_advance')->insert([
            'activity_id' => 12571,
            'year' =>3,
            'value' => 19.76,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 22.1..1.: Generar o promover mecanismos, espacios de intervención, desarrollo de contenidos e instrumentos de gestión del conocimiento e innovación socio ambiental.
          Actividad 22.1..2. Apoyar desde la dimensión social el fortalecimiento y/o escalabilidad de 1 modelo de gestión del conocimiento para la CAR,
          Actividad 22.1.3:Gestionar, operar y posicionar el Sistema de Información de Gestión del Conocimiento y la Innovación Ambiental SIGCI  
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia1 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 12572,
            'year' =>3,
            'value' => 13.42,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 22.2.1. Desarrollar la asesoría técnica - social a los entes territoriales para formular o implementar las estrategias de las Políticas Nacional, Departamental y Distrital  de Educación  Ambiental, así como de los PTEA de municipios y territorios indígenas
          Actividad 22.2.2. Adelantar alianzas estratégicas que fortalezcan la Gobernanza Ambiental Territorial  a partir de la operativización de las estrategias de las Políticas Nacional, Departamental y Distrital  de Educación  Ambiental, así como de los PTEA de municipios y territorios indígenas
          Actividad 22.2.3. Diseñar, planear e implementar un observatorio de la educación ambiental regional como eje articulador de la implementación de las estrategias de las Políticas Nacional, Departamental y Distrital  de Educación  Ambiental, así como de los PTEA de municipios y territorios indígenas.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.
          
          ',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia2 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 12573,
            'year' =>3,
            'value' => 16.86,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 22.3.1 Vinculación de 28  Instituciones Educativas a la estrategia Ecoescuela con  la  inclusión de la dimensión ambiental al currículo y el fortalecimiento de la gestión ambiental escolar en dos componentes ambientales.
          Actividad 22.3.2 Generación de   14 planes piloto de la estrategia integral de Ecoescuela con intervención del 100% de los componentes ambientales de la gestión ambiental escolar: Agua, Energía, Residuos, Gestión del Riesgo, biodiversidad y consumo responsable.   
          Actividad 22.3.3 Seguimiento a  120 instituciones educativas ya promovidas bajo la estrategia Ecoescuela fortaleciendo la dimensión de la Gestión
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia3 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 12574,
            'year' =>3,
            'value' => 15.75,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 22.4.1. Realizar el  acompañamiento  a  entidades  institucionales para promover  la inclusión, articulación y ejecución del componente de educación comunitaria   para el conocimiento  del riesgo y adaptación al  cambio climático,  en los diferentes instrumentos de planificación municipal de los 105 Municipios de la Jurisdicción CAR
          Actividad 22.4.2. Implementación de un proceso de capacitación-  para la gestión del riesgo en el entorno escolar, a fin de  fortalecer las capacidades sociales que permitan disminuir la vulnerabilidad ante los riesgos y propender por el desarrollo sostenible en por lo menos 125 IED de la jurisdicción CAR
          Actividad 22.4.3. Consolidación y fortalecimiento de 7  Redes de Vigías Ambientales para la reducción del riesgo y adaptación al cambio climático con procesos de autogestión.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia4 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 12575,
            'year' =>3,
            'value' => 17.32,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 22.5.1. Identificación participativa de temas de interés socioambiental con las comunidades indígenas.
          Actividad 22.5.2. Desarrollar procesos de participación para fortalecer los temas de interés priorizados con las comunidades indígenas con enfoque etnocultural en la gestión ambiental.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia5 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 12577,
            'year' =>3,
            'value' => 21.62,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 22.6.1. Diseñar e implementar un (1) micrositio para los procesos de educación, formación, documentación y cultura ambiental y la migración de documentos hacia una sola plataforma digital.
          Actividad 22.6.2. Diseñar e implementar estrategias de innovación e infraestructura de equipos tecnológicos y audiovisuales de la CASA CAR, como del desarrollo de colecciones del CENDOC para el fomento de la cultura ambiental.
          Actividad 22.6.3. Creación de una (1) agenda cultural temática que incluya circuitos de pedagogía ambiental para la promoción de los proyectos de la corporación, charlas, foros, tertulias con expertos en el área ambiental.
          Actividad 22.6.4. Implementar estrategias de promoción de lectura y escritura utilizando la comunicación asertiva para el fomento de los valores ambientales.
          Actividad 22.6.5. Realizar los servicios y alfabetización informacional para fortalecer el conocimiento de la normatividad que rige los centros documentales, su finalidad y operatividad al interior de la sede central y de las direcciones regionales de la CAR.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia6 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 12578,
            'year' =>3,
            'value' => 15.73,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 22.7.1: Formular e implementar estrategias de comunicación alternativa para el fortalecimiento de la cultura ambiental en el Territorio CAR.
          Actividad 22.7.2. Conformar y consolidar la red de artistas ambientales del territorio CAR para fomentar la cultura ambiental mediante estrategias y lenguajes artísticos sostenibles.
          Actividad 22.7.3: Liderar y gestionar los eventos, campañas y piezas comunicativas para la promoción de la educación ambiental en el territorio CAR
          Actividad 22.7.4. Generar e implementar metodologías, herramientas pedagógicas y procesos de formación para la transformación socioambiental.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia7 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10506,
            'year' =>3,
            'value' => 19.45,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 23.1.1. Elaboración e implementación de un plan de sensibilización, comunicación y conocimiento, encaminado a gestionar integralmente la biodiversidad y sus servicios ecosistémicos, protegiendo 6 especies de fauna y/o flora amenazadas, en dos áreas protegidas de ecosistemas estratégicos de las 10 cuencas hidrográficas, con la participación  y  corresponsabilidad comunitaria y de sectores productivos,  incluyendo  la minería, en las áreas de conservación (páramos, humedales y bosques), con apoyo de las áreas internas CAR.
          Actividad 23.1.2. Promoción  de los servicios ecosistémicos de la biodiversidad, con las comunidades vecinas, que  reduzcan los procesos y actividades que ocasionan su deterioro a través del  el uso y aprovechamiento sostenible de la guadua y la implementación del plan de acción de la Iniciativa Colombiana de polinizadores, en dos  áreas protegidas  ubicadas en las cuencas hidrográficas del territorio viabilizadas, en sinergia de las áreas internas CAR.
          Actividad 23.1.3. Fortalecimiento de la Política para el Desarrollo del Ecoturismo, mediante la implementación de una estrategia de formación, capacitación y sensibilización en ecoturismo y etnoturismo con los actores regionales y locales, en las que se incorpore la sabiduría tradicional de los pobladores.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia8 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10507,
            'year' =>3,
            'value' => 20.95,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 23.2.1. Ejecución y dinamización del Plan de Educación Ambiental (PEA) en 22 humedales  y el componente social en 3 páramos priorizados del territorio CAR.
          Actividad 23.2.2. Conformación de una (01) Red de Amigos de los humedales en 22 ecosistemas estratégicos de humedal.
          Actividad 23.2.3. Fortalecimiento del Programa Padrino de Humedal como experiencia a nivel regional con por lo menos  60 alianzas público- privadas nuevas y ya existentes.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia9 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10508,
            'year' =>3,
            'value' => 23.48,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          23.3.1. Consolidación de Una (01) Red conformada por tres (03) grupos sociales (Defensores, Jóvenes y facilitadores) formados como Protectores de Agua que son reconocidos y están posicionados en un nivel de percepción bueno, como ejecutores de acciones ambientales relacionadas con el cuidado del agua, biodiversidad, bienes y servicios ecosistémicos en el territorio CAR.
          Actividad 23.3.2. Posicionamiento y ejecución de la estrategia integral de gestión del recurso hídrico con acueductos veredales y municipales denominado Circulo estratégico del agua con dos pilotos (02) implementados en microcuencas priorizadas de las 14 provincias de la jurisdicción CAR.
          Actividad 23.3.3. Promoción de limpieza y protección de microcuencas priorizadas como parte de las acciones de educación ambiental con actores sociales locales.
          Actividad 23.3.4. Socialización, sensibilización y apoyo social en el marco de la ejecución de acciones y estrategias técnicas y ambientales que realizan las Direcciones Regionales y las áreas CAR, abordadas a partir de instrumentos de planificación del recurso hídrico (POMCA, COMPES, PORH, PUEAA) como parte de la recuperación y adecuación ambiental del recurso hídrico.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia10 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10509,
            'year' =>3,
            'value' => 18.56,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 23.4.1. Ampliación de cobertura del proceso educativo Lluvia para la Vida con el fin de generar hábitos y prácticas sostenibles en el uso responsable y eficiente del agua en hogares y  comunidades de los municipios priorizados.
          Actividad 23.4.2. Seguimiento a hogares intervenidos con la estrategia Lluvia para la Vida a través de la optimización e  innovación con medidas ecoeficientes que permitan fortalecer el uso eficiente y ahorro del agua.  
          Actividad 23.4.3. Implementar una (1) estrategia de recirculación y otras alternativas de ecoeficiencia en hogares con déficit de recurso hídrico, como una medida de uso eficiente y ahorro del agua.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia11 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10510,
            'year' =>3,
            'value' => 18.89,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 23.5.1: Elaboración e implementación de un plan piloto con participación comunitaria en el reconocimiento de territorios bioculturales con enfoque de género e intergeneracional.
          Actividad  23.5.2.  Construir con organizaciones sociales de base dos planes de vida campesinos en dos cuencas priorizadas con enfoque territorial rural en la gestión ambiental.
          Actividad 23.5.3: Implementar estrategias metodológicas para fortalecer redes sociales en torno a la cultura de la participación para la conservación.
          Actividad  23.5.4.  Generar espacios creativos para la mujer rural en el reconocimiento de su saber ancestral y la defensa del agua en su territorio.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia12 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10511,
            'year' =>3,
            'value' => 8.15,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 23.6.1. Identificación de organizaciones comunitarias de base, vinculadas de manera directa a fuentes hídricas y acompañamiento para la formulación participativa de planes de trabajo para la protección y conservación de fuentes hídricas.
          Actividad 23.6.2. Desarrollar proyectos de emprendimiento social para la conservación ambiental ESCA, con organizaciones comunitarias de base.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia13 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10512,
            'year' =>3,
            'value' => 9.19,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 25.1.1: Fortalecer y mantener el sistema de gestión de la Innovación 5801:2018 (Dimensión CDT No. 1. Estrategia y 3. Recursos)
          Actividad 25.1.2: Establecer una plataforma regional de articulación IDi en la jurisdicción para el fortalecimiento de las las relaciones con el medio, alianzas, redes, entre otras (Dimensión CDT No. 2 Alianzas)
          Actividad 25.1.3: Formular y ejecutar 10 proyectos de investigación, desarrollo e innovación en escenarios priorizados que permitan la producción de conocimiento técnico científico (Dimensiones CDT No. 4. Actividades I+D+i No. 5. Resultados Desarrollo Tecnológico y No. 6. TRL)
          Actividad 25.1.4. Formular y ejecutar una estrategia de proyectos IDI en el marco de las actividades del Jardín Botánico Francisco Javier Matís que permitan fortalecer la innovación y desarrollo del territorio (Dimensiones CDT No. 4. Actividades I+D+i No. 5. Resultados Desarrollo Tecnológico y No. 6. TRL)
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia14 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10513,
            'year' =>3,
            'value' => 17.17,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 25.2.1: Diseñar y validar los modelos de servicios para las 3 líneas estratégicas.
          Actividad 25.2.2: Divulgar e implementar una estrategia de posicionamiento para cada una de las tres líneas estratégicas de servicios.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia15 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10514,
            'year' =>3,
            'value' => 14.22,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 25.3.1: Formular y validar 2 metodologías (estrategias) que aporten al análisis de problemáticas socio ambientales (Suelos y residuos peligrosos) como base para la determinación de acciones interinstitucionales durante el periodo 2020 – 2023.
          Actividad 25.3.2: Formular e implementar 3 programas  (estrategias) de promoción y prevención en salud ambiental (calidad del aire y recurso hídrico) para mitigar efectos adversos derivados de problemáticas ambientales en el territorio durante el periodo 2020 – 2023.
          Actividad 25.3.3: Promover y acompañar la implementación de 2 metodologías (estrategias) de salud ambiental asociadas a problemáticas ambientales con afectación directa en la población durante el periodo 2020 -2023.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia16 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10515,
            'year' =>3,
            'value' => 0,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 17.1.1: Elaboración y aprobación del documento que recopile la propuesta final del tema evaluado, por parte de los integrantes de las mesas de trabajo, así como realizar encuentros con los principales actores del SINA con la finalidad de fortalecer la gobernanza en la gestión ambiental.
          Actividad 17.1.2: Presentación de las propuestas ante las entidades competentes.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia17 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10516,
            'year' =>3,
            'value' => 19.10,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad  2.1.1: Realización del diagnóstico, formulación de Planes conservación para una (1)  especie amenazada en  cuencas de la jurisdicción CAR.
          Actividad  2.1.2: Realización del diagnóstico, formulación de Planes de prevención, control y manejo priorizadas para una (1)  especie invasora, en  cuencas de la jurisdicción CAR.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia18 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10517,
            'year' =>3,
            'value' => 14.73,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad  2.2.1 : Implementación de acciones de  conservación para especies  amenazadas  priorizadas  con planes formulados, en cuencas de la jurisdicción CAR.
          Actividad  2.2.2. Implementación de acciones de prevención, control y manejo para especies invasoras priorizadas con planes formulados, en cuencas de la jurisdicción CAR y en la RFP Bosque Oriental de Bogotá (cerros orientales).
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia19 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10518,
            'year' =>3,
            'value' => 2.06,
            'description' => 'Esta meta tuvo su cumplimiento a través de la siguiente actividad:
          Actividad 2.3.1: Realización del diagnóstico y formulación de medidas de conservación y manejo para un (1) proceso de degradación en áreas de una cuenca priorizada de la jurisdicción CAR.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia20 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10519,
            'year' =>3,
            'value' => 10.99,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 2.4.1: Realización de la actualización del mapa de coberturas y usos del suelo a  escala 1:25.000 para la jurisdicción CAR.
          Actividad 2.4.2: Elaboración del diagnóstico de la biodiversidad urbana para municipios priorizados de la cuenca del rio Bogotá.
          Actividad 2.4.3: Diseño y puesta en implementación del sistema de información en biodiversidad  SiBIOCAR.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.
          ',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia21 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10520,
            'year' =>3,
            'value' => 12.25,
            'description' => 'Esta meta tuvo su cumplimiento a través de la siguiente actividad:
          Actividad 2.5.1:  Formulación y desarrollo de la estrategia de conocimiento, establecimiento y  mantenimiento de las colecciones botánicas del Jardín Botánico Francisco Javier Matiz-JBFJM
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia22 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10521,
            'year' =>3,
            'value' => 49.68,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 5.1.2: Verificar el cumplimiento de los objetivos de calidad del agua superficial en las cuencas de la jurisdicción CAR con base en el análisis de los resultados de laboratorio emitidos
          Actividad 5.1.3:Realizar la evaluación de la calidad de agua de las cuencas o sectores de cuencas priorizadas según la gestión del recurso hídrico, a través del monitoreo o modelación de la calidad del agua superficial.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia23 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10522,
            'year' =>3,
            'value' => 29.11,
            'description' => 'Esta meta tuvo su cumplimiento a través de la siguiente actividad:
          Actividad  5.2.1: Realizar 2 campaña de monitoreo de niveles piezométricos y caracterización hidráulica de acuíferos priorizados.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia24 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10523,
            'year' =>3,
            'value' => 26.04,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 5.3.1: Realizar modelo hidrogeológico numérico tridimensional en acuíferos de depósitos cuaternarios y neógenos y correlacionados con formaciones terciarias y cretácicas para determinar zonas de recarga.
          Actividad 5.3.2:Identificar zonas de recarga de acuíferos, mediante un modelo hidrogeológico conceptual tridimensional.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia25 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10524,
            'year' =>3,
            'value' => 62.30,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 5.4.1: Realizar un piloto para monitorear subsidencia por exploración de agua subterránea aplicando herramientas tecnológicas.
          Actividad 5.4.2: Realizar base de datos de inventario de pozos de agua subterránea aplicando herramientas tecnológicas para la cuenca Rio Bogotá.
          Actividad 5.4.3: Realizar base de datos de inventario de pozos de agua subterránea aplicando herramientas tecnológicas para la cuenca Alto Suarez.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia26 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10525,
            'year' =>3,
            'value' => 16.11,
            'description' => '
          Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad  5.5.1: Calcular el balance hídrico en las cuencas de la jurisdicción CAR.
          Actividad  5.5.2: Realizar la actualización de la ERA en las cuencas de la jurisdicción CAR.     
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.
          ',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia27 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10526,
            'year' =>3,
            'value' => 33.63,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 5.6.1: Realizar estudios de adecuación hidráulica de la cuenca priorizada para el año.
          Actividad  5.6.3: Delimitar las zonas de ronda en corrientes priorizada.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia28 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10527,
            'year' =>3,
            'value' => 22.45,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad  5.7.1:Mantener actualizadas las plantillas para la formulación de los Programas de Uso Eficiente y Ahorro del Agua, para: Acueductos Municipales, Acueductos Veredales, Pequeños Usuarios, Sector Productivo y PUEAA Simplificado).
          Actividad  5.7.2:Brindar capacitaciones o prestar asistencia técnica en la formulación de los Programas de Uso Eficiente y Ahorro del Agua, de los usuarios priorizados en los Planes de Ordenamiento y Manejo de Cuencas, aprobados en la Jurisdicción CAR y los demás establecidos por la Dirección de Recursos Naturales.
          Actividad  5.7.3:Establecer las metas de Uso Eficiente y Ahorro del Agua, para los usuarios de la jurisdicción CAR.
          Actividad  5.7.4:Evaluar mediante informe técnico los Programas de Uso Eficiente y Ahorro del Agua-PUEAA, presentados por los usuarios del recurso hídrico de la jurisdicción CAR.
          Actividad  5.7.5:Realizar el cargue de los Programas de Uso Eficiente y Ahorro del Agua-PUEAA aprobados en la jurisdicción CAR, en la plataforma del Sistema de Información del Recurso Hídrico -SIRH.
          Actividad  5.7.6:Hacer seguimiento semestral a los informes técnicos de PUEAA generados en la Dirección de Recursos Naturales.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia29 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10528,
            'year' =>3,
            'value' => 20.93,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad  5.8.1:Operación y mantenimiento de los embalses de propiedad de la CAR.
          Actividad 5.8.2:Instrumentación y mantenimiento de las estructuras de control y obras conexas de los embalses: Neusa, Sisga y Hato.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.
          ',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia30 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10529,
            'year' =>3,
            'value' => 10.25,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 26.1.1: Priorizar y validar metodologías analíticas y metrológicas  para generar información estratégica de los recursos naturales (agua, aire, suelos, respel) y  la  atención temprana al seguimiento de emergencias ambientales .
          Actividad 26.1.2: Mantener la acreditación, autorización y certificación del Sistema de Gestión Integrado de la DLIA  (ISO/IEC 17025, ISO/IEC 50001,  NTC 4983:2012, NTC 4231:2012 y NTC 5365:2001)
          Actividad 26.1.3: Optimizar la capacidad operativa de los procesos  analíticos y metrológicos de la Dirección de Laboratorio e Innovación Ambiental para generar la información estratégica de los recursos naturales (agua, aire, suelos, respel) y  la  atención temprana al seguimiento de emergencias ambientales.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia31 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10530,
            'year' =>3,
            'value' => 24.19,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 26.2.1: Actualizar y fortalecer la capacidad tecnológica para ejecutar los programas para el muestreo y análisis de agua en las cuencas (segundo orden,  tercer orden y cerros orientales) y a los cuerpos lénticos (humedales, lagunas y embalses).
          Actividad 26.2.2: Actualizar y  fortalecer la capacidad tecnológica para ejecutar los programas para muestreo y análisis de agua de los sectores productivos objeto de tasas por uso, tasas retributivas,  PTAR, PSMV , sentencia Río Bogotá y demás fallos judiciales en el territorio.
          Actividad 26.2.3: Generar y fortalecer la capacidad tecnológica para ejecutar los programas de muestreo batimétrico en cuatro (4) cuerpos lénticos priorizados.
          Actividad  26.2.4: Actualizar y  ejecutar los programas de muestreo y monitoreo de aguas subterráneas.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia32 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10531,
            'year' =>3,
            'value' => 7.21,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 26.3.1: Aumentar la cobertura y operar las estaciones de monitoreo automáticas de calidad de agua en las cuencas de segundo orden. 
          Actividad 26.3.2: Validar y acreditar las  estaciones automáticas que componen la red de monitoreo de la calidad del agua.
          Actividad 26.3.3: Implementar y realizar el seguimiento  en tiempo real  para la gestión de la información de la Red de Estaciones Automáticas de Monitoreo de la Calidad del Agua.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia33 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10532,
            'year' =>3,
            'value' => 26.85,
            'description' => 'Esta meta tuvo su cumplimiento a través de la siguiente actividad:
          Actividad 26.4.2. Ejecutar y realizar el seguimiento a la recolección y procesamiento de  la información del censo
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia34 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10533,
            'year' =>3,
            'value' => 9.26,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 26.5.1: Realizar el  levantamiento de líneas de bases hidrobiológicas en cuatro (4) cuencas hidrográficas priorizadas y realizar el monitoreo hidrobiológico de los programas CAR priorizados.
          Actividad 26.5.2:  Generar modelación hidrobiológica de cuatro (4) cuencas basado en comunidades hidrobiológicas de la jurisdicción CAR.
          Actividad 26.5.3. Aumentar la cobertura de la colección hidrobiológica  Francisco Javier Matis de la CAR a grupos como diatomeas, peces, algas, zooplancton y macrófitas en  las cuencas priorizadas.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia35 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10534,
            'year' =>3,
            'value' => 50.27,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 26.6.1: Fortalecer la capacidad técnica y de cobertura  de los monitoreos de olores ofensivos mediante la implementación de nuevas metodologías en dos sectores productivos de mayor impacto en la jurisdicción CAR.
          Actividad 26.6.2: Realizar y fortalecer las actividades de evaluación de emisiones a 20 fuentes fijas priorizadas durante el primer año y  a 38 fuentes para cada uno de los siguientes 3 años  y la actualización del inventario de emisiones atmosféricas en la jurisdicción de la CAR.
          Actividad 26.6.3: Realizar las actividades de control de emisiones a 4.000 fuentes móviles en el primer año y 8.500 mediciones para cada uno de los siguientes 3 años y el seguimiento al 100% de los CDA que operan en la jurisdicción CAR.
          Actividad 26.6.4: Aumentar la cobertura del monitoreo de la calidad del aire mediante la priorización de 11 cabeceras municipales, 2 zonas industriales y 3 zonas mineras de la Jurisdicción CAR durante el periodo 2020 -2023. 
          Actividad 26.6.5: Fortalecer la cobertura en materia de monitoreo y diagnóstico de ruido ambiental y la realización o actualización anual de un (1) mapa de ruido en municipios priorizados de la jurisdicción de la CAR.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia36 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10535,
            'year' =>3,
            'value' => 35.57,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 26.7.1: Fortalecer la base de datos históricos de calidad del agua, aire y suelo para las diez (10) cuencas de segundo orden de la Corporación, para su consulta en línea; e integrar la línea base de información geoespacial en dos polígonos priorizados.
          Actividad 26.7.2: Desarrollar Dos (02) estrategias técnicas de monitoreo especializado (UAV, dispersión de contaminantes en aire, agua y suelo) para fortalecer la generación de líneas base de información ambiental .
          Actividad 26.7.3: Implementar la  línea base de monitoreo  hidrogeológico en  cuatro (04) cuencas priorizadas para el fortalecimiento de modelos de calidad hídrica subterránea en el territorio.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia37 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10536,
            'year' =>3,
            'value' => 6.22,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 26.8.1: Fortalecer y mejorar la capacidad tecnológica para realizar el proceso de  muestreo y análisis de la calidad del suelo y el estado de Erosión para la zonas priorizadas
          Actividad 26.8.2: Fortalecer y mejorar la capacidad tecnológica para realizar el proceso de  muestreo y análisis de la calidad del suelo y el estado de Salinidad para la zonas priorizadas 
          Actividad 26.8.3: Fortalecer y mejorar la capacidad tecnológica para realizar el proceso de  muestreo y análisis de la calidad del suelo y el estado de Compactación para la zonas priorizadas 
          Actividad 26.8.4: Fortalecer y mejorar la capacidad tecnológica para realizar el proceso de muestreo y análisis de la calidad del suelo y el estado de Contaminación - Vertimientos,  sitios contaminados (RESPEL y Lodos) para la zonas priorizadas 
          Actividad 26.8.5: Desarrollar una estrategia técnico científica para estandarizar los métodos analíticos y dar a conocer  la normatividad y legislación sobre el recurso suelo y factores de degradación
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia38 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10537,
            'year' =>3,
            'value' => 13.43,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 26.9.1: Realizar la valoración integral de escenarios priorizados (cuencas hidrográficas, ecosistemas  estratégicos, áreas protegidas o parques ecoturísticos) de la jurisdicción CAR en aplicación de las políticas ambientales y en el marco de la línea de planificación y ordenamiento ambiental del territorio. 
          Actividad 26.9.2: Aplicar las metodologías de VEA para el cálculo de las compensaciones ambientales por impactos no internalizables en procesos de licenciamiento ambiental, permisos o concesiones, en el marco de la línea de administración del ambiente y los recursos naturales.
          Actividad 26.9.3: Aplicar las metodologías de VEA para valorar el daño o afectaciones ambientales originadas por la comisión de delitos contra el ambiente y los recursos naturales, en el marco de la línea de  administración  del ambiente y los recursos naturales.
          Actividad 26.9.4: Intercambiar y consolidar conocimientos en Valoración Económica Ambiental con actores Institucionales (autoridades ambientales, entes territoriales y de control)  en el marco de la línea de gestión del conocimiento y la información.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia39 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10538,
            'year' =>3,
            'value' => 60.68,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 27.1.1:Operar y mantener la infraestructura tecnológica y física de la red de monitoreo hidrometeorológico.
          Actividad 27.1.3:Implementar un sistema moderno de integración y visualización de la información hidrológica y meteorológica.
          Actividad 27.1.5 Operar y mantener la infraestructura de la red de monitoreo automática satelital de agua subterránea.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia40 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10539,
            'year' =>3,
            'value' => 25.96,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad  27.2.2: Implementar un sistema moderno de vigilancia hidrometeorológica mediante un Centro de Control.
          Actividad  27.2.3: Atender la Gestión del riesgo mediante la divulgación y previsión de fenómenos.
          Actividad  27.2.4: Promoción, divulgación y atención de usuarios.   
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia41 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10540,
            'year' =>3,
            'value' => 57.40,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 27.3.1: Consolidar el reporte del indicador mínimo de gestión Porcentaje de Reporte al SIAC.
          Actividad 27.3.2: Reportar la información del Registro de Usuarios del Recurso Hídrico en el subsistema SIRH del SIAC.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia42 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10541,
            'year' =>3,
            'value' => 6.15,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 27.4.1:Generar Cartografía Base a escala 1:10.000 para las zonas faltantes del territorio CAR, aproximadamente 200 mil hectáreas.
          Actividad 27.4.2:Generar un Ortomosaico actualizado y de alta resolución de toda la jurisdicción CAR.
          Actividad 27.4.3:Adoptar el modelo de datos geográfico de ANLA establecido en la Resolución MADS 2182 de 2016 en la CAR, con migración de la información a esa estructura.
          Actividad 27.4.4:Adoptar y Adaptar el modelo de datos geográfico de la Gobernación de Cundinamarca para la información de POT, incluyendo migración de información.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia43 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10542,
            'year' =>3,
            'value' => 63.34,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 27.5.1: Dar soporte y mantenimiento al sistema de información geográfico GeoAmbiental.
          Actividad 27.5.2:  Publicar información geográfica generada por la CAR en el Geoportal de datos abiertos de la CAR
          Actividad 27.5.3: Editar y Publicar el Atlas Ambiental de la CAR.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia44 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10543,
            'year' =>3,
            'value' => 57.79,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 27.6.1: Realizar el seguimiento del estado de la calidad del aire en la jurisdicción CAR.
          Actividad 27.6.2: Generar insumos técnicos para la elaboración de planes de reducción de la contaminación atmosférica en la jurisdicción CAR.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia45 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10544,
            'year' =>3,
            'value' => 928,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 18.1.1: Resolver jurídicamente los expedientes aperturados hasta 31 de diciembre de 2019, que se encuentren en estado trámite y resuelto.
          Actividad 18.1.2:  Actualizar el noventa y nueve por ciento (99%) de los expedientes registrados en el Sistema de Administración de Expedientes SAE que permita su cambio de estado y su consulta de forma digital.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia46 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10545,
            'year' =>3,
            'value' => 98,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 18.2.1. Resolver jurídicamente los trámites permisivos. dentro del término establecido por la ley o el acuerdo de prestación de servicios de la Entidad y realizar la respectiva actualización en el SAE.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia47 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10546,
            'year' =>3,
            'value' => 80.69,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 18.3.1. Atender el cien por ciento (100%) de las quejas ambientales radicadas ante la Entidad a partir del 1º de enero de 2020.
          Actividad 18.3.2. Porcentaje de trámites sancionatorios  con determinación de la responsabilidad y cesación del procedimiento expedidos en la vigencia.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia48 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10547,
            'year' =>3,
            'value' => 2523,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 18.4.1. Acoger mediante Acto Administrativo los Informes Técnicos que se encuentren en los expedientes de Seguimiento y Control.
          Actividad 18.4.2 Acoger mediante Acto Administrativo los Informes Técnicos que se encuentren en los expedientes de Seguimiento y Control, PGIRS, RESPEL, y otros instrumentos ambientales.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia49 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10548,
            'year' =>3,
            'value' => 10,
            'description' => 'Esta meta tuvo su cumplimiento a través de la siguiente actividad:
          Actividad 18.5.1 : Ejecutar  el cien por ciento (100%) de operativos de Alto Impacto priorizados,  conformando la Unidad Integrada de Gobernabilidad Ambiental - UIGA,  y proveerla con los bienes, servicios y apoyo logístico necesarios.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.
          ',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia50 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10549,
            'year' =>3,
            'value' => 72.04,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 19.1.1. Realizar actividades de evaluación y seguimiento a 7.000 Expedientes de Concesión de Aguas Superficiales, Concesión de Aguas Subterráneas, Exploración de Aguas Subterráneas y/o Autorización de Ocupación de Cauce en la jurisdicción de la CAR
          Actividad 19.1.2. Realizar el seguimiento a grandes consumidores de agua en la jurisdicción de la CAR, calcular los parámetros técnicos para la liquidación del cobro de la Tasa por Utilización de Aguas y consolidar la base de datos de sujetos pasivos
          Actividad 19.1.3. Realizar actividades de seguimiento y control al Plan de Manejo Ambiental para el Embalse El Muña y a las industrias aledañas, en cumplimiento de la Orden 4.31 de la Sentencia del Río Bogotá.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia51 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10550,
            'year' =>3,
            'value' => 72.51,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 19.2.1: Calcular los parámetros técnicos  para el cobro de la tasa retributiva a los sujetos pasivos identificados.
          Actividad 19.2.2: Realizar actividades de evaluación, seguimiento y control a las actividades generadoras de aguas residuales priorizando las cuencas que cuentan con POMCA y/o PORH aprobados.
          Actividad 19.2.3: Desarrollar acciones técnicas para la implementación de las disposiciones establecidas por la normativa vigente en lo relacionado con los Planes de Contingencia para el Manejo de Derrames de Hidrocarburos y Sustancias Nocivas.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.
          ',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia52 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10551,
            'year' =>3,
            'value' => 47.10,
            'description' => 'Esta meta tuvo su cumplimiento a través de la siguiente actividad:
          Actividad 19.3.1: Ejecutar la evaluación,  seguimiento y control al cien por ciento (100%) de los Planes de Saneamiento y Manejo de Vertimientos – PSMV.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia53 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10552,
            'year' =>3,
            'value' => 80.04,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 19.4.1: Desarrollar acciones de evaluación, seguimiento y/o control al aprovechamiento del recurso flora y sus medidas de compensación, al igual que a la comercialización y/o tráfico ilegal de madera
          Actividad 19.4.2: Realizar el cien por ciento (100%) de las acciones para el manejo posdecomiso de productos forestales almacenados en el Centro de Atención y Valoración de Flora Silvestre Maderable – CAVFSM.
          Actividad 19.4.3: Fortalecer y dar continuidad al cien por ciento (100%) de la operación del CAVFSM.
          Actividad 19.4.4: Generar el insumo técnico que permita al DAF realizar el cálculo y cobro de la tasa compensatoria por aprovechamiento forestal maderable en bosques naturales.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.
          ',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia54 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10553,
            'year' =>3,
            'value' => 76.68,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 19.5.1:  Realizar la prevención y control, vigilancia y manejo de fauna silvestre relacionada con tráfico y/o tenencia ilegal.
          Actividad 19.5.2:  Realizar control, seguimiento, vigilancia y manejo a  fauna exótica invasora, predadora y atender otros casos de conflictos de fauna silvestre y humanos (atropellamientos).
          Actividad 19.5.3: Fortalecer y dar continuidad al 100% de la operación del Centro de Atención y Valoración – CAV de Fauna Silvestre y establecer una Estación de paso en lugar estratégico para el manejo de fauna silvestre decomisada y/o rescatada.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia55 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10554,
            'year' =>3,
            'value' => 74.42,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 19.6.1: Realizar seguimiento y control a los establecimientos inscritos en el registro de residuos peligrosos y a los gestores de residuos peligrosos priorizados.
          Actividad 19.6.2: Realizar capacitaciones para el fortalecimiento de la gestión integral de RESPEL.
          Actividad 19.6.3: Realizar el seguimiento anual al cien por ciento (100%) de los sitios contaminados identificados.
          Actividad 19.6.4: Evaluar anualmente el diez (10%) de las alternativas de aprovechamiento, valorización y tratamiento de residuos peligrosos identificadas.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia56 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10555,
            'year' =>3,
            'value' => 63.35,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 19.7.1: Control y seguimiento a los seis (6) programas de aprovechamiento de los PGIRS
          Actividad 19.7.2: Realizar la evaluación, seguimiento y control de los gestores priorizados de residuos especiales (RCDs, aceites comestibles y llantas usadas)
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.
          ',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia57 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10556,
            'year' =>3,
            'value' => 68.67,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 19.8.1: Consolidar y actualizar la información que reposa en las Direcciones Regionales en relación con las actividades generadoras de emisiones atmosféricas que no son objeto de permiso de emisiones
          Actividad 19.8.2: Promoción del autocontrol a las actividades generadoras de emisiones atmosféricas
          Actividad 19.8.3: Realizar la evaluación, seguimiento y control ambiental de los trámites priorizados asociados a las actividades generadoras de emisiones de fuentes fijas puntuales
          Actividad 19.8.4: Realizar la evaluación, seguimiento y control ambiental de los trámites priorizados, asociados a las actividades generadoras de olores ofensivos que han sido objeto de requerimiento de PRIO.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia58 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10557,
            'year' =>3,
            'value' => 62.30,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 19.9.1: Realizar 3000 Informes de aplicación de criterios técnicos para la imposición de sanciones en las Direcciones Regionales.
          Actividad 19.9.2: Fortalecer la capacidad técnica de las Direcciones Regionales de la CAR mediante el acompañamiento en la evaluación y seguimiento del 100% de los trámites objeto de Licenciamiento ambiental asignados.
          Actividad 19.9.3: Fortalecer la capacidad técnica de las Direcciones Regionales mediante el acompañamiento en la evaluación y seguimiento a las medidas y planes de compensación ambiental priorizados.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia59 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10558,
            'year' =>3,
            'value' => 61.03,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 19.10.1: Actualizar el Documento Técnico de Soporte - DTS de las necesidades de integración de información ambiental y territorial de la Corporación.
          Actividad 19.10.2: Operar técnicamente las plataformas PESCAR y el Sistema BOCHICAR.
          Actividad 19.10.3: Formular e implementar estrategias de integración con otras entidades ambientales y territoriales para el control y seguimiento de eventos ambientales
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia60 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10559,
            'year' =>3,
            'value' => 76.70,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 19.11.1: Realizar acciones de gestión y seguimiento al cumplimiento de las acciones judiciales relacionadas con el componente técnico en la evaluación, seguimiento y control ambiental de los recursos naturales.
          Actividad 19.11.2: Realizar actividades de protección, recuperación y monitoreo del recurso hídrico en fuentes según requerimiento de obligaciones judiciales
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia61 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10560,
            'year' =>3,
            'value' => 56.05,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 20.1.1: Realizar 1.200 acciones técnicas asociadas con la evaluación, seguimiento y control ambiental de tramites permisivos, sancionatorios y demás actividades  en el marco de la autoridad ambiental.
          Actividad 20.1.2: Realizar y documentar un seguimiento al mapa base de las áreas y actividades mineras sin instrumento ambiental.
          Actividad 20.1.3: Promover la formulación de tres (03) proyectos mineros ecosostenible en la cuenca del Río Alto Suárez, a fin de consolidar actividades ambientalmente responsables y sostenibles en la jurisdicción de la CAR, junto con las dependencias de la Corporación que lideran el tema.
          Actividad 20.1.4: Realizar seis (06) jornadas interinsitucionales de responsabilidad ambiental en el sector económico de la minería, en la cual participen las autoridades nacionales o regionales según su competencia.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia62 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10561,
            'year' =>3,
            'value' => 14.87,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 24.1.1:  Diseño, validación, aprobación y publicación de la resolución de la política de atención al servicio al ciudadano.
          Actividad 24.1.2: Diseño y elaboración del PIASC.
          Actividad 24.1.3: Desarrollo de estrategias y acciones para el fortalecimiento de la Cultura del 
          Servicio definidas en el PIASC.
          Actividad 24.1.4:  Fortalecer la gestión administrativa, técnica, tecnológica y logística para el desarrollo, implementación y seguimiento del Plan Institucional de Atención y Servicio al Ciudadano (PIASC).
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia63 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10562,
            'year' =>3,
            'value' => 4.07,
            'description' => 'Esta meta tuvo su cumplimiento a través de la siguiente actividad:
          Actividad 24.2.1. Implementación de herramientas de fortalecimiento tecnológico para mejorar el Servicio y Atención al Ciudadano.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia64 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10563,
            'year' =>3,
            'value' => 16.36,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 24.3.1:  Diseño e implementación de una (1) estrategia para la socialización de la normativa ambiental y social  vigente, que aplica a las actividades priorizadas que se desarrollan en la jurisdicción CAR, con actores de los diversos sectores y entidades que correspondan.
          Actividad 24.3.2:  Asesorar y facilitar desde el componente social, sociocultural y socioeconómico a las dependencias de nivel central y a las direcciones regionales de forma articulada, en los procesos de trámite y seguimiento de proyectos priorizados sujetos a licenciamiento que adelante la CAR, así como de aquellos asignados por el ANLA y otras entidades del SINA.
          Actividad 24.3.3: Diseño, validación, implementación y seguimiento de la metodología para la atención y satisfacción del usuario en forma  descentralizada y móvil a nivel local,   para la promoción de la legalidad ambiental a los usuarios, organizaciones comunitarias, empresarios, entes territoriales entre otros, sobre el trámite y cumplimiento de la normativa ambiental.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia65 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10564,
            'year' =>3,
            'value' => 23.06,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad  24.4.1: Identificación, caracterización de los conflictos socio ambientales priorizados e implementación de las agendas interinstitucionales participativas.
          Actividad 24.4.2: Fortalecimiento del observatorio, mediante el rediseño de la Plataforma Web en cuanto a diseño, contenido, acceso, navegación (programación) y espacio de almacenamiento. Permitiendo la participación ciudadana.
          Actividad 24.4.3:Diseño de herramientas virtuales de aprendizaje que den cuenta de procesos de participación biocultural.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia66 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10565,
            'year' =>3,
            'value' => 23.37,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 24.5.1: Construir escenarios de articulación interinstitucional y fortalecer los actores sociales y su rol vinculados a los instrumentos de ordenación y planificación territorial rural.
          Actividad  24.5.2:  Implementar procesos de articulación con personerías municipales en participación y control social para la gestión ambiental.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia67 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10567,
            'year' =>3,
            'value' => 13.93,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 28.2.1: Implementación y Mantenimiento del sistema de información ambiental de la Corporación.
          Actividad  28.2.2: Implementación y mantenimiento de los sistemas de información, herramientas e infraestructura tecnológica para fortalecer la gestión ambiental de la Corporación.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia68 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10568,
            'year' =>3,
            'value' => 82.59,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 28.3.1: Desarrollar, mantener y actualizar los componentes de la política de Gobierno Digital TIC para el Estado y TIC para la Sociedad de acuerdo con los lineamientos establecidos en el manual de Gobierno Digital.
          Actividad 28.3.2: Desarrollar la Arquitectura empresarial como habilitador transversal para la gestión de TI, de acuerdo al marco de referencia de Arquitectura Empresarial del MINTIC
          Actividad 28.3.3: Implementar y mantener como habilitador transversal el Sistema de Seguridad y Privacidad de la Información de la Corporación basado en la norma ISO 27001, de acuerdo al modelo Modelo de Seguridad y Privacidad de la Información establecido por el MINTIC.
          Actividad  28.3.4: Implementar y mantener como habilitador transversal  los Servicios Ciudadanos Digitales de la Corporación de acuerdo a los lineamientos definidos por el MINTIC
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia69 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10569,
            'year' =>3,
            'value' => 75.28,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 29.1.1: Fortalecer la comunicación institucional con el próposito de visibilizar la gestión institucional y posicionar a la entidad en el contexto interno y externo, a partir de sus componentes de diseño, gestión en redes sociales y plataformas digitales, realización de contenidos visuales, audiovisuales, gráficos, digitales y de multimedia, así como el apoyo administrativo y legal asociado.
          Actividad 29.1. 2: Implementar el plan de eventos institucionales en el marco del posicionamiento de la imagen corporativa y la gestión ambiental de la entidad. 
          Actividad 29.1.3: Afianzar un modelo de difusión constante, con destino a los públicos de interés; (Plan de Medios o estrategias comunicativas - Pauta TV, radio, medios impresos, comunicación digital, entre otros). 
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia70 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10570,
            'year' =>3,
            'value' => 33.25,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 30.1.1: Implementar la estrategia de planificación y desarrollo de la viabilidad de los proyectos derivados de la materialización de las actividades asociadas al Plan de Acción Cuatrienal.
          Actividad 30.1.2: Realizar el acompañamiento y asesoría a las dependencias a través del fortalecimiento de las habilidades y el conocimiento en formulación de proyectos y seguimiento y control de estos
          Actividad 30.1.3: Implementar la estrategia de seguimiento y control a los planes, programas y proyectos de inversión de la Entidad 
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia71 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10571,
            'year' =>3,
            'value' => 46.20,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 30.2.1: Operación, actualización y mantenimiento  del  Banco de Proyectos de Cofinanciación
          Actividad 30.2.2: Implementar asistencia técnica y metodológica a proyectos de cofinanciación.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia72 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10572,
            'year' =>3,
            'value' => 45.74,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 30.3.1: Fortalecer la cultura SIGESPU mediante la capacitación, sensibilización, asesoramiento y asesoría a los servidores de la Entidad en los sistemas certificados.
          Actividad 30.3.2. Realizar las Auditorias de seguimiento o certificación de las normas implementadas en la Entidad.
          Actividad 30.3.3: Implementar los Controles Operacionales para  asegurar que los procesos sean eficaces para el logro de los resultados esperados.
          Actividad 30.3.4. Ejecutar las actividades para dar cumplimiento al Plan de Trabajo SIGESPU, requerido para la gestión administrativa y ambiental de la Entidad.
          Actividad 30.3.5. Realizar las actividades tendientes a implementar, mejorar y dar cumplimiento a los instrumentos de MiPG y el PAAC.
          Actividad 30.3.6: Mantenimiento de la Herramienta de sistematización del Sistema Integrado de Gestión Pública SIGESPU.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia73 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10573,
            'year' =>3,
            'value' => 14.88,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 30.4.1: Formular, coordinar y hacer seguimiento a todos los asuntos relacionados con la cooperación técnica, tecnológica, científica y financiera interinstitucional (internacional y nacional) que coadyuve a la Corporación para el cumplimiento de su misión, visión, objetivos y funciones.
          Actividad 30.4.2: Formular, coordinar y hacer seguimiento a las ofertas nacionales e internacionales de cooperación de interés de la entidad.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia74 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10574,
            'year' =>3,
            'value' => 1.18,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 30.5.1: Realizar la planificación y el diseño de la metodología para articular estrategias de integración regional en el Territorio CAR
          Actividad 30.5.2: Implementar, hacer seguimiento y evaluación de las iniciativas de integración regional formuladas.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia75 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 14587,
            'year' =>3,
            'value' => 13.30,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia76 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 12702,
            'year' =>3,
            'value' => 10.50,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 21.1.1:  Estructurar  e Implementar una metodología pedagógica para la promoción y adopción de prácticas ciudadanas de consumo sostenible, dirigido a entidades gubernamentales, grupos poblacionales focalizados y líderes comunitarios en municipios con mayor crecimiento urbano o centros poblados  de la Jurisdicción CAR.
          Actividad 21.1.2.  implementación de dos   (2) estrategias:  promoción  de  uso de energías renovables (solar, eólica, pch, biomasa) y hogares sostenibles, como medidas  de mitigación y adaptación al cambio climático, en 33 municipios con mayor crecimiento urbano de la Jurisdicción con el fin de reducir emisiones de GEI y vulnerabilidad frente al cambio climático
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia77 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 12703,
            'year' =>3,
            'value' => 24.05,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 21.2.1. Desarrollar y documentar cuatro sistemas de producción más limpia.
          Actividad 21.2.2.  Formar a mínimo 100 familias en sistemas de producción más limpia.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia78 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 12704,
            'year' =>3,
            'value' => 2.39,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 21.3.1. Asistencia técnica de productores agrícolas y ganaderos para la implementación de sistemas de conservación y regeneración de suelos, en los sistemas productivos.
          Actividad 21.3.2. Asistencia técnica  a usuarios CAR para la implementación de técnicas biomecánicas y de bioingeniería.
          Actividad 21.3.3. Capacitación o socialización a entes educativos, OG´s, ONG´s y/o asociaciones de productores de la jurisdicción CAR, en las técnicas de conservación y regeneración de suelos y obras para el control de erosión.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia79 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 12705,
            'year' =>3,
            'value' => 17.67,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 21.4.1.  Complementar e implementar las estrategias de difusión del cuidado y conservación del árbol, como eje en los sistemas productivos, áreas de protección y urbanas.
          Actividad 21.4.2. Acompañar el proceso educativo en las estrategias definidas de cultura del árbol, llegando al 100% del territorio CAR.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia80 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 12706,
            'year' =>3,
            'value' => 17.83,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 21.5.1.: Implementación de las actividades del programa regional de negocios verdes por la autoridad ambiental y promoción y divulgación para uso de la plataforma digital de negocios verdes
          Actividad 21.5.1.:Procesos de capacitación en criterios de negocios verdes y/o comercio justo y/o aspectos ambientales, para la Internacionalización, y/o de promoción del ecoetiquetado, como estrategia de apoyo a los negocios verdes.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.
          ',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia81 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 12707,
            'year' =>3,
            'value' => 19.12,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 21.6.1.: Porcentaje de sectores con acompañamiento para la reconversión hacia sistemas sostenibles de producción, incluyendo la prevención de impactos ambientales generados principalmente por vertimientos.
          Actividad 21.6.1.: Empresas o productores o gremios promovidos hacia su Responsabilidad Ambiental Empresarial y/o de autogestión ambiental y/o para su participación en el Reconocimiento Ambiental Empresarial CAR
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.
          ',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia82 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 12708,
            'year' =>3,
            'value' => 19.08,
            'description' => 'Esta meta tuvo su cumplimiento a través de la siguiente actividad:
          Actividad 21.7.1.:  Procesos de promoción y/o seguimiento en economía circular y consumo sostenible, incentivando la formulación de proyectos de autogestión y las compras sostenibles gestionando y promoviendo alianzas empresariales y/o institucionales.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia83 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 12709,
            'year' =>3,
            'value' => 22.62,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 21.8.1: Fomentar la separación de residuos en la fuente y entrega efectiva a canales de reciclabilidad mediante procesos de formación y seguimiento a grupos poblacionales tales como : Entes territoriales, Primera Infancia, Población Escolar, Juntas de Acción Comunal y Aliados estratégicos.
          Actividad 21.8.2: Seguimiento a los procesos existentes de manejo de residuos orgánicos y gestión para el aprovechamiento de los mismos a a través de alternativas de innovación que permitan generar subproductos como: compost, humus, mejoradores de suelo entre otros, a escala Municipal.
          Actividad 21.8.3: Promoción de ejercicios de economía circular con materiales reciclables tales como: plástico, papel, así como también Residuos Peligrosos y Especiales (aceite cocina usado), definiendo alianzas estratégicas con los gestores autorizados.
          Actividad 21.8.4: Fomentar la organización Regional de los recicladores de oficio y recuperadores ambientales del territorio a fin de trazar una ruta que permita aumentar indicadores de recuperación y transformación de residuos reciclables, disminuyendo la presión de los rellenos sanitarios.
          Actividad 21.8.5: Proporcionar espacios de promoción y divulgación de experiencias significativas mediante la realización de Encuentros Regionales, Reciclatones, Encuentro de Recicladores, Alcaldes entre otros.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia84 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10577,
            'year' =>3,
            'value' => 11.77,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 6.1.1 Culminar la fase de diagnóstico y desarrollar las actividades de las fases de prospectiva y zonificación ambiental, formulación y adopción para la formulación y Actualización del Plan de Ordenación y Manejo (POMCA) de la cuenca del río Sumapaz. 
          Actividad 6.1.2 Culminar la fase de diagnóstico y desarrollar las actividades de las fases de prospectiva y zonificación ambiental, formulación y adopción para la formulación y Actualización del Planes de Ordenación y Manejo (POMCA) de la cuenca del río Negro. 
          Actividad 6.1.3 Fortalecimiento y acompañamiento de los Consejos de Cuenca.  
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia85 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10578,
            'year' =>3,
            'value' => 46.15,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 6.2.1. Consolidar, analizar y socializar  el estado de la ejecución del componente prográmatico de los Planes de Ordenación y Manejo de Cuencas ( POMCA ) aprobados en la jurisdicción CAR.
          Actividad 6.2.2. Consolidar, analizar y socializar el estado de la ejecución de los 54 acuerdos en el marco de la consulta previa del Plan de Ordenación y Manejo de Cuenca del Río Bogotá.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia86 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10579,
            'year' =>3,
            'value' => 18.73,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 6.3.1.  Formular 12 programas de manejo integrado de microcuencas abastecedoras de agua de la cuenca del río Bogotá.
          Actividad 6.3.2. Definir criterios técnicos y de asesoría para la recuperación, restauración y manejo de las fuentes hídricas priorizadas por los entes territoriales de la cuenca del rio Bogotá.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia87 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10580,
            'year' =>3,
            'value' => 7.14,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 6.4.1  Terminar la etapa de logística y desarrollar las etapas de formulación  y adopción del Plan de Ordenación Forestal (POF).
          Actividad 6.4.2. Implementar  acciones que contribuyan a la toma de decisiones y la gestión del Plan de Ordenación Forestal (POF) que se adopte.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia88 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10581,
            'year' =>3,
            'value' => 17.79,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          6.5.1 Realizar los estudios de conveniencia para la reglamentación o actualización de los cuerpos de agua de orden 4 previstos para cada año en el Territorio CAR
          6.5.2 Emitir los actos administrativos de reglamentación o actualización de los cuerpos de agua previstos para cada año
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia89 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10582,
            'year' =>3,
            'value' => 18.69,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 6.6.1. Revisar los expedientes de reglamentación de cuerpos de agua y determinar cuáles aplican para realizar su seguimiento cada año.
          Actividad 6.6.2. Proyectar los actos administrativos acogiendo los informes técnicos correspondientes, de los cuerpos de agua previstos para cada año. 
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia90 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10583,
            'year' =>3,
            'value' => 14.08,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 6.7.1. Implementar la planificación,  fases de  formulación y adopción  del Plan de Ordenamiento del Recurso Hídrico (PORH) en las 19  zonas hidrograficas de nivel I  del Río Bogotá .
          Actividad 6.7.2. Implementar la planificación,  fases de  formulación y adopcion  del Plan de Ordenamiento del Recurso Hídrico (PORH) en  los cuerpos de agua de tres subzonas hidrográficas.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia91 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10584,
            'year' =>3,
            'value' => 18.41,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 6.8.1. Realizar la metodología y herramienta tecnológica para el desarrollo del programa de seguimiento y monitoreo del recurso hídrico en el marco de los PORH adoptados.
          Actividad 6.8.2. Realizar el seguimiento  al 70% de la estructura de proyectos y actividades de los Planes de Ordenamiento del Recurso Hídrico (PORH),  adoptados en la Jurisdicción CAR. 
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia92 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10585,
            'year' =>3,
            'value' => 45.15,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 7.1.1. Operación, seguimiento y control de los Sistemas Hidráulicos.
          Actividad 7.1.2. Mantenimiento preventivo y correctivo de los equipos electromecánicos, compuertas e instalaciones locativas asociadas a los Sistemas Hidráulicos.
          Actividad 7.1.3. Conservación de la sección hidráulica y de las pendientes, mediante la limpieza y retiro de sedimentos, para mejorar la capacidad hidráulica de los canales y corrientes naturales.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia93 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10586,
            'year' =>3,
            'value' => 61.13,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 7.2.1  Administrar y Operar los equipos que componen el 100% del banco de maquinaria CAR.
          Actividad 7.2.2  Fortalecer, mejorar y mantener la capacidad operativa del Banco de maquinaria, con el fin de optimizar los procesos de operación y cumplir con los objetivos propuestos. 
          Actividad 7.2.3  Construcción y operación de sede administrativa y operativa de la maquinaria CAR. 
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia94 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10587,
            'year' =>3,
            'value' => 76.67,
            'description' => 'Esta meta tuvo su cumplimiento a través de la siguients actividad:
          Actividad 7.3.1  Ejecutar actividades para adelantar proyectos priorizados de construcción de infraestructura para embalses.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia95 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10588,
            'year' =>3,
            'value' => 24.19,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 7.4.1  Realizar la evaluación de los proyectos de adecuación y mantenimiento hidráulico para la suscripción de Convenios con los entes territoriales.
          Actividad 7.4.2 Efectuar el diseño y estructuración de proyectos de adecuación y mantenimiento hidráulico para la celebración de contratos y convenios.
          Actividad 7.4.3 Contratar remoción de sedimentos para configurar la sección transversal de diseño en el tramo de intervención de los cauces con el fin de mejorar las condiciones hidrodinámicas en las corrientes hídricas de la jurisdicción CAR.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia96 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10589,
            'year' =>3,
            'value' => 10.05,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 8.1.1 Ejecutar medidas de captación de fuentes superficiales, que garanticen el aumento de  la disponibilidad del recurso hídrico, para la atención eficaz de mitigación y regulación del riesgo reducción y regulación hídrica en la jurisdicción CAR.
          Actividad 8.1.2 Implementar sistemas alternos de captación mediante cosecha de aguas lluvias, que permitan aumentar la disponibilidad del recurso hídrico y abastecer  a las comunidades para el desarrollo agropecuario en la jurisdicción CAR.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia97 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10590,
            'year' =>3,
            'value' => 13.84,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 9.1.1. Realizar las Actividades relacionadas con la  revisión, conceptualización, estructuración y supervisión necesarias en las etapas para evaluar. Estructurar y supervisar los convenios y/o contratos para el desarrollo de infraestructura en saneamiento básico asociado al manejo de aguas residuales.
          Actividad 9.1.2. Realizar las Actividades técnicas y administrativas de evaluación. Estructuración y supervisión necesarias para suscribir y poner en ejecución convenios y/o contratos para el desarrollo de infraestructura en saneamiento básico asociado al manejo de aguas residuales.
          Actividad 9.1.3. Pago de contratos y/o convenios de pasivos exigibles de saneamiento Básico.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia98 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10591,
            'year' =>3,
            'value' => 7.60,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 1.1.1: Elaboración del documento técnico y jurídico de soporte para la redelimitación y/o recategorización de 5 áreas protegidas y Proyecto de Acuerdo para la adopción del mismo.
          Actividad 1.1.2. Elaboración de tres (3) propuestas de declaratoria de nuevas áreas protegidas (fases de preparación, aprestamiento y declaratoria)
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia99 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10592,
            'year' =>3,
            'value' => 25.15,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguiente actividad:
          Actividad 1.2.1 Elaboración de documentos técnicos de formulación y/o actualización  de planes de manejo ambiental  en los componentes de diagnóstico, ordenamiento y estrategico de áreas protegidas. 
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia100 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10593,
            'year' =>3,
            'value' => 20.66,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 1.3.1. Implementar las acciones a desarrollar de acuerdo al plan de manejo ambiental adoptado en áreas protegidas.
          Actividad 1.3.2 implementación y/o seguimiento de acciones de los Planes de Manejo Ambiental - PMA de las RFP Bosque Oriental de Bogotá (Cerros Orientales) y RFRP del Norte de Bogotá D.C. Thomas Van Der Hammen
          Actividad 1.3.3. Realizar la gestión de seguimiento en cinco (5) áreas protegidas priorizadas por medio del desarrollo de la metodología de Análisis de efectividad de Manejo.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia101 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10594,
            'year' =>3,
            'value' => 26.85,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguiente actividad:
          Actividad 1.4.1. Realizar la Revisión cartográfica de los predios afectados por las áreas protegidas para su registro en la Oficina de instrumentos públicos.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia102 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10595,
            'year' =>3,
            'value' => 10.99,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 1.5.1.:Identificación, delimitación y caracterización de 20 humedales priorizados en la jurisdicción CAR.
          Actividad 1.5.2. Realizar acciones para la recuperación y restauración de humedales presentes en el área de la RFRP Thomas Van der Hammen (El Conejito - Guaymaral).
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia103 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10596,
            'year' =>3,
            'value' => 8.19,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguiente actividad:
          Actividad 1.6.1. Elaboración de la zonificación ambiental y régimen de usos para cuatro (4) páramos, dentro de la jurisdicción CAR.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia104 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10598,
            'year' =>3,
            'value' => 864.01,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 1.8.1. Adquirir áreas de interés ambiental e hídrico en el territorio CAR.
          Actividad 1.8.2. Incorporar familias nuevas y mantener las familias ya vinculadas, en esquemas de incentivos a la conservación de pagos por servicios ambientales - PSA como BanCO2, Plataformas colaborativas, entre otros.
          Actividad 1.8.3. Implementar acciones de propagación de material vegetal (mínimo 6 viveros), de reforestación (SEMBRATÓN - Sembrar nos une), aislamiento como acciones tendientes a la restauración ecológica, en áreas en ecosistemas estratégicos y/o en suelos degradados.
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia105 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10599,
            'year' =>3,
            'value' => 23.21,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 3.1.1. Asesorar, asistir y fortalecer a 34 municipios en la formulación y diseño de la Agenda Ambiental Municipal.
          Actividad 3.1.2. Realizar la incorporación o el seguimiento al Plan de Acción de 70 municipios
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia106 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10600,
            'year' =>3,
            'value' => 30,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 3.2.1. Realizar las actividades técnicas y administrativas necesarias para suscribir y poner en ejecución la actualización de la formación y/o conservación catastral con enfoque de catastro multipropósito.
          Actividad 3.2.2. Realizar la evaluación y seguimiento de los productos del proceso de actualización de la formación y/o conservación catastral con enfoque de catastro multipropósito. (logística, supervisión, Recibo Productos,  Evaluación Productos )                                            
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia107 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10601,
            'year' =>3,
            'value' => 15.83,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 3.3.1. Asesorar a los entes territoriales en la inclusión del componente ambiental urbano en los procesos de planificación y ordenamiento territorial, incluyendo el establecimiento de determinantes ambientales urbanas
          Actividad 3.3.2. Implementar acciones relacionadas con la gestión ambiental urbana priorizadas para la Planificación y ordenamiento ambiental y la Gestión ambiental del Espacio Público, áreas verdes y estructura ecológica en áreas urbanas
          Actividad 3.3.3. Revisar, Compilar y Actualizar la información relacionada con la estructura ecológica principal y los recursos naturales, con un enfoque urbano regional en los municipios priorizados.                                
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia108 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10602,
            'year' =>3,
            'value' => 59.23,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 3.4.1. Asistir técnicamente  a los municipios del Territorio CAR, que soliciten y/o concurran a las convocatorias realizadas por la Corporación en la incorporación de los determinantes ambientales en los procesos de revisión y ajuste  de los Planes de Ordenamiento Territorial – POT.  
          Actividad 3.4.2. Realizar la evaluación de los POT (POT,PBOT,EOT) presentados a la Corporación para la revisión de la incorporación de las determinantes ambientales.                                                                                                                                               
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia109 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10603,
            'year' =>3,
            'value' => 62.81,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguiente actividad:
          Actividad 3.5.1 Realizar visitas de campo  para analizar y verificar los asuntos ambientales concertados en los POT
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia110 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10604,
            'year' =>3,
            'value' => 67.14,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 4.1.1 Realizar la administración y operación de la infraestructura de los parques de la CAR como aulas ambientales
          Actividad 4.1.2 Impulsar servicios ecoturísticos sostenibles que incrementen la afluencia de visitantes en los Parques CAR 
          Actividad 4.1.3 Realizar el mantenimiento. los diseños y/o construcciones de la infraestructura ambiental de los Parques Ecoturisticos de la CAR.                                                                                                                                         
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia111 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10605,
            'year' =>3,
            'value' => 26.07,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 13.1.1. Analizar  la información climática  y aspectos de los municipios en los  POMCA,  de acuerdo con la Tercera Comunicación Nacional de Cambio Climático, (IDEAM)  y estimación  de la amenaza 
          Actividad 13.1.2. Conocer la relación clima actual  y futuro  de los diferentes aspectos del territorio,  estimación de la Sensibilidad y Capacidad Adaptativa al cambio climático.
          Actividad 13.1.3. Determinar el grado de vulnerabilidad  y el riesgo por cambio climático en los municipios de las dos cuencas seleccionadas.      
          Actividad 13.1.4. Identificar y priorizar  las medidas de adaptación al cambio climático en cada uno de los municipios de las dos  cuenca hidrográficas seleccionadas y en las subcuencas de la cuenca del rió Bogotá para apoyar en la implementación.                                                                                                                            
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia112 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10606,
            'year' =>3,
            'value' => 14.77,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 13.2.1. Instalar y realizar seguimiento a la calculadora de huella de carbono CAR en 100% de municipios y apoyar en la identificación e implementación de medidas de mitigación. 
          Actividad  13.2.2. Formular un proyecto REDD+  con el fin de obtener la certificación de  bonos de carbono.
          Actividad 13.2.3. Promover, acompañar y apoyar la ejecución  de acciones de mitigación del Plan de Acción del Nodo Regional Centro Oriente Andino - NRCOA de cambio climático en la región de Cundinamarca.                                                                                                                                  
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia113 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10607,
            'year' =>3,
            'value' => 60.32,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 13.3.1. Analizar información documental, cartográfica y conceptual que sirva como insumo a los municipios de la jurisdicción CAR para su incorporación en los instrumentos del ordenamiento territorial.
          Actividad 13.3.2. Identificar, monitorear y georreferenciar los puntos críticos por remoción en masa, inundaciones, avenidas torrenciales incendios forestales y riesgo químico y tecnológico evidenciados en los municipios del Territorio CAR.
          Actividad 13.3.3. Apoyar el conocimiento del riesgo por medio de estudios de amenaza vulnerabilidad y riesgo por remoción en masa, inundaciones, avenidas torrenciales e incendios forestales en cinco municipios priorizados de la jurisdicción CAR.                                                                                                                         
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia114 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10608,
            'year' =>3,
            'value' => 1,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 13.4.1. Apoyar la elaboración de estudios o diseños  para el conocimiento del riesgo de 32 puntos críticos priorizados.
          Actividad 13.4.2. Apoyar la elaboración de planes de rehabilitación, recuperación y restauración de siete zonas priorizadas afectadas por los efectos de la variabilidad climática como medida de mitigación del riesgo.                                                                                                                     
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia115 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10609,
            'year' =>3,
            'value' => 7.70,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 13.5.1. Asesorar a los 105 municipios de la jurisdicción CAR  en la incorporación y  planificación de acciones  de cambio climático en el marco de los instrumentos de planificación territorial. 
          Actividad 13.5.2. Asesorar y acompañar técnicamente,  al 100% de  Consejos Municipales de Gestión del Riesgo y otras entidades u organizaciones del orden municipal del Territorio CAR, en el conocimiento, la incorporación e implementación de la gestión del riesgo.                                                                                                     
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia116 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10610,
            'year' =>3,
            'value' => 28.42,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 14.1.1 Desarrollo de medidas de reducción y/o mitigación del riesgo en  puntos críticos priorizados.
          Actividad 14.1.2 Pago de pasivo exigible de los convenios y/o contratos para la construcción de obras de mitigación y reducción del riesgo.                                                                                                  
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia117 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10611,
            'year' =>3,
            'value' => 98.43,
            'description' => 'Esta meta tuvo su cumplimiento a través de la siguiente actividad:
          Actividad 14.2.1  Realizar actividades para la prevención y apoyo en la atención de puntos críticos identificados por emergencia.                                                                                                   
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia118 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10613,
            'year' =>3,
            'value' => 2.69,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 15.2.1. Implementar y validar proyectos de gestión energética o ecosostenibilidad ambiental en el territorio
          Actividad 15.2.2. Capacitar a la comunidad para apropiar los proyectos de gestión energética o ecosostenibilidad ambiental validados en el territorio
          Actividad 15.2.3. Realizar el seguimiento y monitoreo de los proyectos de gestión energética o ecosostenibilidad ambiental apropiados en el territorio                                                                                                  
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia119 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10614,
            'year' =>3,
            'value' => 0,
            'description' => 'Esta meta tuvo su cumplimiento a través de la siguiente actividad:
          Actividad 15.3.1. Realizar el inventario de la fauna íctica presente en la jurisdicción CAR.                                                                                          
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia120 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10615,
            'year' =>3,
            'value' => 30.60,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 16.1.1: Fortalecer la metodología pedagógica y sus herramientas para promover  BiciCAR y otras alternativas de movilidad sostenible como una estrategia de alto impacto en cobertura  para la protección ambiental en la Jurisdicción CAR.
          Actividad 16.1.2: Realizar la transferencia de la metodología de la estrategia BiciCAR a los  Municipios que participaron en la formación de biciprotectores del ambiente y otros que lo soliciten.                                                                                      
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia121 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10616,
            'year' =>3,
            'value' => 13.70,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 16.2.1  Realizar un inventario  de movilidad (motorizada y no motorizada) en municipios priorizados. 
          Actividad 16.2.2: Desarrollar una estrategia para adopción e implementación de buenas prácticas  y  uso de tecnologías bajas en carbono enmarcadas en movilidad sostenible, que permita establecer una reducción en emisiones GEI.
          Actividad 16.2.3 Desarrollar una plataforma tecnológica para  el monitoreo y seguimiento de estrategias  de movilidad  sostenible en el territorio.                                                                                     
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia122 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10618,
            'year' =>3,
            'value' => 14.67,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 11.2.1: Alcanzar el 100% de las obras de adecuación hidráulica en la Cuenca Alta del Río Bogotá, en el tramo de 42 kms comprendido entre Puente La Virgen (Cota) y Puente Vargas (vía Cajicá - Hato Grande).
          Actividad 11.2.2: Alcanzar el 100% de las obras de adecuación hidráulica en la Cuenca Alta del Río Bogotá, en el tramo de 70 kms comprendido entre Puente Vargas (Cota) y el municipio de Suesca.                                                                      
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia123 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10619,
            'year' =>3,
            'value' => 75.98,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 11.3.1: Adelantar los procesos de selección y contratación de consultores individuales de los grupos de apoyo de la Unidad Ejecutora del Proyecto y de consultores especializados, previstos en el Componente 4 de administración y gerencia del Proyecto de Adecuación Hidráulica y Recuperación Ambiental del Río Bogotá
          Actividad 11.3.2: Adelantar los procesos requeridos para  el cumplimiento de compromisos que correspondan al fondo FIAB con los recursos previstos para gastos concurrentes y servicio de la deuda del Proyecto de Adecuación Hidráulica y Recuperación Ambiental del Río Bogotá
          Actividad 11.3.3. Vigencias Futuras para amparar la contratación del servicio de vigilancia y seguridad privada que permita garantizar la seguridad en las sedes administrativas, predios y sitios donde se encuentren los bienes muebles e inmuebles, propios y/u operados y/o administrados por la entidad y demás a cargo de la Corporación.                                                                 
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia124 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10620,
            'year' =>3,
            'value' => 41.26,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 11.4.1: Adelantar los procesos de contratación para los estudios de títulos prediales y de avalúos  de los Predios requeridos para las obras de Adecuación Hidráulica en la Cuenca Alta y otras obras complementarias en la Cuenca Media
          Actividad 11.4.2: Adelantar los procesos de adquisición para contar con la disponibilidad del 100% de los predios requeridos para las obras de Adecuación Hidráulica en la Cuenca Alta y otras obras complementarias en la Cuenca Media, de acuerdo con la normatividad vigente
          Actividad 11.4.3. Pasivos exigibles para amparar compromisos de los Contratos No. 1792 de 2019 y No. 1834 de 2019, relacionados con la gestión de predios para adquirir en el marco del Mega proyecto Río Bogotá                                                                    
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia125 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10621,
            'year' =>3,
            'value' => 3,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 11.5.1: Formular y adelantar la ejecución de diez (10) proyectos de saneamiento ambiental a desarrollar en cualquiera de las Cuencas integrantes del Río Bogotá, en el territorio CAR.
          Actividad 11.5.2: Vigencias Futuras para amparar pagos de Contratos de obra e interventoría de la adecuación hidráulica del río Calandaima, del río Soacha y Laguna de la Herrera aprobados por Consejo Directivo CAR
          Actividad 11.5.3: Vigencias Futuras para amparar pagos de Contratos de Suministro para el Laboratorio y para la Formulación del Plan de ordenamiento del recurso hídrico PORH aprobados por Consejo Directivo CAR                                                              
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia126 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10622,
            'year' =>3,
            'value' => 33.78,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 12.1.1. Avance en la ejecución de obras de mantenimiento, paisajismo y urbanismo a lo largo de los tramos de intervención de la adecuación hidráulica del río Bogotá en la Cuenca Media en el tramo de 68 kms entre Compuertas de Alicachín en Soacha y Puente La Virgen en Cota
          Actividad 12.1.2. Vigencia Futura para amparar la contratación de la prestación de servicios para realizar labores de mantenimiento y/o reforestación en el Parque Lineal del río en los tramos A, B, C y D del proyecto de Adecuación Hidráulica y Recuperación Ambiental de la Cuenca del Río Bogotá.                                                      
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia127 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10623,
            'year' =>3,
            'value' => 23.67,
            'description' => 'Esta meta tuvo su cumplimiento a través de la siguiente actividad:
          Actividad 12.2.1. Avance en las obras de control de inundaciones para mitigación del riesgo y recuperación ambiental del Río Bogotá, denominadas Áreas Multifuncionales, como un componente esencial del Parque Lineal Río Bogotá.                                                                                       
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia128 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10624,
            'year' =>3,
            'value' => 17.36,
            'description' => 'Esta meta tuvo su cumplimiento a través de la siguiente actividad:
          Actividad 12.3.1: Adelantar estudios de títulos prediales, avalúos y procesos de adquisición para contar con la disponibilidad de los predios requeridos para consolidar y culminar el Parque Lineal del Río Bogotá en la Cuenca Media.                                                                                   
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia129 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10625,
            'year' =>3,
            'value' => 8.32,
            'description' => 'Esta meta tuvo su cumplimiento a través de la siguiente actividad:
          Actividad 12.4.1: Adelantar actividades de Cultura ciudadana y de gestión social para lograr mayor nivel de apropiación, reconocimiento y pertenencia de la ciudadanía con el Río Bogotá, en el marco del Parque Lineal                                                                           
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia130 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10626,
            'year' =>3,
            'value' => 56.33,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 12.5.1: Adelantar las gestiones permanentes de planeación, financiación de inversiones y actividades para mantener el control y seguimiento al proceso de consolidación del Parque Lineal Río Bogotá.
          Actividad 12.5.2: Adelantar las gestiones de seguimiento a la operación y mantenimiento del Sistema de Monitoreo Integral Bochica para el Parque Lineal Río Bogotá.                                                      
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia131 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10627,
            'year' =>3,
            'value' => 23.91,
            'description' => 'Esta meta tuvo su cumplimiento a través de las siguientes actividades:
          Actividad 10.1.1 Realizar el dragado, limpieza y retiro de sedimentos del Complejo Lagunar Fúquene, Cucunubá y Palacio.
          Actividad 10.1.2 Realizar la adecuación hidráulica de los afluentes y/o efluentes del Complejo Lagunar Fúquene, Cucunubá y Palacio.                                             
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia132 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 10628,
            'year' =>3,
            'value' => 13.29,
            'description' => 'Esta meta tuvo su cumplimiento a través de la siguiente actividad:
          Actividad 10.2.1 Formular y ejecutar los proyectos priorizados de recuperación ambiental del complejo lagunar Fúquene, Cucunubá y Palacio.                                                                      
          El detalle de la gestión adelantada en estas actividades se puede evidenciar el documento de Excel anexo, titulado Informe de Gestión 2022. De igual manera en este documento se describen las acciones pertinentes al Rezago.',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia133 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 17156,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia144 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 17144,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia145 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 17157,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia146 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 17160,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia147 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 17146,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia148 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 17148,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia149 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 17150,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia150 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 17152,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia151 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 17154,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia152 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 17162,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia153 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 17143,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia154 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 17145,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia155 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 17147,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia156 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 17149,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia157 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 17151,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia158 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 17153,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia159 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 17155,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia160 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 17158,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia161 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 17159,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia162 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 17161,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia163 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 16652,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia134 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 16937,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia135 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 16938,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia136 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 16939,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia137 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 17136,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia138 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 17137,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia139 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 17138,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia140 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 17139,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia141 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 17140,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia142 = DB::getPdo()->lastInsertId();
          DB::table('evidence_advance')->insert([
            'activity_id' => 17141,
            'year' =>3,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia143 = DB::getPdo()->lastInsertId();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
