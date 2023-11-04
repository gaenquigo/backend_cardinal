<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCda2021 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_advance')->insert([
            'activity_id' => 14114,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia1 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14115,
            'year' =>2,
            'value' => 9,
            'description' => 'Se brindó asistencia a los 9 municipios que hacen parte de la jurisdicción de la
        CDA, en temas relacionados con Determinantes Ambientales .',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia2 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14116,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia3 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14117,
            'year' =>2,
            'value' => 8,
            'description' => 'Se concertación en asuntos ambientales el PBOT del municipio de San José del
        Guaviare.
        • Se concertó en asuntos exclusivamente ambientales el EOT de los municipios
        de Retorno. Miraflores y Calamar, los cuales se encuentran suspendidos',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia4 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14118,
            'year' =>2,
            'value' => 0,
            'description' => 'Se cuenta con el documento técnico con estudios iniciales para la declaratoria del área, el
        cual fue revisado por el Instituto SINCHI y se realizaron observaciones las cuales están en
        proceso de ajuste.
        Se reactivó la mesa técnica interinstitucional de Área Protegida Regional para el
        departamento del Guaviare donde se socializó la ruta de declaratoria, avances y se inició la
        jornada de socialización en el primer núcleo en la Carpa.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia5 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14119,
            'year' =>2,
            'value' => 200000,
            'description' => 'Acompañamiento a la mesa RAMSAR; visitas de seguimiento, Entrega de insumos,
        participación en encuentros de concertación y capacitación. Avance en la construcción de la
        estrategia de turismo del sitio Ramsar y fortalecimiento en gobernanza y beneficios
        percibidos. Postulación de la EFI en el programa Lista Verde de la UICN',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia6 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14120,
            'year' =>2,
            'value' => 0,
            'description' => 'Documento formulado, socializado y aprobado por las instituciones y comunidad aledaña.
        Pendiente Adopción por Consejo Directivo
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia7 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14121,
            'year' =>2,
            'value' => 23000,
            'description' => 'Se han adquirido los insumos para el fortalecimiento del área protegida Reserva Forestal
        protectora Nacional Serranía de La Lindosa – Angostura II; se continua el trabajo con el
        apoyo al sector turismo de naturaleza',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia8 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14122,
            'year' =>2,
            'value' => 1,
            'description' => 'Avance anual con las actividades establecidas en el plan de acción del Memorando de
        Entendimiento. Se realizaron las acciones para fortalecer las áreas protegidas del
        departamento del Guainía a través de la formulación de su Plan de Manejo y se
        proyecta el Acto administrativo de Adopción del Plan. Se avanza en el proceso de
        declaratoria de un área protegida regional en el Guaviare a través de la reactivación
        del Sistema Departamental de Áreas Protegidas SIDAP.
        Se aplicó la ficha de efectividad para las áreas protegidas: 4 Microcuencas de Inírida y
        ZRFP Serranía La Lindosa en el departamento del Guaviare.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia9 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14123,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia10 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14124,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia11 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14125,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia12 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14126,
            'year' =>2,
            'value' => 0,
            'description' => 'Avance de los procesos de capacitación en función del fortalecimiento de las
        capacidades de oferta productiva de los habitantes del Resguardo de Venado.
        Trabajo que se ha venido desarrollado con participación activa por parte de los
        miembros de la comunidad y sus lideres, al corte del informe, se han realizado tres
        visitas de las 11 programadas dentro del Plan de trabajo.
        META A SER CUMPLIDA EN VIGENCIA 2022',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia13 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14127,
            'year' =>2,
            'value' => 650000,
            'description' => 'la ordenación foretal corresponde a vaias zonas o bloques en Calamar, Retorno
        San José del Guaviare y Miraflores para un total de 109 veredas. Durante el cuarto
        trimestre se avanzó en la etapa de campo. Se espera contar con la estructura del
        documento final y análisis de información en el primer trimestre del 2022',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia14 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14128,
            'year' =>2,
            'value' => 0,
            'description' => 'La Corporación CDA avanzo en el levantamiento de información primaria y trabajo participativo con los actores
        identificados con influencia sobre la micro cuenca caño pámpano, en el municipio de Inírida. Para la
        continuidad del proceso de realizó una capacitación virtual y una capacitación presencial con delegados del
        MADS, quienes brindaron orientación y directrices sobre el procedimiento de agotamiento y ordenación de la
        micro cuenca; producto del mencionado ejercicio, surgió la necesidad de realizar el acotamiento de la ronda
        hídrica de caño pámpano con las especificaciones técnicas requeridas, para lo cual es necesario contar con
        una priorización de microcuencas de la que actualmente no dispone la corporación para jurisdicción. En
        consecuencia, para dar continuidad al proceso de formulación del PMA, es necesario realizar el proceso de
        priorización y posterior acotamiento de la ronda hídrica, para lo cual es necesario desarrollar un trabajo técnico
        interdisciplinario que requiere tiempo y recursos adicionales',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia15 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14129,
            'year' =>2,
            'value' => 0,
            'description' => 'En el proceso de revisión y actualización del Plan de Ordenación y Manejo de Cuenca del rio Cuduyarí se han
        realizado diez (10) reuniones de revisión técnica del documento y su respectiva cartografía en
        acompañamiento de Ministerio de Ambiente y Desarrollo Sostenible –MADS y el Instituto SINCHI
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia16 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14130,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia17 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14131,
            'year' =>2,
            'value' => 1,
            'description' => 'Durante la vigencia 2021, con el apoyo del equipo de educación ambiental se 
        realizaron actividades orientadas al conocimiento, control y manejo del 
        caracol Africano, en los 9 municipios de la jurisdicción',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia18 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14132,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia19 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14132,
            'year' =>2,
            'value' => 642,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia20 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14133,
            'year' =>2,
            'value' => 498,
            'description' => 'Se cuenta con los usuarios de los Acuerdos de Conservación, Restauración y No
        Deforestación en los municipios de San José del Guaviare y Calamar; donde en cada
        predio se implementa el modelo de Restauración Ambiental en Zonas de Recarga
        Hídrica de 3Has',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia21 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14134,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia22 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14135,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia23 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14135,
            'year' =>2,
            'value' => 440,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia24 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14136,
            'year' =>2,
            'value' => 395,
            'description' => 'Se realizaron las actividades de siembra de material vegetal en 395 has, quedando pendiente 
        50 hectáreas para establecer en la vigencia 2022. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia25 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14137,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia26 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14138,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia27 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14139,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia28 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14140,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia29 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14141,
            'year' =>2,
            'value' => 1,
            'description' => 'Se adquirieron los equipos respectivos para el mejoramiento de la red de conexión interna de la
        corporación con los cuales se optimizara la gestión documental en cada una de las tres seccionales
        - Se participo activamente en las capacitaciones online realizadas por el IDEAM y MINAMBIENTE
        con el fin de efectuar el debido registro en los sistemas SIRH – RESPEL – PCB.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia30 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14142,
            'year' =>2,
            'value' => 1,
            'description' => 'La Corporación recientemente adquirió el software “PIMISYS SICAR”, Sistema de Información para el
        Control y Seguimiento de Rentas en la Corporación. con el cual se realizo la expedición de la
        facturación de las tasas y seguimientos ambientales. Para la implementación total del software se
        encuentra a la espera de subsanar errores e inconsistencias en la configuración del mismo (debido a la
        intermitencia en la señal se ha dificultado el avance oportuno de la configuración del software)',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia31 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14143,
            'year' =>2,
            'value' => 100,
            'description' => 'Se realizó el seguimiento de los 2 permisos de emisiones presentes en la jurisdicción de la CDA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia32 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14144,
            'year' =>2,
            'value' => 100,
            'description' => 'Se realizaron 10 seguimientos a los 10 PGIRS de la jurisdicción de la CDA.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia33 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14145,
            'year' =>2,
            'value' => 100,
            'description' => 'Se realizaron 12 seguimientos de las 12 licencias ambientales activas en la jurisdicción',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia34 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14146,
            'year' =>2,
            'value' => 100,
            'description' => 'Se realizaron las visitas de seguimiento a los 10 aprovechamientos forestales persistentes vigentes en
        las jurisdicción.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia35 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14147,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia36 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14148,
            'year' =>2,
            'value' => 60,
            'description' => 'Se resolvieron 77 sancionatorios de 266 aperturados a corte 31 de diciembre de 2021',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia37 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14149,
            'year' =>2,
            'value' => 1,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia38 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14150,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia39 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14151,
            'year' =>2,
            'value' => 5,
            'description' => 'Se monitorearon las (05) zonas de influencia minera que corresponden a los trayectos de la Guadalupe a Caño
        Colorado por el rio Negro y rio Guainía, de Caño Raya a Pato Corona por el rio Atabapo, Campo Alegre y
        Punta Tigre en el Isana y Cayarí, Inírida a Chorrobocón y de Taraira a Bocas de Taraira en el departamento de
        Vaupés. realizando los recorridos para la toma de muestras en peces, plantas y sedimentos en diferentes
        puntos con influencia minera ubicados en estos ríos. Se obtuvieron los resultados de los análisis de laboratorio',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia40 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14152,
            'year' =>2,
            'value' => 1,
            'description' => 'Se realizó en el departamento de Vaupés, el segundo taller de normatividad minera el cual fue apoyado por la
        Agencia Nacional de Minería y el Ministerio de Minas y Energía.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia41 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14153,
            'year' =>2,
            'value' => 2,
            'description' => 'Se adquirieron todos los equipos, herramientas y materiales para la toma de muestras de plantas, peces y
        sedimentos, en las Seccionales Guainía y Vaupés.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia42 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14154,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia43 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14155,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia44 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14156,
            'year' =>2,
            'value' => 100,
            'description' => 'Se realizó el seguimiento al 100% de los Programas de Uso Eficiente y Ahorro de Agua programados
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia45 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14157,
            'year' =>2,
            'value' => 100,
            'description' => 'Se realizó el seguimiento a 9 de 9 Planes de Saneamiento y Manejo de Vertimientos en la jurisdicción de la CDA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia46 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14158,
            'year' =>2,
            'value' => 100,
            'description' => 'Se realizó el seguimiento a 107 de 108 concesiones de aguas en la jurisdicción de la CDA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia47 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14159,
            'year' =>2,
            'value' => 100,
            'description' => 'Se realizó el seguimiento a los 80 permisos de vertimientos en la jurisdicción de la CDA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia48 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14160,
            'year' =>2,
            'value' => 100,
            'description' => 'Se realizó el seguimiento a los 27 permisos de ocupaciones de cauce en la jurisdicción de la CDA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia49 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14161,
            'year' =>2,
            'value' => 100,
            'description' => 'Se elaboro el informe de seguimiento al cumplimiento de las metas de carga contaminante en base a los monitoreos realizados. El documento se
        encuentra publicado en pagina web de la corporación CDA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia50 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14162,
            'year' =>2,
            'value' => 100,
            'description' => 'Se elaboró el informe de seguimiento al cumplimiento de los objetivos de calidad en base a los monitoreos realizados. El documento se encuentra
        publicado en pagina web de la corporación CDA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia51 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14163,
            'year' =>2,
            'value' => 1,
            'description' => 'Se firmo el proyecto de acuerdo 005 del 29 de julio de 2021 y acuerdo 008 del 02 de diciembre del 2021.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia52 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14164,
            'year' =>2,
            'value' => 9,
            'description' => 'Se llevo a cabo el muestreo y análisis de 67 muestras de agua de tipo residual, superficial y matriz de riesgos en la jurisdicción de la CDA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia53 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14165,
            'year' =>2,
            'value' => 1,
            'description' => 'De la Fase 2- diagnóstico, se adelantó la recopilación y análisis de información secundaria de los modelos hidrogeológicos de Inírida (Guainía) y San
        José del Guaviare (Guaviare), se adelanta proceso precontractual del Modelo Hidrogeológico del Municipio de Mitú (Vaupés), cuyo contrato de
        consultoría No. 296 de 2021 se encuentra en ejecución y cuenta con fecha de finalización de 31 de enero de 2022, se realizaron 2 talleres
        participativos con los actores claves involucrados con el uso del recurso hídrico, se generó documento de análisis de la problemática del recurso
        hídrico a partir del insumo de los talleres participativos y la información interinstitucional recopilada obteniendo como resultado cartografía de las
        zonas de vulnerabilidad del recurso hídrico. Una vez culminada la fase 2 de diagnóstico se ejecutó a la Fase 3 de Formulación donde se
        identificaron las líneas estratégicas para la definición de proyectos, programas y/o actividades para dar solución a las problemática planteadas en la
        cartografía social.
        El proyecto queda en rezago y se reportará el cumplimiento de la meta en el informe de gestión correspondiente al primer semestre 202',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia54 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14166,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia55 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14167,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia56 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14168,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia57 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14169,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia58 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14170,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia59 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14171,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia60 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14172,
            'year' =>2,
            'value' => 56,
            'description' => 'En las principales vías de acceso a cada municipio se implementan puestos de control a la
        movilización de productos forestales, mensualmente. Para el municipio de San José se hicieron
        67, para El Retorno 25 y para Calamar 24, Para un total de 116 puestos de control( de 56
        programados); revisando un total de 2721 vehículos. Se aprovecha para hacer sensibilización a
        las personas en el tema de movilización de productos forestales.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia61 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14173,
            'year' =>2,
            'value' => 8,
            'description' => 'Se 8 programados se realizaron 22 capacitaciones a las fuerzas militares y de policía, de las
        cuales, quince en el municipio de San José, una para El Retorno y seis en Calamar, capacitando un
        total de 602 integrantes de las FFM y de Policía..',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia62 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14174,
            'year' =>2,
            'value' => 70,
            'description' => 'Las quejas asignadas por deforestación, cargadas en SILA, se atendieron en su gran mayoría en el
        municipio de San José, para los municipios de El Retorno y Calamar, no fue posible el ingreso por
        problemas de orden público, pero se hicieron los conceptos a partir de imágenes de satélite, pero no
        se tienen los presuntos infractores.
        El 30% restante se espera cumplir en mayo de 2022 ya que se cuenta con los recursos para
        realizarlos',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia63 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14175,
            'year' =>2,
            'value' => 70,
            'description' => ' A la fecha de 31 de diciembre los abogados tienen un total de 93 procesos con diferentes
        actuaciones, dese autos de aperturas, autos de pruebas de recursos, hasta resolución de sanción.
        Se cuenta con los recursos para contratar un abogado por tres meses razón por la cual el 30%
        restante se terminará en mayo del año 2022.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia64 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14176,
            'year' =>2,
            'value' => 4,
            'description' => 'Se identificaron puntos de deforestación a los cuales se les realizaron visita técnicas de campo para el control y
        monitoreo de áreas deforestadas, donde se promueve la implementación de los sistemas agroforestales como
        alternativa para mitigar la deforestación y recuperación de áreas degradadas por los monocultivos y ganadería y la
        protección de los hábitat de la fauna silvestre. Se realizó el mejoramiento de los espacios para recepción y control de
        fauna y flora en la jurisdicción.
        Se realizó la construcción de viveros dotados con insumos y en los elementos para la producción de material
        vegetal para recuperar áreas erosionadas, objeto de medidas cautelares y la sentencia 4360 en la jurisdicción.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia65 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14177,
            'year' =>2,
            'value' => 8,
            'description' => 'A. Se culminó la toma de muestras de agua y suelo último resguardo asignado Resguardo Puerto Nare, se hace análisis de los
        resultados obtenidos en laboratorios certificados por el IDEAM de las muestras de agua y suelo en los resguardos objeto de
        medidas cautelares. Se cuenta con 4 diagnósticos, los diagnósticos restantes se encuentran en proceso de construcción y análisis
        de la información socio ambiental.
        B. Se capacitaron a 109 mujeres indígenas como vigías ambientales de los Resguardos Indígenas de: La Fuga, La María, Palmera,
        Libertad en el departamento del Guaviare.
        C.Acciones de recuperación del Recurso Hídrico: 60,38 Ha. Guainía 11,8 Ha (4 Microcuencas: Pámpano, Motobomba, Conejo y
        Terpel; Guaviare: 29,2 Ha Caño La Fuga, La Maria; Barrancón (caño Bejuco), Caño Cumare, Caño Tigre, Caño Cristal; en Vaupés:
        19,58 Hectáreas, Humedal 7 de Agosto, Palmeras, Humberto Lozano y Urania.
        D. Modelos agroforestales con material vegetal nativo 300 Ha, Familias 407 familias, Guaviare 99,6 Ha: Resguardos La María, La
        Fuga, Barrancón (3 asentamientos: Palmeras, Libertad, escuela), Nukak (3 asentamientos Cumare, Charras, Caño Cristal); Guainía
        46 Ha: Concordia, berrocal Vitina, Sabanitas, Timzú, La Ceiba; Vaupés 155 Ha: Tucandira, 12 de octubre, Valencia Cano, Libertad,
        Yararaca, Ceima San Pablo, Ceima Cachivera, Mituseño Urania 1, Mituseño Urania 2, Pueblo Nuevo, Mitú Cachivera, Cerrito Verde
        1, Cerrito Verde 2, San Francisco
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia66 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14178,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia67 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14179,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia68 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14180,
            'year' =>2,
            'value' => 5,
            'description' => 'Acompañamiento a unidades empresariales. seguimiento al buen uso de los elementos
        entregados en la vigencia del 2019 y 2020. Asesoría, acompañamiento y fortalecimiento en
        los planes de mejora; actualización de fichas, participación en vitrinas nacionales como
        BIOEXPO, EXPOARTESANÍAS y locales con Feria del Guaviare.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia69 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14181,
            'year' =>2,
            'value' => 1,
            'description' => 'Se realizaron tres reuniones con los actores de la Mesa territorial de Negocios verdes para
        definir lineamientos para la planificación y la ejecución del Plan Departamental de Negocios
        Verdes 2021 - 2030 de acuerdo a las potencialidades y ventajas competitivas en cada
        departamento, que propenderá en el crecimiento socio-económico y cultural de todos los
        actores involucrados.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia70 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14182,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia71 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14183,
            'year' =>2,
            'value' => 1,
            'description' => 'Actualmente la Ventanilla Verde opera en la jurisdicción de la CDA con un equipo
        multidisciplinario que atiende los requerimientos institucionales y de los Negocios Verdes de
        la Jurisdicción',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia72 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14184,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia73 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14185,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia74 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14186,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia75 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14187,
            'year' =>2,
            'value' => 107515,
            'description' => 'Se logró a la fecha la firma de Acuerdos de Conservación para la preservación de 107.515 has de
        bosques natural en jurisdicción de la CDA. Es de aclarar que el número de has establecido como meta
        es una proyección, el resultado final se logra una vez se haya levantado la información cartográfica y
        delimitación del área a conservar.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia76 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14188,
            'year' =>2,
            'value' => 589,
            'description' => 'En el proceso de escalamiento del IFA se tienen aún 84 cupos para familias campesinas que decidan 
        vincularse, y que no se lograron vincular durante la vigencia 2021.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia77 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14189,
            'year' =>2,
            'value' => 64640,
            'description' => 'Se ha cumplido en un 100% el seguimiento a las áreas de conservación. Así mismo se han realizado las 
        visitas a campo en las comunidades indígenas para verificación de los Acuerdos.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia78 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14190,
            'year' =>2,
            'value' => 234,
            'description' => 'Se ha realizado el seguimiento a los Acuerdos de Conservación gracias al apoyo del Pilar 5 condiciones
        habilitantes de Visión Amazonía y visitas a las áreas seleccionadas.
        Los seguimientos se realizan trimestralmente a los 234 Acuerdos vigentes a la fecha',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia79 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14191,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia80 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14192,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia81 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14193,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia82 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14194,
            'year' =>2,
            'value' => 0,
            'description' => '
        Convenio CDA – SINCHI. Se realizaron los talleres comunitarios;
        talleres de capacitación. Se espera terminar en el mes de abril de
        2022',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia83 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14195,
            'year' =>2,
            'value' => 0,
            'description' => 'Proyecto Formulado para la implementación de los PIGCCT
        Guaviare y Vaupés. Se realizaron ajustes de acuerdo a
        observaciones solicitadas por el MADS.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia84 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14196,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia85 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14197,
            'year' =>2,
            'value' => 1,
            'description' => 'Formulación del plan de acción del NORCCA en coordinación con la Dirección de
        Cambio Climático del MADS, y el fortalecimiento del equipo PNUD.
        Se ejecutan campañas de sensibilización sobre CC y reuniones de Subnodo',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia86 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14198,
            'year' =>2,
            'value' => 9,
            'description' => 'Con el apoyo del IDEAM se desarrollaron capacitaciones sobre prevención de
        incendios forestales, dirigidas a los Consejos Municipales de Gestión del Riesgo de
        la Jurisdicción de la CDA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia87 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14199,
            'year' =>2,
            'value' => 2,
            'description' => 'A través de Convenios interinstitucionales con los Cuerpo de Bomberos Voluntarios
        de los municipios de Inírida y San José se fortalecieron las capacidades técnicas y
        operativas para la atención de Incendios Forestales',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia88 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14200,
            'year' =>2,
            'value' => 0,
            'description' => 'Se aclara que el valor total del proyecto es de $44.999.314.320 distribuidos en $24.999.314.320 para vigencia
        2022 y 20.000.000.000 para vigencia 2021, el cual contaba con autorización de vigencias futuras pero debido
        a los enunciados anteriormente expuestos se ajustará el proyecto al valor asignado en la ley de presupuesto
        para la vigencia 2022',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia89 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14201,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia90 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14202,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia91 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14203,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia92 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14204,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia93 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14205,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia94 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14206,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia95 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14207,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia96 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14208,
            'year' =>2,
            'value' => 9,
            'description' => 'Se desarrollaron las estrategias de educación ambiental en los 9 municipios.
        -Se implementaron: Talleres de capacitación en temáticas ambientales como:
        Incendios forestales; manejo y control del caracol africano; conservación de fauna
        y flora silvestre, normatividad ambiental, transversalizando las políticas de Cambio
        climático y la ST 4360 3.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia97 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14209,
            'year' =>2,
            'value' => 4,
            'description' => 'Se fortalecieron las áreas diferentes áreas misionales y administrativas de la Corporación con la
        contratación del personal idóneo que requiere la entidad para el desarrollo de actividades específica',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia98 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14210,
            'year' =>2,
            'value' => 0,
            'description' => 'Se adelanto el proceso de formulación de los proyectos que se pretenden iniciar en la vigencia 2021
        donde se mejorará y fortalecerá la infraestructura física de la Sede Principal y la Sede en el municipio
        de Mitú
        Se adelantaron acciones de mantenimiento de las instalaciones locativas de la Sede principal de la
        Corporación y sus alrededores',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia99 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14211,
            'year' =>2,
            'value' => 1,
            'description' => 'Se adelanta la implementación del Plan de comunicaciones el cual está proyectado hasta el 31 de diciembre de 2021
        realizo la resolución N° 143 del 2021, por medio del cual se implementa el Esquema de Publicación de la Corporación 
        CDA, en donde se dan las pautas de publicación en la pagina web
        En cumpliendo con el Índice Transparencia y acceso a la información pública (ITA) se actualizaron los botones de 
        acceso a la información',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia100 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14212,
            'year' =>2,
            'value' => 1,
            'description' => 'En el mes de Diciembre se realizó la Auditoría de recertificación del sistema de gestión de calidad conforme 
        con los requerimientos de la norma técnica de calidad ISO 9001:2015 Se logra renovar el Sello de 
        Calidad hasta ahora obtenido y, por segunda vez consecutiva, sin ninguna inconformidad, se demuestra el 
        cumplimiento de la Corporación frente a los requisitos establecidos en la norma técnica de calidad ISO 9001:2015',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia101 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14213,
            'year' =>2,
            'value' => 1,
            'description' => 'Consolidación de la información geográfica de las determinantes ambientales
        ⚫ Diagnóstico de la información disponible en http://mapas.cda.gov.co/map.phtm',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia102 = DB::getPdo()->lastInsertId();
        
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
