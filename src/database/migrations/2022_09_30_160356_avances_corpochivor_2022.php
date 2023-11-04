<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCorpochivor2022 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_advance')->insert([
            'activity_id' => 9369,
            'year' =>3,
            'value' => 50,
            'description' => '• Se llevó cabo el proceso de re verificación a los 47 negocios verdes vinculados de los años 2017- 2019 con el fin de aplicar la herramienta vigente suministrada por el MADS y de esta manera unificar los criterios a evaluar.
        • En la ventanilla de Negocios Verdes de CORPOCHIVOR contamos con 59 emprendimientos los cuales apoyamos en aspectos ambientales, sociales, empresariales y comerciales.
        • Se adelantó el proceso de adquisición, distribución y entrega de 6900 ramos elaborados por artesanas de la Jurisdicción, para la preservación y conservación de nuestros ecosistemas especialmente la palma de Cera y el Periquito Aliamarillo
        • Se realizaron acciones en conjunto con Artesanías de Colombia para el aprovechamiento de la gaita.
        • Se elaboró producción de canastos y bolsas en fique con los artesanos de Ramiriquí del sector de Fátima y San Antonio veredas Guayabal y el Chuscal en pro al fortalecimiento del sector artesanal
        • Con el fin de generar una oferta de turismo planificada y sostenible en la jurisdicción de Corpochivor, se han venido realizando estrategias de identificación, caracterización y acompañamiento técnico a diferentes organizaciones, negocios verdes, juntas de acción comunal y Consejo Departamental y Consejos Provinciales de Turismo de Márquez, Oriente, Lengupá y Neira. Como resultado, se cuenta con la publicación de una guía de senderos interpretativos denominada “Caminos con historias Vivas”. 
        • Reactivación de la Mesa Regional del Café, liderada desde CORPOCHIVOR articulando la participación del SENA Regional Boyacá, el Comité Departamental de Cafeteros, la Gobernación de Boyacá, AES Colombia, ONG Selva, alcaldes del Valle de Tenza, Representantes de asociaciones productoras del territorio.
        • Realización del 2do Festival Regional de Cafés Especiales y Sostenibles “La Esmeralda”, dio a conocer el potencial del café especial producido en la jurisdicción, con la participación de 12 Empresarios del Café vinculados a la Ventanilla de Negocios Verdes, show de barismo, taller de café especial, rueda de negocios.
        • Se conmemoro del día mundial de las abejas mediante un Facebook live con el conversatorio ‘abejas más que Miel’, realizando una sensibilización sobre la importancia de estos polinizadores y el fortalecimiento empresarial a los 4 Negocios verdes y 14 emprendimientos del sector apícola.
        • Atendiendo a las nuevas dinámicas del territorio y el crecimiento que tuvo la estrategia de Negocios Verdes, se realizó la actualización del Plan Estratégico Territorial de CORPOCHIVOR construido en el 2018. Así mismo, se participó en jornadas institucionales para la construcción del nodo regional y el Plan Regional de Negocios Verdes conjuntamente con la Secretaria de Ambiente de la Gobernación de Boyacá, CORPOCHIVOR, CORPOBOYACÁ, CAR y CORPORINOQUIA',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia1 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9370,
            'year' =>3,
            'value' => 6,
            'description' => 'Se verificaron y se vincularon a la Ventanilla de Negocios Verdes e Inclusivos a 6 organizaciones, así:
        
        Productos Delkampo ATAO (Tibaná)
        Monkey Experience SAS (San Luis de Gaceno)
        Grupo Abundantia SAS (Garagoa)
        Refugio Mamapacha (Garagoa)
        Tejiendo Recuerdos Marina Niño (Tenza)
        Operadora Turística Sendero Verde Esmeralda (Chivor)
        ',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia2 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9371,
            'year' =>3,
            'value' => 1,
            'description' => 'En el marco de los eventos, 2do Festival Regional de Cafés Especiales y sostenibles “La Esmeralda” en Garagoa Y 4to Congreso de Sostenibilidad desarrollado por Asobancaria en las instalaciones de la cámara de Bogotá, se vincularon a 20 empresarios de los diferentes sectores de la ventanilla de negocios verdes de Corpochivor en la participación de Ruedas de negocios. 
        Como parte de la estrategia comercial y de marketing Naturalmente Nuestro y en el marco del Convenio 015 de 2021, suscrito con el GAL VALLETENZANO, se realizó el evento virtual “Lanzamiento e - commerce - Valletenzano.com.co”, apuesta que desde CORPOCHIVOR y el GAL, busca generar nuevos canales de comercialización para posicionar los productos y servicios sostenibles, en la actualidad se encuentran vinculados 11 empresarios de la ventanilla de negocios verdes de Corpochivor.
        Aunado a lo anterior, la estrategia tiene en marcha la operación de 5 vitrinas comerciales que operan en la actualidad en los municipios de Cucaita, Garagoa, Ramiriquí y Guateque.
        Los empresarios de la Ventanilla de Negocios Verdes de Corpochivor, Beelife de Ciénega, Ecogaceno de San Luis de Gaceno y Café Guaney de Macanal, participaron en el Segundo Mercado Campesino de la provincia de Neira, organizado por la alcaldía de Santa María, en el Municipio de Ventaquemada Tesoros Nativos y Tejeplanta y en el Municipio de Guayatá Finca Agroecológica nuestro sueño. Los empresarios tuvieron la oportunidad de realizar ventas, posicionar sus marcas, dar a conocer su productos, compartir experiencias con otros emprendimientos y negocios verdes sostenibles y representar los negocios verdes de la ventanilla.
        Se participó en la feria departamental de apicultura el 26 de mayo con los Negocios Verdes, Beelife.co, Don Baudilio, Tierra Mía y Campos del Alba en el centro comercial Viva en Tunja.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia3 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9372,
            'year' =>3,
            'value' => 1,
            'description' => 'Se realizaron acercamientos con diferentes entidades y organizaciones público/privadas, con el fin de generar estrategias de fortalecimiento a los emprendimientos y negocios verdes de Corpochivor a través de futuros acuerdos interinstitucionales, dentro de las entidades se encuentran Corporación Autónoma Regional del Canal del Dique-CARDIQUE, Proyecto de Alianzas Productivas del Ministerio de Comercio, Industria y Turismo (APROMUC, ASOGANACHE, ASOPMAGAR, ASOFRIMAC, COOUMBIPAPA) , la Comarca Neuss de Alemania y organizaciones como Fedecacao y FUNDACIÓN SELVA.
        ',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia4 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9373,
            'year' =>3,
            'value' => 0,
            'description' => 'Actividad programada y ejecutada en la vigencia 2020.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia5 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9374,
            'year' =>3,
            'value' => 50,
            'description' => 'Se realizó acto administrativo de sello aval confianza de CORPOCHIVOR y se viene avanzando en la reglamentación, manuales, estrategia de posicionamiento y la identificación de los empresarios que recibirán dicho reconocimiento previo al cumplimiento de requisitos para su obtención. 
        
        Negocios Verdes con puntaje mayor a 70%:
        
        • Terramagic: 71,46%
        • El Obrador: 77,95%
        • Aproex Fruit: 70,48%
        • Tesoros Nativos: 77,48%
        • ATAO: 73,05%
        • Cisco Vargas: 75,87%
        • Amavilo: 79,74%
        • Tierra Mía: 70,78%
        • Cannor: 72,24%
        • Asopafit: 77,39%
        • Natural Fique: 70,96%
        • EAT La Esperanza: 79,01%
        • Arte y Cultura Sutatenzana: 73,04%
        • Monkey Experience: 70,69%
        • Refugio Mamapacha: 73,60%
        • Respira Turismo: 71,96%
        Descubrir ONG: 71,37%
        
        Se viene adelantó proceso precontractual para la adquisición de insumos, materiales y equipos que permitan el cumplimiento de los planes de mejora de 16 negocios verdes y 5 ecoemprendimientos vinculados a la Ventanilla de Negocios Verdes. ',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia6 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9375,
            'year' =>3,
            'value' => 0,
            'description' => 'Se adelanto el proceso precontractual para la adquisición de equipos, empaques e insumos que permita mejorar y optimizar los procesos a través de la innovación en los diferentes sectores productivos priorizados en la Ventanilla de Negocios Verdes. 
        
        Se adelantó proceso de contratación para la realización de gira de intercambio de experiencias en el sector apicultor con énfasis en procesos de innovación que permita el desarrollo de nuevos productos y optimización de materias primas.  Así mismo, se tiene previsto la realización de gira de intercambio y conocimiento de los negocios verdes de la jurisdicción de CARDIQUE, dirigida a 5 emprendimiento de nuestra jurisdicción, lo que les permitirá el desarrollo y optimización de procesos especialmente para el sector de ecoindustria',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia7 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9376,
            'year' =>3,
            'value' => 50,
            'description' => '1. Programa de Uso Eficiente y Ahorro del agua - PUEAA:
        Se atendieron 104 solicitudes referentes a PUEAA`s de las cuales 35 fueron evaluaciones y 69 diferentes actuaciones relacionadas con asesorías y respuestas a requerimientos.
        Se realizaron 10 mesas de trabajo con municipios, acueductos veredales y formuladores de los diferentes PUEAA, llegando a sensibilizar a 1254 personas.
        
        2. PLANES DE FERTILIZACIÓN: Se realizaron un total de 56 actuaciones, de las cuales 3 corresponden a evaluaciones de documentación y 53 a visitas técnicas, respuestas a solicitudes y Asistencias técnicas.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia8 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9377,
            'year' =>3,
            'value' => 1,
            'description' => 'Se realizaron 69 sensibilizaciones respecto al manejo adecuado de residuos de plaguicidas, con la participación de 2679 personas de la jurisdicción
        Se realiza el acompañamiento a las jornadas de recolección de envases de plaguicidas en 16 municipios, recolectando aproximadamente 13 Ton de este tipo de residuos.
        
        ',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia9 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9378,
            'year' =>3,
            'value' => 2,
            'description' => 'NODO MÁRQUEZ: Acompañamiento a los municipios de Turmequé, Jenesano, Úmbita y Ventaquemada mediante el desarrollo de mesas de trabajo con los involucrados y seguimientos a las plantas mecanicobiológicas de aprovechamiento y transformación de residuos sólidos localizadas en los municipios de Úmbita y Turmequé.
        
        NODO GARAGOA: Se apoya en el acompañamiento del proyecto regional, a través de la asistencia a reuniones en el MVCT, PDA, municipios, Contraloría General de la República, Gobernación de Boyacá y veedores ciudadanos; y participación en la Mesa departamental de residuos donde se realiza seguimiento al avance del mismo, en el municipio de Garagoa se realiza seguimiento a la operación de los equipos y maquinaria dados en comodato a EPGA S.A.ESP.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia10 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9379,
            'year' =>3,
            'value' => 3,
            'description' => 'Se realiza seguimiento y acompañamiento en la operación a los sistemas de aprovechamiento de residuos sólidos ubicados en los municipios de Úmbita, Chinavita y Turmequé mediante visitas técnicas a las infraestructuras y la revisión de los procesos, emitiendo conceptos técnicos con requerimientos y recomendaciones.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia11 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9380,
            'year' =>3,
            'value' => 11,
            'description' => 'Se realiza seguimiento a los Planes de Gestión Integral de Residuos Sólidos – PGIRS, en metas de aprovechamiento a once (11) municipios de la jurisdicción mediante mesas de trabajo con los entes territoriales.
        
        Se asiste a las diferentes reuniones desarrolladas por la Mesa Interinstitucional de Residuos de Boyacá, donde se realiza presentación de los avances de implementación y estado de los PGIRS de la jurisdicción.
        
        Se asiste y participa en el comité coordinador del PGIRS de los municipios de Almeida, Úmbita, Boyacá, Guateque, Campohermoso, Chinavita, Chivor, Somondoco y Turmequè. ',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia12 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9381,
            'year' =>3,
            'value' => 19,
            'description' => 'Se actualiza la Base de Datos de Generadores de Residuos Peligrosos RE-AA-25, donde se tiene un inventario total de 393 Establecimientos Generadores de Respel. Adicionalmente, se realiza seguimiento a 74 establecimientos generadores de residuos peligrosos.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia13 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9382,
            'year' =>3,
            'value' => 100,
            'description' => 'Seguimiento y actualización al Plan de Acción del PLAN DE GESTIÓN INTEGRAL DE RESIDUOS PELIGROSOS - PGIRESPEL 2020-2023 de la jurisdicción, a corte 30 de junio de 2022.
        
        Validación y transmisión de información reportada por los usuarios inscritos en los aplicativos de Registro de Generadores de Residuos Peligrosos y RUA Sector Manufacturero; a la fecha y acorde con las sábanas de información que proporciona el aplicativo, se tiene un total de 121130 kg de RESPEL gestionados adecuadamente.
        Con corte 30 de junio de 2022, en los aplicativos de Registro de Generadores de Residuos Peligrosos y RUA Sector Manufacturero, se tiene:
        Registro RESPEL: 53 Usuarios Activos, 41 registros cerrados.
        RUA: 3 Usuarios Activos,
        PCB: 10 Usuarios Activos.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia14 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9383,
            'year' =>3,
            'value' => 1,
            'description' => 'La esterategia consiste en un trabajo continuo en acciones de sensibilización en los 25 municipios, donde se resalta: 
        
        ♠ acompañamiento a los municipios en jornadas de sensibilización a usuarios del servicio público de aseo y sectores productivos en el adecuado manejo de residuos sólidos, desarrollando 131 acompañamientos, con un alcance de 4958 personas sensibilizadas.
        
        Con el objetivo de incentivar la adecuada disposición de residuos sólidos y el no uso de bolsa plástica, en el marco del Convenio Interadministrativo de Cofinanciación No. 009 de 2021 celebrado con el municipio de Jenesano se realiza la entrega a la comunidad de 830 bolsas de fique y 13 puntos ecológicos.
        
        ♠ Se realizó la entrega e instalación de 25 contenedores en los parques municipales, para el almacenamiento de botellas y tapas plásticas.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia15 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9384,
            'year' =>3,
            'value' => 1,
            'description' => 'Se resalta el trabajo adelantado a través de las siguientes convocatorias:
        - Se realizó la entrega del parque infantil elaborado en madera plástica a estudiantes y profesores de la Institución Educativa Nacionalizada Técnica Agropecuaria del municipio de Campohermoso (Sede Toldo Arriba) ganadora de la Sexta versión del concurso TRANSFORMANDO RESIDUOS - CONSTRUYENDO SONRISAS”. 
        
        - en coordinación con el proyecto de Educación Ambiental se adelanta la convocatoria de la Séptima versión del concurso “TRANSFORMANDO RESIDUOS - CONSTRUYENDO SONRISAS”, estrategia dirigida a las instituciones educativas públicas de la jurisdicción de Corpochivor, con el objetivo incentivar la conservación y preservación de los recursos naturales desde las instituciones educativas, mediante la implementación de proyectos de Economía Circular, contando con la participación de 29 instituciones de 18 municipios.
        
        - En el marco de la Agenda ambiental suscrita con el Subsector Porcícola, se realizó acercamiento con las administraciones municipales de los 25 municipios y productores entorno a la legalidad de la actividad, desarrollando 5 jornadas de socialización de la normatividad ambiental vigente para este sector, logrando la sensibilización de 71 actores.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia16 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9385,
            'year' =>3,
            'value' => 50,
            'description' => 'Como instrumentos de apoyo a la implementación y seguimiento del Plan de Ordenación Forestal (POF), que definió una línea base de 7 criterios y 14 indicadores (C&I), se avanza con la recopilación de información para su evaluación y reporte para el final de la vigencia 2022.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia17 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9386,
            'year' =>3,
            'value' => 50,
            'description' => 'Se desarrollaron actividades para la atención de solicitudes en materia de aprovechamiento forestal, árboles en riesgo, registro de plantaciones, Salvoconducto Único Nacional en Línea (SUNL) y registro de Libro de Operaciones Forestales, competencia de la Entidad, para lo cual se dio alcance a la atención del 100% de las solicitudes en los tiempos establecidos.  ',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia18 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9387,
            'year' =>3,
            'value' => 66.9,
            'description' => 'En el marco del Programa de Forestería Comunitaria (PFC), se realizó el establecimiento de 66,9 hectáreas con participación de 175 Usuarios beneficiados.  Se realizaron 26 eventos con una participación de 405 asistentes, para la socialización del Plan de Trabajo del proyecto Gestión Integral del Recurso Forestal. ',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia19 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12576,
            'year' =>3,
            'value' => 207,
            'description' => 'En el marco del Programa de Forestería Comunitaria (PFC), se realizó el mantenimiento a 207 hectáreas de sistemas forestales establecidos en las vigencias 2020 y 2021 con participación de 334 Usuarios beneficiados.  ',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia20 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9389,
            'year' =>3,
            'value' => 120245,
            'description' => 'Se avanzó con la producción de 120.000 plántulas en los viveros de Ramiriquí y de 121.916 plántulas en el vivero de Macanal, para un total de 241.916 plántulas destinadas al desarrollo de las actividades de establecimiento y mantenimiento de sistemas forestales y de restauración ecológica, para lo cual se han incorporado 120.245 plántulas; de las cuales 46.898 plántulas para actividades de mantenimiento de plantaciones 2020 y 2021, y de 73.347 plántulas para actividades de establecimiento.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia21 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9390,
            'year' =>3,
            'value' => 15,
            'description' => 'En el marco del Contrato de Obra Pública 386-21 para la ejecución del proyecto FCA “Implementación de estrategia de restauración ecológica para la rehabilitación de áreas prestadoras de servicios ecosistémicos”, se avanzó con el levantamiento de 108,98 hectáreas potenciales a ser restaurados en 54 predios y se reporta una intervención de 15 hectáreas con la incorporación de material vegetal con fines de recuperación. Asimismo, se en desarrollo de la actividad para incorporar y manejar unidades apícolas como estrategia complementaria a procesos de restauración ecológica, se avanzó con la entrega e instalación de 25 unidades apícolas',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia22 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9391,
            'year' =>3,
            'value' => 0,
            'description' => 'En el marco del Contrato de Obra Pública 386-21, en desarrollo de la actividad “Instalar cercos de protección con material vegetal”, con la cual se tiene una meta de instalar mínimo 3.042 metros lineales de cercos de protección (aislamiento con material vegetal), para propiciar la recuperación de mínimo 18 Ha de interés hídrico y forestal, se avanzó con la priorización de 3.004 metros lineales de aislamiento en 3 predios identificados. 
        
        ',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia23 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9392,
            'year' =>3,
            'value' => 1,
            'description' => 'Se culmino las actividades de re-medición de la red de parcelas forestales permanentes de Corpochivor conformadas por 16 parcelas, actividad con la cual se generó información sobre la dinámica de los bosques, y con la cual se generó un  documento técnico denominado “Análisis resultados remediación de red de parcelas forestales permanentes en la jurisdicción de CORPOCHIVOR”. ',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia24 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9393,
            'year' =>3,
            'value' => 292.40,
            'description' => 'Para el primer semestre, con la implementación del Esquema de Retribución por Servicios Ambientales (ERSA), se tiene un total a la fecha de 27 Acuerdos de conservación y Uso Sostenible vigentes con los cuales se protegen 792,4 hectáreas. Asimismo, con la culminación de la tercera fase de implementación del Esquema de Retribución por Servicios Ambientales (ERSA), se tiene un total a la fecha de 212 Acuerdos de conservación y Uso Sostenible vigentes con los cuales se protegen 3.469,83 hectáreas, a través de las siguientes estrategias: 1) Esquema de Pago de Servicios Ambientales (PSA), 81 acuerdos voluntarios y 328,90, hectáreas bajo conservación, 2) Mecanismo REDD+, 82 Usuarios beneficiados y se suscribieron 49 nuevos Acuerdos de conservación y Uso Sostenible, con los cuales se preservan 3.140,93 hectáreas para la reducción de emisiones de CO2. ',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia25 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9394,
            'year' =>3,
            'value' => 8,
            'description' => 'Se desarrollaron seis (06) mesas de trabajo con líderes de proyectos institucionales para realizar la socialización de las actividades a desarrollar en la vigencia 2022 a los siete (7) Planes de manejo de los Distritos Regionales de Manejo Integrado (DRMI) y a un (1) Acotamiento complejo Humedal Laguna La Calderona, Laguna La Gloria, Laguna Pensilvania y Laguna Larga.
        A la fecha solo se tiene 7 áreas protegidas con Plan de manejo en la jurisdicción, por lo cual la meta en el año va presentar rezago.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia26 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9395,
            'year' =>3,
            'value' => 30,
            'description' => 'SE genero documento con la metodología y resultado del proceso de identificación de humedal piloto en la jurisdicción , el cual arrojó como como producto, la selección la laguna La Calderona como humedal piloto para la valoración económica ambiental. Una vez dicho proceso sea avalado por el Ministerio de Ambiente y Desarrollo Sostenible (MADS), se continuará con la implementación de la valoración en el ecosistema priorizado.  ',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia27 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9396,
            'year' =>3,
            'value' => 50,
            'description' => '● Dentro del primer semestre de la vigencia 2022, se atendieron cincuenta y siete (57) ejemplares (29 mamíferos, 18 aves, 10 reptiles), provenientes de actividades de rescate en la jurisdicción. De estos, 38 fueron liberados en su hábitat natural (ecosistemas estratégicos) después de un proceso de valoración y/o rehabilitación exitosa.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia28 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9397,
            'year' =>3,
            'value' => 1,
            'description' => '● Se desarrollaron jornadas se sensibilización sobre actividades de P11 control y disposición final del caracol gigante africano (Achatina fulica).
        ● Como estrategia para el manejo y control de las siguientes especies invasoras identificadas en la jurisdicción (Achatina fulica y Thunbergia alata) se diseñó un campaña de sensibilización a través de la divulgación de piezas gráficas con la información correspondiente ',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia29 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9398,
            'year' =>3,
            'value' => 50,
            'description' => 'Se atendieron tres (03) solicitudes referentes a permiso de investigación científica con fines No Comerciales, las que fueron allegadas por la Directora de Bosques, Biodiversidad y Servicios Ecosistémicos del Ministerio de Ambiente y Desarrollo Sostenible, Universidad Nacional de Colombia',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia30 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9399,
            'year' =>3,
            'value' => 99.50,
            'description' => 'Durante el periodo se adquirio un predio de interés hídrico, mediante Convenio Interadministrativo de cofinanciación suscrito entre La Corporación Autónoma Regional de Chivor _CORPOCHIVOR, El Municipio de Garagao y La Gobernación de Boyacá; los recusos provenian el año 2021 pero la ejecución del convenio y la adquisición del predios se realizo en el año 2022.
        ',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia31 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9400,
            'year' =>3,
            'value' => 50,
            'description' => 'Se atendieron dieciséis (16) solicitudes con el fin de determinar viabilidad ambiental para adquisición de veintiún (21) predios de interés hídrico',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia32 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9401,
            'year' =>3,
            'value' => 0,
            'description' => 'Mediante Resolución 315 del 04 de mayo de 2022, se dio inicio al proceso de Reglamentación del uso del recurso hídrico para las microcuencas de las quebradas La Sucia y Ruche. 
        
        Se adelantó la etapa de socialización del proyecto con actores claves de las microcuencas y se finalizó la fase de censo de usuarios para la microcuenca quebrada Ruche en las veredas Ruche, Suta Arriba, Suta Abajo, Siuman y Siratá, y para la microcuenca quebrada La Sucia en las veredas Supaneca Arriba, Supaneca Abajo, Laja, Piedras de Candela y Sirama del municipio de Tibaná.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia33 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9402,
            'year' =>3,
            'value' => 1,
            'description' => 'Se operó ela herramienta WEAP permitiendo generar 142 informes ERA como insumo para los conceptos de concesiones de agua. Adicicionalmente se ha actualizado el modelo a fin de obtener indicadores actualizados,',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia34 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9403,
            'year' =>3,
            'value' => 0,
            'description' => 'Se formuló el proyecto denominado: CARACTERIZACIÓN DEL ACUÍFERO TEATINOS Y FORMULACIÓN DE MEDIDAS PARA SU MANEJO AMBIENTAL Y SOSTENIBLE, ante el FCA del MADS. Se recibió aprobación y asignación de recursos mediante la Resolución No 435 del 20 de abril de 2022, por la suma $1.149.178.394.
        
        Con estos recursos se obtendra geología de detalle, inventario de puntos de agua subterránea, tomografías y SEVs, estudios que nos permitirán identificar la profundidad y espesores de las capas acuíferas, como insumo primario para la generación del modelo hidrogeológico conceptual de este acuífero, así mismo desde la parte social, se plantea la identificación de actores, de tal manera que se pueda diseñar e implementar la estrategia de participación y comunicación.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia35 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9404,
            'year' =>3,
            'value' => 30,
            'description' => 'Se finalizó a etapa de censo de usuarios, inventariando 744 usuarios captadores, 524 de CORPOCHIVOR y 220 de la CAR.
        Se determinó el uso y demanda de agua en metro cubico por año utilizada para el sector doméstico, agrícola, pecuario, industrial, recreativo y minero en jurisdicción de CAR y CORPOCHIVOR, en total en el área de estudio se determinó una demanda de 14.358.643 m³/año.
        Se identificó 104 generadores de vertimientos, 80 en territorio CORPOCHIVOR y 24 territorio CAR, encontrando 18 actividades relacionadas con la descarga de aguas residuales sobre las fuentes hídricas, siendo la actividad relacionada a los servicios públicos la más representativa.
        En cuanto al muestreo de los puntos generadores de vertimientos realizamos muestreo compuesto en 88 puntos, de estos, se realizó muestreo durante 12 horas en 21 puntos pertenecientes a la actividad de servicios públicos y centros poblados (alcantarillado).
        Respecto a la estrategia de participación social, realizamos 38 encuentros comunitarios en los municipios de Machetá Manta, Tibirita, Chocontá, Villapinzón Chocontá, Almeida, Ventaquemada, Turmequé, Nuevo Colón, Úmbita, Tenza, La Capilla, Pachavita, Sutatenza, Chinavita, Somondoco, Garagoa, Macanal, Chivor, Santa María, Tibaná, Guateque y Guayatá los cuales tuvieron cono alcance socializar los avances del PORH, realizar cartografía social y semáforo de conflictos para identificación de conflictos derivados del uso del recurso hídrico.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia36 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9405,
            'year' =>3,
            'value' => 50,
            'description' => 'Se efectuó seguimiento a la implementación del PORH Teatinos, Juyasía y Tibaná. Asi como al PMAA Súnuba.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia37 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9406,
            'year' =>3,
            'value' => 50,
            'description' => 'Se han atendido 115 solicitudes de concesiones de agua.
        Se han atendido 4 solicitudes de permisos de vertimiento.
        Se han atendido 9 solicitudes de ocupaciones de cauce.
        Se realizó el cargue de 128 solicitudes en VITAL.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia38 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9407,
            'year' =>3,
            'value' => 20,
            'description' => 'Se profundizó en el análisis de capacidades institucionales en monitoreo y se diseñan propuestas de mejora para las necesidades identificadas, con el fin de implementar ejercicios piloto para fortalecer las capacidades. Se implementaron acciones de fortalecimiento del Programa Bocatomas, incorporando elementos para mejorar el flujo de la información en las etapas de capacitación y reporte de resultados. Para la capacitación, el equipo formulador del PIRMA construyó dos videos tutoriales para la construcción de una malla de muestreo de macroinvertebrados y una demostración de su uso para la recolección de estos organismos indicadores en las fuentes abastecedoras de la jurisdicción.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia39 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9408,
            'year' =>3,
            'value' => 50,
            'description' => 'Se operó el laboratorio ambiental y las redes hidroclimaticas con las siguientes acciones:
        -Se atendieron las solicitudes de agua y suelo.
        -Se avanzó en la ejecución del proyecto financiado por MINCIENCIAS.
        - Se realizó la primera campaña de red de monitoreo hídrico, con medición de parámetros in situ (pH, conductividad, salinidad, Potencial Óxido Reducción, temperatura resistividad, oxígeno disuelto y turbidez), batimetría y toma de 44 muestras de agua superficial para análisis fisicoquímicos, microbiológicos y metales, distribuidas en las corrientes principales.
        -Mediante la integración de los resultados se determinó el Índice de Calidad del Agua (ICA) cuyos resultados para todos los puntos se mantiene dentro del objetivo de Calidad Establecido (51- 70) lo que indica Índice de Calidad del Agua Regular, considerando que la concentración de contaminación microbiológica es alta probablemente actividades pecuarias o contaminación por escorrentía con presencia de heces fecales.
        - se llevó a cabo la operación de las cinco (5) Estaciones Hidrometeorológicas Automáticas de Corpochivor, realizando seguimiento y obtención de los datos a través del aplicativo RED HIDROCLIMÁTICA y seguimiento en campo con Veinte (20) visitas para mantenimiento y limpieza de la infraestructura y equipos, Garantizando su correcto funcionamiento.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia40 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9409,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia41 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9410,
            'year' =>3,
            'value' => 50,
            'description' => 'Extensión de la estrategia de Monitoreo Participativo Nuestros Ríos Más Cerquita: en alianza con WWF se ejecutó el segundo año de monitoreo de las localidades seleccionadas para las campañas iniciales del 2020 en los municipios de Turmequé, Úmbita, Pachavita y La Capilla. En esta oportunidad, se vincularon 44 personas más a la estrategia, entre los cuales destacan representantes del Cabildo Muisca de Turmequé, concejales, miembros de la Red de Jóvenes de Ambiente, presidentes de juntas de acueducto. 
        
        Vinculación en el Programa +Mujer+Ciencia+Equidad: esta iniciativa del Ministerio de Ciencia y la Organización de Estados Iberoamericanos seleccionó a Corpochivor como entidad receptora de pasantes para promover la participación de la mujer en procesos científicos con impacto en comunidades del territorio de la jurisdicción. Actualmente contamos con una pasante del programa, que está desarrollando acciones en el fortalecimiento del Programa de Monitoreo Participativo de la Fuentes Abastecedoras de la jurisdicción.
        
        Con el fin de fortalecer la estrategia participativa de monitoreo de las fuentes abastecedoras, se incorpora la comunidad de macroinvertebrados como indicador de la integridad ecológica de estos ecosistemas. Con el apoyo del equipo formulador del PIRMA se crearon videos con explicaciones didácticas sobre cómo hacer una malla de muestreo de macroinvertebrados y cómo usarla en una corriente natural para recolectar a estos organismos. ',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia42 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9411,
            'year' =>3,
            'value' => 50,
            'description' => 'Se llevo a cabo la liquidación por concepto de tasa por uso y tasa retributiva obteniendo: TUA: $305.629.102 y TR:$736.012.218, los cuales fueron remitidos a la Saf para su facturación.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia43 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9412,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia44 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9413,
            'year' =>3,
            'value' => 0,
            'description' => 'En ejecución del convenio especial de cooperación No. 3615 de 2020 y en trabaja articulado entre las autoridades ambientales del departamento, se ha establecido comunicación continua con el equipo formulador del PIGCC Boyacá contribuyendo con el suministro de información para la construcción de este instrumento el cual se encuentra en su fase de Formación del Plan de Acción.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia45 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9414,
            'year' =>3,
            'value' => 0,
            'description' => 'No tiene meta asociada para la vigencia 2022.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia46 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9415,
            'year' =>3,
            'value' => 1,
            'description' => ' Mediante el contrato numero 302-22 se realisó la adquicisión de 17 estufas ecoeficientes y 10 Dispositivos termoeléctricos para generación de energía a partir del calor residual de la estufa, que fueron entregadas en miunicipios de la jurisdicción, en beneficiop de 68 habitantes aproximandamente.
        
        Formulación del proyecto denominado “INSTALACIÓN DE ESTUFAS ECOEFICIENTES EN LOS MUNICIPIOS DE LA JURISDICCIÓN DE CORPOCHIVOR, BOYACÁ” el cual fue presentado al  Fondo de Compensación Ambiental - FCA para su financiación  con recursos del Presupuesto General de la nación. con el cual se pretende beneficiar aproximadamente a 740 familias de la jurisdicción.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia47 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9416,
            'year' =>3,
            'value' => 23,
            'description' => 'Acompañamiento a 69 reuniones de Consejos Municipales de Gestión del Riesgo de Desastres (CMGRD) en 23 municipios de la jurisdicción y 4 reuniones del Consejo Departamental de Gestión del Riesgo de Desastres de Boyacá (CDGRD).
        
        Durante el segundo semestre se continuará realizando el acompañamiento a los 23 Consejos Municipales para la Gestión del Riesgo de Desastres - CMGRD de la jurisdicción en los que ya se tuvo participación y se ejecutará la actividad en los 2 municipios faltantes',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia48 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9417,
            'year' =>3,
            'value' => 0,
            'description' => '- Mediante la información generada por la red hidroclimática (compuesta por 120 estaciones públicas y privadas, operadas en alianza entre AES CHIVOR, IDEAM, GOBERNACIÓN DE BOYACÁ Y CORPOCHIVOR) se han generado alertas que fueron remitidas a los municipios para toma de medidas de prevención.
        
        - Teniendo en cuenta los criterios de niuvel de amenaza y disponibilidad de la información se priorizaron a ocho (8) sistemas de alerta temprana de municipios de la jurisdicción ( Guayatá, Guateque, Somondoco, Sutatenza, Tenza, La Capilla, Almeida y Macana), en la vigencia 2022, como apoyo al fortalecimiento de sistemas de alerta temprana, el aporte de la corporación consiste en la elaboración de documento diagnóstico.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia49 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9418,
            'year' =>3,
            'value' => 0,
            'description' => 'Visitas técnicas de seguimiento y monitoreo en los municipios de Sutatenza, Guateque,  Boyacá - Jenesano (Vereda Siraquita y Paeces), Boyacá (Siraquita), Santa María. San Luis de Gaceno, Campohermoso yTurmequé, .
        
        Durante el segundo semestre se tiene contemplada la implementación a través de mojones y/o cilindros, localizados dentro y fuera del área de influencia del deslizamiento.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia50 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9419,
            'year' =>3,
            'value' => 25,
            'description' => 'Desde el proyecto se realizan actividades de capacitación socialización y divulgación de información como medida de prevención de emergencias, tales como:
        
        ♠Emisión de circular No. 2022EE3964  de fecha 20 de abril de 2022, Asunto: Recomendaciones de prevención temporada de lluvias 2022, dirigida a Alcaldes Municipales, Consejos Municipales para la Gestión del Riesgo de Desastres – CMGRD, Empresas y/o Unidades de Servicios Públicos Domiciliarios, Personerías, Estaciones de policía, Cuerpos Oficiales de Bomberos, Defensa Civil e Instituciones Educativas de los 25 municipios de la jurisdicción de CORPOCHIVOR.
        
        ♠ Participación en el programa radial “Camino Ambiental”, en temas relacionados con condiciones hidroclimáticas en la jurisdicción, recomendaciones de prevención para la temporada de más lluvias.
        
        ♠Procesos de socialización para la conformación de los grupos de vigías rurales para la prevención de incendios forestales con el propósito de detectar, reportar de forma oportuna esta clase de eventos amenazantes en los municipios de La Capilla, Ventaquemada, Almeida y Ciénega.
        
        ♠ Ejecución del programa de capacitación “Lo que debe saber sobre Movimientos en masa”, dirigido a integrantes de los Consejos Municipales de Gestión del Riesgo de Desastres – CMGRD y comunidad en general, desarrollado en los municipios de Tenza y Chinavita.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia51 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9420,
            'year' =>3,
            'value' => 0,
            'description' => 'Durante el segundo semestre se suscribirán acuerdos con las entidades priorizadas, dentro de los cuales se ejecutará estrategia para fortalecimiento de capacidades comunitarias en manejo de situaciones de emergencia para el cumplimiento de esta meta.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia52 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9421,
            'year' =>3,
            'value' => 4,
            'description' => 'Se coordinaron cuatro campañas de limpieza de cauces que generan riesgo para la población e infraestructura por acumulación de residuos sólidos y material vegetal, induciendo escenarios de amenaza por inundaciones y avenidas torrenciales, en los municipios de San Luis de Gaceno, Tenza, Pachavita y La Capilla.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia53 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9422,
            'year' =>3,
            'value' => 2,
            'description' => '♠ Se ejecutó el contrato No. 280-22 cuyo objeto fue el “ALQUILER DE MAQUINARIA PESADA TIPO RETROEXCAVADORA DE ORUGA PARA EJECUCIÓN DE ACTIVIDADES DE REDUCCIÓN DEL RIESGO POR MOVIMIENTOS EN MASA EN EL MUNICIPIO DE BOYACÁ, JURISDICCIÓN DE CORPOCHIVOR”, con el que se aperturaron canales para drenar las aguas acumuladas y disminuir la saturación del terreno, siendo este el factor detonante del movimiento.
        
        ♠ Se ejecutó el contrato No. 001-22 cuyo objeto es la “EJECUCIÓN DE ACTIVIDADES PARA LA RECUPERACIÓN DE LA SECCIÓN HIDRAULICA DEL CAUCE EN PUNTOS CRÍTICOS DE LA JURISDICCIÓN DE LA CORPORACIÓN AUTÓNOMA REGIONAL DE CHIVOR – CORPOCHIVOR”,  a través del cual se realizó la construcción de jarillones como medida de protección ante procesos de socavación lateral sobre el Río Jenesano, reduciendo la probabilidad de materialización de escenarios de riesgo por inundaciones, tomando como precedente las afectaciones registradas en el fenómeno de La Niña 2010 – 2011.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia54 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9423,
            'year' =>3,
            'value' => 50,
            'description' => 'Se atendió el 100% de las solicitudes presentadas por la comunidad o alcaldías municipales, con un total de cincuenta y cuatro (54) visitas de valoración de zonas afectadas por riesgos con emisión de conceptos técnicos con recomendaciones de manejo.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia55 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9424,
            'year' =>3,
            'value' => 0,
            'description' => '♠ Se recibieron los productos de la ejecución del contrato No. 316-21 con el objeto de “REALIZAR LOS ESTUDIOS BÁSICOS POR PROCESOS DE INUNDACIÓN, AVENIDAS TORRENCIALES Y MOVIMIENTOS EN MASA EN LA ZONA URBANA DEL MUNICIPIO DE PACHAVITA, JURISDICCIÓN DE LA CORPORACIÓN AUTÓNOMA REGIONAL DE CHIVOR - CORPOCHIVOR” por valor de DOSCIENTOS MILLONES OCHOCIENTOS DIECISIETE MIL SEISCIENTOS CINCUENTA Y DOS PESOS ($200.817.652,00) M/CTE. Área urbana actual: 25 Ha, Área de estudio 60 Ha. al igual que se ejecuto  el contrato No. 411-21 cuyo objeto es “REALIZAR LOS ESTUDIOS BÁSICOS POR PROCESOS DE INUNDACIÓN, AVENIDAS TORRENCIALES Y MOVIMIENTOS EN MASA EN LA ZONA URBANA DEL MUNICIPIO DE CHIVOR, JURISDICCIÓN DE LA CORPORACIÓN AUTÓNOMA REGIONAL DE CHIVOR - CORPOCHIVOR” por valor de CIENTO OCHENTA Y TRES MILLONES DOSCIENTOS SESENTA Y CUATRO MIL SETECIENTOS CINCUENTA Y OCHO PESOS ($183.264.758,00) M/CTE. Área de estudio 50 Ha
        
        los cuales estan en proceso de revisión y aprobación por parte de la corporación.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia56 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9425,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia57 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9426,
            'year' =>3,
            'value' => 25,
            'description' => 'Se compilo Material audiovisual y se elaboró libreto para video que se envió a8 municipios de la jurisdicción de Corpochivor.
        Se realizaron 11 mesas de fortalecimiento en marco del proceso de ajuste y actualización del EOT-PBOT, con los municipios.
        Se emitieron 7 conceptos técnicos relacionados con el ajuste y actualización de los EOT y/o PBOT de los municipios.
        Se revisaron y emitieron conceptos técnicos de 49 Licencias de construcción y/o parcelación otorgadas y reportadas por los municipios 
        Se emitieron 48 conceptos correspondientes a orientaciones respecto a las Determinantes Ambientales que aplican a predios privados o públicos',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia58 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9427,
            'year' =>3,
            'value' => 0,
            'description' => 'Teniendo en cuenta que el 09 de junio de 2022 fue enviada resolución N° 435 del 20 de abril de 2022 “Por la cual se hace una distribución en el presupuesto de inversión del Ministerio de Ambiente y Desarrollo Sostenible – Gestión General y se asignan recursos entre las corporaciones beneficiarias del Fondo de Compensación Ambiental para la vigencia 2022”, se está elaborando el proceso contractual del proyecto, denominado “Formulación del acotamiento de la ronda hídrica de la quebrada La Única en el municipio de Ramiriquí, quebrada Cachuchita del municipio de Ventaquemada y del río Bosque en el municipio de Úmbita, de la jurisdicción de Corpochivor, departamento de Boyacá” por un valor de $660.956.484 financiado por el Fondo de Compensación Ambiental.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia59 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9428,
            'year' =>3,
            'value' => 0,
            'description' => 'Avance de ejecución: 50%
        Se recopiló información primaria a partir de la toma de puntos de control en campo, con el fin de analizar y verificar coberturas vegetales presentes en el área de páramo delimitada Tota-Bijagual-Mamapacha, con jurisdicción en los municipios de Garagoa, Chinavita, Tibaná, Ramiriquí, Ciénega y Viracachá.
        Se elaboró el documento denominado” Componente Diagnóstico”, en el marco de la formulación del plan de manejo ambiental del páramo Tota-Bijagual-Mamapacha, para la jurisdicción de CORPOCHIVOR.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia60 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9429,
            'year' =>3,
            'value' => 0,
            'description' => 'PÁRAMO RABANAL RÍO BOGOTÁ
        Se realizo el ajuste y actualización de los documentos denominado Medio Socioeconómico y Cultural para su respectiva consolidación, por parte de la Corporación Autónoma de Cundinamarca – CAR.  Documento denominado Medio Físico – Cartográfico y Estadístico y documento denominado Marco Territorial  para su respectiva consolidación, por parte de la Corporación Autónoma Regional de Boyacá – CORPOBOYACÁ.  
        PÁRAMO ALTIPLANO CUNDIBOYACENSE
        Se llevó a cabo el proceso de concertación comunitaria de la zonificación ambiental (Preliminar) generada durante la vigencia 2021.
        Se elaboro documento “Componente Ordenamiento”, el cual, consolida el análisis biofísico y socioeconómico.
        se estructuró el documento” Componente Programático”, el cual, describe las líneas estratégicas, programas, proyectos y acciones a implementar de acuerdo a la identificación socio-ambiental de necesidades y problemáticas en el área de páramo delimitada.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia61 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9430,
            'year' =>3,
            'value' => 50,
            'description' => 'Se realizo seguimiento a lo establecido en la fase de formulación del POMCA Río Guavio y POMCA Río Garagoa
        Se realizo el seguimiento en los 25 municipios de la jurisdicción a las Determinantes Ambientales y asuntos ambientales de los PBOT y  EOT concertados y/o adoptados.
        Se realizo el seguimiento a los asuntos ambientales incorporados en los planes de Desarrollo de los municipios de Almeida, Guateque, Guayatá, Macanal, Pachavita, Sutatenza, Santa María, Jenesano y Boyacá.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia62 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9431,
            'year' =>3,
            'value' => 99,
            'description' => 'Asesoria y apoyo a 25 CIDEAS mediante 56 sessiones y una pobalción atendida de 1.321 personas.
        Asesoria y apoyo a 49 PRAES mediante 127 sessiones y una pobalción atendida de 3.989 personas.
        Asesoria y apoyo a 2 PRAU, atendiendo una pobalción atendida de 175 personas.
        Organización y desarrollo de 23 Espacios de Diálogo y Participación en el Marco de la Estrategia “Del Escritorio al Territorio, atendiendo a 3.219 personas.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia63 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9432,
            'year' =>3,
            'value' => 2,
            'description' => 'Asesoría y apoyo a 2 Proyectos Ciudadanos de Educación Ambiental - PROCEDA:
         Grupo EcoVaral del municipio de Macanal – 22 Integrantes 
         Grupo La Carreta Zoostenible del municipio de Ramiriquí – 18 Integrantes',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia64 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9433,
            'year' =>3,
            'value' => 0,
            'description' => 'En el segundo semestre de la vigencia 2022, se proyecta el apoyo a Proyectos Ambientales Escolares - PRAE, en articulación con el proyecto Economía Circular, por medio del concurso “Transformando Residuos Construyendo Sonrisas – Instituciones Educativas Aliadas por la Sostenibilidad en su Séptima Versión”.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia65 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9434,
            'year' =>3,
            'value' => 1,
            'description' => 'Realización de 10 presentaciones artísticas de Música Campesina Ecológica y Ambiental, transmitiendo mensajes que invitan al cuidado de nuestros recursos naturales, en escenarios culturales de los municipios de Somondoco, Macanal, Tenza, Guateque, Campohermoso, Úmbita, Ciénega, Jenesano y Garagoa.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia66 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9435,
            'year' =>3,
            'value' => 6,
            'description' => 'Fortalecimiento a 6 grupos comunitarios de los municipios de Macanal, Guateque, Garagoa, Jenesano, Somondoco, Tenza y Nuevo Colón, mediante 10 sesiones de capacitación y sensibilización.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia67 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9436,
            'year' =>3,
            'value' => 38,
            'description' => 'Implementación de 14 campañas radiales sección aula ambiental, 21 Campañas de sensibilización ambiental y/o laboratorios de campo de Educación Ambiental y 3 Campañas digitales para el fomentando de la cultura ambiental.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia68 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9437,
            'year' =>3,
            'value' => 90,
            'description' => 'En el transcurso de los 6 meses han recepcionando un total de 2688 PQRS, de las cuales 2422 ya están decididas.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia69 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9438,
            'year' =>3,
            'value' => 44,
            'description' => 'En este primer semestre del 2022 se han realizado 220 seguimientos a infracciones ambientales, sobre la meta total de 500 seguimientos anuales ',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia70 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9439,
            'year' =>3,
            'value' => 31.7,
            'description' => 'Se realizó seguimiento a 287 de los 907 expedientes priorizados de       otorgados en los 25 municipios de la jurisdicción ',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia71 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9440,
            'year' =>3,
            'value' => 50,
            'description' => 'Durante el primer semestre del 2022 se han proferido un total de 42 actos administrativos de inicio de procesos sancionatorios.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia72 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9441,
            'year' =>3,
            'value' => 45.5,
            'description' => 'Se finalizaron 41 procesos Sancionatorio en el primer semestre de 2022, para un total porcentual hasta la fecha de 45.5%',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia73 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9442,
            'year' =>3,
            'value' => 50,
            'description' => 'En lo corrido del primer semestre de 2022 se han atendido la totalidad de los tramites ambientales allegados a la corporación, correspondientes hasta la fecha con reservorios, donación de madera, planes de contingencia y conceptos de viabilidad de vías',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia74 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9443,
            'year' =>3,
            'value' => 3,
            'description' => 'A fecha de corte de reporte semestral, ya se cumplieron con  3 capacitaciones, teniendo una ejecución del 100% de esta actividad',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia75 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9444,
            'year' =>3,
            'value' => 9,
            'description' => 'A la fecha se han ejecutado 9 operativos de control al desarrollo de la actividad minera, el aprovechamiento y tráfico de flora y fauna, el uso del recurso hídrico, ruido, calidad de aire y otros recursos, de los 30 establecidos en la meta anual. ',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia76 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9445,
            'year' =>3,
            'value' => 50,
            'description' => 'Ejecución cumplimiento de actividades del Plan Anual de adquisiciones de Bienes y  Servicios vigencia 2022 del primer semestre, clasificado, programado publicado, y reportado en SECOP II, ',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia77 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9446,
            'year' =>3,
            'value' => 50,
            'description' => 'Realización del autodiagnóstico de las 37 acciones contempladas en la política de GECI, y elaboración del plan de acción, para desarrollo de actividades.
        Avance en la gestión documental y procesos de intercambios de experiencias y participación comunitaria (ciencia participativa).
        Se avanza en el proceso de sistematización de lecciones aprendidas y buenas practicas desde el desarrollo de los proyectos misionales. Para el segundo semestre se ejcutara el plan de accion derivado del autodiganostico., ',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia78 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9447,
            'year' =>3,
            'value' => 70,
            'description' => 'En el primer semestre con el equipo profesional del area se realizo revision de cada uno de los procesos y se hizo asesorias y formacion al equipo tecnico de cada procesos con el fin de preparar la auditoria interna que permitra medir el impacto y desempeño del sistema asi como de las politicas de MIPG.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia79 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9448,
            'year' =>3,
            'value' => 2,
            'description' => 'Se encuentra en curso el proyecto presentado a la fuente Sistema General de Regalías SGR Sector Ambiente Convocatoria 1. Conservación de Áreas Ambientales Estratégicas proyecto:
        
        -	IMPLEMENTACIÓN DE ESTRATEGIAS PARA LA CONSERVACIÓN DE LA BIODIVERSIDAD Y SUS SERVICIOS ECOSISTEMICOS EN ÁREAS PROTEGIDAS Y DE ALTA TENENCIA DE LA DEFORESTACIÓN EN LA JURISDICCIÓN DE CORPOCHIVOR, BOYACÁ  presentado por un valor de valor $3.745.800.452
         
        Se encuentra en curso los proyectos presentados a la fuente Sistema General de Regalías SGR Sector Ambiente Convocatoria 2. Lucha Nacional Contra la Deforestación proyectos:
        
        -	IMPLEMENTACIÓN ESTRATEGIAS DE GOBERNANZA FORESTAL PARA EL CONTROL DE LA DEFORESTACIÓN Y LA GESTIÓN SOSTENIBLE DE LOS BOSQUES EN LA JURISDICCIÓN DE CORPOCHIVOR, BOYACÁ  presentado por un valor de valor de $3.979.762.060
        
        -	IMPLEMENTACIÓN DE MECANISMO PARA LA REDUCCIÓN DE EMISIONES POR DEFORESTACIÓN Y DEGRADACIÓN (RED++), DE LOS BOSQUES NATURALES EN LA JURISDICCIÓN DE CORPOCHIVOR, BOYACÁ presentado por un valor de valor $3.998.287.108',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia80 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9449,
            'year' =>3,
            'value' => 1,
            'description' => 'con corte al primer semestre se ha realizado un seguiemiento a los proyectos corporativos.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia81 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9450,
            'year' =>3,
            'value' => 50,
            'description' => 'El plan de comunicaciones se ejecuta con normalidad dando cumplimiento a los planteamientos realizados .',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia82 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9451,
            'year' =>3,
            'value' => 10,
            'description' => 'Se avcanza en la implementacion de la politica de gobierno digital , y en la optimizacion de soluciones informaticas.',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia83 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9452,
            'year' =>3,
            'value' => 20,
            'description' => 'el desarrollo de al actividad se ejecuta dentro de los parametros establecidos, y se exploran opciones de mejora para el geoportal .',
            'type' => null,
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia84 = DB::getPdo()->lastInsertId();
        
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
