<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCarder2020 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_advance')->insert([
            'activity_id' => 12938,
            'year' =>1,
            'value' => 0,
            'description' => 'No aplica',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia1 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12939,
            'year' =>1,
            'value' => 4,
            'description' => 'Las instancias acompañadas y las acciones realizadas en el 2020, son:
        Bosque Modelo Risaralda - BMR: proceso para formalizar a través de convenio acciones del Bosque Modelo Risaralda, en el que se incluyó un evento virtual de la Red Latinoamerica de Bosque Modelo, que ya se cumplió, el 26 de noviembre se firmó el acta de inicio del convenio con UTP, en el que se incluyó un alcance para realizar actvidades de secretaria técnica y del plan estratégico de BMR.
        Paisaje Cultural Cafetero: se realizó el acompañamiento presentación en reuniones con miembros del Comité Técnico PCC Quindío, se realizó reunión con miembros del comité técncio de Risaralda, para presentar matriz de seguimiento y reporte de acciones, con el fin de identificar que entidades deben participar de un comité ambiental en Risaralda; participación en reuniones de comité técnico de PCC Risaralda.
        RAP Eje Cafetero: Mesa de planificación Ecorregión - RAP: acompañamiento al proceso de revisión de determinantes ambientales como insumo para el plan estratégico de la RAP, se hicieron varias sesiones de trabajo donde se intercambiaron conocimientos y experiencias en torno a las determinantes ambientales que pueden ser objeto de trabajo del plan estratégico de la RAP.
        Red de Nodos -  Nodo de Biodiversidad: el 27 de marzo de 2020, se hizo acta final de las actividades del convenio con UTP en la que se incluyeron acciones del Nodo de Biodiversidad. En cuanto al Nodo y la Red de Nodos, se participó en las reuniones, se firmó carta de compromiso de CARDER en la presentación a la Convocatoria Regional de Investigación Aplicada y Desarrollo Tecnológico para Fomentar la Integración de los Actores del Ecosistema CTeI de Risaralda, en la línea Biodiversidad y servicios eco sistémicos.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia2 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12940,
            'year' =>1,
            'value' => 3,
            'description' => 'Se conformaron las 3 mesas que corresponden a cada una de las líneas del PGAR.  Se realizaron 3 reuniones de mesas del PGAR: 1 general de todas las mesas y 2 individuales para cada mesa, el plan de trabajo para 2020,estuvo centrado en realizar las reuniones de las mesas y trabajar lo relacioando con los  indicadores de producto del PGAR, en la última mesa se presentó el cronograma de reuniones y propuesta de plan operativo para 2021, el cual fue validado.  El ejercicio previo antes de conformar las mesas, estuvo centrado en acompañar los procesos de contrucción de planes de desarrollo y plan de acción de la corporación con el fin de realizar la trazabilidad del proceso de acuerdo a las 3 líneas estratégicas del PGAR.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia3 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12941,
            'year' =>1,
            'value' => 14,
            'description' => 'Se apoyó, acompañó y asesoró a los SIGAM de los 14 municipios del departamento en el proceso de fortalecimiento de la gestión ambiental municipal: Se realizaron 16 mesas ambientales con los 14 municipios de manera virtual y con las comunidades indígenas y negras de manera presencial. 5 reuniones con la participación de los SIGAM de Risaralda para abordar temas de aprestamiento de las MAM, orientación proceso de construcción de la agenda ambiental municipal, socialización de la plataforma SIAE, reporte ambiental que hacen los SIGAM y balance de las acciones ejecutadas en el 2020 en el marco del fortalecimiento de la gestión ambiental local y regional -FGALR, se entrega a los municipios matriz de armonización PGAR-PDT y formatos PAAL y del plan operativo de los comités del SIGAM. En coordinación con la gobernación se realizó una reunión virtual con cada uno de los coordinadores de los SIGAM de los municipios de Risaralda para asesorar proceso de construcción de la AAM.
        Elaborada matriz de alineación programas y metas PAC CARDER 2020-2023, con líneas estratégicas del PGAR y de los POMCAS Otún, La Vieja y Risaralda y enviada a los SIGAM de los 14 municipios
        Se avanza en la revisión del plan de FGALR.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia4 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12942,
            'year' =>1,
            'value' => 4,
            'description' => 'Se apoyaron las sesiones mensuales de los Consejos de Cuenca de los ríos Campoalegre, La Vieja, Otún y Risaralda. Para estos tres últimos se apoyó el proceso de elaboración de nuevos reglamentos y planes de trabajo considerando que los mismos fueron elegidos este año para la vigencia 2020-2023 de conformidad con el procedimiento establecido en la Resolución 0509 de 2013. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia5 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12943,
            'year' =>1,
            'value' => 4,
            'description' => 'Se desarrollaron espacios de participación con: 1.  Red de Jóvenes de ambiente, 2.  Organizaciones sociales y ONGs, 3. Empresas , 4. Espacios de participación y articulación interinstitucional para la educación ambiental.
        1. Espacios con Red de Jóvenes de Ambiente:
        Se vienen fortaleciendo los procesos de participación con la Red Jóvenes de Ambiente Nodo Risaralda y los demás Nodos en los 14 Municipios del Departamento de Risaralda. 
        Se han realizado un total de 30 actividades como capacitaciones, actividades de formalización de Los Nodos Municipales, Inducción del Programa Red Jóvenes de Ambiente Nodo Risaralda, con un Total Aproximado de 200 Personas Capacitadas.
        Se realizó  Diagnóstico participativo del estado actual de los nodos de la Red Jóvenes de Ambiente y otras iniciativas juveniles, consolidación de la línea de tiempo y el mapa de actores asociados al voluntariado ambiental y formulación de la propuesta de lineamientos estratégicos para fortalecer los nodos juveniles municipales, en la vigencia del Plan de Acción de la CARDER 2020-2023.
        Se realizó Acompañamiento en el desarrollo de la Asamblea General Departamental Jóvenes de Ambiente Nodo Risaralda. Se participa en el conversatorio con jóvenes de la red de nodo Risaralda a través de la plataforma startSOLE Colombia Virtual. Se realizó acompañamiento a los jóvenes de la red Nodo Pereira a la jornada ambiental en el sector.
        2. Espacios con Organizaciones sociales y ONGs y 3. empresas
        Se realizó Articulación en el desarrollo del Diplomado viviendo Mi cuenca en el marco del Convenio Vivamos La Cuenca entre la empresa Aguas y aguas y la Universidad Católica de Pereira. Este ejercicio de formación se enfocó en diferentes públicos como las instituciones educativas y las organizaciones sociales y de la sociedad civil desde las manifestaciones artísticas y tecnológicas para el abordaje de los contextos de las cuencas, con especial énfasis en la cuenca del río Otún. Específicamente, desde la CARDER a través del equipo de Educación Ambiental se viene acompañando y facilitando el desarrollo del Diplomado para las Organizaciones Sociales que han tenido vinculación con la corporación. Dentro de las organizaciones inscritas y abordadas por la corporación para el desarrollo del Diplomado se tienen algunas como: Acuacombia E.P.S, Asbelagua, Asociación, Asociación Ecoencanto Morelia, Codescom, Ecología y planificación ambiental (Ecoplan), Fecomar, Fundación taller creativo Materile, Grupos ecológicos de Risaralda, Guardianes verdes de Chorritos, Ong Tierra Verde, Organización Ambiental Macuna, Sociedad Bolivariana Santa Rosa, Sociedad Real y  Territorios de Paz. 6 sesiones
        Se realizó el proceso de Escuela de Liderazgo: Ambiental y comunidad que consiste en una alianza con la Empresa Efigás SA ESP orientado a un proceso de formación para los líderes comunitarios del departamento de Risaralda y que tiene como objeto el fortalecimiento de capacidades de  los líderes comunitarios en temas  ambientales, Componente humano de liderazgo desde el territorio con enfoque incluyente, Educación Ambiental, Normatividad Ambiental, Gestión del riesgo territorial y el cambio climático, , Uso de los Recursos Naturales, Producción sostenible y consumo responsable, Seguridad y soberanía alimentaria, protección de los ecosistemas, Estructura ecológica principal – determinantes ambientales. Y Gestión de proyectos. Igualmente algunos temas asociados al quehacer de la empresa Efigás como la gestión del riesgos en redes de gas natural,  Uso responsable ( seguro y eficiente) en el servicio de gas natural y buenas practicas del uso del combustible de gas natural. El ciclo se realizó en 8 sesiones de capacitación.
        Se realizó el encuentro virtual sobre Responsabilidad social y empresarial desde la óptica Ambiental, en el Departamento. Un Balance a través de un intercambio de experiencias y construcción de documento de Memorias del Encuentro.
        e realizaron 53 actividades con Organizaciones no gubernamentales ONGs, Organizaciones Sociales OSCs y empresas en el marco del fortalecimiento de los espacios de participación ciudadana para la gestión ambiental.
        Se suscribió convenio Interadministrativo 456 de 2020 cuyo objeto es aunar esfuerzos entre la Corporación Autónoma Regional de Risaralda CARDER y la Corporación para el Manejo Sostenible de los Bosques - MASBOSQUES, para la implementación de estrategias y acciones enfocadas al mejoramiento de la gestión ambiental en Risaralda. En este caso, se visibilizarán las comunidades organizadas con procesos de manejos de residuos sólidos a través de la  implementación de  20 parques infantiles  construidos en madera plástica que se instalarán en sitios del departamento donde las comunidades vengan realizando ejercicios de reciclaje y manejo y aprovechamiento de los residuos sólidos. A la fecha se han identificado y caracterizado experiencias en organizaciones sociales e instituciones educativas que vienen desarrollando ejercicios de reciclaje en sus comunidades en los municipios de Apía Balboa, Belén de Umbría, Dosquebradas, Marsella, Mistrató, Pereira, Pueblo Rico y Quinchía.
        4. Espacios de articulación interinstitucional
        Articulación interinstitucional con el Área Metropolitana Centro Occidente – AMCO, además de otros actores como la Universidad Católica, La Universidad Tecnológica de Pereira, las  secretarías de Infraestructura, Competitividad, Cultura, Turismo, y Recreación y Deporte del municipio de Pereira y la comunidad con el fin de es aunar esfuerzos interinstitucionales con el fin de llevar a cabo la reactivación del Cerro Canceles a finales de diciembre, lograr la adecuación de la zona para consolidar un espacio de disfrute para la ciudadanía y turistas; fortalecer los emprendimientos locales, conservación y protección de los valores patrimoniales presentes en el Cerro Canceles, con esto se lograría la reactivación social económica de la comunidad de sector; adicionalmente de integrar este importante corredor turístico a las  actividades de la administración municipal en especial las correspondientes a la inauguración de la estación del Megacable del sector, las actividades de reactivación. Se establece un documento borrador de Acuerdo de voluntades entre las entidades referidas anteriormente para dinamizar articuladamente dicha reactivación en los próximos años. Para este proceso se han realizado 38 actividades de las cuales 35 han sido reuniones interinstitucionales y 3 salidas de campo 
        Se ha venido participando, apoyando y asesorando a los Comités Municipales de Educación Ambiental -COMEDA en términos de responder a sus convocatorias, apoyarlos y asesorarlos en la identificación de acciones para el plan operativo de los comités y en la socialización de la guía para el manejo de residuos sólidos como estrategia de fortalecimiento de los PRAE. Dentro de los COMEDAS atendidos están los municipios de Dosquebradas, La Virginia, Pereira, Santuario, y Mistrató de la siguiente manera:
        14 julio Comeda Dosquebradas. Apoyo Plan de acción.
        16 de julio. Apoyo red SIGAM Carder Risaralda.
        29 de julio Comeda la Virginia. Apoyo plan de acción y acuerdo.
        30 de julio Participación COMEDA Pereira.
        18 de agosto Comeda Dosquebradas.
        21 de agosto Comeda Santuario.
        10 y 24 de septiembre COMEDA Marsella: Plan operativo y socialización de propuesta guía residuos
        16 de septiembre: Comeda Mistrató. Plan Operativo.
        30 de septiembre. Comeda Santa Rosa de Cabal
        13 de octubre: Apoyo Actividad de siembra Comeda Santuario.
        30 de septiembre. Asesoría Comeda Santa Rosa de Cabal
        29 octubre. Participación Comeda Pereira
        30 Noviembre Participación Comeda Pereira
        17 de diciembre del COMEDA de Dosquebradas.
        Total 15 actividades 
        Se ha participado en el Comité Técnico Interinstitucional de Educación Ambiental de Risaralda. Avanzando en su plan de acción y en otras espacios de articulación de diferentes actores como el Programa Vivamos La Cuenca e Aguas y Aguas y la Universidad Católica de Pereira, Gobernación de Risaralda, Alcaldía de Pereira y Dosquebradas para la dinamización de la propuesta de un diplomado de educación ambiental con énfasis en el territorio como una apuesta de formación para los diferentes actores de la educación ambiental como instituciones educativas, organizaciones de la sociedad civil. Se ha participado en las 4 sesiones de este Comité durante año
        Se participó en el componente de las mesas ambientales realizadas de manera virtual con los diferentes municipios como proceso para la formulación del plan de acción ambiental local con el fin de reiterar el apoyo en lo relacionado a los COMEDA y municipales y el tema de educación ambiental para la formulación y ejecución de los planes operativos.
        Se apoyó el proceso de priorización de indicadores de producto propuestos en el PGAR  y que se viene adelantando la Oficina Asesora de Planeación de CARDER para las diferentes instituciones y actores para la Línea de Gobernanza y Ordenamiento Ambiental. En este caso se apoyó lo relacionado con la evaluación de los indicadores de Educación ambiental.
        Se participó del VII Encuentro Regional de Educación  Aprender a Desaprender organizado por la a Secretaria de Educación en el cual se socializaron y definieron los ejes de trabajo y las apuestas del RAP Eje cafetero en materia de educación.
        Se participó del Comité Técnico Interinstitucional de Educación Ambiental Regional CIDEAR Eje Cafetero (caldas Quindío y Risaralda con el fin de socializar los avances en materia de educación ambiental desde cada departamento.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia6 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12944,
            'year' =>1,
            'value' => 3,
            'description' => 'Durante la vigencia 2020, se concertaron y priorizaron las acciones de trabajo conjunto CARDER comunidades indígenas para el fortalecimiento de la gestión ambiental territorial, a través de la realización de reuniones de trabajo con el Consejo Regional Indígena de Risaralda CRIR y entrevistas con autoridades indígenas locales, inicialmente estas jornadas de trabajo se realizaron de manera presencial y posteriormente de manera virtual durante el aislamiento obligatorio por pandemia, igualmente se conto con un documento propuesta de relacionamiento de la comunidad indígena. En este mismo sentido se  apoyo la coordinación y se participo en la mesa ambiental indígena 2020, . De otro lado se viene participando en procesos de consulta previa relacionados con POMCAS, PORCH y licenciamientos ambientales.
        Con las comunidades negras de territorios colectivos, se realizó acercamiento a los nuevas juntas directivas de los Consejos comunitarios de Santa Cecilia y Piedras Bachcihí, se inicio proceso de información y priorización de acciones conjuntas,  a través de reuniones inicialmente de manera virtual y posteriormente de manera presencial. También se apoyo la coordinación y se participo en la mesa ambiental de comunidades negras. De otro lado se viene participando en un proceso de consulta previa para una PCH en Santa Cecilia.
        Finalmente con comunidades mestizas se realizó acercamiento a las nuevas JAL y se realizó mesa ambiental comunitaria en el corregimiento de Villa Claret.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia7 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12945,
            'year' =>1,
            'value' => 3,
            'description' => 'Se trabajaron las siguientes instancias de conflictos socioambientales relacionadas con: Gobernanza del Agua, Áreas protegidas, y fauna silvestre.
        Gobernanza del Agua
        Para el trimestre se realizó el diligenciamiento de la Matriz sobre conflictos y buenas prácticas, asociadas al recurso hídrico ante el ministerio, además de la consolidación de la base de datos de los acueductos en funcionamiento de algunos Municipios del Departamento y el acompañamiento personalizado y de manera grupal, (con protocolos sanitarios) a trámites para concesiones y presentación del programa PUEAA.  
        En general, para el componente de gobernanza del agua y manejo y resolución de conflictos asociados, se han realizado 69 actividades enfocadas al apoyo y acompañamiento a acueductos fortalecimiento de capacidades y asesoría. Allí se realizaron desarrollados espacios participativos y mesas departamentales y municipales con actores diversos actores institucionales para coordinar el acompañamiento a los acueductos rurales. Dentro de lo realizado, se tiene lo siguiente:  
        516 personas capacitadas en veredas y en el municipio
        55 acueductos veredales trabajados entre sensibilización, asesoría y jornada de trámites (en los municipios de Apia, Balboa, belén de umbría, Guática, Mistrató, Pereira, Pueblo rico, Quinchía, Santa Rosa de cabal, Santuario).
        182 personas capacitadas de forma virtual y telefónica
        18 de forma virtual  (Quinchía, Santa Rosa de Cabal, Santuario, Pereira, Pueblo Rico, La Virginia, Guática, Belén, Balboa).
        Conflictos en áreas protegidas 
        Se realizó convocatoria a las organizaciones sociales de los DCS La Marcada, El Nudo, Barbas Bremen y del sector La Florida con el fin de que puedan iniciar un proceso que permita estructurar una propuesta de cada organización para e manejo de la divulgación sensibilización e información de los públicos que visitan las áreas protegidas en dichas zonas. 
        Se continuó con el proceso de articulación interinstitucional con la administración municipal de Dosquebradas a través de la Secretaría de desarrollo económico y competitividad,   la Secretaría de Desarrollo Agropecuario y Gestión Ambiental y la Fundación Grupo Juvenil  Serranía Alto del Nudo con el fin de coordinar acciones relacionadas con el manejo de la visitancia en los DCS Alto del Nudo.
        Se suscribió contrato de prestación de servicios CPS 390 de 2020 con Dennis Augusto Rengifo Triana con el fin de Prestar los servicios profesionales a la CARDER, en el fortalecimiento de organizaciones sociales asociadas a las áreas protegidas, así como en la identificación y manejo de los conflictos socio ambientales a través de estudios de casos con las organizaciones sociales del departamento de Risaralda en el marco del programa de cultura, participación y educación ambiental. En el marco de este contrato se realizó el diseño, Acopio Diagnostico y Construcción final del documento: ¨ modelo de mediación de conflicto ambientales, Estudio de caso: Áreas Protegidas de los Municipios de Dosquebradas, Pereira y Santa Rosa. 
        Se construyó y socializó un instrumento con recomendaciones y comportamientos deseables que deben tener los visitantes a las áreas protegidas con el fin de que sirva de herramienta para los contratistas y funcionarios de la Entidad que apoyan  las jornadas de sensibilización, educación y control en dichos espacios.
        Fauna:
        Se ha venido construyendo  con el equipo de Fauna y su profesional Natalia Carrillo y el equipo de Comunicaciones y de educación ambiental una propuesta de campaña para el manejo de fauna silvestre y su afectación. En este sentido se diseñó el componente técnico de comportamientos deseables en el manejo de fauna silvestre de las visitantes a área protegidas y otras zonas que hacen parte de la estructura ecológica de los municipios. Hasta el momento se tiene un avance en una primera fase de la campaña que corresponde al  nombre, un Key Visual y las tácticas.
        Para el trimestre, en lo relacionado con la comunicación y divulgación del tema de fauna silvestre y su problemática, la corporación a través de la Oficina de comunicaciones realizó un total de 49 productos distribuidos en Publicaciones en Página Web, redes Sociales, noticias y piezas gráficas y de video con el fin de informar y sensibilizar a la ciudadanía sobre la necesidad de proteger la fauna silvestre
        A través del equipo de fauna con el Comité de Especies en conflicto se realizan labores técnicas y de sensibilización e información a las autoridades sanitarias y la ciudadanía para contrarrestar la proliferación de Caracol Africano en el departamento
        Se coordinó sesión del Comité Interinstitucional de Flora y Fauna de Risaralda - CIFFRI en la cual se abordaron los temas como la revisión de la Directiva 014 de 2020 de la Procuraduría Nacional, la Plan de Acción para la atención de las Dantas que están apareciendo enfermas o heridas en la cuenca alta del río Otún. Además se  relacionaron avances de la estrategia Procedas en relación a algunas organizaciones que han formulado proyectos asociados al tema de Fauna silvestre.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia8 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12946,
            'year' =>1,
            'value' => 36,
            'description' => 'Se realizó apoyo y seguimiento a 36 proyectos seleccionados.
        Para el trimestre se realizó reunión de seguimiento y socialización de los Proyectos seleccionados con el fin de aclarar aspectos asociados con la entrega de los insumos y conocer los avances que las comunidades han tenido.
        Igualmente, se suscribió el contrato 460 de 2020 a través del cual se realizó seguimiento a 15 proyectos ciudadanos de Educación Ambiental 
        En general, el  proceso de la estrategia del banco de PROCEDA para la actual vigencia se ha realizado de la siguiente manera:
         Se realizó la convocatoria a las organizaciones sociales para participar en la estrategia de PROCEDA. El proceso se realizó a través de la página de la Corporación 22 de abril y el 29 de mayo
        Se realizaron asesorías y acompañamientos a las organizaciones sociales sobre los aspectos para presentar los proyectos.
        Revisión y evaluación de proyectos Se realizó la revisión y evaluación de las propuestas  radicadas en la Corporación  entre el 8de junio  y el 15 de julio
        Ajuste de Presupuestos con cada una de las organizaciones 16 de  julio al 15 de agosto 
        Inclusión de 5 proyectos enfocados a organzaciones sociales de las areas protegidas que se constituye en elementos para un punto de información donde cada organización  construye e una propuesta para su manejo.15 de agosto  al 30 de septiembre.
        Organización y sistematizción de la información técnica de cada uno de los elementos que entrarán a la licitación por selección abreviada 01 de agosto al  30 de septiembre
        Se realizó la formulación de estudios previos de estudios previos. 01 de octubre
        Se realizó la presentación de estudios previos a OAJ. 27 de octubre.
        Igualmente se viene realizando el seguimiento a la ejecución de  los Proyectos Ciudadanos de Educación Ambiental de la vigencia 2019  mediante el CPS 60 de 2020
        En este sentido se tiene la siguiente ejecución de acuerdo a las actividades que componen el proceso:
        1. Convocatoria  las organizaciones sociales: 20%
        2. Asesoría, seguimiento y acompañamiento  a la formulación de los proyectos: 20%
        3. Evaluación y selección: 36 proyectos.  20%.
        4. Adjudicación contrato de licitación por selección abreviada: pendiente 
        5. Entrega de los insumos y materiales a las organizaciones: pendiente
        6. Ejecución de los proyectos por las organizaciones: pendiente 
        Avance de gestión total: 60%
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia9 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12947,
            'year' =>1,
            'value' => 100,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia10 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12948,
            'year' =>1,
            'value' => 100,
            'description' => 'Se brindó asesoría técnica a los catorce (14) municipios del Departamento de Risaralda, en la inclusión del componente ambiental en los procesos de planificación y ordenamiento territorial: planes de ordenamiento territorial, planes parciales e instrumentos de planificación intermedia, a través de capacitaciones a la administración municipal y/o equipos de formulación y/o revisión, mesas de trabajo, revisión de documentos, entrega de insumos, construcción normograma de ordenamiento territorial, consolidación y sistematización base de datos y seguimiento al componente ambiental concertado en dichos instrumentos.
        1. Apia. Tres (3) mesas de trabajo, capacitaciones, remisión insumos, seguimiento al EOT.
        2. Balboa. Seis (6) mesas de trabajo, capacitaciones, remisión insumos, seguimiento al EOT, revisión documentos preliminares de avance.
        3. Belén de Umbría. Dos (2) mesas de trabajo, capacitaciones, remisión insumos, seguimiento al PBOT.
        4. Dosquebradas. Catorce (14) mesas de trabajo, capacitaciones, remisión insumos, seguimiento al POT, revisión documentos preliminares de avance, expedición determinantes.
        5. Guática. Tres (3) mesas de trabajo, capacitaciones, remisión insumos, seguimiento al EOT.
        6. La Celia. Dos (2) mesas de trabajo, capacitaciones, remisión insumos, seguimiento al EOT.
        7. La Virginia. Dieciseis (16) mesas de trabajo, capacitaciones, remisión insumos, seguimiento, concertación de la revisión del PBOT con base en las determinantes ambientales, conceptos técnicos y actas de concertación.
        8. Marsella. Dos (2) mesas de trabajo, capacitaciones, remisión insumos, seguimiento al PBOT.
        9. Mistrató. Dos (2) mesas de trabajo, capacitaciones, remisión insumos, seguimiento al EOT.
        10. Pereira. Nueve (9) mesas de trabajo, capacitaciones, remisión insumos, seguimiento al POT.
        11. Pueblo Rico. Dos (2) mesas de trabajo, capacitaciones, remisión insumos, seguimiento al EOT.
        12. Quinchía.  Tres (3) mesas de trabajo, capacitaciones, remisión insumos, seguimiento al EOT.
        13. Santa Rosa de Cabal. Seis (6) mesas de trabajo, capacitaciones, remisión insumos, seguimiento al PBOT.
        14. Santuario. Dos (2) mesa de trabajo, capacitaciones, remisión insumos, seguimiento al EOT.
        Asesoría a trece (13) instrumentos de planificación intermedia radicados en la Corporación: expedición de determinantes ambientales, mesas de trabajo asesoría técnica, visitas de campo, revisión de insumos y/o documentos, expedición de conceptos técnicos y actos administrativos de concertación y no concertación del componente ambiental. 1. PP Chepapu: concertación. 2. PP Sector canaán: determinantes. 3. PP Mirador canceles: determinantes. 4. PP La Pampa: concertación. 5. PP Modificación parque temático: concertación. 6. AUI Malecón Otún: determinantes. 7. PP Tribeca: no concertación. 8. PP Bellavista: concertación. 9. PP La Julia: comunicaciones. 10. PP Bosques de Alamos: determinantes. 11. PP Bosques de Canaan II: concertación. 12. PP Modificación PP Nueva Galicia: determinantes. 13. PP Benaya: concertación.
        Participación en la articulación de las determinantes ambientales CARDER con otros procesos de planificación: actualización planes manejo áreas protegidas, PGAR, plan de acción, acuerdo manejo Otún, revisión POMCA Campoalegre, formulación determinantes ambientales regionales, acotamiento de rondas hídricas, actualización acuerdos y resoluciones CARDER suelos de protección recurso hídrico, entre otros.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia11 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12949,
            'year' =>1,
            'value' => 0.9,
            'description' => 'Durante el año 2020 se avanzó frente a la estructuración del Acuerdo de Manejo del suelo de protección del recurso hídrico de la cuenca media-alta del río Otún, en la construcción de la síntesis ambiental, ajuste y actualización de diagnósticos, se desa-rrolló la fase de zonificación, incluyendo los resultados del estudio contratado en el año 2019 de capacidad de uso del suelo; utilizando como base la metodología para Áreas Naturales Protegidas con adaptaciones a la misma.  Se ha avanzado en la fase de formulación con base en las situaciones problemas relevantes identificadas en el diagnóstico, realizando una matriz de proyectos sobre la cual se recibieron retroalimen-taciones por parte de las instituciones participantes en la estructuración del Acuerdo: Municipios de Pereira, Dosquebradas y Santa Rosa de Cabal, así como Parques Na-cionales Naturales.  Se desarrollaron mesas de trabajo con los tres municipios y la em-presa Aguas y Aguas para realizar una priorización de proyectos.  Se tienen elabora-das las fichas normativas de acuerdo al ejercicio de zonificación desarrollado, las cua-les se encuentran en revisión por parte del abogado contratista y que serán comparti-das a los municipios participantes en la estructuración del Acuerdo.  Con base en el ejercicio anterior se identificaron posibles fuentes de financiación para constituir las alianzas correspondientes que permitirán en un futuro la implementación del plan ope-rativo del Acuerdo.
        Se realizó mesa de trabajo para priorización de proyectos dentro de la etapa de formu-lación con el Comité de Gestión y Desempeño de la CARDER, culminando el ejercicio de priorización con los actores responsables.  Se recibió retroalimentación sobre las fichas normativas por parte del abogado contratista y del municipio de Dosquebradas.  Se apoyó la gestión institucional para la expedición de la Resolución 0815 de 2020 POR MEDIO DE LA CUAL SE ORDENA LA REGLAMENTACIÓN DE VERTIMIENTOS EN EL TRAMO II DEL RÍO OTÚN JURISDICCIÓN DEL DEPARTAMENTO DE RISA-RALDA Y SE DICTAN OTRAS DISPOSICIONES, con el cual se adelanta estudio téc-nico por medio del cual se tendrá el insumo para culminar el proceso de zonificación y formulación del Acuerdo de Manejo.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia12 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12950,
            'year' =>1,
            'value' => 0,
            'description' => 'No aplica',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia13 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12951,
            'year' =>1,
            'value' => 234.84,
            'description' => 'Se reportan 20,84 ha en proporción de suelos de protección demarcados en zonas urbana, con base en las resoluciones que las aprueban y definen.
        Rondas hídricas: 214 ha. Avance en el acotamiento de rondas hídricas sobre cuerpos de agua que hacen parte de las unidades hidrográficas priorizadas (RES. CARDER 1510 DE 2018), así como de solicitudes de demarcación allegadas a la corporación por diferentes usuarios; lo anterior de acuerdo con la metodología establecida por el MADS para acotamiento de rondas hídricas en Colombia (RES. MADS 957 DE 2018).',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia14 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12952,
            'year' =>1,
            'value' => 0,
            'description' => 'No aplica',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia15 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12953,
            'year' =>1,
            'value' => 0,
            'description' => 'Para la adopción de POMCA Campoalegre se encuentra en proceso la Consulta Previa, para lo cual se elaboraron los estudios previos con el objeto de Aunar esfuerzos entre la CARDER y el Cabildo Indígena Suratena del Municipio de Marsella para adelantar los procesos de preconsulta y consulta previa para la actualización del POMCA del Río Campoalegre y otros directos al cauca, asimismo se realizaron reuniones con el resguardo y la Oficina Asesora Jurídica para dar viabilidad al proceso, concluyendo que se realizaria un convenio los resguardos con territorio den la cuenca, para lo cual los estudios previos en mención se encuenran en etapa de cuarta revisión por parte de la OAJ.
        En la Fase de Formulación del POMCA Campoalegre, se apoyó la elaboración y revi-sión de los Estudios Previos de Corpocaldas para la contratación de la fase de Formu-lación en el marco del Convenio marco 436 de 2018. Para este convenio marco se realizó suspensión en razón a la pandemia y posteriormente una adición en tiempo con el propósito de culminar la mencionada fase y realizar las actividades de publici-dad y aprobación del POMCA consideradas en el Decreto 1076 de 2015. En este con-texto Corpocaldas contrató la fase de formulación con el Instituto SEI con un plazo de nueve meses iniciando en el mes de diciembre del 2020. Se programó reunión de inicio del proceso para el mes de enero de 2021.   ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia16 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12954,
            'year' =>1,
            'value' => 0,
            'description' => 'No aplica',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia17 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12955,
            'year' =>1,
            'value' => 0,
            'description' => 'No aplica',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia18 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12956,
            'year' =>1,
            'value' => 0,
            'description' => 'Actualmente se cuenta con los documentos finales del estudio del PORH del Río Consotá, asi como con la proyección de la resolucion de adopción del mismo ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia19 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12957,
            'year' =>1,
            'value' => 0,
            'description' => 'No aplica',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia20 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12958,
            'year' =>1,
            'value' => 0,
            'description' => 'Se adelantó la adopción de la reglamentación de usos de las aguas de 76 corrientes de la subcuenca del Río Totuí mediante la emisión de las resoluciones A-417 y A-418 de 27 de julio de 2020 y A-432 del 06 de agosto de 2020, publicadas en el diario oficial No 51.406, del viernes 14/08/2020 ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia21 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12959,
            'year' =>1,
            'value' => 3,
            'description' => 'Para el apoyo al relacionamiento general con las comunidades étnicas en el marco de la gestión de los instrumentos de planificación y ordenación, se vincularon mediante CPS dos profesionales.
        En relación al apoyo a la implementación del Plan de Vida del Pueblo Embera de Risaralda en las líneas de; conservación de la biodiversidad y protección del saber ancestral y tradicional en su manejo,  protección del recurso hídrico,  y participación y cultura ambiental,  se vinculó mediante CPS un enlace técnico indígena y tres guardabosques locales en los municipios de Pueblo Rico, Mistrató y  Marsella. En este mismo sentido se firmó e inició un convenio de asociación con UNISARC para; apoyar un proyecto de desarrollo piscícola en Mistrató con mujer indígena como estrategia de seguridad alimentaria, conservación y participación, y para la construcción  de una estrategia de conservación de la rana arlequín (Oophaga histriónica) en territorios indígenas del Pacifico Biogeográfico Risaraldense. También se elaboraron estudios previos para convenio interadministrativo con ACIRR para apoyo a la construcción Plan ambiental indígena de pervivencia como estrategia de actualización del Plan de Vida en su componente ambiental. 
        En relación al apoyo a la implementación del Plan de Manejo de Recursos Naturales de Comunidades Negras y el Plan de manejo del AME Alto Amurrupá,  en las líneas de conservación de la biodiversidad y protección del saber ancestral y tradicional en su manejo,  protección del recurso hídrico, producción sostenible, y participación y cultura ambiental, se vinculó mediante CPS dos promotores ambientales de comunidades negras en los territorios colectivos de Santa Cecilia y Piedras Bachichí en el corregimiento de Santa Cecilia, Pueblo Rico. De la misma forma  se incluyó en el convenio de asociación con UNISARC alcances dirigidos a fortalecer el conocimiento y valoración de la biodiversidad, fortalecimiento de la producción de alevinos como estrategia de seguridad alimentaria y conservación, en este mismo sentido se elaboraron estudios previos para convenio de asociación  con ESAL para apoyo recuperación ambiental del chontaduro en Santa Cecilia, Pueblo Rico.
        Finalmente en relación al apoyo y acompañamiento a las comunidades mestizas en los corregimientos de San Antonio del Chamí en Mistrató y Villa Claret en Pueblo Rico, se vincularon mediante CPS dos profesionales para facilitar la construcción de agendas ambientales comunitarias y el fortalecimiento de la participación en la gestión ambiental local. De la misma forma  se incluyó en el convenio de asociación con UNISARC alcances dirigidos a fortalecer la participación de la comunidad en la conservación de la biodiversidad y el desarrollo de un proyecto de piscicultura como alternativa de seguridad alimentaria.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia22 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12960,
            'year' =>1,
            'value' => 1,
            'description' => 'Se implementaron acciones de la Consulta Previa del POMCA del Rio Risaralda (1) con las comunidades Embera  Chamí del municipio de Guática (jornada de reforesta-ción, participación en el proceso de actualización del plan de manejo del área Protegi-da La Cristalina La Mesa y capacitación a la guardia indígena), Flor del Monte de Belén de Umbría (proceso precontractual para saneamiento hídrico del resguardo) y el CRI-DEC de Caldas (jornada de reforestación, participación en mesa nacional interinstitu-cional del CRIDEC). 
        En cuanto al proceso de la Consulta Previa  del POMCA Campoalegre (2) con las co-munidades de Altomira y Suratena se elaboraron los estudios previos con el objeto de Aunar esfuerzos entre la CARDER y el Cabildo Indígena Suratena del Municipio de Marsella para adelantar los procesos de preconsulta y consulta previa para la actuali-zación del POMCA del Río Campoalegre y otros directos al cauca, asimismo se realiza-ron reuniones con el resguardo y la Oficina Asesora Jurídica para dar viabilidad al pro-ceso, concluyendo que se realizaría un convenio los resguardos con territorio den la cuenca, para lo cual los estudios previos en mención se encuentran en etapa de cuar-ta revisión por parte de la OAJ.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia23 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12961,
            'year' =>1,
            'value' => 100,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia24 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12962,
            'year' =>1,
            'value' => 45,
            'description' => 'En total para el año se han apoyado 45 Proyectos Ambientales Escolares a través del desarrollo de 54 actividades con Instituciones educativas relacionadas con asesorías y acompañamiento. En este caso, se han abordado ejercicios de socialización de un ins-trumento de apoyo o guía para trabajar el tema de residuos en el aula de clase, como también actividades de valoración y seguimiento a los PRAE de las instituciones Edu-cativas. Dentro de las instituciones Educativas atendidas se tienen IE Nuestra Señora del Rosario, San Vicente Hogar, Centro de bachillerato en Bienestar Rural, CEBBR, Augusto Zuluaga, Combia, Pital de Combia, La Florida, San Pablo, Santo Domingo Savio, y Sausagua., entre otras.
        Igualmente se desarrolló un proceso con el  Centro Educativo Bachillerato en Bienes-tar Rural del municipio de Pueblo Rico en el Departamento de Risaralda con la partici-pación  en la convocatoria del Ministerio de Ambiente y Desarrollo Sostenible   para la conmemoración del  Bicentenario de la Campaña Libertadora a través del desarrollo de una cátedra ambiental dirigida a niños, niñas, adolescentes y público en general de las diversas regiones del país con el  fin de promover la  apropiación del territorio a través de la biodiversidad, en fauna y flora,  la cultura y la historia.  En este sentido, desde un trabajo articulado con la institución educativa y el apoyo de otros actores como Parques Nacionales y organizaciones sociales locales, se participó en la iniciativa mediante la construcción de infografías para la apropiación y reconocimiento de diversas especies de fauna y flora representativas del departamento y que serán incorporadas en los ca-tálogos de biodiversidad Colombiana que elaborará el MADS.
        Se continuó con el proceso  de articulación interinstitucional para el fortalecimiento de los  PRAE con la Alcaldía de Pereira a través de un equipo interdisciplinario conforma-do por CARDER, Secretaría educación Municipal , Planeación Municipal, Secretaría Desarrollo Rural y Ambiente y DIGER,  en el que se realizaron una serie de sesiones virtuales con cinco instituciones educativas del municipio y se socializaron los Proyec-tos Ambientales Escolares de cada uno, identificando el estado o diagnóstico y nece-sidades de éstos con el fin de consolidar una propuesta conjunta de acompañamiento y fortalecimiento entre las dependencias mencionadas. Como producto de este ejerci-cio hasta el momento, se tiene un diagnóstico del estado actual de estos cinco proyec-tos de las instituciones educativas Héctor Ángel Arcila, La Bella, Augusto Zuluaga, Pi-tal de Combia y Combia. Adicionalmente se han realizado actividades de fortalecimien-to de capacidades en instituciones educativas como el jardín Infantil “Pinceladas” y un ciclo de capacitaciones con la Institución Educativa Juan Manuel González en el tema de vida silvestre y residuos sólidos.
        Para el mes de diciembre se suscribió contrato interinstitucional con la Universidad tecnológica de Pereira con el fin de desarrollar una herramienta tecnológica que permi-ta la sensibilización de las problemáticas ambientales en niños y jóvenes de las insti-tuciones educativas del Departamento. Este proceso consiste en el diseño de un libro didáctico y una plataforma web interactiva de educación ambiental.
        A través de la Oficina Verde de Santa Rosa de Cabal se desarrolló un proceso de ca-pacitación denominado Amigos de la naturaleza, junto con la Policía Ambiental (DE-RIS), la Alcaldía de Santa Rosa y otros aliados, y fue dirigida a estudiantes de 5 institu-ciones educativas de dicho municipio como el Instituto Tecnológico, Francisco José de Caldas, Labouré, Instituto Técnico Mariillac, Santa María Goretti, Lorencita Villegas. Las capacitaciones se realizaron en el transcurso de 4 meses, 2 capacitaciones por mes, en los temas de fauna silvestre, normativa ambiental, trámites ambientales, reforesta-ción, manejo y conservación de especies, residuos sólidos, biodiversidad, agua, cultura ciudadana. El proceso incluyó una jornada de siembra, una visita al Bioparque Ukuma-rí y una visita al Jardín Botánico.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia25 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12963,
            'year' =>1,
            'value' => 405,
            'description' => 'Se tiene un total de 405 actividades para el año.
        Se realizaron capacitaciones externas en diferentes temas: normatividad ambiental con énfasis en flora y fauna; con énfasis en el recurso hídrico y forestal; vida silvestre; có-digo de recursos naturales - código de policía y proceso sancionatorio; uso y aprove-chamiento de los recursos naturales renovables; residuos ordinarios, especiales y peli-grosos.  
        Como parte del proceso de institucionalización de la Política nacional de Educación ambiental y la implementación del Plan Decenal de Educación Ambiental 2019-2029 y el Plan de Gestión Ambiental Regional 2020-2039, se participó desde el equipo de educación ambiental de la corporación, tanto funcionarios como contratistas, en el Seminario taller Educación Ambiental y Participación y Desarrollo Local. “Un proceso de articulación interinstitucional pensado con y para los que hacen de la educación ambiental, la participación ciudadana, y la Responsabilidad Social Empresarial una realidad que vive en el territorio local”. Se culminó el proceso el día 17 de julio en el cual el equipo de Educación ambiental participó en la construcción del manifiesto des-de óptica y las reflexiones de la mesa de los CIEAR y su importancia en la consolida-ción de la Política Nacional de Educación Ambiental en los territorios.
        Se realizó gestión interinstitucional con el Ministerio de Ambiente y Desarrollo Soste-nible a través de la Subdirección de Educación y Participación con el fin de fortalecer capacidades al equipo de Educación Ambiental y Planeación de CARDER en cuanto al contexto de la educación ambiental y las temáticas que se vienen apoyando desde dicha dependencia. Igualmente se han realizado reuniones con la funcionaria encar-gada de dicha Entidad con el fin de iniciar un plan de acción de apoyo para los proce-sos de educación ambiental.
        Se viene realizando la estrategia de educación y sensibilización ambiental en las áreas protegidas para el área Metropolitana. Dicha estrategia consiste en la presencia institucional en cinco puntos priorizados donde se presenta una alta afluencia de visi-tantes. En este caso, los funcionarios y contratistas realizan labores de educación, sensibilización respecto a los comportamientos y acciones deseables que se deben tener en cuenta en la visitancia a las áreas protegidas y sus zonas de influencia. Los puntos críticos priorizados son: DCS Barbas Bremen en el sector Yarumal, DCS Alto del Nudo, DCS La Marcada, Alto del Toro y La Florida. Se han realizado a la fecha 224 jornadas desde el mes de agosto cada fin de semana. Para el trimestre se han realiza-do 118 jornadas.
        Se realizó sensibilización e información a la comunidad del Barrio San Fernando en la Ciudad de Pereira con el fin de generar claridad sobre la importancia de la intervención del manejo de los guaduales en el río Consota para que estos pueden sostenerse en el futuro y cumplir con mayor eficiencia sus funciones ecosistemicas. 
        Se han realizado actividades de fortalecimiento de capacidades a la Red de Jóvenes de Ambiente.  30 actividades.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia26 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12964,
            'year' =>1,
            'value' => 1783,
            'description' => 'Se diseñaron 1783 piezas educomunicativas de acuerdo a las solicitudes que recibió la Oficina de Comunicaciones en la vigencia 2020 a corte 31 de diciembre, éstas tienen que ver con comunicaciones internas y externas de los temas que son inherentes a la entidad.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia27 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12965,
            'year' =>1,
            'value' => 13,
            'description' => 'Se realizaron 13 campañas para dar a conocer la gestión ambiental de la entidad en temas como por ejemplo REGAR, Negocios Verdes, BanCO2, Biodiversidad, Fauna Silvestre, entre otros, de acuerdo a las solicitudes que llegan a la Oficina de Comunicaciones y según propuestas del Comité de Comunicaciones, fechas ambientales y especiales relacionadas con la temática y gestión institucional ambiental',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia28 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12966,
            'year' =>1,
            'value' => 23,
            'description' => 'La Oficina de Comunicaciones apoyó 23 eventos durante la  vigencia 2020, tales como: Reconocimiento Forestal, las Mesas ambientales, Audiencia del Plan de Acción, Audiencia de la Procuraduría, Ruedas de Prensa, Reforestación, liberación de fauna silvestre, entre otros, que están relacionados con solicitudes al subproceso de comunicaciones. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia29 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12967,
            'year' =>1,
            'value' => 100,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia30 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12968,
            'year' =>1,
            'value' => 100,
            'description' => 'Para la vigencia 2020 se recibieron 717 trámites ambientales y durante la misma vigencia fueron resueltos 748 solicitudes de trámite, lo que representa un resultado global del 100%; para esto se ha efectuado seguimiento a las actividades de Ventanilla Verde, Seguimiento a las actividades de los Técnicos y remisión de alertas, actualización de bases de datos para ventanilla verde, presentación de informes periódicos a los directivos. Proyección de autos de inicio, requerimientos y oficios, evaluación de los otorgamientos y proyección de los actos administrativos correspondientes.  ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia31 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12969,
            'year' =>1,
            'value' => 7,
            'description' => 'El promedio de atención de denuncias ambientales para la vigencia 2020 fue de 7 días hábiles; para este resultado se adelantaron las siguientes actividades: Asignación y seguimiento a la atención de las denuncias ambientales, actualización de la plataforma de PQRSD, actualización de la base de datos para seguimiento de éstas, remisión de respuestas a los usuarios, almacenamiento de las respectivas evidencias y presentación de informes periódicos.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia32 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12970,
            'year' =>1,
            'value' => 0,
            'description' => 'Las actividades desarrolladas, se enmarcan en lo establecido en la resolución 1541 de 2013, resolución 2087 de 2014 y NTC 6012-1 en lo referente con la evaluación psicó-metrica a quejas por olores. 
        A la fecha se cuenta con los avances en el cumplimiento de la metodología para queja presentada sobre la Porcícola San Antonio en el municipio de Pereira, sector Combia.
        - Delimitación de zonas de estudios (Zn, Zf, Zk).
        - Delimitación cartográfica, base predial.
        - Identificación del marco muestral para cada zona. 
        Como resultado del desarrollo metodológico descrito en la NTC 6012-1, se obtuvo como producto final el concepto técnico 3210 del diciembre 28 de 2020, a través del cual se consolidaron los resultados de todas las fases descritas en la NTC. 
        Mediante memorando 2900-2020 se dio traslado del CT 3210-2020 al área jurídica de la SGAS para la elaboración del acto administrativo a través del cual se exigirá a la activi-dad evaluada presentar ante CARDER el Plan de Reducción de Impactos por Olores Ofensivos - PRIO.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia33 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12971,
            'year' =>1,
            'value' => 76,
            'description' => 'Para la vigencia 2020, se tiene un universo de otorgamientos ambientales objeto de seguimiento igual a 11658, este valor es susceptible de variar por la depuración per-manente de la información cuando se presenta conceptos o resoluciones de cierre, renovaciones, prórrogas, entre otros, al corte 31 de diciembre se ha reportado en el Programa desarrollado para la gestión de los seguimientos asignados un total de 8101 evidencias de seguimiento, lo que corresponde a un 76%.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia34 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12972,
            'year' =>1,
            'value' => 115,
            'description' => 'Durante la vigencia 2020 se desarrollaron 115 Operativos de puestos de control en di-ferentes sectores del departamento, a saber: Balboa (Sector Cachipay), Santuario (Sec-tor La Marina), Apía (Sector Valladolid), Pueblo Rico, Quinchía, Pereira (Sector Magne-trón, La Palmilla, El Manzano). Operativos a depósitos de madera de Pereira, La Virgi-nia y Dosquebradas.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia35 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12973,
            'year' =>1,
            'value' => 40,
            'description' => 'Se realizó el seguimiento a 39 titulos, con instrumento Ambiental licencia ambiental y/o  Plan de manejo Ambiental,  1 proyecto de exploración con seguimiento de  Guias minero Ambientales. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia36 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12974,
            'year' =>1,
            'value' => 100,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia37 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12975,
            'year' =>1,
            'value' => 19,
            'description' => 'Se adelanta convenio de transferencia tecnológica para adquisición e implementación de sistema de gestión ambiental
        Desarrollo de nuevos portales web y herramientas online para la Corporación. 
        Contratación del personal de apoyo para el desarrollo de las actividades del subproceso.
        Adquisición de insumos y servicios para el sostenimiento del esquema de impresión de la Corporacióon.
        Contratación de soporte y actualizaciones para los sistemas de información de apoyo PCT, SAIA, HUMANO.
        Contratación de Tokens Virtuales
        Contratación de servicio para soporte de UTM Seguridad Perimetral
        Actualización de licenciamiento ARCGIS
        Actualización aplicativo de Otorgamientos
        Adquisición servicios de telecomunicaciones',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia38 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12976,
            'year' =>1,
            'value' => 100,
            'description' => 'Se adelantaron las siguientes actividades en el marco de las metas definidas en el Plan Operativo del SIAE para la vigencia 2020:
        1.	SISTEMA DE INDICADORES: Se reportaron los Indicadores mínimos de Ges-tión, SIRECI, IAFOC DANE, IEDI y tablero de Mando, así como la publicación de los indicadores del sistema integrado de Gestión en las fechas establecidas, además del acompañamiento a la actualización de los Indicadores de Desempeño Institucional y ASOCARS que fueron revisados en el primer trimestre del año. 
        2.	PAGINA WEB: Se apoyó durante todo el año el proceso de construcción y revi-sión de la nueva página web del SIAE, que entró en funcionamiento con sus respecti-vos ajustes en el mes de noviembre. Actualmente se sigue actualizando la información en la página.
        3.	CAPACITACIONES: Se actualizaron y republicaron los videos tutoriales para el manejo de la información cartográfica en la página web, de igual manera impartieron las capacitaciones solicitadas por las Subdirecciones misionales, para el manejo de información geoespacial con el grupo de Tasa por uso del agua y el equipo de oficina verde de la Florida, así como capacitaciones en el manejo de las plantillas de reporte de información del SIAE con el personal de la Corporación y de los SIGAM municipa-les.  
        4.	PUBLICACIONES: Se publicó el Boletín CARDER 2016-2019 y se apoyó en la construcción de la síntesis ambiental del Plan de Acción Institucional 2020-2023 “Risa-ralda Sostenible y Resiliente, Compromiso de Todos”.
        5.	CARTOGRAFÍA: se ha dado apoyo en el procesamiento de cartografía y acota-miento de las rondas hídricas de acuerdo a las solicitudes recibidas durante el año, apoyo a revisión de los planes de ordenamiento, restitución de tierras, actualización de planes de manejo de áreas protegidas, POT, PSMV y grupo de licencias ambientales; además, se administra la mapoteca de Geocarder y se actualiza permanentemente la información cartográfica. Se ha apoyado el proceso de zonificación ambiental del acuerdo de manejo del río Otún y el procesamiento de la información cartográfica. Además de las socializaciones, revisión y ajustes de la zonificación y la integración de la misma en el proceso de formulación. 
        6.	ATENCIÓN AL USUARIO. se ha dado respuesta a todas las solicitudes de in-formación ambiental, estadística y cartográfica por correo electrónico, oficio y otros me-dios.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia39 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12977,
            'year' =>1,
            'value' => 100,
            'description' => 'A. Monitoreo calidad, según unidades hidrográficas: se realizó Formulación de la programación de monitoreo de las unidades hidrográficas año 2020 teniendo en cuenta el receso COVID 19, 
        B. Ejecución del programa de Monitoreo  en las siguientes unidades hidrográficas 1) R. Consota (2);  2) Q. Grande (2);  3) R. Tatamá (2); 4) R. Negro (2); 5) Q. Dosquebradas (3); 6) R. Monos (2); 7) R. Cañaveral (2), 8)  Q Santa Emilia (2); 9) Q. Arrayanal (2); 10) Q. Ojo de Agua (2); 11) Q. Lavapiés-Chorros-Guática (2); 12) Q. Lavapiés Quinchia (2); 13) Q. la unión (2); 14) Q. Cestillal (2); 15) Q. Cristales(2); 16) Q. Cuba (2); 17) Rio Barbas (2); 18) Q. Socavón (2); 19) Q. Matadero (2); 20) Río Risaralda (3); 21) Q. Chapata (3); 23) Río Cauca (3); 24) Q. Gobia (2); 25) Q. Sinaí (2); 26) Q. Punta Lanza (2); 27) Q. El Pensil (2); 28) Q. Agua Linda (2); 29) Q. Santa Isabel (2); 30) Río Totuí (2); 31) Río San Francisco (2); 32) Qda. Combia (2); 33) Qda. Peñas Blancas (2); 34) Río Campoalegrito (2); 35) R. San Eugenio (2), 36) Q. La Bomba (2); 37) R. San Rafael (1); 38) R. Apia (2); 39) R. Mapa (2). 40) Q. La Bedoya (2);  41) Rio Barbas (2) .42) Rio Otún (3) 43) Q. la nona (2) Q. El Maní (2)
        C. Caracterización de vertimientos: Priorización y programación de caracterización de control de vertimientos año 2020, caracterización;  Industria Ingenio de Risaralda ,Papeles Nacionales, Cartones y Papeles de Rda, matadero de Santa Rosa de Cabal (Guayabito), matadero de Quinchía, matadero La Virginia, Frigotún, Agregados de Occidente, Postobon Pereira, Porcicola Avilonia, Frigorífico OINC, Textiles OMNES, Alival, Americana de Curtidos, Plata de sacrificio San Marino (zarpollo), Operadora avícola (pimpollo),  Papeles Regionales en Dosquebradas, Ukumarí
        D. Manejo de aguas subterráneas: Seguimiento Plan de Manejo de Aguas Subterráneas CARDER, programación año 2020, usuarios pertenecientes al red de monitoreo de calidad aguas subterráneas, Condominio Vallarta, Suzuki, Condominio La Cabaña, Textiles Omnes, Coats Cadena, Postobon Dosquebradas, Cartones y Papeles de Rda, Industria Magnetrón, Club campestres de Pereira ,  La Rosa, Nicol, acueducto de cerritos.
        Porcentaje de ejecución  100% del avance del programa de monitoreo RH para el año 2020',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia40 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12978,
            'year' =>1,
            'value' => 1,
            'description' => 'Como parte de la gestión del grupo de gestión del riesgo, se realizan reportes diarios y semanales de las variables climáticas en el departamento de Risaralda, y se consolidan igualmente reportes extraordinarios y/o comunicados de prensa según la evolución de las condiciones climáticas o la manifestación de emergencias y desastres. Se definieron los nuevos alcances para la operación de la red hidroclimatológica para el nuevo convenio .  Estos alcances incorporan para un período de 6 meses la captura, procesamiento y divulgación de los datos almacenados por las estaciones hidroclimatológicas pertenecientes a la Red Hidroclimatológica del Departamento de Risaralda- REDH;  Administrar y operar el Geoportal web con las correspondientes herramientas de visualización y descarga de los datos de estaciones no telemétricos, monitoreo  a través de aforos de 13 puntos críticos para el abastecimiento de agua potable (Barbas y Cestillal), y algunos puntos de importancia para el municipio de Dosquebradas. Además incluye los mantenimientos preventivos y/o correctivos a estaciones telemétricas, y la publicación de  un Anuario Hidroclimatológico de la REDH (2019), así como los ajustes de la Curva de Gasto para la estación Hidroclimatológica Totuí y La Nona, el análisis de datos históricos para la determinación de comportamientos climáticos para las estaciones del departamento, así como evaluación de la calidad y complementos de los datos, definición de umbrales preliminares de lluvia, temperatura y niveles, curvas IDF. Instalación de una  estación hidroclimatológica telemétrica del río Risaralda que requiere de nuevas adecuaciones para no tocar el puente y lograr monitorear en este punto. Cálculo de índices a partir de al menos 3 imágenes LANDSAT, sobre cambio de usos del suelo, análisis de sequía e incendios, para generación de alertas. Análisis de información preliminar de dos nuevas estaciones de la Red Hidroclimatologica de Pereira; estación de calidad del aire y sismógrafo (procesamiento de datos).',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia41 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12979,
            'year' =>1,
            'value' => 4,
            'description' => 'Cuatro estaciones del SVCA en operación permanente en los municipios de Pereira (2), Dosquebradas(1), La Virginia(1) y una estación mediante campaña (Santa Rosa de Cabal) en cuatro municipios del Departamento, en cumplimiento del 75% de muestras anuales. Cumplimiento de las siguientes actividades: 1. Toma de muestras con los equipos del SVCA- de propiedad de la CARDER, garantizando los métodos descritos  en el documento técnico. 2.  Análisis de laboratorio con acreditación vigente para la matriz aire en parámetros y métodos expedida por el Instituto de Hidrología, Meteorología y Estudios Ambientales IDEAM, bajo los lineamientos de la norma NTC-ISO/IEC 17025 3. Reporte de información y análisis de resultados de tres meses para el Subsistema de información de calidad del aire SISAIRE 4.Suministro del material de consumo básico en la totalidad de procedimientos, conforme a las necesidades de cada equipo en cantidad y calidad . 5. Traslado de las muestras para el análisis de laboratorio mediante la ejecución de una cadena de custodia, garantizando los requisitos de identificación, manipulación, transporte, protección y conservación de muestras del Protocolo de vigilancia de calidad del aire aprobado por el MADS. 6.Suministro de la información meteorológica asociada a calidad del aire para cada estación, garantizando las variables establecidas en el documento técnico. 7. Mantenimiento preventivo  y Calibración de los equipos equipos del SVCA- de propiedad de la CARDER, garantizando las características establecidas en el análisis técnico. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia42 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12980,
            'year' =>1,
            'value' => 0,
            'description' => 'Rondas Hídricas: la Entidad suscribió Convenio con la Universidad Nacional para la implementa-ción del proceso de acotamiento de la Ronda Hídrica como medida de prevención de riesgo de desastres, en las zonas aledañas a las fuentes hídricas priorizadas en el municipio de Pereira, departamento de Risaralda. Este estudio se recibirá en la vigencia 2021.
        En el 2020 se avanzó en la gestión de los siguientes estudios:
        - Priorización de centros poblados y establecimiento de objetivos de calidad de cuerpos recep-tores de vertimientos (20 centros poblados): En gestión de Estudios Previos.
        - Valoración de la presencia de Arsénico (As), Hierro (Fe) y Mercurio (Hg) en fuentes de abasto superficiales y subterráneas de la U.P. POMCA CAMPOALEGRE: Se cuenta con convenio con la Universidad Tecnológica de Pereira para adelantar el estudio de la contaminación por Arsénico en las fuentes abastecedoras.
        - Realización de análisis de agroquímicos, cianuro y/o mercurio en agua y tejidos blandos de peces: Se cuenta con convenio con la UTP para prestar apoyo a la atención de eventos de mortandad de peces por presencia de agentes contaminantes.
        - Estudios para el Monitoreo y seguimiento técnico sobre las explotaciones de materiales de arrastre, determinación de la capacidad de transporte de sedimentos de los ríos Mapa y Risa-ralda: la ejecución del convenio está a cargo de Corpocaldas, quien contratará con la U. Na-cional la ejecución del estudio, pero debido a dificultades administrativas no se ha ejecutado este contrato.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia43 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12981,
            'year' =>1,
            'value' => 0,
            'description' => 'Se han realizado la definición de alcances para la realización de dos (2) estudios  vinculados con fallos judiciales, para los sectores del barrio Buenos Aires (quebrada Dosquebradas) y sector de Nuevos Bosques de La Acuarela, Bosques de La Acuarela I, II, III y IV y  Tamarindo, asociados a la quebrada Cordoncillo y difundido en reuniones de los correspondientes de los Comités de Verificación e igualmente en reuniones con la Universidad Nacional Sede Medellín, para la presentación de la propuesta correspondientes.  Actualmente se efectúa la consolidación y revisión final de los estudios previos para dar lugar a la contratación. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia44 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12982,
            'year' =>1,
            'value' => 2,
            'description' => 'Se incluyeron las siguientes dos actividades de investigación: a) Identificación de tres (3) valores objeto de conservación por cada una de las áreas protegidas del SIDAP Risaralda b) Determinación de la capacidad de carga de los senderos de las áreas protegidas del SIDAP Risaralda. 
        En las líneas de Gestión del conocimiento y la investigación para la innovación en prácticas adecuadas en la cuenca del POMCA Otún  y del POMCA Risaralda y la Estrategia de Sistema de Información de la cuenca como herramienta para la ejecución del POMCA La Vieja, se contrató la construcción del  Portafolio Estratégico de Investigación en el marco de los POMCAS del Departamentos en el Convenio marco con la UTP.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia45 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12983,
            'year' =>1,
            'value' => 100,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia46 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12984,
            'year' =>1,
            'value' => 10,
            'description' => 'Se continua con la ejecución de acciones de diez (10) líneas estratégicas de los POMCAS: Línea Estratégica de Gobernanza y Fortalecimiento Interinstitucional para una Gestión Compartida y Efectiva del POMCA Otún (1), Gobernanza y Fortalecimiento Interinstitucional para una gestión compartida y efectiva con enfoque étnico del POMCA Risaralda (2) y la Estrategia de Fortalecimiento de la Participación Social del  POMCA La Vieja (3), a través de la cuales se apoyaron las sesiones mensuales de los Consejos de Cuenca de Otún, Risaralda y La Vieja de los consejos entrantes y salientes. Se realizaron las convocatorias públicas y se desarrolló todo el proceso para la conformación de los Consejos de Cuenca de los ríos Otún, Risaralda y La Vieja de conformidad con el procedimiento establecido en la Resolución 0509 de 2013, logrando la  conformación de los consejos 2020 -2023 para estas tres cuencas. Se firmó el Convenio marco de Cooperación Interinstitucional 252 de 2020 con el objeto de “Aunar esfuerzos técnicos, administrativos y financieros, para la articulación interinstitucional y el ordenamiento ambiental de la cuenca del Río Otún, enfocados en la gobernanza, con la finalidad de mejorar su integridad ecológica y el estado de la Biodiversidad como soporte de los servicios ecosistémicos” el convenio se constituye en una gran alianza entre las principales nueve entidades que hacen gestión en la Cuenca Hidrográfica del Río Otún: CARDER, Aguas y Aguas, Parques Nacionales, Gobernación de Risaralda, Municipio de Pereira, Municipio de Dosquebradas, Municipio de Santa Rosa, Municipio de Marsella y WWF. El Convenio tiene un plazo de 5 años durante los cuales se trabajarán cinco líneas de trabajo: Conservación de la integridad ecológica de la cuenca del rio Otún, Fortalecimiento de la gobernabilidad y la gobernanza, Generación de mecanismos económicos y sostenibilidad financiera, Fortalecimiento del ordenamiento ecoturístico y de las iniciativas comunitarias asociadas, Cultura, comunicación y educación ambiental. En esta misma línea se continua apoyando la incorporación del POMCA en los POT acompañando los procesos de La Virginia (POMCA Risaralda), Pereira (POMCAS Otún y La Vieja) y Dosquebradas (POMCAS Otún y Campoalegre).   Para el Río Risaralda se acompañaron acciones de los acuerdos de la Consulta Previa con las comunidades étnicas de esta cuenca. En las líneas de Gestión del conocimiento y la investigación para la innovación en prácticas adecuadas en la cuenca del POMCA Otún (4)  y del POMCA Risaralda (5) y la Estrategia de Sistema de Información de la cuenca como herramienta para la ejecución del POMCA La Vieja  (6), se contrató la construcción del  Portafolio Estratégico de Investigación en el marco de los POMCAS del Departamentos. En la línea de Gestión de la biodiversidad como soporte integral de los servicios ecosistémicos en la cuenca del POMCA Otún (7)  y del POMCA Risaralda (8) se contrató continuar con la caracterización de humedales. En la implementación de medidas de manejo se continúa el apoyo en el proceso de (9) actualización de los planes de manejo del SIDAP en las cuencas del Río Otún, Risaralda y La Vieja, a través de la estrategia de participación y del componente de diagnóstico y de zonificación. En la medida de administración del (10) Acuerdo de Manejo para  el suelo de protección del río Otún se avanzó en la fase de zonificación y en la definición de la Ronda Hídrica para el área de estudio. De manera transversal se apoyó el proceso de ajuste de metas, indicadores y línea base del tema para el Plan de Acción 2020-2023 y se participó en los espacios liderados por el MADS para la actualización de la Guía para la elaboración de POMCAS.  Asimismo se elaboraron los informes de ejecución de los años 2018-2019 de los POMCAS La Vieja, Otún y Risaralda y se elaboraron los estudios previos para la elaboración del ERA que permitirá tener insumos en los indicadores de seguimiento al corto plazo de los POMCAS.
        En la línea estratégica de Gestión del Riesgo se identificaron sitios con conflictos ambientales por riesgos y uso no conforme del suelo en la cuenca Otún (municipios de Pereira y, Dosquebradas) y cuenca Risaralda (municipios de Belén de Umbría , Mistrató y Guática). Se prestó acompañamiento y orientación técnica en la estrategia para la recuperación de cuencas en los municipios de Dosquebradas (4 Obras de bioingeniería) y  Pereira (2 -Suministro de material vegetal y asistencia técnica para la siembra) . ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia47 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12985,
            'year' =>1,
            'value' => 5,
            'description' => 'Se han adelantado acciones de delimitación de suelos de protección, demarcación de zonas forestales protectoras, recuperación de coberturas de protección y segumiento a los actos administrativos relacionados en las microcuencas que hacen parte de las cuencas con Pomca , entre las cuales se tienen: 1. Otún (Qda Combia, Qda Dosquebradas, Qda San José,  Qda La Florida). 2. La Vieja (Río Consota, Rio Barbas,  Río Cestillal). 3. Campoalegre (San Ramón, San Eugenio, Campoalegrito, La Samaria). 4. Risaralda (Río San Rafael,  Qda Mampay,  Río Apía, San Lorenzo, Qda Serna).',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia48 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12986,
            'year' =>1,
            'value' => 100,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia49 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12987,
            'year' =>1,
            'value' => 88,
            'description' => 'Se adelantaron procesos de reforestación y/o rehabilitación de fajas de protección de cuerpos de agua en las cuencas con POMCA adoptado, en una superficie de 68,98 Ha y en cuencas prioritarias en 8,61 Ha, a través de programas de fomento forestal y apoyo comunitario.   
        En el cuarto ( 4 ) trimestre se demarcaron 8,301 ha , distribuidos en los siguientes municipios : Apía ( 2,4 ha) , Belén de Umbría ( 2,6759 ha ) , Dosquebradas ( 0,4112 ha ) , Guática ( 0,0152 ha ) , La Virginia ( 1,7491 ha ) , Mistrató ( 0,2586 ha ) y Pereira ( 0,791 ha ) . 
        Por otra parte,  en el cuarto trimestre 2020, se demarcaron mediante delimitación de suelos de protección con resoluciones ejecutoriadas 2,321 has , distribuidas en los siguientes municipios : Dosquebradas ( 0,9957 has ) y Pereira ( 1,325 has ).',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia50 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12988,
            'year' =>1,
            'value' => 258,
            'description' => 'En materia se intervención integral de los complejos de páramos, se adelanta un trabajo conjunto entre las 4 CAR con injerencia en el Páramo Los Nevados.
        Área de páramo con proceso de conservación: A través del Proyecto Páramos, con recursos de la Unión Europea, CARDER y WCS, se intervinieron 258 Ha en proceso de restauración ecológica, que involucra restauración activa y pasiva, al interior del PNN Los Nevados, municipio de Pereira. Así mismo se elaboró un sistema de monitoreo que permite realizar el seguimiento al proceso. Se han realizado 3 monitoreos en 2018, 2019 y diciembre de 2020. El  proceso de restauración ecológica se vinculó a un proceso de generación de acuerdos de conservación que lidera Parques Nacionales con las 14 familias que habitan el PNN Los Nevados. En la actualidad se han firmado 6 acuerdos de conservación y se consolidó un documento de Esquema de Pagos por Servicios Ambientales elaborado por Parques Nacionales, IAvH, Municipio de Pereira y CARDER. La ejecución de este ejercicio de PSA, apoyará el proceso de sustitución de la actividad ganadera al interior del Parque Nevados.  
        En materia de reconversión y/o sustitución de actividades agropecuarias,y atendiendo a lo establecido en la Resolución 0886 de 2018 y la Ley 1930 de 2018, se realizó un  análisis de las coberturas al interior del páramo Los Nevados, se generó un proceso participativo con los diferentes actores sociales del páramo, generando el documento “Zonificación y Regímenes de Usos del Páramo Los Nevados”,  donde se definen las áreas de intervención en materia de reconversión o sustitución de las actividades agropecuarias. Particularmente en Risaralda, municipio de Santa Rosa de Cabal, el análisis se realizó en 4.694 Ha que corresponden a la jurisdicción de CARDER, estableciendo que se deben adelantar procesos de reconversión y restauración en 655 Ha. En las restantes Ha, el esfuerzo se debe centrar en mantener la cobertura actual. Esto se pretende lograr a través del trabajo que se desarrolle en la reconversión ganadera, optimizando la producción en menores espacios y propendiendo por acuerdos de conservación con los propietarios. Cabe anotar que en 2019, se finalizó la intervención en 80 Ha de un proceso de reconversión ganadera, que sirve como ejercicio piloto para avanzar en el proceso. Así mismo, se realizó la caracterización social de los habitantes del páramo Los Nevados y se elaboró propuesta de gobernanza, que debe ser validada por los actores sociales. Esta información es la línea base para la construcción del Plan de Manejo del Páramo Los Nevados que es el paso siguiente en el proceso de gestión de este importante ecosistema.
        En el marco de la normatividad vigente, en diciembre de 2019, se conformó la Comisión Conjunta del Páramo Los Nevados, integrada por los directores de las Corporaciones Autónomas Regionales de Risaralda, Caldas, Tolima y Quindío y Parques Nacionales, director del Subsistema Andes Occidentales. Esta instancia de carácter regional es el espacio de toma de decisiones en torno a la gestión del Páramo Los Nevados. En junio de 2020, se realizó reunión de la Comisión Conjunta donde se aprobó el documento de reglamento interno de esta instancia, Acuerdo 002 de 2020, de zonificación y regímenes de usos, Acuerdo 003 de 2020, y se acordó realizar un convenio interadministrativo para elaborar el Plan de Manejo del Páramo, todo en cumplimiento de la Ley 1930 de 2018 y la Resolución 0886 de 2018. 
        El 30 de abril, se realizó entrega de la totalidad de los productos acordados en convenio 026 de 2016, celebrado entre el IAvH y la CARDER para la ejecución del proyecto Páramos UE, para la auditoría técnica. En septiembre se elaboró la auditoría financiera por parte de la UE. Como resultado de las auditorías técnica y financiera realizadas al proyecto páramos UE, no hubo observaciones. Se procedió al cierre del mismo. Se firmó Acta de liquidación del Convenio 026 de 2016. 
        En Octubre de 2020, se realizó la primera reunion con Corantioquia, Codechocó y Parques Nacionales para tratar el tema del páramo Citará, donde se dio a conocer por parte de cada CAR, la información existente sobre el estado actual del páramo Citará en su jurisdicción y establecer pasos a seguir para avanzar en la gestión del páramo Citará.
        Se participó del 100% de reuniones programadas en el marco del cumplimiento de la sentencia que declara al PNN Nevados como sujeto de derechos. Se avanzó en la gestión para el cumplimiento de las acciones de control que exige el punto 7 de la sentencia en los municipios de Santa Rosa de Cabal y Pereira para establecer junto con los municipios puntos de control fijos al acceso al páramo y PNN Nevados. Así mismo se consolidó el documento propuesta de puntos de control en la totalidad del Páramo Los Nevados (4 departamentos, 17 municipios) y se entregó a Parques Nacionales, como coordinador del proceso.
        Se adelantó proceso para realizar convenio interadministrativo entre CARDER, Corpocaldas, Cortolima y CRQ para la elaboración del Plan de Manejo del Páramo Los Nevados, el cual fue legalizado en diciembre, Convenio interadministrativo N° 498 de 2020, y se procederá a su ejecución en 2021.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia51 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12989,
            'year' =>1,
            'value' => 0,
            'description' => 'Se actualizó la cartografía de los humedales del departamento y se entregó esta infor-mación al SIAE de la Corporación y a todos los municipios del departamento.
        Se construyó base de datos con la información de las especies de flora y fauna identi-ficados en cada una de las fichas de caracterización de los humedales y se entregó al SIAE de la Corporación.
        Se realizaron 40 visitas de campo donde se logró el acompañamiento a 4 Planes par-ciales (Chepapu y Mirador de canceles, Bosques de Álamos, Benaya), así como el se-guimiento a 24 humedales ya caracterizados por la entidad, la caracterización de cua-tro (4) nuevos humedales en los municipios de La Virginia, Santa Rosa de Cabal y Pe-reira  con una extensión de 5 Hectáreas aproximadamente, y la atención de 13 denun-cias ambientales donde se menciona la posible afectación a ecosistemas de humedal generando las medidas preventivas y/o correctivas particulares para cada caso.
        Se realizó la socialización virtual a las administraciones de 2 Acuerdos de Manejo para los Humedales del sector de Maracay.
        Se realizó la revisión desde el componente jurídico de las herramientas de gestión y procedimientos actuales de la CARDER para la identificación, caracterización y adop-ción de los humedales del departamento con el establecimiento de las propuestas de ajuste que permitan su incorporación efectiva dentro de los diferentes instrumentos de planificación del territorio, en concordancia con la normativa ambiental nacional vigen-te.
        Carder lidera la construcción participativa de Determinantes Regionales en materia de humedales, a través de la definición de una metodología para adelantar la gestión de los humedales pequeños en los departamentos que hacen parte del SIRAP EC, se han realizado 5 reuniones, y se avanza en la consolidación de la propuesta. En este sentido, CARDER lidera la construcción de metodología de agrupación de humedales con la conformación de corredores de conectividad a través de los suelos de protección en la zona baja de la cuenca del Río Otún, municipio de Pereira, como ejercicio piloto. Participan municipio de Pereira, Parques Nacionales, CARDER, Resnatur, UTP, Unisarc y, se han realizado 5 reuniones. Se avanzó en la identificación y conformación de corredores de conectividad en el polígono del Plan Parcial Parque Temático Ukuma-rí, donde se iniciará la gestión con los actores sociales, para la consolidación de los corredores.
        Se han realizado reuniones de capacitación en materia de humedales a: Alcaldía de Dosquebradas: tres reuniones; Mesa de humedales municipio de Pereira: 1 reunión; SIMAP Pereira: 2 reuniones; Veeduría ciudadana municipio de Santa Rosa de Cabal: 2 reuniones.
        Se legalizó convenio con UNISARC, donde figura un alcance para la gestión de los humedales. Se avanza en la construcción del plan operativo.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia52 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12990,
            'year' =>1,
            'value' => 10,
            'description' => 'Se elaboró Plan de Trabajo inicial para avanzar en el tema. Se realizó la revisión carto-gráfica para identificar los bosques secos en el departamento de Risaralda. Se revisó cartografía del IAvH y de la CARDER. 
        Se cuenta con la identificación de las áreas de Bosque seco del departamento. Se avanza en el análisis de conflictos de usos presente.
        Se lidera desde el SIRAP EC, un proceso de generación de Determinantes Ambienta-les Regionales en materia de Bosque Seco. A la fecha se han realizado 4 reuniones virtuales donde se avanza en la definición de lineamientos mínimos comunes para la gestión del este ecosistema.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia53 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12991,
            'year' =>1,
            'value' => 4,
            'description' => 'Se ha llevado a cabo la propagación en vivero y fomento para la siembra de especies amenazadas como el cedro negro, la caoba, el roble y el pino colombiano.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia54 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12992,
            'year' =>1,
            'value' => 2,
            'description' => 'Se están gestionando los convenios con los que se van a ejecutar las acciones de las especies (Oophaga histriónica, Ateles, 2 murciélagos). Se está construyendo el plan de acción para la Conservación de la Danta de Montaña de la Cuenca Alta del Río Otún y se atienden además las situaciones particulares que ponen en riesgo otras especies y que necesitan una intervención o medida para garantizar su conservación. Durante la vigencia 2020 se adelantaron acciones para las especies rana de Santa Cecilia (Oop-haga histriónica) y Danta de Montaña (Tapirus pinchaque).',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia55 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12993,
            'year' =>1,
            'value' => 2,
            'description' => 'Las especies priorizadas son caracol africano y pumas: Se han adelantado las siguien-tes acciones:
        1) Plan de acción de manejo de Caracol Africano (54 denuncias por presencia de Ca-racol africano),
        2) Atención de 9 denuncias conflicto por presencia de carnívoros y apoyo al proceso en el municipio de Apía para el manejo de las fincas en conflicto con pumas. 
        Además se han realizado acciones puntuales en casos particulares de otras especies de fauna silvestre en conflicto: 1 denuncia de conflicto por presencia de Oso de ante-ojos, 6 denuncias conflicto abejas, 6 denuncias por conflicto con zarigüeyas, 4 denuncias por cacería, 23 denuncias conflicto con otros animales.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia56 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12994,
            'year' =>1,
            'value' => 100,
            'description' => 'Se atendió el 100% de los individuos recibidos en el hogar de paso, que corresponden a 1342 individuos de fauna silvestre han sido atendidos en el hogar de paso, procedi-mientos asociados a la atención: 73 denuncias atendidas por tenencia de fauna silves-tre, 89 conceptos técnicos de medidas preventivas por tenencia, comercialización o cacería de fauna silvestre. 15 seguimientos a permisos o licencias de tenencia, 15 seguimientos a Resoluciones de medidas preventivas',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia57 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12995,
            'year' =>1,
            'value' => 17,
            'description' => 'Por medio de convocatoria pública se contrató la ejecución de la implementación de los planes operativos anuales de 17 áreas protegidas. Algunas de las actividades inclui-das son la administración de los centros de visitantes, las actividades de las cinco (5) líneas de gestión (ecoturismo, educación, ordenamiento, efectividad y sistemas soste-nibles). En colaboración con WWF y Parques Nacionales se realizó la evaluación de la efectividad del manejo de 16 áreas protegidas como una actividad piloto para cumpli-miento de metas en el Plan de Desarrollo del Gobierno Nacional. Se ha continuado con el proceso de elaboración de los nuevos planes de manejo de las AP con avances en los componentes de ordenamiento, zonificación y asignación de usos y cambio cli-mático, además en el convenio con FECOMAR se incluyó una actividad de socializa-ción de este proceso con las comunidades de las áreas protegidas. Con Margarita Ro-das se ha continuado el apoyo a los planes de manejo y también a la socialización con las comunidades. Se publicó la nueva Guía de Observación de aves en las áreas pro-tegidas del departamento con 2000 ejemplares que están siendo distribuidas a las per-sonas y organizaciones interesadas.  
        En el convenio CARDER - UTP se incluyeron actividades del Plan de Capacitación del SIDAP Risaralda: 4 eventos de observación de aves en 4 municipios (Belén de Umbría, Santuario, La Celia, Pueblo Rico), se hicieron tres (3) reuniones para el diseño de la metodología para la evaluación de capacidad de carga de las áreas protegidas.
        NOTA: Teniendo en cuenta que en el Convenio UTP se incluyeron acciones de capa-citación, que forman parte de los planes de manejo de las áreas protegidas y que éstas no se han ejecutado, se define que el avance físico de la meta corresponde a un 95%',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia58 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12996,
            'year' =>1,
            'value' => 9,
            'description' => 'La actividad de apoyo a los jardines botánicos esta incluida en los diferentes convenios mencionados. En el caso del convenio con FECOMAR se incluyeron los siguientes jardines botánicos: Balboa, Apia, Belén de Umbría, Guática, Quinchía, Pueblo Rico. En el convenio con la UTP se incluyó el Jardín Botánico de esa institución que es el de Pereira y lo mismo en el caso del convenio con UNISARC que es el jardín botánico de Santa Rosa de Cabal. Para el jardín botánico del municipio de Marsella la administración municipal no presentó la documentación requerida para el convenio según había sido acordado.  ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia59 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12997,
            'year' =>1,
            'value' => 14,
            'description' => 'La actividad de apoyo a los SIMAP incluye el programa de guardabosques (10) en todo el departamento,  el apoyo técnico para la adquisición de predios por el artículo 111 de la Ley 99 de 1993,. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia60 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12998,
            'year' =>1,
            'value' => 80,
            'description' => 'La Carder como Secretaría Técnica del SIRAP EC ha liderado la participación en la elaboración del Plan Estartégico y la política nacional para el SINAP. Adicionalmente se ejecutó el Convenio No 327 para el monitoreo de especies (mono aullador y pava caucana) y se firmó un nuevo convenio que incluye actividades de diferentes proyectos de CARDER y que en el caso del SIRAP EC está enfocado en las Estrategias Complementarias de Conservación. 
        En cuanto a la participación del SIRAP Pacífico: Se ha participado en 38 reuniones virtuales de SIRAP Pacífico, donde se ha tratado el tema de ejecución del proyecto GEF con FAO para ajustar el plan operativo del proyecto, bajo las circunstancias del Covd 19, que nos imposibilita el trabajo en campo. Se escogieron los representantes comunitarios al Comité directivo del proyecto. Se participó del Comité Directivo del SIRAP P, donde se escogió el representante por las Corporaciones al comité directivo del proyecto GEF, CRC. Así mismo se avanza en la armonización del plan de acción del SINAP y el plan de acción del SIRAP P. Igualmente se trabaja en la consolidación de un proyecto para presentar a Regalías. Se ha discutido el tema de la responsabilidad de la secretaría técnica del SIRAP P, pretendiendo que sea pagada a través de convenio interinstitucional y ejecutada por una de las instituciones. Se propuso solicitar al proyecto GEF asumir esta secretaría técnica para el 2021.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia61 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12999,
            'year' =>1,
            'value' => 1.1,
            'description' => 'Se lanzó el proyecto de recuperación de los guaduales urbanos, en el cual participaran las alcaldías de Pereira y Dosquebradas.
        Con el concurso de la Alcaldía de Pereira (Parques y Arborización) se dio inicio al ma-nejo de 1,1 ha del guadual urbano del barrio San Fernando, con una gestión social integral, para hacerle ver la comunidad de este barrio, la importancia de este bosque y de los bosques urbanos.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia62 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13000,
            'year' =>1,
            'value' => 53,
            'description' => 'Elaboración de documento Esquema de Pago por Servicios Ambientales para el Páramo los Nevados. Municipio de Pereira, CARDER e IAvH
        Se dio inicio al proceso de suscripción de un convenio con la CHEC quien aportará $80,000,000 para compensar familias en el año 2021
        La meta de contar con 75 hectáreas de bosques natruales compensadas no fue posible alcanzarla debido al aislamiento preventivo obligatorio. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia63 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13001,
            'year' =>1,
            'value' => 0,
            'description' => 'Se acordó con el municipio de Pereira y representantes de las reservas, apoyar los Planes de Manejo de las Reservas, pero los representantes de las reservas no presentaron la propuesta a la CARDER, conforme a lo acordado',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia64 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13002,
            'year' =>1,
            'value' => 100,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia65 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13003,
            'year' =>1,
            'value' => 14,
            'description' => 'Se ha realizado asistencia técnica a los municipios de Apía, Balboa, Dosquebradas, La Celia, Marsella, Mistrató, Santuario, Santa Rosa de Cabal, Pueblo Rico y Pereira, en temas relacionados con el Plan Municipal de Gestión del Riesgo de Desastres – PMGRD, la Estrategia Municipal de Respuesta a Emergencias - EMRE, Variabilidad y Cambio Climático y la incorporación de la gestión del riesgo en el ordenamiento territorial. Durante el primer semestre, se revisó la inclusión de los temas de relacionados con la gestión del riesgo en los planes de desarrollo de los 14 municipios del departamento y se hicieron las recomendaciones particulares en cada caso para que los municipios mejoraran dicho componente en los PDM. Se brindó asesoría y acompañamiento para la incorporación de la gestión del riesgo en instrumentos de planificación y ordenamiento del territorio (POTs, Planes Parciales, etc) con los municipios de Pereira, Dosquebradas y La Virginia',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia66 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13004,
            'year' =>1,
            'value' => 14,
            'description' => 'Durante el transcurso del año, se recibieron 526 solicitudes de diferente índole, como son: para visitas de valoración de situaciones de amenaza y riesgo, comunicados internos, informes técnicos de entes territoriales, solicitud de información entre otros; de las cuales 258 solicitudes fueron para visitas de valoración de situaciones de amenaza y riesgo (9 Apia, 2 Balboa, 4 Belén de Umbría, 240 Dosquebradas, 5 La Virginia, 20 Marsella, 165 Pereira, 32 Santa Rosa de Cabal, 2 Guática, 2 La Celia, 10 Pueblo Rico, 9 Quinchía y 5 Santuario, el resto son de orden Nacional), las demás incluyen respuesta por oficio, invitaciones a reuniones y documentos de carácter informativo Además se  realizaron recorridos en Marsella con Planeación Municipal y Departamental, DIGER, CORPOCALDAS, Chinchiná visita a 10 sitios puntuales del municipio, con la Oficina Verde se realizó recorrido a predios afectados en la cuenca del río San Francisco Pereira Marsella. Así mismo se realizó acompañamiento y asesoría al municipio de Dosquebradas durante los recorridos conjuntos a los diferentes procesos de Gestión del Riesgo. Se realizó visita de seguimiento a la siembra de material vegetal sembrado y se entregó alrededor de 8500 plántulas que corresponden a 2125 metros lineales de barreras vivas y mateado para mitigación del riesgo en diferentes procesos erosivos presentados además de las asesorías prestadas en la realización de obras biomecánicas,  Se realizó seguimiento a siembras del año anterior como es el caso del predio La Palma en la zona rural de la vereda La Cima, en Dosquebradas y el conjunto residencial Puerto Madeiro I en la zona urbana. Se realizó acompañamiento a la OAJ y SGAT para manejo de los guaduales del barrio San Fernando en Pereira. Se realizó Apoyo para el apoyo de aprovechamiento y siembra de compensación forestal del C.I y así mismo se realizó acompañamiento a la OAJ y OAP a los expedientes jurídicos y del ANLA por solicitudes internas..
        Se llevó a cabo apoyo a diferentes comunidades donde se presentan condiciones de riesgo, como lo son a las comunidades del barrio las colonias del municipio de Pereira, a la Institución Educativa Nuestra Señora del Rosario que comprende 10 comunidades del municipio de Belén de Umbría. De igual manera se han asesorado de manera virtual y presencial a las comunidades que han sido acompañadas en la formulación de los planes comunitarios de gestión de riesgos en años anteriores como es el caso de La Florida en Pereira y en Santa Rosa de Cabal CAMPOALEGRE/ESTACION y RIO CAMPOALEGRE (Fermín López, Yarumal, Santa Rita). En el municipio de Dosquebradas se llevaron a cabo visitas de seguimiento a las comunidades de COMUNEROS y ALTO DEL TORO y en el municipio de Pereira las comunidades de PLAN MANZANO y de GALICIA Las Colonias. Así mismo, tanto de manera virtual como presencial, se acompañó a la organización de mujeres Ecolonias del barrio Galicia y a la profesional que las asesora, tanto para la formulación y radicación del PROCEDA a la entidad, como en la cualificación de su organización para guiar el desarrollo de su quehacer en cuanto a la protección y cuidado del medio ambiente con la visión y línea de desarrollo sostenible, en aras de la mitigación del riesgo en su comunidad. Así mismo, se realizó la exposición ante el grupo sobre la participación en el diplomado “Viviendo mi cuenca”, del proyecto vivamos la cuenca de la universidad Católica, al cual se le brindaron tres cupos para participar y se les realizó la inscripción. Igualmente se acompaño a los funcionarios y contratistas de cultura ambiental y participación ciudadana en conjunto con los usuarios y las comunidades que se presentaron en los proyectos de los PROCEDAS de la Entidad, en las cuales se apoyaron con asesorías a las proyectos formulados que radicaron en fecha hasta el 29 de mayo, en la temática de gestión de riesgos y en la socialización de estrategias educativas para el sector educativo como la formulación de planes escolares de gestión de riesgos.
        Se realizó acompañamiento a las zonas protegidas y de reserva natural (11 de octubre, sector Yarumal, sendero ecológico, 1 de noviembre, sector La Florida- La Vara, ingreso hacia la Pastora)
        Se llevo a cabo visita a la Nona en compañía de profesionales de la Corporación junto con el comandante de Bomberos del municipio de Marsella, en la que se realizó reunión con la representante de FECOMAR, grupo que se encarga del cuidado de las áreas naturales protegidas, en el desarrollo del tema comisión permanente de cobertura vegetal; con el fin de programar acciones de educación en el tema al grupo, encargado del cuidado de las áreas naturales protegidas de la corporación. Así mismo se definió la actualización y complementación de una estrategia de corresponsabilidad para la divulgación a comunidades vulnerables ante riesgo de incendios de cobertura vegetal
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia67 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13005,
            'year' =>1,
            'value' => 67,
            'description' => 'Para el año 2020  se priorizó la intervención en la quebrada Cedritos del centro poblado La Florida (del proyecto de construcción de obras de reducción del riesgo) y consultoría para los estudios de Amenaza y Riesgo para el municipio de Santa Rosa, pero estos no fueron alcanzaron a ser publicados.
        Se reporta un avance del 67% ya que las obras de la vigencia anterior correspondien-tes a las contrataciones 478 de 2019 (Pereira) y la adición del contrato de obra 518 de 2016 (Belén de Umbría), con las cuales se realizaron obras de estabilidad de laderas y protección de cauces por un valor de más 1.100 millones de pesos y se han interveni-do 900 M2.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia68 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13006,
            'year' =>1,
            'value' => 1,
            'description' => 'Se ha realizado la coordinación de acciones para recuperación y puesta en marcha del puesto de control sector La Linda municipio de Santa Rosa de Cabal, en el marco de la planeación de acciones para la prevención de incendios de cobertura vegetal y la implementación de la Estrategia de Corresponsabilidad Social en la lucha contra los Incendios Forestales. Se coordinó y participó en las reuniones de la Comisión Permanente de Incendios de cobertura vegetal de Risaralda y el seguimiento a sus acciones. Se realizó difusión de información relacionada con alertas por incendios de cobertura vegetal emitidas por el IDEAM, para el alistamiento orientado a la toma de decisiones territoriales en la prevención de este tipo de eventos. Se realizó asistencia técnica para la identificación y descripción de escenario de riesgos por incendios de cobertura Vegetal en el marco de la actualización del Plan Municipal de Gestión del riesgo de Sta Rosa de Cabal. Se realizó asistencia técnica al municipio de la Celia para la actualización del Plan de Contingencia de Incendios Forestales. Se realizó Asistencia técnica al municipio de Marsella en la formulación del plan municipal de gestión del riesgo y la incorporación del cambio climático a través de la hoja de ruta. .Se recopiló información relacionada con la ocurrencia de ICV en el departamento.
        Se visitaron las estaciones de bomberos de 12 municipios del departamento (Dosquebradas, Santuario, Apía, Santa Rosa de Cabal, La Celia, Balboa, La Virginia, Belén de Umbría, Guática, Pueblo Rico, Marsella, Mistrató), con el propósito de evidenciar la preparación para atención de incendios de cobertura vegetal respecto a herramientas, equipo y personal. Se visitaron los centros de Visitantes del Distrito de Conservación de suelos de Campo alegre (Santa Rosa de C.) y Distrito de Manejo Integrado Planes de San Rafael (Santuario), Visita al parque regional natural Santa Emilia – Belén de Umbría, visita al centro de visitantes Las Hortensias del Distrito de Conservación de Suelos Alto del Nudo en el municipio de Dosquebradas, con el objeto de evidenciar ubicación y estado de herramientas para atención de incendios forestales al interior del sistema de áreas protegidas del departamento. Se realizó recorrido de monitoreo y verificación condiciones ocurrencia de incendios de cobertura vegetal en el sector Potreros-La Linda-Potosí en el PNN Los Nevados. Se han enviado reportes de alertas y ocurrencias de eventos hidrometeorológicos al sistema departamental de gestión del riesgo de desastres. Además se está elaborando documento con la estrategia de capacitación y participación comunitaria para la educación en la prevención de incendios forestales en el departamento de Risaralda.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia69 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13007,
            'year' =>1,
            'value' => 100,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia70 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13008,
            'year' =>1,
            'value' => 100,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia71 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13009,
            'year' =>1,
            'value' => 4,
            'description' => 'SE AVANZA EN ACTIVIDADES EN EL MARCO DE LAS ESTRATEGIAS DE PIGCCT 
        1. Estrategia de Articulación de Actores y Coordinación Interinstitucional: La socialización del plan integral de gestión de cambio climático PIGCCT en diferentes instancias, con el fin de promover su implementación.
        La construcción de un formulario en conjunto con la gobernación de Risaralda, para la recopilación de datos de actores que tienen que ver con la gestión de cambio climático 
        2.Estrategia de Educación: se logro realizar 34 actividades de sensibilización y capacitación, Se ha avanzado en acciones en el marco de la estrategia de comunicación y sensibilización, en lo relacionado con: 
        Se realizó capacitación con los funcionarios de oficinas verdes de la corporación, a través de sobre los conceptos básicos de cambio climático, el contenido del plan departamental de gestión del cambio climático y los perfiles climáticos territoriales.
        Se participó en el evento virtual “Elementos de política pública en la educación ambiental” con una ponencia sobre lineamientos sobre cambio climático, dirigido a actores relacionados con la educación ambiental en el departamento.
        Se avanzó en la construcción de la plataforma de comunicación virtual en GoogleSite, para interactuar sobre temas y procesos de cambio climático en el Departamento (a cargo de Alejandro Vanegas)
        Se participó en el programa de Telecafe “Tomenota” en donde se presentó como tema del día” cambio climático y conservación de los ecosistemas”, espacio en el que se socializo información sobre conceptos y procesos de variabilidad climática y cambio climático.
        Se participó en el panel desde la Subdirección de gestión ambiental territorial de la corporación , en el evento de la unidad nacional de gestión del riesgo de desastres UNGRD, “De la Planificación a la Acción: experiencias en la articulación de la gestión del riesgo y la adaptación al cambio climático” en el marco de mes de la reducción del riesgo de desastres, con la Presentación 2: Hoja de Ruta para la  incorporación de la variabilidad y cambio climático en los planes municipales de gestión de riesgo de desastres. Este evento contó con la participación de otros panelistas de NAP Global Network, Dirección de Adaptación al Cambio Climático y Desertificación Ministerio del Ambiente del Perú y Fondo Adaptación. 
        Consolidación y organización de la información sobre cambio climático para alimentar el enlace virtual (link de cambio climático) en la página web de la corporación. 
        3.Estrategia de Financiamiento: La participación en un curso de financiamiento climático, en el marco del Nodo regional de cambio climático, el cual brindo información que se publicara para acceso a los actores involucrados, en aras de fortalecer el conocimiento para la gestión de los proyectos en esta materia.
        4. Estrategia Monitoreo Reporte y Verificación -MRV: elaboración de la línea base de indicadores del PDGCC de Risaralda,  en lo correspondiente a las competencias de la corporación, la cual fue socializada a secretarías de planeación, SIGAM de 6 municipios (Dosquebradas, Guática, Mistrató, Pereira, La Celia y Belén de Umbría)',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia72 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13010,
            'year' =>1,
            'value' => 8,
            'description' => 'Se realiza acompañamiento técnico a  8  programas del Plan de Acción 2020 - 2023:   
        Programa 1 Gestión ambiental participativa: Se revisó y ajustó el plan integral de gestión de cambio climático de Risaralda- PIGCCT a partir de las sugerencias de forma y fondo realizadas por los funcionarios de la Corporación, y se envió a la oficina de comunicaciones para su publicación en página web.  
        Se realizó asistencia técnica a la secretaria de desarrollo agropecuario y gestión ambiental de Dosquebradas, en cuanto a la orientación para la implementación de la estrategia municipal de gestión y adaptación al cambio Climático de Dosquebradas. 
        Se consolida una matriz de Excel con el propósito de recopilar la información sobre acciones de adaptación y mitigación que se desarrollan en la corporación en el marco de la implementación del Plan integral de cambio climático- PIGCCT, y además su relación con las líneas del PGAR. 
        Se participó en la mesa del PGAR de la Línea de Gestión de Riesgos Territoriales y Cambio Climático. 
        Programa 2. Planificación y ordenamiento ambiental: Acompañamiento en la  incorporación de la determinante ambiental de cambio climático en los  planes de desarrollo municipal.
        Se realizó en coordinación con el equipo técnico de ordenamiento, asistencia técnica al municipio de la Virginia sobre los ajustes al PBOT en cuanto a la inclusión de aspectos de cambio climático, para lo cual se envió además el perfil climático territorial. 
        Se realiza asistencia técnica sobre la temática de cambio climático, en coordinación con el equipo de ordenamiento territorial de la corporación, al Municipio de Dosquebradas, para lo cual se revisó el documento enviado por el municipio sobre la incorporación de los lineamientos de cambio climático y los avances en la actualización del plan de ordenamiento.
        Se participó en la jornada de Asistencia técnica sobre la incorporación de la gestión del riesgo y variabilidad y cambio climático en el proceso de revisión y ajuste del POT de Pereira, coordinada por el equipo técnico de ordenamiento de la corporación. 
        Se participó en la reunión con el equipo de ordenamiento de la corporación, con el objeto de concretar las observaciones sobre los estudios de amenaza del municipio de Balboa en el marco del proceso de revisión del EOT
        Programa 3 educación ambiental: Indicador compartido y reportado en la estrategia de educación, formación y sensibilización de la Subactividad No 1,  Se avanzó en la organización de las tablas dinámicas que consolidan la información de las estaciones meteorológicas, para lo cual se realizaron varias reuniones entre el equipo técnico de cambio climático.
        Programa 4 control y seguimiento ambiental: Se realizó seguimiento y mantenimiento a 10 estaciones meteorológicas instaladas como parte del proyecto de adaptación al cambio climático,  
        Programa 5. Seguridad hídrica: acompañamiento en la mesa técnica del POMCA del rio la Vieja, 
        Programa 6. Gestión de la biodiversidad y ecosistemas del departamento: Se participa en el proceso de actualización de los Planes de Manejo y elaborar cronograma de trabajo, vigencia 2020, en cuanto a la incorporación de los lineamientos de cambio climático. 
        Se participó en el proceso de socialización del proyecto REDD+ en los Bosques de la cuenca del río Otún, desarrollado por Aguas y Aguas, con el apoyo de South Pole Carbón Asset Management S.A.S. El proyecto de mitigación al cambio climático REDD+, tiene como principal propósito reducir las emisiones de Gases de Efecto Invernadero (GEI) por deforestación evitada, mediante la captura de carbono por parte de las masas de bosque natural ubicados en los predios titulares de la empresa, sobre la cuenca del río Otún.
        Programa 7. Gestión del riesgo de desastres: Se avanzó en el proceso de coordinación con los equipos de gestión del riesgo, cambio climático y ordenamiento para el ajuste y actualización de las determinantes ambientales de gestión del riesgo y cambio climático. 
        Se participó en la reunión sobre el sistema de alertas tempranas convocada por el funcionario Jaime Guzmán, en donde los participantes suministraron información sobre las estaciones ubicadas en el Departamento, como insumo para la Unidad Nacional de Gestión del Riesgo. 
        Programa 10 Sistemas productivos sostenibles: Se apoya la conformación de la mesa técnica agroclimática para el Municipio de Pereira, en coordinación con la secretaria de desarrollo rural y gestión ambiental del Municipio de Pereira, para lo cual se coordinaron y realizaron cuatro jornadas de alfabetización agroclimática con ponencias de representantes de  CIAT,  FAO, el Programa Mundial de Alimentos y la Universidad Autónoma de Manizales, entre otros.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia73 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13011,
            'year' =>1,
            'value' => 1,
            'description' => 'Número de espacios de coordinación para gestión del cambio climático en el marco del sisclima, con participación y asesoría de la entidad.
        En el marco del SISCLIMA, la corporación hace parte del Nodo regional de cambio climático eje cafetero, al respecto en este espacio de coordinación se han realizado las siguientes acciones: 
        Se apoyó la revisión, ajuste y consolidación del plan de acción del nodo para la vigencia 2020 – 2023. 
        Se apoyó la revisión y sugerencias de ajustes para la actualización del decreto 298 Sisclima, se apoyó la revisión y ajuste del manual de funciones.
        Se participó en diferentes reuniones generales del Nodo regional de cambio climático, en donde se trabajaron temas como: Presentación del proyecto “Salud Ambiental en 5 departamentos de la región Central de Colombia,  check list de buenas prácticas para los planes integrales de gestión de PIGCCT, Proyecto Climate Labs, ruta boletín agroclimático y salud, avances en los procesos del Nodo. 
        Se ha participado en diferentes espacios de fortalecimiento para la gestión del cambio climático, liderados por el Ministerio de ambiente y desarrollo sostenible y el Nodo regional de cambio climático: Charla “Estado actual y perspectivas del mercado colombiano de carbono, Talleres para la contextualización y actualización de las NDC de mitigación y adaptación, estrategia 2050, espacio de fortalecimiento de capacidades técnicas para la primera temporada de lluvias del año 2020, conferencia: “Conceptos generales en mitigación de GEI, mercados de carbono y RENARE” Nodos-MinAmbiente, Socialización del Plan integral de cambio climático Sectorial Minero Energético PIGCCME, realizado por el Ministerio de ambiente y desarrollo sostenible,  se  participó  en el proceso de concertación y construcción colectiva PIGCC ambiente. 
        Se realizó y coordinó la construcción de línea Fortalecimiento de Política y fortalecimiento de capacidades en el marco del plan de acción Nodo Regional de cambio climático eje cafetero.
        Se atendió una entrevista del Fondo Acción, en el marco del desarrollo del proyecto que busca fortalecer la colaboración climática entre diferentes niveles de gobierno como medio para aumentar la ambición climática y liberar el potencial climático en las ciudades y regiones. La entrevista fue relacionada con la gobernanza climática a múltiples niveles y la acción climática colaborativa en Colombia.
        Se participó en la reunión con    entidades   del   nodo   eje   cafetero   sobre   avances   del proceso   de   contratación   para   la   formulación   del proyecto   de   escuelas   bioclimáticas, en donde se presentó el estado de formulación y se habló sobre los requerimientos de información. 
        Se apoyó la construcción de una propuesta de convenio entre las entidades pertenecientes al Nodo regional para el fortalecimiento de capacidades y la construcción de una base de datos con los proyectos de la ecorregión. 
        Se revisó el documento de sistematización “Nodo Regional de cambio climático: Diez años de lecciones aprendidas” se realizaron sugerencias de ajuste al documento.
        Se realizó la presentación del PIGCCT de Risaralda en el marco del Nodo regional de cambio climático, en la reunión del consejo de cuenca de Campoalegre.
        Se participó en el panel del foro sobre cambio climático “Acción Climática Quindío 2030” realizado el 8 de septiembre, en donde la temática fue el funcionamiento y experiencias del Nodo regional. 
        Por otra parte, en el marco de la RAP eje cafetero, se participó en un espacio para la socialización de la determinante ambiental   de cambio climático, en aras de la articulación de procesos de acuerdo a los lineamientos de esta instancia.
        Se conformó y consolidó la Mesa Técnica Agroclimática y se generó el primer boletín, el cual fue publicado en la página del IDEAM, se emitió comunicado de prensa y se socializó a los funcionarios de la Corporación
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia74 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13012,
            'year' =>1,
            'value' => 100,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia75 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13013,
            'year' =>1,
            'value' => 134,
            'description' => 'Se realizaron visitas de verificación de otorgamientos (concesión de aguas superficiales / subterráneas) vencidos, correspondientes a 129 expedientes, dato que obedece actos administrativos otorgados en el año 2009 y 2010; lo anterior, de acuerdo a reporte obtenido del aplicativo de Seguimientos.                                                                                                                   Se ejecutó revisión documental de 134 expedientes relacionados en la Base de Datos (BD) TUA que cuentan con resoluciones de concesión de aguas (superficiales / subterráneas) vencidas; de los cuales 125 se realizó en el marco del Plan de Mejoramiento suscrito por la SGAS (3 de estos, fueron visitados) y nueve (9) obedecen al proceso de legalización de acueductos, que consiste en brindar orientación a los usuarios del recurso hídrico en legalización de trámites ambientales y capacitación en Uso Eficiente y Ahorro del Agua.
        Se realizaron siete (7) visitas de verificación de uso o no del recurso y visitas de evaluación; éstas últimas, producto principalmente del proceso de legalización de acueductos. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia76 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13014,
            'year' =>1,
            'value' => 0,
            'description' => 'Saneamiento Rural: Se priorizaron noventa (90) Sistemas de Tratamiento de Aguas Residuales domésticas en zona rural del departamento.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia77 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13015,
            'year' =>1,
            'value' => 27,
            'description' => 'El seguimiento a residuos no peligrosos, incluye los siguientes sectores:
        1. Seguimiento a Rellenos sanitarios: en la vigencia 2020 se hicieron seis (6) seguimientos al Relleno Sanitario La Glorita (Pereira) y cuatro (4) al Relleno Río Grande (Quinchía)
        2. Seguimiento a Plantas de Aprovechamiento de Residuos Sólidos - PARS: en la vigencia 2020 se hizo seguimiento a cinco (5) PARS (Belén de Umbría, Santuario, Mistrató, Pueblo Rico y Quinchía).
        3. Seguimiento a Residuos de construcción y demolición - RCD: Se han evaluado 91 planes de Manejo de RCD, se han atendido 7 denuncias relacionadas con inadecuado manejo y disposición de RCD, se han realizado 100 visitas de control y seguimiento a generadores de RCD, 2 visitas de viabilidad a sitios de disposición final de RCD y visita de control y seguimiento a 4 gestores de RCD, se dio respuesta a diferentes usuarios sobre la temática.
        4. Seguimiento a generadores de Aceite de Cocina Usado - ACU: Se han evaluado 37 informes de generadores de ACU y  8 informes de gestores de ACU, se ha evaluado 6  Planes de Contingencia para recolección y transporte de ACU, se han realizado 106 visitas de seguimiento y control al manejo de ACU, 6 seguimientos a gestores de ACU y atención a 2 denuncias en la temática.
        5. Seguimiento a generadores y gestores de llantas usadas: Se han realizado 21 visitas a generadores de llantas usadas, se han evaluado 4 informes de comercializadores relacionados con bolsas plásticas y acompañamiento a 2 operativos para seguimiento y control de transporte y manejo de gallinaza.
        6. Seguimiento a bolsas plásticas: Revisión de los 13 informes radicados del programa de aprovechamiento de bolsas plásticas.
        Considerando las bases de datos de RCD (38 usuarios) y ACU (101 inscritos)  para el establecimiento de la meta, en la vigencia 2020 se alcanzó un cumplimiento del 27%. Adicionalmente a las bases de datos de ACU y RCD se hizo seguimiento a 102 usuarios nuevos de ACU y 81 usuarios nuevos de RCD.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia78 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13016,
            'year' =>1,
            'value' => 57,
            'description' => 'El seguimiento  a los residuos peligrosos, incluye las siguientes temáticas:
        1. Evaluación de Informes de Gestión Ambiental – IGAS: Se han evaluado 234 Informes de Gestión Ambiental IGA, 3 informes correspondientes a lodos papeleros.
        2. Seguimiento a gestores de Residuos Peligrosos - RESPEL: se evaluaron 14 informes de gestores RESPEL, se ha realizado seguimiento a 17 gestores de RESPEL y se han evaluado 11 planes de Contingencia para transporte y recolección de residuos Peligrosos. 
        3. Seguimiento a generadores de Residuos Peligrosos: Se han realizado 377 visitas a generadores de residuos peligrosos, 20 visitas a comercializadores de Plaguicidas, atención a 5 denuncias en manejo de residuos RESPEL y 58 seguimientos a usuarios de PCB. Se han atendido 15 solicitudes de DGA sobre inscripción y actualización, se ha revisado en las visitas de control y seguimiento el funcionamiento de DGA.
        5. Seguimiento plataformas IDEAM: se han registrado 38 usuarios en el registro de generadores RESPEL y Registro Único Ambiental - RUA, se han activado 8 usuarios en el inventario Nacional de PCB, se ha transmitido en las plataformas del IDEAM 332 usuarios del registro de generadores RESPEL, 56 del Registro RUA y 122 del Inventario Nacional de PCB, se ha dado respuesta a usuarios sobre plataformas RESPEL, RUA y PCB, se dio respuesta a los datos atípicos de la información diligenciada en el Registro Único Ambiental – RUA, RESPEL Y PCB.   Se impuso medidas preventivas por el no diligenciamiento de plataforma a 21 usuarios RUA y 131 usuarios RESPEL, se construyeron los informes relacionados con RUA, RESPEL y PCB, los cuales se publicaron en página web entidad. Se participó en el encuentro de Autoridades Ambientales en el tema de Generadores RESPEL, RUA e Inventario de PCB, se asistió al encuentro de las Autoridades Ambientales con el Ministerio de Ambiente y Desarrollo Sostenible, se participó en el curso de manejo de plataforma RUA.
        6. Atención usuarios y asistencia comités: Se ha dado respuesta a las diferentes solicitudes de los usuarios por SAIA, incluidas las respuestas a la procuraduría, contraloría y Ministerios, se han atendido diferentes usuarios de manera virtual y telefónica. Se ha asistido a las reuniones de los consejos de Plaguicidas locales y al departamental que se han programados, asistencia a reuniones de la mesa de riesgo químico, se ha participado en las reuniones del COTSA, asistencia a reuniones del programa REGAR y se ha participado del grupo de licencias ambientales en las reuniones, evaluaciones y seguimientos.
        Considerando las bases de datos de generadores de residuos peligrosos (489 inscritos) y la base de datos de los gestores autorizados (19) para el establecimiento de la meta, en la vigencia 2020 se alcanzó un cumplimiento del 57%. Adicionalmente a las bases de datos de generadores RESPEL inscritos se hizo seguimiento a 248 usuarios nuevos.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia79 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13017,
            'year' =>1,
            'value' => 14,
            'description' => 'La asesoría a los 14 municipios incluye las siguientes actividades: 
        Evaluación, seguimiento, asesoría y control al programa de aprovechamiento de los Planes de Gestión Integral de Residuos Sólidos – PGIRS de los 14 municipios del Departamento',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia80 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13018,
            'year' =>1,
            'value' => 1,
            'description' => 'Las acciones para la gestión integral de residuos incluyen para el año 2020 las siguientes: actividades:
        Jornadas de recolección de residuos peligrosos posconsumo apoyadas en el departamento: 1. Se realizó acompañamiento a dos jornadas de recolección de residuos de uso agrícola, se realizó y participó en la organización de 2 jornadas posconsumo en el departamento de Risaralda, en el cual participaron 13 de los 14 municipios, 1 para Pereira y Dosquebradas y otra para el restante de los municipios excepto Quinchia. Los residuos recolectados en la Jornada corresponden a: Baterías plomo ácido, llantas usadas, electrodomésticos línea blanca, medicamentos humanos y veterinarios, envases y empaques vacíos de plaguicidas de uso agrícola, computadores y periféricos, insecticidas domésticos, residuos de iluminación, aceite de cocina usado, residuos de pilas y baterías y otros electrodomésticos o residuos de aparatos eléctricos y electrónicos, recolectando aproximadamente  37 toneladas en el departamento. 
        2. Se realizó webinar educativo sobre manejo de residuos peligrosos posconsumo.
        3. Se participó a las reuniones programadas del Comité Metropolitano de Residuos Peligrosos, del cual hace parte la entidad.  ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia81 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13019,
            'year' =>1,
            'value' => 0,
            'description' => '1. Participación en el taller nacional de actualización y ajuste de la Política de Gestión Ambiental Urbana y espacios públicos verdes.  
        2. MOVILIDAD: Asistencia a la audiencia juzgado primero administrativo de Pereira respuestas sobre paraderos satélite de transporte público sector San José. 
        3. Participación en el Workshop Sector Ambiente, acciones, actividades e intenciones que desde el marco de la transformación digital del Sistema de Información Ambiental de Colombia (SIAC). 
        4. RUIDO: Evaluación de cinco informes de ruido de emisión por seguimiento en Perei-ra y Dosquebradas; evaluación de tres informes de ruido ambiental en Pereira y Dos-quebradas. 
        5. Capacitación: Territorios sostenibles: guía de obligaciones ambientales para alcal-días y gobernaciones - Procuraduría General de la Nación. 
        6. Asistencia a reuniones preliminares para el proceso de convenio interadministrativo con el Instituto de Movilidad de Pereira para ejecución de los operativos de verificación de fuentes móviles en vía pública 
        7. Gestión para el proceso de enajenación de bienes de los convenios 3111 y 317 fir-mados con el Ministerio de Ambiente con recursos del FONAM para recibir equipos de manera gratuita para fortalecer el SVCA.  
        8. Reunión con funcionarios de la secretaría de gobierno para la conformación de la mesa técnica de calidad del aire e inversión del municipio de Pereira en calidad del aire ajustado al plan de Desarrollo.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia82 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13020,
            'year' =>1,
            'value' => 100,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia83 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13021,
            'year' =>1,
            'value' => 15,
            'description' => 'Conjuntamente con la Secretaría de Agricultura y Gestión Ambiental de Dosquebradas se apoyaron 15 predios en implementación de Agricultura de Conservación (Veredas: La Unión, Santa Ana, La Fría y Sabanitas).',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia84 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13022,
            'year' =>1,
            'value' => 538,
            'description' => '1. Sistemas Agroforestales:
        Se continuó con el fomento de los sistemas agroforestales lográndose el establecimiento de 30.86 Ha  en los diferentes municipioscon acciones directas de la entidad y 29 Ha a través del convenio 408 con Comité de Cafeteros 
        En el marco del Convenio de Asociación (408) suscrito con la Federación Nacional de Cafeteros de Colombia-KFW se establecieron 70 Ha de plantaciones homogeneas y 200 Ha de Sistemas Agroforestales en la cuenca Risaralda y se fomentó el establecimiento de . 40,84 Ha, así: Apía (0,08 Ha), Belén  (7,77 Ha), Dosquebradas (4,52 Ha), La Celia (1,07 Ha), Marsella (2,03 Ha), Mistrató (5,29 Ha), Pereira (4,38 Ha), Pueblo Rico (0,71 Ha), Balboa (3,81 Ha), Guática ( 0,36 Ha ) , Santa Rosa de Cabal (0,22 Ha) y Santuario (10,6 Ha).
        Se adicionó el Convenio N° 408 del 2019 con Federación Nacional de Cafeteros para el proyecto forestal de la cuenca Risaralda. Se suscribió Convenio N° 242 del 2020 con la Asociación El Campo en Construcción Ambiental para producción de material vegetal. Se apoyó establecimiento de 47,3 Ha de sistemas agroforestales 
        Entre los meses de octubre y noviembre se apoyó establecimiento de 8,406 Ha en Pereira (5,566 Ha), Belén de Umbría (2,62 Ha) y Mistrató (0,22 Ha), al  final del cuarto trimestre se reportó el fomento 76,1 Ha  de sistemas agroforestales adicionales para un total de 84,50 Ha en el trimestre.
        2. Reconversión ganadera: Se establecieron 35 Ha, de Sistemas Silvopastoriles en los municipios de Pereira, Santa Rosa de Cabal y Mistrató.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia85 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13023,
            'year' =>1,
            'value' => 0,
            'description' => 'El convenio con Masbosque se inició el 20 de diciembre, se giró el anticipo del 30% del valor del convenio; se adelantó la primera reunión para definir los parámetros iniciales de ejecución y socialización de especificaciones para las actividades incluidas en este Convenio',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia86 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13024,
            'year' =>1,
            'value' => 3,
            'description' => 'Para el control biológico de la mosca se tiene un contratista de apoyo en el Laboratorio existente en el corregimiento de la Florida municipio de Pereira, y para el control mecánico y cultural otro contratista que tiene como área de influencia la cuenca media alta del río Otún Municipios de Santa Rosa de Cabal y Pereira.
        En Guática, para el control biológico de la mosca se tiene un contratista de apoyo en el laboratorio existente en la vereda Las Lomas y para el   control mecánico y cultural, otro contratista que trabaja en el área urbana del municipio e incluye veredas como Ospirma, Las Lomas.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia87 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13025,
            'year' =>1,
            'value' => 10,
            'description' => 'Se suscribieron 10 Agendas Ambientales: Asocolflores; ANDI; FENALCO; IMZACOM; Comité de Cafeteros;; PORKCOLOMBIA; CorpoHass; FEDEPANELA. CAMACOL, Turismo Dosquebradas',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia88 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13026,
            'year' =>1,
            'value' => 100,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia89 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13027,
            'year' =>1,
            'value' => 25,
            'description' => 'Se continúa con la ejecución de actividades de siete Líneas Estratégicas del Programa Regional de Negocios Verdes. 
        Para la línea (1) Comunicación, posicionamiento y sensibilización, se elaboró el ma-terial y se realizó la campaña de CARDER del mes de Octubre denominado el “Mes de los Negocios Verdes”, la cual incluyó material gráfico y audiovisual. Se apoyó el proce-so de Plan de Medios de CRADER en el tema de Negocios Verdes. Se realizaron reuniones con la empresa privada para promover la vinculación de las organizaciones de Negocios Verdes como beneficiarios de los procesos de Responsabilidad Social Empresarial del departamento, y se diseñó una estrategia dirigida a la empresa privada para la vinculación como proveedores de productos/servicios de Negocios Verdes.  Se contrató el desarrollo de la tercera versión del concurso de Negocios Verdes de Risa-ralda en el marco del Convenio con la UTP. Para el Sistema Participativo de Garantía para Agriculturas Alternativas y la Marca Negocios Verdes se realizó en el proceso de las reuniones de socialización del programa de Negocios Verdes en los 14 municipios del departamento. 
        En la línea (2) Política y Normatividad, se continua con el apoyo a la Asociación de Cesteros de Risaralda para el cumplimiento de los requisitos para el aprovechamiento de los productos no maderables del bosque y se inició internamente el proceso de ela-boración del Concepto Técnico para otorgar el permiso. Se realizó la compilación nor-mativa relacionada con Negocios Verdes y se incluyó en el site de Negocios Verdes.  
        En la línea (3) Recursos/incentivos económicos y financieros se apoyó la formula-ción de proyectos a organizaciones de Negocios Verdes para acceder a convocatorias. Se realizó divulgación del Programa de Negocios Verdes en la RAP Eje Cafetero con el promover el desarrollo y fomento del tema a nivel regional. A través de reuniones de socialización del programa de Negocios Verdes a nivel municipal se verifico la incorpo-ración del tema de manera específica o con acciones que contribuyen en los 14 planes de desarrollo municipal y el Plan de Desarrollo Departamental, garantizando la asigna-ción de recursos para el tema en el departamento.  
        En la línea (4) Acceso Mercados, se apoyó el desarrollo del mercado virtual del Mer-cado Alimentos para la Vida a la UTP, se difundieron capacitaciones y opciones de comercio virtual a las organizaciones de Negocios Verdes. Se recopiló la información para la elaboración del Portafolio de Negocios Verdes de Risaralda 2020 y se realizó su diseño como herramienta de promoción y difusión. En la campaña de Negocios Verdes realizada en el mes de octubre se promovió el fomento al consumo consciente. Se apoyó a las organizaciones de Negocios Verdes interesadas en iniciar el proceso de registro sanitario como un requisito a cumplir para acceder a espacios de comercia-lización.  
        En la línea (5) Coordinación y Articulación Institucional se realizó reunión del Nodo de Negocios Verdes y se socializó el plan de acción del Programa Regional de Nego-cios Verdes de Risaralda 2020-2024 (mediano plazo). Se realizó jornada de trasferen-cia al Nodo de Negocios Verdes y a la Red de Emprendimiento de Risaralda de la Es-trategia de Guía Metodológica de Emprendimientos Verdes e Inclusivos Verdes del Mi-nisterio de Ambiente y Desarrollo Sostenible, la cual se aplicará en la siguiente vigen-cia. Se realizó identificación de dos nuevos negocios verdes de las grandes empresas del departamento. Se realizó articulación del Programa de Negocios Vedes en la Estra-tegia Nacional de CEmprende de Innpulsa Colombia firmando un Memorando de En-tendimiento, asimismo dentro del Plan Estratégico de Emprendimiento de la Red de Departamental de Emprendimiento. 
        Para la línea de (6) Sistema de información, monitoreo y evaluación se actualizó el site de Negocios Verdes como plataforma del Sistema de información de Negocios Verdes y se elaboró el boletín anual de Negocios Verdes de CARDER. 
        Finalmente, en línea (7) Desarrollo y fortalecimiento de la oferta, en implementación de planes de mejora se apoyará el proceso de certificación orgánica de panela de las Asociaciones ASOPANELA y ASOPRI a través de convenio con Fedepanela. Asimis-mo, para la Asociación Apecafé se realizaron visitas del Sistema de Control Interno a los productores y a través de convenio con Unisarc se apoyará el proceso de certifica-ción orgánica. Para el Sistema Participativo de Garantía para Agriculturas Alternativas se realizaron visitas de incorporación al programa.  Se elaboraron las caracterizaciones preliminares de las cadenas de valor de los sectores de Negocios Verdes de fuentes no convencionales de energías renovables, construcción sostenible, aprovechamiento y valorización de residuos en el departamento de Risaralda. En el marco del Convenio con UTP se trabajará en la creación de una Escuela Agroecológica en la Cuneca Alta del Río Otún.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia90 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13028,
            'year' =>1,
            'value' => 10,
            'description' => 'Se realizó la vinculación de diez (10) nuevas organizaciones al Programa de Negocios Verdes: Guadua con aroma de Café, Casa Vittoriana, Gallinas Doradas, La Colmena de Nora, Apiarios Adrián Barrera, Chocolatería Artesanal, Apiarios del Viento, La Ínsula, Arte y Seda e Intarsia. Se tiene identificadas en contacto inicial cuatro (4) nuevas iniciativas que están pendientes de visita de verificación. Se realizó identificación de iniciativas a trabajar para su proceso de vinculación visitando la Feria de Expocamello y en las reuniones de socialización del programa de Negocios Verdes a nivel municipal. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia91 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13029,
            'year' =>1,
            'value' => 3,
            'description' => 'Actividad Reconocimiento de legalidad a empresas forestales en Risaralda Se logró sostener el reconocimiento a Empresas Forestales. Se lograron tener 8  Nuevos reconocimientos Forestales. Se cumplió la meta de 5 Empresas Reconocidas para el año 2020.
        Actividad Mapas de Legalidad Forestal se cuenta con un mapa publicado en el SIAE donde se ubican las empresas de comercialización y transformación de madera que cuentan con Reconocimiento a la Madera Legal en Colombia y las que están en proceso de Reconocimiento.
        
        Se formuló el proyecto denominado DESARROLLO DE UN MODELO DE NEGOCIO FORESTAL PARA LA CADENA DE VALOR DE MADERA PROVENIENTE DE BOSQUE NATURAL EN COLOMBIA Y DISEÑO DE UN PILOTO PARA LA REGIÓN CHOCÓ - RISARALDA, el proyecto fue presentado al programa FAO UE FLEGT para lograr su financiación.
        La FAO aprobó el proyecto y se firmó la carta de Acuerdo el 2 de diciembre de 2020, el proyecto iniciará actividades en el mes de enero de 2021.            ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia92 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13030,
            'year' =>1,
            'value' => 0,
            'description' => 'No aplica',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia93 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13031,
            'year' =>1,
            'value' => 0,
            'description' => 'No aplica',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia94 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13032,
            'year' =>1,
            'value' => 100,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia95 = DB::getPdo()->lastInsertId();
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
