<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCorpamag2022 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_advance')->insert([
            'activity_id' => 10198,
            'year' =>3,
            'value' => 10,
            'description' => 'Para el primer semestre de 2022 se desarrollaron 69 reuniones, tanto en modalidad virtual como en modalidad presencial con los actores CIDEA, para el fortalecimiento de estos comités técnicos. 
        Estos encuentros se desarrollaron en 28 Municipios y el Distrito de Santa Marta, donde en este primer semestre, teniendo en cuenta el fortalecimiento de los Comités y soportados en dar cumplimiento a los Planes de Educación Ambiental Municipales se intervino desde la formulación participativa con los actores CIDEA del Plan de Acción o Plan Operativo Anual 2022 de cada CIDEA, proyectando las acciones a realizar en el año y así poder materializar lo estipulado en cada Plan de Educación Ambiental Municipal - PEAM.
        Teniendo en cuenta que para el año 2022 se proyecta el fortalecimiento de diez (10) CIDEA con el mismo número de municipios y que para este primer semestre se cumplió con lo propuesto .',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => '
        ',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia1 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10199,
            'year' =>3,
            'value' => 7,
            'description' => 'El el primer semestre de 2022, se cuenta con y Proyectos Ambientales Escolares PRAE asesorados en su proceso de formulación, estos son: 
        1. RICUVA VERDE, UN SEMILLERO DE VIDA
        2. PROMOVER EL ANÁLISIS Y LA COMPRENSIÓN DE LOS PROBLEMAS Y POTENCIALIDADES AMBIENTALES MEDIANTE EL DESARROLLO DE HUERTAS ECOLÓGICAS Y CANECAS PLÁSTICAS QUE INVITEN AL RECICLAJE EN LA INSTITUCIÓN EDUCATIVA INEDSAB DE SABANAS, DEL PIÑON MAGDALENA.
        3. VAMOS TODOS A RECICLAR
        4. IMPLEMENTACIÓN DE ESTRATEGIAS PEDAGÓGICAS AMBIENTALES EN EL MARCO DEL MODELO HOLÍSTICO PARA LA RECUPERACIÓN DE ESPECIES VEGETALES NATIVAS, A TRAVÉS DEL FUNCIONAMIENTO DE UN VIVERO EN LA I.E.D. AGROPECUARIA Y AMBIENTAL URBANO MOLINA CASTRO, MUNICIPIO DE NUEVA GRANADA, CORREGIMIENTO DE 
        5. FOMENTAR EL RECICLAJE EN LA IED LUIS CARLOS GALÁN SARMIENTO, DEL MUNICIPIO DE PLATO, COMO ESTRATEGIA EDUCATIVA PARA UN AMBIENTE SALUDABLE
        6. ESTRATEGIAS PEDAGÓGICAS QUE GENEREN REFLEXIÓN Y SENSIBILIZACIÓN EN LA COMUNIDAD EDUCATIVA GABRIELISTA, DEL MUNICIPIO DE PLATO, PERFILADAS A FOMENTAR EL CUIDADO DEL MEDIO AMBIENTE A TRAVÉS DEL MANEJO Y SEPARACIÓN DEL RESIDUOS SÓLIDOS
        7. DISEÑO E IMPLEMENTACIÓN DE UN VIVERO BIOCLIMÁTICO ESCOLAR EN LA IED FRANCISCO JOSÉ DE CALDAS EN EL CORREGIMIENTO DE LA ESTRELLA, MUNICIPIO DE CHIBOLO, PARA EL FORTALECIMIENTO DE LA EDUCACIÓN AMBIENTAL Y DE LAS PRÁCTICAS AMBIENTALES PROMOVIDAS DESDE LA INSTITUCIÓN.
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '2022-CD078
        2022-CD064
        2022-CD082
        2022-CD092
        2022-CD067
        2022-CD084
        2022-CD080
        2022-CD095
        2022-CD094
        2022-CD143
        ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia2 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10200,
            'year' =>3,
            'value' => 3,
            'description' => 'En este primer semestre se lograron formular tres (3) proyectos PROCEDA, de los cuales dos (2) se encuentran en fase de ejecución con recursos de CORPAMAG. Se logrará impactar con estos proyectos a más de 30 mil personas de las comunidades de la zona rural de El Piñón, Pueblo viejo y Santa Marta. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '2022-CD154
        2022-CD097
        2022-CD106
        2022-CD277
        2022-CD194
        2022-CD275
        2022-CD290
        2022-CD285
        2022-CD307
        ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia3 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10202,
            'year' =>3,
            'value' => 1,
            'description' => 'En este primer semestre el equipo de la subdirección de educación ambiental de Corpamag, continúo utilizando herramientas educativas con las comunidades con las que trabaja; basadas en las tecnologías de la información y la comunicación para hacer pedagogía ambiental. Por ejemplo; coordinando con las comunidades cuando no es posible desarrollar actividades presenciales, se utilizan salas virtuales tales como Google Meets y Microsoft Teams, videos de las sesiones de algunas actividades programadas grabadas se cargan en el canal de YouTube de CORPAMAG, para que una vez compartidas puedan ser visualizadas por los interesados; así mismo el uso de aplicativos y estrategias tecnológicas y ofimáticas para el desarrollo de actividades de tipo presencial o virtual que permitan una interacción y comprensión de la temática ambiental abordada. ',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de viaticos',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia4 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10203,
            'year' =>3,
            'value' => 2,
            'description' => 'En la vigencia 2022 a través del cumplimiento del convenio interadministrativo suscrito entre el Ministerio De Ambiente y Desarrollo Sostenible y la Corporación, con el objeto de: “Aunar esfuerzos técnicos, administrativos y financieros para implementar acciones de educación ambiental, participación comunitaria en la gestión ambiental, restauración, conservación y fortalecimiento de procesos propios del buen vivir, el cuidado de la madre tierra desde los usos y costumbres en el Resguardo indígena Kogui–Malayo–Arhuaco (Kiubuldo Munkuawunaka, Gunmaku y Kutunsama) y el Consejo Comunitario Jacobo Pérez Escobar del Departamento del Magdalena”. 
        Este convenio tiene dentro de sus objetivos el “Desarrollar procesos de participación mediante la estrategia de diálogo de saberes y prácticas culturales para la identificación de necesidades presentes en estos pueblos, que permitan mantener la tradicionalidad de las comunidades Kiubuldo Munkuawunaka, Gunmaku, Kutunsama, y el Consejo Comunitario Jacobo Pérez Escobar, reconociendo la importancia de la mujer en dichos procesos”.
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '2021-CD496',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia5 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10204,
            'year' =>3,
            'value' => 1050,
            'description' => 'Este indicador mide la atención a los ciudadanos que hace la subdirección de Educación Ambiental de Corpamag, en todas sus estrategias de intervención, es decir se contempla las reuniones de trabajo con los actores CIDEA de todos los municipios, las actividades de asesoría para la formulación de los proyectos PRAE y PROCEDA, y todas las actividades de Promoción de la Educación Ambiental, tanto capacitaciones, talleres o foros presenciales, virtuales y trabajo de campo como jornadas de siembra, celebración de fechas ambientales o los BootCamp de Emprendimiento Verde e Inclusivo, en este sentido el indicador es la suma de todo lo desarrollado en este primer semestre. 
        Con la suma de todos los ciudadanos atendidos a la fecha, 6.332 personas han sido capacitadas y asesoradas por el equipo de profesionales y técnicos de la subdirección de educación ambiental, logrando un cumplimiento del 100%.
        ',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de viaticos',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia6 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10205,
            'year' =>3,
            'value' => 79,
            'description' => 'Los líderes y lideresas ambientales formados y acompañados desde la Subdirección de Educación Ambiental, se han capacitado desde la transferencia del conocimiento, ciclo de talleres educativo ambientales y promoción de la educación ambiental obteniendo competencias conceptuales claras para la transmisión del conocimiento y el trabajo en sus territorios.
        Desde la transferencia de conocimiento y quienes han diligenciado actas de compromiso suman un total de 25 personas. Desde el ciclo de talleres: Diálogo de saberes para la construcción de conocimiento educativo ambiental en el Departamento del Magdalena, durante el primer semestre del año 2022, se ha desarrollado el proceso formativo con un total de 54 personas de los Municipios de Aracataca y El Banco, además de funcionarios del Departamento Administrativo Nacional de Estadística -DANE-. 
        En este sentido, se ha dado cumplimiento del 53% (79 personas) en la identificación y fortalecimiento de líderes ambientales
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '2022-CD088
        2022-CD085
        2022-CD271
        
        ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia7 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10206,
            'year' =>3,
            'value' => 2,
            'description' => 'En este año 2022 se desarrollaron dos campañas de  índole  educativo  ambiental formuladas para  promover cultura ambiental en  la población participante, es decir, incentivar a través de talleres teórico-prácticos y lúdicos ejercicios  de  reflexión  sobre  comportamientos, hábitos y actitudes inadecuadas con respecto a los ríos Gaira y Manzanares para así transformar esas acciones negativas en buenas prácticas ambientales que realizan las personas frente a sus ríos a través de labores concretas que surjan desde la misma población para la recuperación ecosistémica de estos importantes activos ambientales de Santa Marta. Estas campañas se ejecutaron exitosamente. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '2021-CD486
        2021-CD498',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia8 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10311,
            'year' =>3,
            'value' => 20,
            'description' => 'Se destacan los siguientes avances en el marco de esta actividad en la vigencia 2022:
          Se mantuvo un equipo de trabajo que operativizó la Ventanilla de NV, contando con profesionales con competencias en administración de empresas y marketing.
          Se realizó mejora en el micro sitio de Negocios Verdes de Corpamag
          Se realizó el ajuste del documento Plan de marketing territorial 2022 en cada una de sus estrategias (Producto, Promoción, Precio y Plaza). 
          Se realizó fortalecimiento virtual a los negocios verdes
          Se fortalecieron 3 planes de negocio de emprendimientos ubicados en el municipio de Plato.
          Se planificaron y realizaron transferencias metodológicas
          Se mantuvieron las redes sociales actualizadas del Programa Regional de Negocios Verdes.
          Se gestionaron y consolidaron alianzas estratégicas para el beneficio de los negocios verdes en el territorio. Se destacan las alianzas con ACE Orzuna SAS, Hecho en Casa y Unidad para la atención integral y reparación de víctimas. 
          Se realizó revisión y análisis de proyectos en articulación con el Banco de proyectos de las alianzas productivas de la ADR- Minagricultura (8 perfiles de proyecto).
        ',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => '
        ',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia9 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10312,
            'year' =>3,
            'value' => 3,
            'description' => 'Se destacan las alianzas con ACE Orzuna SAS, Hecho en Casa y Unidad para la atención integral y reparación de víctimas. ',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => '
        ',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia10 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10313,
            'year' =>3,
            'value' => 3,
            'description' => 'Se destacan los siguientes avances en el marco de esta actividad en la vigencia 2022:
        1. Se desarrollaron 2 Boot camp, uno en Santa Marta, en donde participaron varios emprendimientos, se sumaron 25 participantes entre los que se destacan la participación de aliados como el SENA y Unidad de Víctimas. 
        Entre los participantes el 32% de los emprendimientos hacen parte al registro de víctimas del conflicto, por lo tanto, el 52% restante no conforman dicho registro, y el 16% hacen parte a las comunidades afrodescendiente.
        2. La otra transferencia se desarrolló de manera articulada con el municipio de El Piñón, integrándose al CIDEA. 
        3. De igual forma, se desarrolló una socialización de manera virtual de la ruta del emprendimiento verde en el marco de los Talleres de Fortalecimiento ambiental, en donde se conectaron 100 personas.
        ',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => '
        ',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia11 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10314,
            'year' =>3,
            'value' => 37,
            'description' => 'En el marco de esta actividad, se realizaron 37 visitas de campo.',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => '
        ',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia12 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10316,
            'year' =>3,
            'value' => 20,
            'description' => 'Desde la ventanilla de negocios verdes y teniendo en cuenta las estrategias definidas se desarrolló la Implementación del Plan de marketing territorial del departamento del Magdalena.',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => '
        ',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia13 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10317,
            'year' =>3,
            'value' => 25,
            'description' => 'En lo concerniente a esta actividad, se cuenta con un documento de Plan departamental de negocios verdes, el cual nos permitirá definir la hoja de ruta para promover y fortalecer los negocios verdes en el territorio.',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => '
        ',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia14 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10214,
            'year' =>3,
            'value' => 0,
            'description' => 'En el marco de esta actividad, la Corporación se encuentra estructurando fase precontractual para el desarrollo de acciones en pro del fortalecimiento de la capacidad productiva de las asociaciones de pescadores y agricultores en la CGSM, con mirar a ser ejecutado durante el segundo semestre de la presente vigencia.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia15 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10215,
            'year' =>3,
            'value' => 0,
            'description' => 'La Corporación en cumplimiento de esta actividad, durante la presente vigencia se encuentra estructurando la fase de documentos previos para la implementación de los proyectos productivos.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia16 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10319,
            'year' =>3,
            'value' => 90,
            'description' => 'En este primer periodo, se ha venido ajustando el documento correspondiente al “Plan de Gestión Integral de Residuos Peligrosos - PGIRESPEL 2021-2030” teniendo en cuenta la publicación oficial por parte del Ministerio de Ambiente y Desarrollo Sostenible - MADS de la POLÍTICA AMBIENTAL PARA LA GESTIÓN INTEGRAL DE RESIDUOS PELIGROSOS Y PLAN DE ACCIÓN 2022-2030, la cual fue publicada el 21 de abril de 2022.
        De esta manera, la Subdirección de Gestión Ambiental de Corpamag, identificó la necesidad de ajustar el PGIRESPEL en la jurisdicción de la entidad, teniendo en cuenta las recomendaciones, lineamientos y plan de acción establecido por el MADS. Una vez el documento correspondiente al Plan de Gestión Integral de Residuos Peligrosos 2021- 2030 se encuentre ajustado de acuerdo a los nuevos lineamientos, será enviado para revisión jurídica y su respectiva adopción e implementación por acto administrativo. 
        ',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => '
        ',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia17 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10320,
            'year' =>3,
            'value' => 4,
            'description' => 'Sectores: Hotelero, cafetero, Bananero, agropecuario.',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => '
        ',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia18 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10321,
            'year' =>3,
            'value' => 50,
            'description' => 'Cumplimiento del indicador a corte 30 de junio de 2022',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => '
        ',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia19 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10322,
            'year' =>3,
            'value' => 50,
            'description' => 'Cumplimiento del indicador a corte 30 de junio de 2022',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => '
        ',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia20 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10221,
            'year' =>3,
            'value' => 3,
            'description' => 'Cumplimiento del indicador a corte 30 de junio de 2022',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => '
        ',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia21 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10222,
            'year' =>3,
            'value' => 79,
            'description' => 'Cumplimiento del indicador a corte 30 de junio de 2022',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '2022-CD019
        2022-CD022
        2022-CD020
        2022-CD032
        2022-CD027
        2022-CD029
        2022-CD028
        2022-CD030
        2022-CD031
        2022-CD037
        2022-CD077
        2022-CD060
        2022-CD059
        2022-CD086
        2022-CD062
        2022-CD087
        2022-CD115
        2022-CD111
        2022-CD074
        2022-CD075
        2022-CD072
        2022-CD083
        2022-CD089
        2022-CD090
        2022-CD157
        2022-CD121
        2022-CD125
        2022-CD153
        2022-CD113
        2022-CD112
        2022-CD120
        2022-CD134
        2022-CD135
        2022-CD116
        2022-CD118
        2022-CD117
        2022-CD145
        2022-CD195
        2022-CD188
        2022-CD190
        2022-CD185
        2022-CD186
        2022-CD193
        2022-CD203
        2022-CD210
        2022-CD192
        2022-CD189
        2022-CD197
        2022-CD208
        2022-CD158
        2022-CD205
        2022-CD206
        2022-CD213
        2022-CD204
        2022-CD223
        2022-CD254
        2022-CD267
        2022-CD265
        2022-CD241
        2022-CD236
        2022-CD141
        2022-CD220
        2022-CD224
        2022-CD225
        2022-CD228
        2022-CD239
        2022-CD240
        2022-CD262
        2022-CD282
        2022-CD198
        2022-CD260
        2022-CD274
        2022-CD211
        2022-CD250
        2022-CD266
        2022-CD222
        2022-CD257
        2022-CD306
        2022-CD304
        2022-CD281
        2022-CD283
        2022-CD300
        2022-CD226
        ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia22 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10223,
            'year' =>3,
            'value' => 18,
            'description' => 'Cumplimiento del indicador a corte 30 de junio de 2022',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => '
        ',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia23 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10224,
            'year' =>3,
            'value' => 38,
            'description' => 'Cumplimiento del indicador a corte 30 de junio de 2022',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => '
        ',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia24 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10225,
            'year' =>3,
            'value' => 9,
            'description' => 'Cumplimiento del indicador a corte 30 de junio de 2022',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => '
        ',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia25 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10226,
            'year' =>3,
            'value' => 27,
            'description' => 'Cumplimiento del indicador a corte 30 de junio de 2022',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => '
        ',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia26 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10227,
            'year' =>3,
            'value' => 1,
            'description' => 'Alianza INVEMAR y CORPAMAG: En el marco del Convenio No. 199 de 2022 celebrado entre la Corporación Autónoma Regional del Magdalena - CORPAMAG y el Instituto de Investigaciones Marinas y Costeras “José Benito Vives de Andrés” - INVEMAR, cuyo objeto correspondía a Aunar esfuerzos técnicos y financieros entre las dos entidades para evaluar las condiciones ambientales de la zona costera del departamento del Magdalena como insumo técnico-científico para la gestión y protección de los ecosistemas y ambientes marinos en jurisdicción de CORPAMAG. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '2022-CD199',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia27 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10228,
            'year' =>3,
            'value' => 0,
            'description' => 'La Corporación en cumplimiento de esta actividad, durante la presente vigencia se encuentra estructurando la fase de documentos previos para la implementación de acciones de la Política para la gestión sostenible del suelo.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia28 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10229,
            'year' =>3,
            'value' => 0,
            'description' => 'Durante el primer semestre del 2022 se desarrollaron los estudios previos con el objeto de IMPLEMENTAR ACCIONES PARA LA IDENTIFICACIÓN DE SUELOS DEGRADOS EN EL DEPARTAMENTO DEL MAGDALENA EN EL MARCO DE LA POLITICA PARA LA GESTIÓN SOSTENIBLE DEL SUELO, que comprenden las siguientes actividades relacionadas a la recuperación y/o rehabilitación de suelos degradados en áreas priorizadas del departamento del Magdalena:',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia29 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10230,
            'year' =>3,
            'value' => 1,
            'description' => 'Durante la vigencia de 2022, se destacan las siguientes acciones emprendidas en el marco de este proyecto: 
        • Toma de muestras en las estaciones de monitoreo, análisis de laboratorio y reporte de resultados de calidad del aire en el área de cobertura del Sistema de Vigilancia de la Calidad del Aire - SVCA, de acuerdo con las directrices, métodos y procedimientos establecidos en el Protocolo para el Monitoreo y Seguimiento de la Calidad del Aire adoptado por el MADS mediante la Resolución No. 650 de 2010.
        
        • La información generada se carga mensualmente a la página web de la Corporación: Sede electrónica de CORPAMAG , en la página del Subsistema Nacional de Información sobre Calidad del Aire – SISAIRE Portal SISAIRE del Ministerio de Ambiente y Desarrollo Sostenible y en el portal de datos abiertos del estado colombiano Portal Datos abiertos. 
        
        • Se están llevando a cabo las actividades del proceso de la acreditación del Laboratorio Ambiental ante el IDEAM bajo la nueva norma internacional NTC-ISO/IEC 17025:2017.
        
        • Se está desarrollando la Mesa Regional de Calidad del Aire liderada por el Ministerio de Ambiente y Desarrollo Sostenible, en la cual son signatarios las autoridades ambientales, de salud y de tránsito, del orden nacional, departamental y distrital.
        
        • Se está participando activamente en el Comité Territorial de Salud Ambiental – COTSA, donde Corpamag posee la Secretaría Técnica.
        
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '2022-SASI002
        2022-SASI003
        2022-CD066
        2022-CD069
        2022-CD070
        2022-CD107
        2022-CD103
        2022-CD123
        2022-CD100
        2022-CD101
        2022-CD102
        2022-CD105
        2022-CD108
        2022-CD136
        2022-CD109
        2022-CD183
        2022-CD272
        ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia30 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10231,
            'year' =>3,
            'value' => 0,
            'description' => 'Se radicó en el Ministerio de Ambiente y Desarrollo Sostenible un proyecto de inversión para la automatización del 50% del Sistema de Vigilancia de la Calidad del Aire de Corpamag con autonomía eléctrica (energía solar), para ser financiado por el Fondo Nacional Ambiental – FONAM. El proyecto fue viabilizado técnica y financieramente, se está a la espera de recibir la resolución de asignación de recursos por parte del Ministerio de Hacienda.',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de viaticos',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia31 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10232,
            'year' =>3,
            'value' => 7,
            'description' => 'Se efectuaron 7 operativos, durante el primer semestre de 2022, de control y seguimiento a niveles de ruido en el departamento del magdalena.',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia32 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10233,
            'year' =>3,
            'value' => 1,
            'description' => 'Cumplimiento del indicador a corte 30 de junio de 2022',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia33 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10234,
            'year' =>3,
            'value' => 59.89,
            'description' => 'En cumplimiento de esta actividad, durante la presente vigencia se reporta un avance del 100% de la meta programada, logrando 59.89 ha, a tráves del contracto SAMC 007 de 2020.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'SAMC 007 -2020',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia34 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10235,
            'year' =>3,
            'value' => 26306,
            'description' => 'En total en el 2022 se entregaron 26.306 árboles entre maderables y frutales en el departamento del Magdalena.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '2022-MC004
        2022-SAMC002',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia35 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10236,
            'year' =>3,
            'value' => 1,
            'description' => 'En el presente año, en el Centro de Atención y Valoración de Fauna Silvestre- CAVFS de CORPAMAG, se presentaron en el periodo que corresponde del día 01 de enero al 30 de junio, 350 casos de atención de fauna silvestre y sus productos, de estos casos, 23 pertenecen a decomisos realizados con el apoyo de la Policía Nacional, 75 casos de rescate y los demás casos corresponden a entregas voluntarias realizadas por la comunidad.
        El Centro de Atención, Valoración y Rehabilitación de Fauna Marina – CAVR-Mar operado por el Acuario y Museo del Mar del Rodadero bajo la administración de CORPMAG de acuerdo a los términos establecidos en la Resolución 2064 de 2010 emitida por el Ministerio de Ambiente y Desarrollo Sostenible,  durante el primer semestre de 2022 se atendió un total de un total de 357 animales de fauna marina, a los cuales se les brindó la respectiva valoración y rehabilitación, de los cuales 175 fueron liberados y 182 aún se encuentran bajo cuidado y atención en mantenimiento, se realizaron las actividades de rescate, atención, valoración y rehabilitación a 5 especies marinas, todas ellas amenazadas, logrando generar bienestar para las especies atendidas.',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia36 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10237,
            'year' =>3,
            'value' => 2,
            'description' => 'En ejecución contratos CAVF y CAVR-Mar ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '2022-CD170
        2022-MC004
        2022-CD296
        2022-SAMC002
        ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia37 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10239,
            'year' =>3,
            'value' => 1,
            'description' => 'Cumplimiento del indicador a corte 30 de junio de 2022',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia38 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10240,
            'year' =>3,
            'value' => 1,
            'description' => 'Cumplimiento del indicador a corte 30 de junio de 2022',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia39 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10241,
            'year' =>3,
            'value' => 2,
            'description' => 'Ejecución de obras de  Recuperación, conservación y mantenimiento de los caños de la Ciénaga Grande de Santa Marta',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '2014-93
        2018-310
        2018-320
        2014-97
        2018-320
        ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia40 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10242,
            'year' =>3,
            'value' => 1,
            'description' => 'http://www.invemar.org.co/inf-cgsm',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '2014-40
        2018-317
        ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia41 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10324,
            'year' =>3,
            'value' => 1,
            'description' => 'En el marco de la actividad, se llevaron a cabo las siguientes acciones: Implementación de la Herramienta de efectividad de manejo de área protegida, Plan de Mejoramiento del área protegida – Distrito Regional de Manejo Integrado Complejo Cenagoso Zárate, Malibú, Veladero y apoyo y asesoría a municipios.
        ',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia42 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10325,
            'year' =>3,
            'value' => 1,
            'description' => 'El plan de acción del Distrito Regional de Manejo Integrado Complejo Cenagoso de Zárate, Malibú, Veladero, contempla la línea estratégica “Sostenibilidad de los recursos naturales y ecosistémicos”, programa “Restauración Ecológica de la Cuenca Hidrográfica”, donde se plantea el proyecto: Recuperación de áreas y ecosistemas afectados en el Complejo Cenagoso Zárate- Malibú Veladero, en el marco de este proyecto se trabajó en equipo y se contó con la gestión de las alcaldías de los municipios de Plato y Santa Bárbara de Pinto, el proyecto denominado: “RECUPERACIÓN DE LOS SERVICIOS ECOSISTÉMICOS DEL DRMI COMPLEJO CENAGOSO ZÁRATE, MALIBU, VELADERO, EN LOS CORREGIMIENTOS DE CERRO GRANDE, AGUAS VIVAS, CUNDINAMARCA Y LAS PALMAS, DE LOS MUNICIPIOS DE PLATO Y SANTA BARBARA DE PINTO – MAGDALENA” el cual, fue presentado a la convocatoria 2022 del Fondo Nacional Ambiental – FONAM',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia43 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10327,
            'year' =>3,
            'value' => 0,
            'description' => 'Con el instituto de investigación Alexander von Humboldt, se realizaron dos reuniones para concertar sobre la posibilidad de trabajar en la elaboración del portafolio de áreas prioritarias para la conservación y compensación. Se conversó sobre el alcance, la metodología y la formalización mediante un convenio. ',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia44 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10247,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia45 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10248,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia46 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10249,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia47 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10250,
            'year' =>3,
            'value' => 0.3,
            'description' => 'Se encuentra en ejecución el Contrato 293 del 28 de enero de 2022 el cual tiene por objeto: “PRESTACIÓN DE SERVICIOS PROFESIONALES PARA REALIZAR LA EJECUCIÓN DE ACCIONES PARA LA IMPLEMENTACIÓN DE LOS PLANES OPERATIVOS DE LOS POMCAS SZH 1501, NSS 2906-01 Y SZH 2907 FORMULADOS Y ADOPTADOS POR CORPAMAG RELACIONADAS CON EL PROGRAMA DE “FORTALECIMIENTO DE LA CAPACIDAD INSTITUCIONAL PARA LA GESTIÓN DE LA INFORMACIÓN AMBIENTAL”, que cuenta con un plazo de ejecución de 10 meses.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '2022-CD293',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia48 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10252,
            'year' =>3,
            'value' => 0,
            'description' => 'La Corporación en cumplimiento de esta actividad, durante la presente vigencia se encuentra estructurando la fase de documentos previos para la implementación de las acciones propuestas.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '2022-CD024
        2022-CD033
        2022-CD043
        2022-CD044
        2022-CD081
        2022-CD096
        ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia49 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10253,
            'year' =>3,
            'value' => 1,
            'description' => 'En cumplimiento de esta actividad, se ejecuta el contrato N°273 de 2022 con el objeto de “Prestación de servicios profesionales de un laboratorio de pruebas y ensayos acreditados por el IDEAM, para realizar monitoreo de control y seguimiento a los objetivos de calidad de aguas marinas en la jurisdicción de Corpamag”.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '2022-CD273',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia50 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10254,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia51 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10255,
            'year' =>3,
            'value' => 2,
            'description' => 'En cumplimiento de esta actividad, se ejecuta el contrato 235 de 2022, con el objeto de “Reglamentar los usos del agua y de los vertimientos en los ríos Frio y Sevilla en la jurisdicción de Corpamag”',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia52 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10256,
            'year' =>3,
            'value' => 0.5,
            'description' => 'En cumplimiento de esta actividad, se ejecuta el contrato 235 de 2022, con el objeto de “Reglamentar los usos del agua y de los vertimientos en los ríos Frio y Sevilla en la jurisdicción de Corpamag”',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia53 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10257,
            'year' =>3,
            'value' => 2,
            'description' => 'En cumplimiento de esta actividad, se ejecuta el contrato 235 de 2022, con el objeto de “Reglamentar los usos del agua y de los vertimientos en los ríos Frio y Sevilla en la jurisdicción de Corpamag”',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '2022-CD235',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia54 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10258,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia55 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10260,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia56 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10263,
            'year' =>3,
            'value' => 1,
            'description' => 'Se lleva a cabo a cabo la prestación de servicios de infraestructura en la nube necesaria para el funcionamiento de GEOAMBENTAL y soporte, mantenimiento y actualización a los módulos implementados en el sistema de información GEOAMBIENTAL.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '2021-CD337',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia57 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10264,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia58 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10265,
            'year' =>3,
            'value' => 50,
            'description' => 'Cumplimiento del indicador a corte 30 de junio de 2022',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia59 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10266,
            'year' =>3,
            'value' => 30,
            'description' => 'Se ejecuta el proceso de actualización y depuración de la información ambiental en el SIAC',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia60 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10268,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia61 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10269,
            'year' =>3,
            'value' => 4,
            'description' => 'Dentro del programa Ordenamiento Ambiental Territorial, se dio continuidad con la socialización de las Determinantes Ambientales, para su incorporación en los instrumentos de ordenación y planificación municipal, constituyéndose en una transferencia de conocimiento a tener en cuenta al momento de revisión y ajuste de los planes de ordenamiento territorial y planes de desarrollo municipal. 
        Se realizó la socialización a los municipios de Sabanas de San Ángel, Plato, Tenerife y Nueva Granada. De estos, el municipio de Plato informó que se encuentra en su proceso de revisión y ajuste de su PBOT.
        ',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia62 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10273,
            'year' =>3,
            'value' => 20,
            'description' => 'La Corporación en la presente vigencia, continua con la ejecución del contrato N° 416 de 2021, con el objeto de “prestación de servicios profesionales para la formulación del plan de ordenación forestal del área comprendida por los municipios de El Retén, Remolino, Salamina, El Piñón, Cerro de San Antonio, Concordia, Pueblo viejo, Sitio nuevo y Pivijay en el departamento del Magdalena”. 
        La Corporación durante la vigencia, suscribió el contrato N° 234 de 2022, con el objeto de “Prestación de servicios profesionales para la formulación del plan de ordenación forestal del área comprendida por los municipios de Pedraza Algarrobo, Ariguaní, Chibolo, Plato, Sabanas De San Ángel, Tenerife, Zapayán y Fundación”, ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '2022-CD234',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia63 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10274,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia64 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10275,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia65 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10276,
            'year' =>3,
            'value' => 2,
            'description' => 'Socialización de la Resolución N.º 5881 de 2021 donde se adoptan medidas y acciones para reducir el riesgo por desabastecimiento de agua e incendios de cobertura vegetal que pueden ser ocasionados por la alta temporada seca y desarrollo de operativos de control, con el fin de identificar  puntos de captación de agua sobre la cuenca del río Gaira y la activación de los planes de contingencia por parte de las entidades prestadores de servicio de acueducto y demás usuarios para contrarrestar la temporada seca 2022.',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia66 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10277,
            'year' =>3,
            'value' => 4,
            'description' => 'En la presente vigencia, se continúa apoyando a las entidades territoriales en el conocimiento y la reducción del riesgo asociado al cambio climático y su incorporación en la planificación y ordenamiento territorial.
        La manera como se viene trabajando en ello, es a través, de unos documentos, organizados por municipios pertenecientes a las Sedes administrativas que tiene Corpamag en el departamento del Magdalena, donde se hace un acercamiento a la identificación conjunta de los principales riesgos asociados al Cambio Climático en el territorio, basándose en los en instrumentos de planificación tales como Planes Municipales de Gestión del Riesgo de Desastres, Planes Municipales de Desarrollo, Plan Departamental de Gestión del Riesgo, Plan Integral de Gestión del Cambio Climático del Magdalena, y conocimiento del riesgo generado por la Corporación. 
        Los documentos propuestos corresponden a los municipios de la Sede Zona Costera: Santa Marta, Ciénaga, Pueblo Viejo y Sitio Nuevo.
        ',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia67 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10278,
            'year' =>3,
            'value' => 1,
            'description' => 'Ejecución del Proyecto “RECUPERACIÓN DE LAS CONDICIONES HIDRÁULICAS DEL CAÑO LOS MICOS EN EL MUNICIPIO DE PUEBLOVIEJO, DEPARTAMENTO DEL MAGDALENA”. Teniendo en cuenta el resultado de los estudios hidráulicos e hidrológicos, se establece la necesidad de realizar obras de dragado para la recuperación de la capacidad hidráulica del caño Los Micos, como estrategia de mitigación del riesgo en la vereda La Conquista del municipio de Pueblo viejo en el departamento del Magdalena. El proyecto tendrá influencia directa sobre 4.800 m de longitud del caño Los Micos los cuales tienen lugar en el municipio de Pueblo viejo. Este proyecto tiene como objetivo principal disminuir el riesgo de inundación en la zona agrícola del municipio de Pueblo Viejo del departamento del Magdalena.
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '2022-LP002',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia68 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10279,
            'year' =>3,
            'value' => 6,
            'description' => 'La Corporación Autónoma Regional de Magdalena viene formulando proyectos que apuntan a la prevención de riesgo, buscando generar conocimiento alrededor de esta circunstancia que afecta a miles de poblaciones en nuestro departamento y así articular acciones con las entidades del gobierno nacional que pueden financiar iniciativas como estas.
        1. Proyecto: “OBRAS DE SOSTENIBILIDAD AMBIENTAL Y PREVENCIÒN DE RIESGO PARA LA CIUDAD DE SANTA MARTA”
        2. Proyecto: CONSTRUCCIÓN DE OBRAS PARA EL CONTROL DE EROSIÓN EN LA DESEMBOCADURA DEL RÍO BURITACA, DISTRITO DE SANTA MARTA
        3. Proyecto: CONSTRUCCIÓN DE LA PRIMERA ETAPA DEL PARQUE AMBIENTAL Y OBRAS DE RECUPERACIÓN HIDRÁULICA Y AMBIENTAL EN EL RÍO GAIRA EN LA CIUDAD DE SANTA MARTA
        4. Proyecto: CONSTRUCCIÓN DE OBRAS PARA EL CONTROL DE INUNDACIONES Y MANEJO DE AGUAS LLUVIAS EN LA AVENIDA TAMACÁ Y LA QUEBRADA BURECHE EN EL SECTOR DEL RODADERO, DISTRITO DE SANTA MARTA
        5. Proyecto: IMPLEMENTACIÓN DE ESTRATÉGIAS PARA EL MANEJO ADECUADO DE LOS RESIDUOS SÓLIDOS DOMÉSTICOS GENERADOS POR LA ETNIA ETTE ENNAKA EN EL ASENTAMIENTO NARA KAJMANTA EN EL DISTRITO DE SANTA MARTA DE LA SUBREGIÓN SNSMZBP
        6. Proyecto: CONSTRUCCIÓN DE UNIDADES SANITARIAS PARA VIVIENDAS RURALES DE LA COMUNIDAD INDÍGENA DE NARA KAJMANTA EN EL DISTRITO DE SANTA MARTA
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '2022-CD151
        2022-CD126
        2022-CD140
        2022-CD124
        2022-CD137
        2022-CD147
        2022-CD148
        2022-CD149
        2022-CD150
        2022-CD152
        2022-CD146
        2022-CD138
        2022-CD139
        2022-CD184
        2022-CD214
        2022-CD165
        2022-CD163
        2022-CD216
        2022-CD207
        2022-CD237
        2022-CD255
        2022-CD229
        2022-CD276
        2022-CD279
        2022-CD215
        2022-CD268
        ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia69 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10280,
            'year' =>3,
            'value' => 1,
            'description' => 'Corpamag participó en el primer encuentro del Nodo Regional de Cambio Climático Caribe e Insular – NORECCI, donde se realizaron dos jornadas de trabajo. La primera, consistió en la participación del Nodo en la formulación del Plan Integral de Gestión de Cambio Climático del Sector Defensa - PIGCCSD- Perfil Sectorial, como instituciones del SINA central.
        La segunda jornada, consistió en la rendición de informe de los principales avances del Nodo Regional de Cambio Climático Caribe e Insular; situación de la región en formulación e implementación de los Planes Integrales de Gestión de Cambio Climático Territorial –PIGCCT; identificación de proyectos con acciones en adaptación y mitigación que contribuyan en el cumplimiento de la Contribución Determina Nacional - NDC a nivel nacional y avances de procesos por parte de las autoridades ambientales, academia, instituto de investigación y el DNP.
        ',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia70 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10282,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia71 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10283,
            'year' =>3,
            'value' => 0,
            'description' => 'En cumplimiento de las actividades de este proyecto, durante el primer semestre, se desarrolló la etapa de preparación de las acciones precontractuales, solicitud de cotizaciones y elaboración de estudios previos para adelantar las contrataciones respectivas.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia72 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10284,
            'year' =>3,
            'value' => 0,
            'description' => 'En cumplimiento de las actividades de este proyecto, durante el primer semestre, se desarrolló la etapa de preparación de las acciones precontractuales, solicitud de cotizaciones y elaboración de estudios previos para adelantar las contrataciones respectivas.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia73 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10285,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia74 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10286,
            'year' =>3,
            'value' => 30,
            'description' => 'La Corporación Autónoma Regional del Magdalena – CORPAMAG a través del convenio interadministrativo No. 284 de 2019 suscrito con el Ministerio de Ambiente y Desarrollo Sostenible y la Agencia de Cooperación Financiera del Gobierno de Alemania, Entwicklungsbank - KFW, en el transcurso del presente año, ha adelantado proyectos para la implementación de Medidas de Adaptación Basada en Ecosistemas para la Protección Contra la Erosión Costera en un Clima Cambiante - MAbE, en el departamento del Magdalena. Dichas medidas, constan de acciones que se localizan sobre la línea de costa de sectores específicos del departamento del Magdalena o en su defecto sobre áreas marinas paralelas a la línea de costa de la misma.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'convenio interadministrativo No. 284 de 2019 suscrito con el Ministerio de Ambiente y Desarrollo Sostenible y la Agencia de Cooperación Financiera del Gobierno de Alemania, Entwicklungsbank - KFW',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia75 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10287,
            'year' =>3,
            'value' => 0,
            'description' => 'Corpamag, en el marco de la ejecución del proyecto “Adaptación basada en los ecosistemas para la protección contra la erosión costera en un clima cambiante” – KFW, se ha formulado la Medida de Adaptación Basada en Ecosistemas - MAbE para la UAC VNSNSM titulada “Pautas Ambientales para el Manejo de los Pastos Marinos en la Unidad Ambiental Costera – UAC Vertiente Norte de la Sierra Nevada de Santa Marta (UAC VNSNSM) y la Elaboración Acuerdos de Manejo Para la Gestión del Ecosistema de Pastos Marinos en los Correspondientes Municipios, Considerando Los Efectos Del Cambio Climático.”.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia76 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10289,
            'year' =>3,
            'value' => 50,
            'description' => 'Se avanza en la  ejecución del Plan estratégico de Tecnologías de la Información y las Comunicaciones de corpamag',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia77 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10290,
            'year' =>3,
            'value' => 50,
            'description' => 'Durante la vigencia 2022, se desarrollaron las siguientes acciones en el marco de esta actividad.
        • Administración del servidor y sitio Web de Corpamag y gestión de Accesibilidad Monitoreo y seguimiento al esquema de publicación
        • Continuando las acciones de administración del sitio web se realizó monitoreo al avance de cumplimiento de publicación de la información mínima a publicar y el esquema de publicación. 
        
        • Se brindó apoyo a los usuarios tanto técnica como operativamente, soportando o ejecutando el cargue de archivos, así como la actualización o creación de artículos.
        
        • Se mantuvo la operatividad de los servicios operando en el Servidor Web y se crearon los nuevos buzones de correo electrónico de acuerdo a los requerimientos de los usuarios. 
        
        • Dando continuidad y soporte a la actualización de la sede electrónica, tanto en presentación como en cumplimiento de la Resolución 1519 de 2020 del MinTIC, se siguió la revisión técnica de los módulos del manejador de contenido Joomla llevando inicialmente la plantilla a cero (0) errores, no obstante debido a la gestión realizada en el mismo y los riesgos asociados con las vulnerabilidades y amenazas estos errores se han incrementado a la fecha, lo cual se sigue revisando de manera constante.
        
        ',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia78 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10291,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia79 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10292,
            'year' =>3,
            'value' => 50,
            'description' => '• Implementación de soluciones para la realización rendición de cuentas y audiencias públicas virtuales
          Se habilitaron diferentes medios electrónicos para la comunicación con los usuarios y la ciudadanía, así como para la participación pre, durante y pos eventos, como chat, foro, streaming, telefonía móvil, WhatsApp y mensajería móvil.
        
        • Publicación y actualización de conjuntos de datos en el portal de datos abiertos del estado
          Se ha venido actualizando de manera periódica el conjunto de datos de la red de monitoreo de Calidad Aire.
        
        ',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia80 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10293,
            'year' =>3,
            'value' => 50,
            'description' => 'Se realizó revisión de los documentos del Sistema de Gestión, por solicitudes de los siguientes procesos: Planificación Estratégica Corporativa y Ambiental, Gestión ambiental, Gestión Documental y Análisis Ambiental; algunos de estos documentos se encuentran en fase de revisión para luego su aprobación y adopción por la entidad. 
        
        Así mismo, se realizó actualización de procedimientos y formatos del proceso de Planificación Estratégica Corporativa y Ambiental, Gestión ambiental, y Gestión Documental.
        ',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia81 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10295,
            'year' =>3,
            'value' => 40,
            'description' => 'En el marco de esta actividad, se están llevando a cabo las actividades del proceso de la acreditación del Laboratorio Ambiental ante el IDEAM bajo la nueva norma internacional NTC-ISO/IEC 17025:2017.
        Desde la Oficina de Planeación se está apoyando en la en la estructuración y revisión de las resoluciones requeridas para el proceso de acreditación, de acuerdo a los lineamientos dados por la Oficina de Laboratorio Ambiental. 
        Adicionalmente, en apoyo al Laboratorio Ambiental se viene revisando los nuevos documentos (Procedimientos, instructivos, formatos, entre otros) que serán adoptados y cargados en el Sistema de Gestión',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia82 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10296,
            'year' =>3,
            'value' => 50,
            'description' => 'En el mes de enero del presente año, desde la Oficina de Planeación se realizó la formulación y presentación del Plan Anticorrupción y Atención al Ciudadano – PAAC, para la vigencia 2022. El plan se encuentra publicado en la página web de la Corporación. 
        Se actualizó el PAAC 2022 en su versión 2, debido que se recibió solicitud de modificación para el Plan Anticorrupción en relación al componente de Gestión del Riesgo de Corrupción.
        Plan Anticorrupción y Atención al Ciudadano – PAAC
        Se realizó el 1er monitoreo al PAAC vigente a corte 30 de abril 2022, los resultados recopilados fueron reportados a la Oficina de Control Interno, los cuales requirieron la información para la generación del informe de seguimiento del primer cuatrimestre del año.
        ',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia83 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10297,
            'year' =>3,
            'value' => 36,
            'description' => 'Se reporta el porcentaje obtenido de la medición en la vigencia 2021,',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia84 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10298,
            'year' =>3,
            'value' => 50,
            'description' => 'Se avanza en la  ejecución de las acciones para el Fortalecimiento de la estructura física, tecnológica y modernización institucional',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '2021-SASI004
        2021-SASI006
        2022-MC009
        2021-CD270
        ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia85 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10299,
            'year' =>3,
            'value' => 50,
            'description' => 'Se ejecuta la implementación del Plan de Comunicaciones y el Plan de Medios de la Corporación Autónoma Regional del Magdalena para la vigencia 2022, el cual incluye las estrategias en materia de comunicación externa, interna e imagen corporativa.  ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '2022-CD144
        2022-CD174
        2022-CD164
        2022-CD172
        2022-CD173
        2022-CD171
        2022-CD098
        2022-CD133
        2022-CD175
        2022-CD176
        2022-CD177
        2022-CD230
        2022-CD160
        2022-CD178
        2022-CD231
        2022-CD179
        2022-CD159
        2022-CD227
        2022-CD261
        2022-CD264
        2022-CD217
        2022-CD233
        2022-CD232
        2022-CD191
        ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia86 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10300,
            'year' =>3,
            'value' => 6,
            'description' => 'En cumplimiento de actividad, se realizaron las siguientes acciones:
        • Veinte (20) programas de radio Territorio Verde, producidos por CORPAMAG y emitido por las emisoras Radio Galeón, Radio Magdalena y Radio Rodadero. Los programas además son colgados en la página web de la Corporación.
        • Elaboración y divulgación de Diez (10) boletines externos CORPAMAG AL DIA enviado a través de la plataforma Mail Relay a líderes de opinión, diputados, alcaldes municipales, Gobernador, Representantes a la Cámara, Senadores, además de empresas privadas y fundaciones. 
        • Diseño de piezas de comunicación para redes sociales en el marco de las fechas ambientales
        • Videos para Reels de Instagram y la red Social de Instagram sobre los temas: Centro de Atención de Fauna Marina, La Ciénaga Grandes de Santa Marta, Negocios Verdes, así como entrevistas a comunidad y voceros institucionales en el marco de los proyectos.
        • Video de la Gestión Institucional Vigencia 2021, el cual se encuentra en la plataforma de YOUTUBE de CORPAMAG
        • Elaboración e impresión de material de promoción institucional con mensajes educativos y de biodiversidad como afiches, planeadores, entre otros.
        ',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia87 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10301,
            'year' =>3,
            'value' => 5,
            'description' => '• Campaña TODOS SOMOS MANZANARES
        Iniciativa de la Subdirección de Educación Ambiental, quienes adelantan procesos comunitarios para el cuidado del río en Santa Marta. 
        • Campaña ROMPE LA CADENA DE TORTURA
        Con esta campaña se busca  sensibilizar a todos los actores involucrados respecto a la afectación que sufre esta especie Iguana Iguana (IGUANA), generando no solo una gran conciencia ambiental que mitigue el sufrimiento ocasionado a la misma, sino que da a conocer el marco sancionatorio y de multas establecidas por las malas prácticas que tienen con dicha especie, como lo son la Ley 599 de 2000, Ley 1333 de 2009 y Ley 1774 de 2016 las cuales hacen parte del Código Nacional de Policía. 
        • Campaña MAGDALENA SIN QUEMAS
        La Campaña MAGDALENA SIN QUEMAS hace un llamado a la acción a todos los habitantes del territorio para la toma de acciones propias del cuidado de nuestro ecosistema biodiverso, hace especial eco en abandonar las malas prácticas e invita a la población que es su público objetivo a DENUNCIAR utilizando los CANALES de atención establecidos por la corporación y los entes nacionales que regulan y protegen el medio ambiente, un ejemplo de ello es la Línea de Atención 123 de la Policía Nacional o el correo de la Corporación contactenos@corpamag.gov.co
        • Campaña NI UNA GOTA DE ACEITE AL RIO NI AL MAR 
        Corpamag desarrolla la idea de Educar, Sensibilizar y Proteger nuestros recursos hídricos al hacer un correcto uso de nuestros Aceites de Cocina Usados. 
        • Campaña #ReconciliateConLaCreaciónDeDios
        Corpamag desarrolla esta campaña dirigida a la protección de la fauna silvestre durante la Semana Santa, teniendo en cuenta el alto de consumo de carne.
        ',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia88 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10302,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia89 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10303,
            'year' =>3,
            'value' => 50,
            'description' => 'Se reporta el porcentaje de ejecución del Plan estratégico de Talento Humano',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia90 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10304,
            'year' =>3,
            'value' => 40,
            'description' => 'Se reporta el porcentaje de ejecución del Plan estratégico de Talento Humano',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia91 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10305,
            'year' =>3,
            'value' => 50,
            'description' => 'Se reporta el porcentaje de ejecución del Plan anual de vacantes',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia92 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10306,
            'year' =>3,
            'value' => 40,
            'description' => 'La implementación del Plan Institucional de Capacitación, permite la adquisición de conocimientos y habilidades que garantizan que los servidores públicos sean cada vez más competentes, innovadores y comprometidos.
        En la vigencia 2021, la Coordinación del Grupo de la Gestión del Talento Humano realizó el procedimiento pertinente para proveer en encargo las vacancias definitivas de:
          Profesional Especializado Código 2028 Grado 13 ubicada en el municipio de Santa Ana. 
          Profesional Especializado Código 2028 Grado 13 ubicada en el municipio de Pivijay.
          Profesional Universitario Código 2044 Grado 10 ubicada en el municipio de Pivijay
        Con esta actividad, se busca garantizar el normal funcionamiento de las dependencias de la Entidad, al proveer los cargos que se encuentran vacantes de manera transitoria mediante encargos o nombramientos provisionales, mientras se lleva a cabo el respectivo proceso de selección a través de un concurso de méritos.
        ',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia93 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10307,
            'year' =>3,
            'value' => 50,
            'description' => 'Se reporta el porcentaje de ejecución del Plan de Bienestar Social Laboral',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia94 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10308,
            'year' =>3,
            'value' => 43,
            'description' => 'Se destacan las siguientes actividades en la vigencia 2022
        • En el mes de enero, se diseñó del plan de trabajo anual para el 2022 en compañía de la Coordinadora de GTH y entregado para visto bueno por parte de Dirección General.
        • Evaluación Inicial del SG-SST respecto a los requisitos legales de Estándares Mínimos según Resolución 0312 de 2019, reportados ante la plataforma de la ARL en diciembre 2021 y ante el Ministerio de Trabajo en enero de 2022, con el fin de determinar prioridades de SST para la planeación de Plan de Trabajo Anual Año 2022.  De esta actividad, se establecieron las necesidades para complementar el plan de trabajo anual.
        • Actualización de la identificación de los requisitos legales aplicables y de otra índole en SST aplicables a la organización.
        • Reunión con Gestora de la ARL Colmena para programación de las actividades en el plan de trabajo anual del SG-SST.  Se definen los recursos que la ARL entrega para la Corporación en capacitaciones y profesionales que asesoran los sistemas de vigilancia.
        • Actualización de la matriz de EPP de acuerdo a las actividades realizadas por los trabajadores.
        ',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia95 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10309,
            'year' =>3,
            'value' => 10,
            'description' => 'En el marco del Modelo Integrado de Planeación y Gestión (MIPG) establecido mediante decreto 1499 de 2017, se establece como parte de su accionar operativo la dimensión de: gestión del conocimiento y la innovación, como parte integral de las políticas de gestión y desempeño institucional contemplada como una dimensión transversal a la operación de las entidades públicas a que les aplique el artículo 2.2.22.3.4 del mencionado decreto.
        En la vigencia 2022, el Grupo de la Gestión del Talento Humano estableció el Plan Anual de la Gestión del Conocimiento donde se estableció un diagnóstico para identificar las falencias, la situación o factores que la causan y las alternativas de solución. Adicionalmente se elabora el Plan de Acción en donde se concretan las actividades a realizar, con su respectivo periodo de tiempo. 
        Se ha iniciado con la aplicación de un instrumento llamado “retención del conocimiento tácito” en funcionarios y contratistas con el objetivo, en donde se identificar las causas de  la fuga de conocimiento que se presentan en los cargos cuando se da una separación de éste, ya sea de manera temporal o definitiva, recopilar dicha información, almacenar y codificar el conocimiento extraído para la posterior creación de un sistema experto que se pueda tener acceso a ese conocimiento en el momento que sea requerido, con el objetivo de agilizar y darle continuidad a los procesos.
        ',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia96 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10310,
            'year' =>3,
            'value' => 50,
            'description' => 'Atendiendo lo dispuesto en el Plan Anticorrupción y Atención al Ciudadano, la Coordinación de la Gestión del Talento Humano ha construido un cronograma para la interiorización de los valores del Código de Integridad en los servidores públicos y contratistas de la Entidad; con el objetivo de realizar acciones que garantice la aplicación de la Política de Integridad Pública en CORPAMAG.
        En relación con lo anterior y, teniendo en cuenta que los servidores públicos son el corazón del MIPG, se adopta el Código de Integridad diseñado por el Departamento Administrativo de la Función Pública -DAFP, se establece un plan de trabajo para la vigencia 2022, del cual se han realizado las siguientes actividades:
        Huellas: Actividad en la que se invita a los funcionarios y contratistas a caminar sobre las huellas ubicadas en cada una de las oficinas, las cuales contienen los valores, tomar un valor ubicado en la caja y expresar cómo aplican el valor en sus actividades diarias.
        Concurso Código de Integridad: Se diseñó un cuestionario lúdico en la aplicación Quiziz, el cual tenía por objetivo medir el conocimiento que tienen los funcionarios y contratistas sobre los valores y cómo se aplican en situaciones cotidianas en los puestos de trabajo.
        ',
            'type' => 'functioning',
            'how_is_done' => 'Gastos de Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia97 = DB::getPdo()->lastInsertId();
        
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
