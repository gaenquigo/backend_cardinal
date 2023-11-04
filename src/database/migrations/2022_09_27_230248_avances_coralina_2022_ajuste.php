<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCoralina2022Ajuste extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_advance')->insert([
            'activity_id' => 14422,
            'year' =>3,
            'value' => 65,
            'description' => 'Se reporta un avance del 65% de esta meta, esto en relación al avance en la revisión y actualización de los  documentos asociados a los procesos de:                                 
        - Promoción del Desarrollo Sostenible                                                       - Gestión Tecnológica                                                                              
        - Control y Evaluación del Sistema Integrado de Gestión              - Gestión Estratégica;  y gran parte de los procedimientos del proceso de  Regulación y Administración Ambiental.',
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
            'activity_id' => 14423,
            'year' =>3,
            'value' => 5,
            'description' => 'Se reporta un 5% de avance que corresponde al seguimiento de los compromisos establecidos en el Plan de Acción de MIPG.',
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
            'activity_id' => 14424,
            'year' =>3,
            'value' => 33,
            'description' => 'El 33,33% corresponde a una medición del Plan Anticorrupción; de las tres establecidas a realizarse anualmente.',
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
            'activity_id' => 14425,
            'year' =>3,
            'value' => 0,
            'description' => 'Esta meta permanece en cero a la fecha de reporte puesto que las auditorias están programadas para el segundo semestre, es decir, a partir del mes de Junio.',
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
            'activity_id' => 14426,
            'year' =>3,
            'value' => 0,
            'description' => 'Esta meta permanece sin avance físico puesto que no ha sido posible concretar para recibir la transferencia Tecnología del programa SICAR  durante esta vigencia, motivo por el cual el avance físico permanece en 0%.',
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
            'activity_id' => 14427,
            'year' =>3,
            'value' => 10,
            'description' => 'Capacitación del personal asistencial de planta con la finalidad de mejorar el servicio al cliente; en el marco de la celebración de los 27 años de la Corporación.
        - Proceso de convocatoria del conformación del “Comité De Convivencia Laboral”
        -Taller de coaching de entorno social familiar
        - Entregas de bonos de spa y gimnasio para el personal de Coralina, por asistencia a talleres
        - Jornada de Inducción y reinducción, para personal de planta y contratista
        -Capacitación al personal de CORALINA en Manejo eficiente y ahorro energético
        ',
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
            'activity_id' => 14428,
            'year' =>3,
            'value' => 25,
            'description' => 'Entre las actividades principales a cargo del Banco de Proyectos, atendidas en el primer semestre del 2022, se puede destacar la participación activa en el proceso de asesoría en la formulación y estructuración de varios proyectos y principalmente en la construcción de cinco proyectos (3 para financiación con fuente del Fondo de Compensación Ambiental - FCA y 2 de fuente FONAM) presentados al ministerio de Ambiente y Desarrollo Sostenible; así como  la participación en una convocatoria de nación, para acceder a recursos de fuente de financiación de Regalías.',
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
            'activity_id' => 14429,
            'year' =>3,
            'value' => 20,
            'description' => 'Se obtuvo el cumplimiento al 100% de esta meta debido a la adquisición del equipo NAS, para garantizar la seguridad informatica de la Corporación.',
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
            'activity_id' => 14430,
            'year' =>3,
            'value' => 2,
            'description' => 'Se dan un cumplimiento del 100% a esta meta mediante las siguientes acciones:Gestión de proyectos en reunión con funcionarios de la Embajada de Holanda y delegados de la Gobernación de San Andrés;Formalización solicitud de cooperación con la especialista del BID para Colombia.',
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
            'activity_id' => 14431,
            'year' =>3,
            'value' => 0,
            'description' => 'Se programa la capacitación en Metodologías de formulación de proyectos de inversión y fuentes de cofinanciación, en conjunto con el profesional de apoyo del BPPAA; para el segundo semestre del año.',
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
            'activity_id' => 14433,
            'year' =>3,
            'value' => 0,
            'description' => 'Esta meta permanece en cero puesto que el primer semestre no se realizaron adecuaciones en la Corporación; no obstante, se concretaron acciones para realizar el proceso de contratación para la Construcción de la Sede Providencia..',
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
            'activity_id' => 14434,
            'year' =>3,
            'value' => 0,
            'description' => 'Durante la vigencia se realiza revisión de la  Política de administración de Riesgos, para su posterior  actualización, adopción e implementación.',
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
            'activity_id' => 14435,
            'year' =>3,
            'value' => 2,
            'description' => 'Esta meta registra un cumplimiento del 66,67% ya que se han realizado dos (2) reuniones del comité institucional de sistema de control interno  de las tres (3) programadas para el año.',
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
            'activity_id' => 14436,
            'year' =>3,
            'value' => 3,
            'description' => 'Se ha continuado con la recolección y sistematización de datos que permitan luego alimentar las bases de datos nacionales del Sistema de Información del Recurso Hídrico (SIRH). Esta actividad para realizar en el segundo semestre de 2022
        Se ha continuado con la recolección y sistematización de datos que permitan luego Llevar a cabo la actualización del Estudio Regional del agua (ERA) conforme a indicadores establecidos por el IDEAM a través del Estudio Nacional del Agua (ENA). Esta actividad es de periodicidad anual y no es sino hasta final de año que se consolida el informe
        Apoyados la implementación de las iniciativas de PRAES en cuatro establecimientos educativos: Sagrada Familia, Industrial, Brooks Hill e INEDAS.
        Se llevó a cabo el seguimiento semestral a la implementación de programas de ahorro y uso eficiente del agua de usuarios particulares en el departamento archipiélago con concesión vigente así: Decamerón san Luis, Desalinizadora, Proactiva Cove, Sea View, E. Bay Point, Edificio Hansa Reef, Hotel Sun Set, Sopesa y Hotel Sunset',
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
            'activity_id' => 14437,
            'year' =>3,
            'value' => 0.45,
            'description' => 'Se cuenta con diseños y planos del espacio fisico donde será desarrollada la estrategia conjuntamente con el laboratorio de analisis de calidad ambiental de Coralina en la casa biclimatica. No se cuenta con los recursos para su implementación. No ostante la estrategia ya está elaborada y se han adelantado acciones como:
        Formulación de proyecto y cncesución de recursos para adquisición de equipos tecnologicos para modernizar la red monitoreo de aguas: elaboración de aplicativos digitales para sistematización de información de recurso hidrico obtenido en campo.',
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
            'activity_id' => 14438,
            'year' =>3,
            'value' => 1,
            'description' => 'Las actividades relacionadas a esta meta tienen que ver con la construcción de maqueta de zonificación ambiental del POMIUAC en construcción y la implementación del modio itinerante del agua. 
        Ambas actividades han contado con acciones adelantadas, no obstante para el caso de la maqueta se requiere terminar de construir el POMIUAC previsto para el segundo semestre del año. En cunato la modulo itinerante se han adelantado acciones en los colegios Brooks Hill, Sagrada Familia y Natania',
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
            'activity_id' => 14439,
            'year' =>3,
            'value' => 0,
            'description' => 'No se cuenta con recursos financieros para adecuar y mantener la insfraestructura fisica del laboratorio que exigen los protocolos de acreditación. Se cuenta con planos, diseños y presupuesto de obra para la construcción de nueva infraestructura',
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
            'activity_id' => 14440,
            'year' =>3,
            'value' => 0,
            'description' => 'No se cuenta con recursos financieros para adecuar y mantener la insfraestructura fisica del laboratorio que exigen los protocolos de acreditación. Se cuenta con planos, diseños y presupuesto de obra para la construcción de nueva infraestructura',
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
            'activity_id' => 14441,
            'year' =>3,
            'value' => 0.33,
            'description' => 'Se logró conseguir financiación a través del sistema general de regalias para dotar de sistemas remotos y llevar a cabo su monitoreo en el tiempo de las estaciones de agua subterránea para piezómetro y calidad de agua. El proyecto está para su i-nicio de ejecusión en le segundo semetre de 2022.
        También se cuenta con estudios previos elaborados para llevar a cabo procesos investigativos para identificar acuíferos a reglamentar su estado de protección (no take). Esto posible a la financiación por parte del Plan Ambinetal del Plan Departamental de Aguas de la gobernación.',
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
            'activity_id' => 14442,
            'year' =>3,
            'value' => 0.33,
            'description' => 'Estuidos previos, planos, diseño de costos elaborados para Implementar de modo demostrativo una alternativa de uso de agua de mar para abastecimiento hídrico de alguna necesidad priorizada en el departamento. Esto a través de proyecto denominado Construcción de planta desalinizadoraSolar ne le parque regional Jhony Cay. Si desarrolo está prevista para el segundo semestre de 2022.
        También  se cuenta con el proyecto eleborado para adquirir predios de interés hídrico y forestal con fines de protección de la oferta de agua y control de la expansión urbana hacia zonas de recarga de acuíferos y de protección forestal. Esto con financiaón del PA del PDA. Para ello hace falta la firma de convenio de cooperación entre CORALINA y la Goberncación',
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
            'activity_id' => 14443,
            'year' =>3,
            'value' => 0,
            'description' => 'Se está trabajando en propuesta de zonificación concertada en el marco de construcción del POMIUAC',
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
            'activity_id' => 14444,
            'year' =>3,
            'value' => 0,
            'description' => 'Esta meta sigue sin avances significativos a partir de su línea base de 68%. Aun se sigue en inicios de la etapa de prospectiva. Proyecto liderado por la subdirección de planeación en el marco de la construcción del POMIUAC.',
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
            'activity_id' => 14445,
            'year' =>3,
            'value' => 5,
            'description' => 'Se continuó con acciones de seguimiento y control a la explotación de aguas subterráneas a través del instrumento de la concesión de aguas. A cierre junio de 2022 se cuenta con registro de ',
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
            'activity_id' => 14446,
            'year' =>3,
            'value' => 0,
            'description' => 'Meta sujeta al POMIUAC',
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
            'activity_id' => 14447,
            'year' =>3,
            'value' => 50,
            'description' => 'Se viene implemetando el plan de manejo de Johnny Cay',
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
            'activity_id' => 14448,
            'year' =>3,
            'value' => 0,
            'description' => 'Meta sujeta al POMIUAC; sin emabargo, se han adelantado reuniones y verificado información de la plataforma.',
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
            'activity_id' => 14450,
            'year' =>3,
            'value' => 15,
            'description' => 'Hectareas conservadas con medidas de manejo, protección y conservación. Activades reportadas por inspectores y guardas marino costeros, manejo Parque Old point y Peak',
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
            'activity_id' => 14451,
            'year' =>3,
            'value' => 75,
            'description' => 'actividades de rehabilitación, recuperación y restauración en corales, manglares y humedales. Convenio 004 coralina y Masbosques 2021. Providencia Post IOTA',
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
            'activity_id' => 14452,
            'year' =>3,
            'value' => 10,
            'description' => 'manejo , protección y conservación de especies claves y amenzadas mediante sensibilización, estudio y controles de veda',
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
            'activity_id' => 14453,
            'year' =>3,
            'value' => 30,
            'description' => 'caza y control de maria mulata, pez león y lobo pollero',
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
            'activity_id' => 14455,
            'year' =>3,
            'value' => 2,
            'description' => 'monitoreo REDCAM y de playas',
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
            'activity_id' => 14456,
            'year' =>3,
            'value' => 0,
            'description' => 'Expedición cientifica se realizara en el segundo semestre del 2022',
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
            'activity_id' => 14457,
            'year' =>3,
            'value' => 20,
            'description' => 'Se adelanta el documento de “Caracterización, Diagnóstico y Zonificación de los manglares del Archipiélago de San Andrés, Providencia y Santa Catalina”. ',
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
            'activity_id' => 14458,
            'year' =>3,
            'value' => 15,
            'description' => 'Acompañamiento a los procesos encaminados a la certificación de las playas de Manzanillo (Providencia) y Sprat Bight (San Andrés). Asistencia a comites de playas',
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
            'activity_id' => 14464,
            'year' =>3,
            'value' => 25,
            'description' => 'Fue socializado los resultados finales del estudio de riesgo por huracanes con el concejo departamental y municipal. 
        
        De igual forma, mediante acta fue entregado a las Secretarias de Gobierno y Planeación en medio magnético los siguientes productos:
        
        Informe final que contiene cuatro (4):
        
        • Capítulo 1 Componente Atmósfera 
        • Capítulo 2 Inundación Costera 
        • Capítulo 3 Componente Inundación Urbana
        • Capítulo 4 Componente Vulnerabilidad
        
        Adicional, se hizo entrega de siete (7) archivos comprimidos que contienen la información cartográfica de San Andrés, Providencia y Santa Catalina de los siguientes temas:
        
        • Campo 
        • Inundación Costera
        • Inundación Urbana
        • Atmósfera – Vientos
        • Vulnerabilidad Física
        • Vulnerabilidad Social
        • Riesgos
        ',
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
            'activity_id' => 14465,
            'year' =>3,
            'value' => 1,
            'description' => 'con el apoyo del Ministerio de Ambiente, desde la Dirección de Cambio Climático, en el mes de abril se realizó la primera mesa de trabajo con la Gobernación Departamental y otras entidades, con el fin de trazar  la hoja de ruta que nos oriente en todo el proceso de actualización y/o formulación del Plan Integral de Gestión de Cambio Climático para el Departamento - PIGCCT-
        
        Fueron varios los compromisos adquiridos en esta primera mesa y se espera que para el segundo semestre del 2022 iniciar con el proceso de actualización y/o formulación del Plan.
        ',
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
            'activity_id' => 14466,
            'year' =>3,
            'value' => 0,
            'description' => '',
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
            'activity_id' => 14468,
            'year' =>3,
            'value' => 1,
            'description' => 'Se cuenta con un estudio e información cartográfica en el borde litoral (levantamiento de infraestructura). El objetivo principal fue identificar mediante encuestas los impactos por fenómenos naturales en asentamientos ubicados en el borde litoral costero durante la última década. Esto con el fin de tener un insumo fiable en la determinación de medidas de mitigación y/o adaptación frente a los efectos del cambio climático
        
        Éste estudio es vital para fortalecer la capacidad institucional para la gestión del riesgo desde sus compromisos misionales, además se convierte en un insumo para la actualización del plan departamental de riesgo, el POT, EOT y para la toma de decisiones.  
        
        ',
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
            'activity_id' => 14470,
            'year' =>3,
            'value' => 1,
            'description' => 'Durante el primer semestre del 2022 fue socializado con el personal de Coralina y la comunidad en general los resultados finales de la estimación de carbono orgánico almacenado en los bosques de manglar del Archipiélago.
        Hasta el momento el INVEMAR le ha entregado a la Corporación:
        • Documento foto memoria de los talleres realizados en San Andrés y Providencia
        • Documento Foto memoria de las salidas de campo
        • Documento técnico final de la estimación de las existencias de carbono azul en ecosistema de manglar del Archipiélago de San Andrés, Providencia y Santa Catalina
        • Documento técnico con recomendaciones sobre pasos a seguir para análisis finales de carbono azul, conservación y manejo de los manglares del archipiélago de San Andrés, Providencia y Santa Catalina
        Se está a la espera de recibir por parte del INVEMAR otras informaciones solicitadas por la Corporación
        ',
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
            'activity_id' => 14471,
            'year' =>3,
            'value' => 35,
            'description' => 'Durante el primer semestre de 2022 se avanzo en un 35% de la meta anual, la cual no tiene un porcentaje en concreto pues depende de las solicitudes de permisos',
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
            'activity_id' => 14472,
            'year' =>3,
            'value' => 5,
            'description' => 'Durante la vigencia se han llevado a cabo seguimientos a permisos otorgados durante la vigencia y otorgados en vigencias anteriores puesto que se realizan de acuerdo con la fecha de notificación de cada uno y remisión de resolución ',
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
            'activity_id' => 14473,
            'year' =>3,
            'value' => 50,
            'description' => 'Dentro de período enero - junio se recepcionaron en la subdireccion jurídica 27 expedientes para dar impulso procesal lo cual se hizo en su totalidad ',
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
            'activity_id' => 14474,
            'year' =>3,
            'value' => 14,
            'description' => '4 procesos con decisión de fondo de 27 iniciados',
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
            'activity_id' => 14475,
            'year' =>3,
            'value' => 50,
            'description' => 'En cumplimiento a este indicador la Entidad Ambiental exhibe sus gestiones adelantadas:
        1. PSMV DE LA EMPRESA VEOLIA AGUAS DEL ARCHIPIELAGO S.A. E.S.P: En pro de dar continuidad al proceso de evaluación, el pasado 25 de febrero, a través del radicado No. 20222100229, por medio del cual remitimos requerimiento, dando alcance a la misma la empresa Veolia remetió reportes, es de aclarar que en la actualidad dicha documentación se encuentra en evaluación por parte del equipo de Calidad y Ordenamiento Ambiental.  
        
        2. PSMV PRESENTADO POR LA GOBERNACIÓN DEPARTAMENTAL. En la actualidad el proceso se encuentra en trámite considerando que la información aportada se encuentra incompleta, ante esta situación la Entidad Ambiental el pasado 03 de marzo, a través del radicado No. 20222100298, envió solicitud en el cual exige que complemente, allegue información y/o insta que se desarrollen mesas técnicas.
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
            'activity_id' => 14476,
            'year' =>3,
            'value' => 0.5,
            'description' => 'En cumplimiento a este indicador la Entidad Ambiental comunica que, posterior a la actualización del PIGA, durante el primer semestre del 2022, hemos venido desarrollando acciones encaminados a la planificación de estrategias que apuntan hacia el ahorro y uso eficiente de energía y agua en el interior de la Corporación.',
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
            'activity_id' => 14477,
            'year' =>3,
            'value' => 1.5,
            'description' => 'En cumplimiento del indicador la Corporación para el Desarrollo sostenible Coralina comunica que a través de la Subdirección de Calidad y Ordenamiento Ambiental se implementó la metodología de seguimiento y análisis comparativo al sistema de medición y consumo registrados a través de los recibo de energía, se logra establecer un patrón para el análisis de los registros pertenecientes a la Entidad Ambiental.',
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
            'activity_id' => 14478,
            'year' =>3,
            'value' => 0,
            'description' => 'Para este indicador se vienen desarrollando mesas de trabajo con entidades públicas y privadas como la Gobernación Departamental, Armada Nacional, Comando especifico, programas de posconsumo y Ministerio de Ambiente, en donde se a determinando realizar la compaña de recolección y evacuación de residuos posconsumo entre finales del mes de agosto y principios del mes de septiembre del año en curso. Aunado a lo anterior, se vienen trabajando desde el mes de mayo con las entidades en relacion a la logistica y en el desarrollo de la campaña.',
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
            'activity_id' => 14479,
            'year' =>3,
            'value' => 50,
            'description' => 'Para el indicador se viene desarrollando el seguimiento y control de las metas de aprovechamiento del Pgirs de la isla de San Andrés, en donde para el avance del indicador se ha realizado un seguimiento a la secretaria de Servicios Públicos y Medio ambiente.',
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
            'activity_id' => 14480,
            'year' =>3,
            'value' => 0,
            'description' => 'Se vienen desarrollando reuniones con las entidades relacionadas con el indicador, para el semestre se llevaron a cabo dos reuniones, una con la empresa Interaseo y la segunda con la Secretaria de Servicios Públicos y Medio Ambiente. Se plantea que para el segundo semestre del año en curso se de cumplimiento con el indicador.',
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
            'activity_id' => 14481,
            'year' =>3,
            'value' => 0.5,
            'description' => 'En cumplimiento a este indicador, la Entidad Ambiental comunica que, a la fecha hemos realizado seguimiento a los sistemas descentralizados ubicados en las áreas rurales del Departamento como Schooner bight, Courthouse y Ground road, de conformidad con las visitas desarrolladas evidenciamos que los sistemas en mención están operando de manera adecuada basada en que no se evidencian reboces en los sistemas de tratamiento. Se adjunta informe técnico No. 296 de mayo de 2022.',
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
            'activity_id' => 14482,
            'year' =>3,
            'value' => 0.5,
            'description' => 'En cumplimiento al indicador la Entidad ambiental comunica que, implemento las estrategias necesarias que permitirán desarrollar todas las acciones tendientes a propiciar la descontaminación del ruido en zonas priorizadas, ',
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
            'activity_id' => 14483,
            'year' =>3,
            'value' => 0.4,
            'description' => 'En cumplimiento al indicador la Entidad ambiental comunica que, implemento las estrategias necesarias que permitirán desarollar de forma armonica la Implementación del plan de descontaminación de la calidad de aire en localidades de especial interés en el Departamento',
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
            'activity_id' => 14484,
            'year' =>3,
            'value' => 0.25,
            'description' => 'En cumplimiento al indicador la Entidad Ambiental en el primer semestre del año 2022, le apostó a la siembra de doscientos (205) individuos arbóreos, contribuyendo a la formación de suelos fértiles, reducción de temperatura, regeneración de sus nutrientes evitando la erosión en los suelos',
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
            'activity_id' => 14485,
            'year' =>3,
            'value' => 50,
            'description' => 'En cumplimiento con el indicador se vienen desarrollando actividades para el cumplimiento de las líneas de acción en lo relacionado con el mejoramiento de la calidad de vida en las áreas urbanas del Departamento Archipiélago San Andrés, Providencia y Santa Catalina – RBSF. ',
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
            'activity_id' => 14486,
            'year' =>3,
            'value' => 10,
            'description' => 'Se realizó las visitas de verificación a las diez (10) empresas postuladas para ser consolidadas al programa de negocios verdes, en la cual se evaluaron criterios de sostenibilidad como: económicos, ambientales y socioculturales. En el segundo semestre se realizara la visita a dos (2) empresas más, para así dar cumplimiento a la meta fisca anual de la presente vigencia.',
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
            'activity_id' => 14487,
            'year' =>3,
            'value' => 3,
            'description' => 'Se socializó la Norma Técnica Sectorial de Turismo Sostenible NTS-TS 002 a tres (3) Posadas Nativas, de igual forma se acordó con los representantes legales una visita a cada una de las Posadas Nativas para brindarles asesoría en la implementación de la Norma Técnica Sectorial de Turismo Sostenible NTS-TS 002. En el segundo semestre de esta vigencia se realizara la socialización y acompañamiento de la NTS-TS002 a tres (3) empresas del sector turismo para dar cumplimiento a la meta física anual de seis (6) unidades.',
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
            'activity_id' => 14488,
            'year' =>3,
            'value' => 1,
            'description' => 'En la isla de Providencia se adelantaron dos jornadas del día de no bolsa durante los meses de febrero y marzo, con el fin de sensibilizar la norma “Por medio de la cual se implementa la Ley 1973 de julio 2019”  (Establecimientos comerciales, distribuidores y proveedores de productos plásticos de un solo uso). En San Andrés se realizaron las capacitaciones de la Ley de la 1973 al ICA el día 2 de junio y el 17 de junio al batallón de infantería dirigido a infantes de marina y soldados regulares del ejército. De esta forma se cumple el 100% con la meta fisca anual.',
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
            'activity_id' => 14489,
            'year' =>3,
            'value' => 0,
            'description' => 'Se adelantaron gestiones de avance  con la Fundación Marviva  Y CORALINA para establecer un marco general de colaboración entre las partes con el propósito de contribuir a la mitigación de la contaminación por plástico en el Archipiélago de San Andrés, Providencia y Santa Catalina, este proceso se encuentra en revisión en la Subdirección Jurídica.',
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
            'activity_id' => 14490,
            'year' =>3,
            'value' => 0,
            'description' => 'Se avanza con un (1) Acuerdo territorial entre la corporación Coralina e Innpulsa Colombia para el fortalecimiento de los Negocios Verdes. OBJETO: El objeto del presente Memorando es expresar el interés en participar articuladamente, a través del desarrollo de actividades que redunden en el fortalecimiento del ecosistema del emprendimiento e innovación de San Andrés Isla región insular en el marco de la iniciativa CEmprende en cabeza de INNPULSA COLOMBIA. Cabe resaltar que este acuerdo se encuentra en revisión en el área de jurídica de innpulsa Colombia. Se avanza con el acuerdo con el gremio de agencias de viajes Anato, el documento se encuentra en revisión para su aprobación, no obstante, se han venido realizando con Anato diferentes actividades relacionadas con la conmemoración de fechas ecológicas y capacitaciones presenciales y virtuales. Se avanza en un memorando de entendimiento entre CORALINA y el Sena que tiene por OBJETO: El objeto del presente memorando es expresar el interés de LAS PARTES entorno a la realización de un trabajo interinstitucional articulado, que favorezca la creación, fortalecimiento y crecimiento de los Negocios Verdes del Archipiélago de San Andrés, Providencia y Santa Catalina. El presente memorando se encuentra en revisión por parte de la oficina de jurídica del Sena. Este indicador contempla una (1) unidad para el cumplimiento de la meta física anual actualmente hay tres (3) en proceso.',
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
            'activity_id' => 14491,
            'year' =>3,
            'value' => 1,
            'description' => 'Se realizan cinco (5) actividades entorno a este indicador como son: Articulación con la PNUD en donde se realizaron toma de fotografías a productos de once (11) negocios verde. Participamos con seis (6) negocios verdes en  “Flea Market” feria organizada por Cámara de Comercio y Rotary. El 8 y 9 de junio se participó en la Feria SAVIA promovida por el MADS, en la cual la ventanilla de negocios verdes de coralina participo con tres (3) negocios verdes. El 22 de junio la ventanilla de negocios verdes fue invitada por segundo año consecutivo a participar en la feria agricultura por contrato promovido por el Ministerio de Agricultura y Desarrollo Rural en el cual la ventanilla participo con cinco (5) negocios verdes.Se realizaron dos videos clips a dos (2) negocios verdes y se promocionaron en redes sociales.Con estas acciones se da cumplimiento 100% a la meta física anual que corresponde a este indicador.',
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
            'activity_id' => 14494,
            'year' =>3,
            'value' => 0,
            'description' => 'Se realizó reunión de equipo para definir la metodología de la reactivación del programa de Estrella Ambiental para los Hoteles con el fin de implementar buenas prácticas amigables con el ambiente en la Reserva de Biosfera Seaflower. Este programa se encuentra en diseño para su implementación en el segundo semestre del año.',
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
            'activity_id' => 14495,
            'year' =>3,
            'value' => 50,
            'description' => 'Se ha concertado con la entidad territorial (Gobernación Departamental) el apoyo al proyecto GEF para la conservación de la biodervisidad en el sector turismo para las áreas protegidas en el archipiélago, validando este apoyo a través de las cofinanciación de actividades relacionadas.',
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
            'activity_id' => 14496,
            'year' =>3,
            'value' => 100,
            'description' => 'Durante el primer semestre de 2022 se han realizado reuniones con el equipo técnico que está realizando la actualización del POT de la isla de San Andrés, así mismo CORALINA ha estado asistiendo a mesas técnicas realizadas por el equipo POT con el fin de revisar la estructura ambiental por los componentes que se encuentran en la resolución 252 de 2021 de las Determinantes Ambientales para el Departamento Archipiélago. Hasta la fecha se han desarrollado dos (2) mesas técnicas en las que se ha revisado la cartografía entregada por CORALINA y una en la que se ha trabajado la estructura ambiental del agua subterránea y la Cuenca de El Cove.',
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
            'activity_id' => 14497,
            'year' =>3,
            'value' => 50,
            'description' => 'En las reuniones que se han adelantado con Planeación Departamental a través del equipo técnico a cargo de la actualización del POT se ha realizado el seguimiento a la implementación que se ha venido desarrollando en el plan de ordenamiento vigente.',
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
            'activity_id' => 14500,
            'year' =>3,
            'value' => 1,
            'description' => 'Durante este periodo se suscribió en el mes de enero, el convenio 726  con el Ministerio de Ambiente para la Implementación de Estrategias de Educación Ambiental para la Conservación de Peces Loro en el Archipiélago.',
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
            'activity_id' => 14501,
            'year' =>3,
            'value' => 4,
            'description' => 'Se han realizado reuniones con la comunidad en el mes de febrero con el fin de retomar formalmente el proceso de consulta previa con la comunidad nativa Raizal.
        Durante el mes de mayo el día 19, se realizó reunión con la comunidad para hacer la matriz de impacto, esta matriz se validó con el ministerio del interior el día 24 de mayo, durante esta reunión la comunidad Raizal solicito hacer las reuniones hasta protocolizar cada plan de manejo que será subsumido en el POMIUAC. De igual forma este día fue realizada la matriz de impacto de Old Point.
        
        El día 24 de junio de se realizó reunión con la comunidad nativa Raizal para realizar la matriz de impacto del Parque Natural Regional Johnny Cay, que serán validada en consulta previa con el Ministerio del Interior los días 6 y 7 de julio.',
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
            'activity_id' => 14502,
            'year' =>3,
            'value' => 0,
            'description' => 'Se han adelantado las reuniones con la comunidad para dar continuidad al proceso de consulta previa y cumplir las fases de formulación de acuerdos y protocolizacion ',
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
            'activity_id' => 14503,
            'year' =>3,
            'value' => 0,
            'description' => 'Se han adelantado las reuniones con la comunidad para dar continuidad al proceso de consulta previa y cumplir las fases de formulación de acuerdos y protocolizacion ',
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
            'activity_id' => 14506,
            'year' =>3,
            'value' => 2,
            'description' => 'Durante este período desde el mes de febrero se han atendido diversos espacios en los que se han articulado actividades para desarrollar la propuesta de ordenanza del Sistema Departamenta de Areas Portegidas - SIDAP de San Andrés y la propuesta para el acuerdo para el Sistema Local de Areas Protegidas - SILAP Providencia, estos documentos deben trabajarse con la Gobernación Departamental y la Alcaldía Municipal para concretar los recursos que serán de importancia para la implementación de las propuestas.',
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
            'activity_id' => 14507,
            'year' =>3,
            'value' => 1,
            'description' => 'Durante el periodo se trabajó en la implementación de la estrategia de comunicaciones formulada, el cual contiene acciones del plan de comunicaciones durante el 2022 y la formulación del  plan de medios de la corporación, logrando el cumplimiento de la meta física programada para la vigencia de 1 arrojando un avance de 100%. ',
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
            'activity_id' => 14509,
            'year' =>3,
            'value' => 2,
            'description' => 'Durante el primer semestre se trabajó en la implementación de los dos espacios de Comunicación internos y externos proyectados para el 2022 dando cumplimiento en el 100% de la meta, en el que se impulsó para el espacio interno el protector de pantalla y en el espacio externo Ruedas de Prensa. ',
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
            'activity_id' => 14510,
            'year' =>3,
            'value' => 17,
            'description' => 'Durante el periodo de las 25 acciones programadas como meta se han desarrollado 17, el cual equivale a un 68% de avance físico ',
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
            'activity_id' => 14511,
            'year' =>3,
            'value' => 4,
            'description' => 'Se viene brindando apoyo a cuatro (4) iniciativas escolares, de las instituciones educativas: Instituto técnico Industrial, Bolivariano, Antonia Santos y First Baptist School, realizando acompañamiento al desarrollo de las actividades contempladas en los proyectos ambientales escolares, articuladas al programa de servicio social, que incluyen talleres de capacitación, salidas pedagógicas, Participación en ferias ambientales, producción y presentación de performance, como estrategia de sensibilización. Lo que permite tener un avance del 100% con relación a la meta de 2 iniciativas apoyadas.',
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
            'activity_id' => 14512,
            'year' =>3,
            'value' => 14,
            'description' => 'Se llevó a cabo el desarrollo del taller de capacitación para fortalecimiento PRAES, dirigido a docentes, y dictado por la Coordinadora Nacional de Educación Ambiental, del Ministerio de Ambiente, Dra. Fanny Cortés.  Durante el taller, se reforzaron conocimientos sobre lo que son los PRAE, y se orientó sobre los criterios que fundamentan la resignificación de los mismos, para la incorporación de la dimensión ambiental a la educación formal. Se contó con la participación de 14 docentes de las áreas de ciencias.',
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
            'activity_id' => 14513,
            'year' =>3,
            'value' => 2,
            'description' => 'Se convocó a los miembros de las JAC de los sectores Tom Hooker, Ginny Bay y Simpson Well, para su participación en el taller sobre mecanismos de participación ciudadana y Veedurías. El primer encuentro se llevó a cabo el día 25 de abril, con la participación de miembros de la JAC de Simpson Well (Barker Bight).En el mes de mayo, se llevó a cabo el taller de fortalecimiento de CIDEA, y formulación de la Política Departamental de Educación Ambiental, dirigido por la Coordinadora Nacional de Educación ambiental del Ministerio de Ambiente, Dra. Fanny Cortés, quien explicó a los miembros del comité sobre el marco normativo del sector ambiental, las competencias y responsabilidades del sector educativo ambiental, el concepto y objetivos de la educación ambiental y los principios que la orientan, la política Nacional de Educación Ambiental y sus objetivos, y conceptos generales del CIDEA, sus funciones y objetivos, entre otros temas.',
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
            'activity_id' => 14514,
            'year' =>3,
            'value' => 2,
            'description' => 'Se inició el proceso de fortalecimiento de la JAC del sector de Hophie, Genney Bay, con el fin de ofrecer apoyo y asesoría en el mejoramiento de las problemáticas ambientales del sector, y se han adelantado reuniones para la estructuración de una propuesta de acompañamiento.
        También se adelantó la conformación oficial del nodo San Andrés Isla, del programa Jóvenes De Ambiente, del Ministerio. Se llevó a cabo reunión virtual con los jóvenes miembros del nodo, para socializar la convocatoria para el encuentro nacional y realizar la selección de dos jóvenes que representarían al Archipiélago en dicho encuentro.',
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
            'activity_id' => 14515,
            'year' =>3,
            'value' => 1366,
            'description' => 'Se han adelantado procesos de sensibilización aplicando diferentes estrategias, como los talleres de capacitación, las jornadas de sensibilización puerta a puerta en los sectores, la conmemoración de fechas ambientales, el desarrollo de actividades lúdicas, relacionados a temas como: Reserva de Biosfera, Especies Claves, Vertimientos, residuos sólidos y ley 1973, ecosistemas estratégicos, tala y quema, vedas, agua, entre otros. La población objetivo de estos procesos incluye: instituciones educativas, instituciones públicas, sectores de la comunidad, gremios y asociaciones. Se ha logrado superar la meta para este año.',
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
            'activity_id' => 14516,
            'year' =>3,
            'value' => 0,
            'description' => 'Se adelantaron las mesas técnicas interinstitucionales los meses de marzo y abril, con el fin de avanzar con la gestión del Centro Interactivo de Ciencia y Tecnología Seaflower. Las reuniones se han realizado con la participación de secretaría de Educación, Secretaría de Turismo, Tecnalia, MS y Coralina.
        En el mes de mayo, se llevó a cabo de la convocatoria dirigida a miembros de la comunidad del sector de Little Hill, para su participación en el evento de socialización del proyecto, programado para el día 10 de mayo.
        Se desarrolló reunión con directivos del proyecto CTeI y en encuentro de socialización del proyecto con la comunidad del sector de Little Hill, el día 10 de mayo.',
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
            'activity_id' => 14517,
            'year' =>3,
            'value' => 1,
            'description' => 'Se han realizado reuniones virtuales entre Invemar y Coralina para avanzar con la implementación del Proyecto Semillero Agentes de Cambio. Se avanzó con la imagen del proyecto aprobada en Comité editorial de la Corporación. Se consolidó la información de docentes que participarán en el curso virtual con el Instituto de Turismo Responsable, en el cual se brindarán herramientas para ser un educador sostenible en el aula. Este curso se desarrollará durante el segundo semestre, así como las visitas pedagógicas con los docentes y estudiantes',
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
            'activity_id' => 14518,
            'year' =>3,
            'value' => 1,
            'description' => 'Para la vigencia 2022 avance a Junio 30 2022, se reporta un porcentaje de avance de 4%; en el rediseño del Observatorio de Reserva de Biosfera Seaflower (ORBSF), 
        También se continuo con el contrató del ingeniero de sistemas quien elaborara una propuesta para la reestructuración conjuntamente de las plataformas de información del Observatorio de la Reserva de Biosfera Seaflower. 
        ',
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
            'activity_id' => 14519,
            'year' =>3,
            'value' => 50,
            'description' => 'De los 6 reportes bimensuales totoles en el año se elaborado 3 reportes a Junio 30 de 2022, lo que representa el 50% . Entre enero a junio de 2022 se han realizado los reportes e informes de seguimiento al SIAC de los subsistemas SIRH; SNIF y RESPEL. Se ha elaborado Tres (3) Informes Actualización y Reporte de la Información de CORALINA en el Sistema de Información Ambiental de Colombia (SIAC) . La informacion detallada se encuentra en la pestaña 26 SIAC.',
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
            'activity_id' => 14520,
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
            $idevidencia103 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14521,
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
            $idevidencia104 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14523,
            'year' =>3,
            'value' => 1,
            'description' => 'Durante el primer semestre del 2022 se suscribió en el mes de enero, el convenio 726 con el Ministerio de Ambiente para la Implementación de Estrategias de Educación Ambiental para la Conservación de Peces Loro en el Archipiélago.',
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
            'activity_id' => 14525,
            'year' =>3,
            'value' => 100,
            'description' => '',
            'type' => '',
            'how_is_done' => null,
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia108 = DB::getPdo()->lastInsertId();
        
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
