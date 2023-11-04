<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCarsucre2020 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_advance')->insert([
            'activity_id' => 14974,
            'year' =>1,
            'value' => 0,
            'description' => 'Se firmo Contrato No. 0232 el 9 de Diciembre de 2020  con duracion de cuatro (4) meses, cuyo objeto es  Mantenimiento de obras piloto de recarga artificial en área de influencia del Acuífero Morroa, en el marco del Proyecto: Protección Integral de Aguas Subterráneas (PPIAS) en Jurisdicción de Carsucre',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Contrato No. 0232 el 9 de Diciembre de 2020 ',
            'state_id' => 1201,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia1 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14977,
            'year' =>1,
            'value' => 110,
            'description' => 'Agua Subterranea: Se realizaron visitas de seguimiento, a concesiones de aguas vigentes y permisos de prospección y exploración, además de monitoreo del recurso hídrico, en total para este producto se realizaron 103 visitas de monitoreo.
        Agua Superficial: Se realizaron 21 salidas de campo para el monitoreo del recurso hidrico en las Microcuencas de los arroyos Grande de Corozal, Pichilin/Coloso, Canoas, Torobe/Palenquillo, Ovejitas, Villeros, Represa Villeros y Laguna de la caimanera. En total se visitaron 156 estaciones de monitoreo.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia2 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14978,
            'year' =>1,
            'value' => 130,
            'description' => '
        En la vigencia 2020  se cargó un total de 128 registros de aguas subterraneas, que se encuentran soportados en la base de datos de la  plataforma del SIRH.
         Con relacion aguas superficales se realizaron 110 registros en el SIRH',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia3 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14979,
            'year' =>1,
            'value' => 0,
            'description' => 'No tiene recursos comprometidos.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia4 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14981,
            'year' =>1,
            'value' => 20,
            'description' => 'Se realizaron 20 seguimientos a los Programa del Uso Eficiente y Ahorro del Agua - PUEAA, relacionados a continuacion: Mary de Jesús Ordoñez Bertel, David de Jesús Betting Gómez, Acuecar S.A. E.S.P, David de Jesus Betting Gómez, Abel Antonio García Guevara, Escuela De Carabineros Rafael Núñez, Condómino Vacacional Casa Blanca, Promotora Lo Cauchos S.A.S., Aguas De Buenavista S.A E.S.P., Camila Holguín Cuellar, Cavalier Martínez Y Cia S En C, EMPAGAL S.A. E.S.P., Colombian Agroindustrial Company S.A.S. - CAICSA S.A.S., Base de Entrenamiento de Infantería de Marina, Inversiones JAIBU S.A.S, Servicios La Palma S.A.S., Irma Stella Alcocer Rosa, Rafael Ignacio Otero Barrios, Miguel Enrique Ríos Dávila, Municipio De San Onofre',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia5 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14982,
            'year' =>1,
            'value' => 48,
            'description' => 'Se culmino la etapa de diagnostico con el desarrollo del componente social y técnico, así: 
        
        Componente social: se consignaron aspectos sociales, económicos y culturales de la población, identificación de actores claves, construcción de mapa de actores.
        Componente técnico:  Se llevo a cabo recolección de información secundaria de los pozos existentes, columnas litológicas, diseños técnicos, pruebas de bombeo, estudios geoeléctrico de la zona, sondeos eléctricos verticales. La información una parte se procesó en Argis y Surfer y otros mapas se realizaron por isoconductividad.
        Solo queda pendiente en esta etapa las pruebas de análisis físico – químico del agua.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia6 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14983,
            'year' =>1,
            'value' => 9,
            'description' => 'Se realizaron 10 salidas de campo, para monitorear la Microcuenca del Arroyo Grande de Corozal que cuenta con 10 estaciones de monitoreo, Dando como resultado que las últimas tres estaciones pueden tener una condición favorable en términos de calidad.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia7 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14984,
            'year' =>1,
            'value' => 2,
            'description' => 'En la vigencia 2020 la Corporacion Autonoma Regional de Sucre - CARSUCRE  a traves de Convenio 003 de 2020 con la Corporacion MASBOSQUES llevo a cabo la planificacion de Pagos por Servicios Ambientales - PSA para la Jurisdiccion de CARSUCRE, a traves de  BancO2',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia8 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14988,
            'year' =>1,
            'value' => 0.1,
            'description' => 'Se firmo contrato No. 0233 el 9 de Diciembre de 2020 con duracion de seis (6) meses, cuyo objeto es Consultoría para desarrollar la fase de aprestamiento del proceso de reglamentación de corrientes del Arroyo Pechelín y realizar estudio para la identificación y priorización de humedales interiores en la jurisdicción de Carsucre en el marco del proyecto denominado: Formulación e Implementación Planes de Manejo y Ordenación de Cuencas Hidrográficas.
        
        Es importante anotar que para la vigencia 2020, no tiene meta fisica programada acorde con el ajuste al Plan de Accion Institucional, aprobado por consejo directivo a traves de acuerdo No. 012 de17 de Diciembre de 2020. No obstante, si presentara avances de meta financiera anuales con cumplimiento fisico del producto en la vigencia 2022.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Contrato No. 0233 el 9 de Diciembre de 2020',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia9 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14989,
            'year' =>1,
            'value' => 0.1,
            'description' => 'Se firmo contrato No. 0233 el 9 de Diciembre de 2020 con duracion de seis (6) meses, cuyo objeto es Consultoría para desarrollar la fase de aprestamiento del proceso de reglamentación de corrientes del Arroyo Pechelín y realizar estudio para la identificación y priorización de humedales interiores en la jurisdicción de Carsucre en el marco del proyecto denominado: Formulación e Implementación Planes de Manejo y Ordenación de Cuencas Hidrográficas.
        
        Es importante anotar que para la vigencia 2020, no tiene meta fisica programada acorde con el ajuste al Plan de Accion Institucional, aprobado por consejo directivo a traves de acuerdo No. 012 de17 de Diciembre de 2020. No obstante, si presentara avances de meta financiera anuales con cumplimiento fisico del producto en la vigencia 2021.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Contrato No. 0233 el 9 de Diciembre de 2020',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia10 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14990,
            'year' =>1,
            'value' => 3,
            'description' => 'Proyecto de Vigencia 2019, Cuyas metas fisicas se encuentran contabilizadas en el PAI 2020-2023.
         
        Se realizó la delimitación de 182.000 metros lineales de las rondas hidricas de los arroyos Grande de Coroza, Pechilin y Palenquillo en jurisdicción de CARSUCRE y su respectivo documento técnico de soporte. Igualmente se realizó documento de Planeación para la Gestión Integral del Recursos Hídrico.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia11 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14991,
            'year' =>1,
            'value' => 100,
            'description' => 'Se encuentran en el Fondo de Descontaminación Ambiental la suma de $1.458.007.853.
         
        Estos recursos se ejecutarán para un proyecto encaminado a la descontaminación hídrica, como puede ser:
        
        * Mejoramiento, monitoreo y evaluación de la calidad del recurso hídrico;
        * Elaboración y ejecución de Planes de Ordenamiento del Recurso Hídrico o;
        * Inversiones en sistemas de tratamiento (incluido interceptores y emisarios finales).',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia12 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14992,
            'year' =>1,
            'value' => 1,
            'description' => 'Se viene trabajando en la cooperación interinstitucional, con el objeto de aunar esfuerzos en la estrategia de conectividades socio-ecosistémicas que incluye la articulación inter-institucional, la planificación territorial, la participación social con visión intercultural, el manejo efectivo de las áreas protegidas (AP) existentes, la creación de nuevas AP y la promoción de modelos de producción sostenible, esto para reducir la degradación y fragmentación de los ecosistemas estratégicos de la Región Caribe Colombiana.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia13 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14993,
            'year' =>1,
            'value' => 0,
            'description' => 'No tiene recursos comprometidos.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia14 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14996,
            'year' =>1,
            'value' => 0,
            'description' => 'Se firmo contrato No. 230 de 4 de Diciembre de 2020 por una duracion de cuatro(4), cuyo objeto es Consultoría para el estudio y evaluación del estado de las áreas degradadas en los municipios de Galeras, el Roble y San Juan de Betulia en la Jurisdicción de la Corporación Autónoma Regional de Sucre – Carsucre',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Contrato No. 230 de 4 de Diciembre de 2020 ',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia15 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14997,
            'year' =>1,
            'value' => 254,
            'description' => 'Mediante el contrato 0121 de 3 de abril de 2020, se realizó el establecimiento de las 254 hectáreas en proceso de restauración con plantaciones forestales protectoras, en los municipios de Sincelejo(30 has), San Onofre (76 has), Sincé (20 has), Colosó (16 has), El Roble (60 has), Morroa (29 has), Ovejas (23 has).',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Contrato 0121 de 3 de abril de 2020',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia16 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14998,
            'year' =>1,
            'value' => 30,
            'description' => 'Se realizó el mantenimiento de las 30 hectáreas de plantaciones forestales establecidas en el municipio de San Onofre durante la vigencia 2019, para la restauración de coberturas boscosas.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia17 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14999,
            'year' =>1,
            'value' => 418,
            'description' => 'Se desarrollaron las actividades de sensibilización y capacitación a  418 usuarios beneficiarios del proyecto.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia18 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15002,
            'year' =>1,
            'value' => 90,
            'description' => 'En el marco del convenio se desarrolló:
        - 90 hectareas de restauracion pasiva articulado con 10 talleres de capacitacion en Uso Eficiente del Agua
        - Produccion de 76.000 plantulas como estrategias de restauracion activas
        - Cuatro (4) viveros temporales de 24.000 plantulas cada uno, para un total de 96.000 plantulas como constitucion de la red de produccion de material vegetal,',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO 523 DE 2020',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia19 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15003,
            'year' =>1,
            'value' => 9,
            'description' => 'En el año 2020, la Ventanilla Promotora de Negocios Verdes de CARSUCRE realizó la verificación de Onces (11) negocios verdes sobrepasando   las metas establecidas en el PAI 2020 – 2023, los cuales se relacionan a continuacion:
        
        1. CHOCOSTA SAS; 2. DUTCH CANNA SAS; 3. BRIGGIE CONGELADOS; 4. NUTRE FORM; 5. ASOPROARSAM; 6. TAHINES DE GARBANZA; 7. GRANJA EXPERIMENTAL VILLA BÁRBARA; 8. GOOGAROMIEL; 9. NUNUT SALUDABLE; 10. RECUPERADORA Y2; 11. SACHA PALM.
        
        Los negocios Granja Experimental Villa Bárbara y COOAGROMIEL de Morroa fueron los dos (2) asignados por el Programa Generación de Negocios Verdes – PGNV en el marco del Convenio MDAS y la Unión Europea. 
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia20 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15004,
            'year' =>1,
            'value' => 4,
            'description' => 'Durante la vigencia 2020, se desarrollaron las siguientes lineas estrategícas:
        
        * Orientación  a usuarios interesados en conocer sobre la temática de negocios verdes. 
        * Articulación institucional, cuyo objeto es aunar esfuerzos con los distintos actores territoriales e institucionales del Departamento de Sucre. 
        * Participación en videoconferencias, con el objeto de hacer uso de herramientas tecnológicas para interactuar y adquirir nuevos conocimientos.
        * Apoyo y fortalecimiento de los negocios verdes, como la participación de los negocios verdes de CARSUCRE, en el portafolio nacional de negocios verdes.  ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia21 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15006,
            'year' =>1,
            'value' => 100,
            'description' => 'Se hizo seguimiento a los 19 municipios del area de jurisdicción de Carsucre en relación a los PGIRS, de la siguiente manera: 
        - Virtual  a 16 municipios : Sampues, Corozal, San Juan de Betulia, Sincé, Morroa, Santiago de Tolú, Toluviejo, Coveñas, San Onofre, San Pedro, Buenavista, El Roble, San Antonio de Palmito, Los Palmitos, Ovejas y Galeras
        - Presencial a 3 de municipios: Chalan, Coloso y Sincelejo. 
        
        Para los seguimientos virtuales se utilizó la siguiente metodologia. 
        - Se estableció contacto telefónico con la persona encargada por parte de los municipios.
        - Se definió una fecha para cada municipio, donde previamente se envió una matriz con toda la información que el municipio debía reportar en la reunión virtual que se llevaría a cabo posteriormente. 
        - Se realizaron las reuniones virtuales en la fecha establecida, de esto se tiene la grabación. 
        
        De estas reuniones se estableció que los municipios del área de jurisdicción de Carsucre, no se encuentran implementando los planes de Gestión Integral de Residuos Sólidos - PGIRS en su totalidad; solo se encuentran prestando el servicio de aseo en su mayoría en la zona urbana y en el tema de aprovechamiento de residuos las metas de cumplimiento son cero.   ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia22 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15008,
            'year' =>1,
            'value' => 86,
            'description' => 'Durante la vigencia 2020 se realizo seguimiento a 6 Planes de saneamiento y Manejo de Vertimientos - PSMV, que cuentan con su resolución de aprobación vigentes, como son: Sampués, Galeras, Colosó, San Pedro, Los Palmitos, y El Roble
        Cabe resaltar que de los 19 municipios, sólo 7 cuentan con PSMV con acto administrativo vigente (Sincelejo, Sampués, Colosó, Galeras, San Pedro, Los Palmitos y El Roble)',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia23 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15009,
            'year' =>1,
            'value' => 0.1,
            'description' => 'Se comprometieron recursos',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia24 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15011,
            'year' =>1,
            'value' => 0,
            'description' => 'Se firmó contrato No. 032 de 2020 con duracion de tres (3) meses, cuyo objeto es Elaboración del inventario de los elementos naturales forestales de algunos parques del espacio público en el Municipio de Sincelejo, Jurisdicción de Carsucre
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia25 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15012,
            'year' =>1,
            'value' => 1,
            'description' => 'En alianza con la secretaría de ambiente de Sincelejo, la Fundación Mar de Amor, y la Policía Ambiental de Sucre se llevó a cabo una jornada para la recuperación del paisaje en el parque de las iguanas en el barrio Venecia. El ejercicio se hizo con el apoyo local de la junta de vecinos. 
        
        La recuperación se llevó a cabo a partir de a) acondicionamiento de terreno, bajo la asesoría de la secretaría de ambiente, b) recuperación del microbosque con especies nativas aportadas por Carsucre; y c) sostenibilidad y vigilancia bajo la responsabilidad de la Policía Ambiental. 
        
        Participación: 50 personas 
        Periodo: 20 de agosto al 5 de noviembre de 2020 
        Aportes Carsucre: asesoría técnica para la selección de los sitios de siembra, trazado y hoyado, 400 árboles de especies tales como, caoba, Caracolí, polvillo, campano e igua y frutales como mango.
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia26 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15013,
            'year' =>1,
            'value' => 20,
            'description' => 'Para el periodo de balance 2020, se realizó la inscripción de 27 nuevos establecimientos, con lo cual fue posible superar la meta establecida en el PAI para la vigencia  2020.
        Adicionalmente la oficina de RESPEL de la Corporacion  viene realizando seguimiento con el cargue de información a los usuarios inscritos en el Registro Único Ambiental del Sector Manufacturero y en el Inventario Nacional de PCB. ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia27 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15014,
            'year' =>1,
            'value' => 1,
            'description' => 'Dentro de las metas establecidas se encuentra la implementación del Plan de Gestión Integral de Residuos Peligrosos s o Desechos Peligrosos, realizando las siguientes actividades:  
        * Fomentar el desarrollo de actividades de seguimiento para establecer verdaderas fuentes generadoras de RESPEL: Se realizaron visitas a las entidades prestadoras del servicio de salud en los municipios que hacen parte de la jurisdicción de CARSUCRE, en atención a que el desarrollo de sus actividades genera residuos peligrosos.
        * Estudios de la trazabilidad en la cuantificación de la generación de residuos peligrosos en la jurisdicción: se obtuvo que la línea de residuos peligrosos con mayor generación fue Desechos clínicos BIOSANITARIOS resultantes de la atención en salud en Hospitales, consultorios, clínicas y otros, seguido de Desechos de aceites minerales no aptos para el uso a que estaban destinados.
        * Establecer un programa de monitoreo periódico en torno a la presencia de sustancias nocivas en los recursos naturales de la jurisdicción: se realizaron 4 evaluaciones y seguimientos a los planes de contingencia para el manejo de derrames de las empresas que exploren, exploten, manufacturen, etc.
        *Fortalecer los procesos de capacitación, educación e investigación: se desarrollaron 2 capacitaciones sobre el manejo ambientalmente racional de los aceites lubricantes usados, residuos biológicos infecciosos, plaguicidas y sus envases, baterías usadas plomo ácido, pilas y acumuladores y bombillas con mercurio, dirigidas a diferentes actores involucrados en la cadena de gestión.
        
        Entre otras actividades que se detallan el documento de word del informe de gestion',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia28 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15015,
            'year' =>1,
            'value' => 3,
            'description' => 'En las tres redes de control y vigilancia intervenidos se establecieron 5 puestos de control y vigilancia de flora, realizados los días 9, 12,17, 20 y 21 del mes de Abril de 2020. de la siguiente manera: 1. Sector Roca madre, 2. Sampués, las Tablitas, el Roble, Corozal y Betulia, 3. Barrio el Bolívar, corregimientos: San Martin y la Gallera, 4. Cerrito la Palma, Laguna Flor, San Antonio de Palmito, Coveñas y Tolú, 5. Corozal, Betulia Sincé, galeras, Buenavista, San Pedro, y los Palmitos.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia29 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15016,
            'year' =>1,
            'value' => 400,
            'description' => 'Durante la vigencia 2020, se realizaron 408 movimientos reportados en el SNIF sobrepasando la meta programada en el Plan de Accion Institucional, PAI para la vigencia 2020, discriminado asi: 
         - 197 movimientos de aprovechamiento forestal
         - 210 movimiento de movilizaciones
         - 1 proyecto de restauracion',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia30 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15017,
            'year' =>1,
            'value' => 16,
            'description' => 'En el primer semestre de la vigencia 2020 se logró visitar y supervisar siete establecimientos comercializadores de madera: Maderas el Árbol, Madera la Bucaramanga, Maderas RyR, Maderas el Cauca, Maderas los Hermanitos, Maderas Gonzales, y Maderas Kuki.
        
        En el segundo semestre se realizó visita y supervisión a nueve establecimientos de comercializadores de madera vinculándolos al libro operaciones del Ministerio de Ambiente y Desarrollo Sostenible: Servicios Integrales Ferromaderas el Bosque, Maderas el Progreso, Ebanistería Alían, Muebles y Madera Daya, Molduras y Maderas Guayacana, Maderas la Mona, Maderas el Triunfo MC, Maderas el Cauca.a y Maderas Bolemo.
        
        Para un total de 16 establecimientos de comercialización y extracción de flora supervisados.
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia31 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15018,
            'year' =>1,
            'value' => 60,
            'description' => 'En cumplimiento de las actividades a desarrollar en el control ilegal del trafico de fauna silvestre durante el primer semestre del año  2020 se realizaron decomiso-incautación-recuperación-rescate y entregas voluntarias, para un total de 70 especies sobrepasando la meta para la vigencia 2020 y 1.055 ndividuos recepcionados, relacionados así:
        
        -55 especies de aves con el decomiso 297 individuos, de las cuales 263 fueron liberadas, 23 aves incineradas y 11 aves entregadas en custodia.
        -8 especies de mamíferos con el decomiso de 91 mamíferos, de los cuales 57 fueron liberados, 10 incinerados , 24 entregados en custodia.
        -7 especies de reptiles con el decomiso de 667 reptiles, de los cuales 658 fueron liberados y 9 incinerados.
           
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia32 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15019,
            'year' =>1,
            'value' => 1,
            'description' => 'Se realizaron visitas aleatorias en varios viveros de los municipios de: Sincelejo, Corozal, Sampués y Toluviejo, con el fin sensibilizar e inspeccionar sobre la presencia del caracol africano, llevando a cabo: 
        - Charlas sobre las consecuencias sanitarias si se tenía presencia del caracol africano (Achatina fulica) en sus viveros.
        - Se efectuaron tres jornadas de sensibilización y control en los viveros de los municipios con el objetivo ampliar los conocimientos de los propietarios y trabajadores del mismos vivero sobre los problemas de salud pública ocasionados por el caracol africano y de igual manera ocasionan daños en un sin número de plantas (ornamentales o frutales).
        - Realizacion de inspección técnico ocular en todas las plantas del vivero para verificar si tenian presencia del caracol africano (Achatina fulica).
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia33 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15020,
            'year' =>1,
            'value' => 125000,
            'description' => 'Producción de 125.000 plántulas, de las cuales 100.000 plántulas corresponden a maderables y/u ornamentales y los 25.000 restantes a plántulas frutales.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia34 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15021,
            'year' =>1,
            'value' => 1,
            'description' => 'Se contrataron los servicios de dos (2) operarios para mantener la funcionalidad del Centro de Atención y Valoración de Flora (CAVF) Matecaña',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia35 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15022,
            'year' =>1,
            'value' => 70,
            'description' => 'Durante la vigencia 2020 se realizaron 173 seguimientos,a los siguientes instrumentos: Licencias Ambiental, Concesiones de Agua, Permiso de Vertimientos, Aprovechamiento Forestal, y emisiones atmosfericas. llevandose a cabo los siguientes seguimientos:
        39 seguimientos a Licencias Ambientales
        35 Seguimientos a aprovechamiento forestal
        78 Seguimientos a concesiones de Agua 
        28 Seguimiento a permiso de vertimientos
        
        Es importante recalcar que la actividad de seguimientos se vio afectada por la emergencia sanitaria que atraviesa el país por el COVID - 19',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia36 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15023,
            'year' =>1,
            'value' => 70,
            'description' => 'Durante la vigencia 2020 lo que respecta a los tiempos de autorizaciones ambientales como son Licencias ambientales, concesiones de agua, permiso de vertimientos, aprovechamiento forestal y emisiones atmosférica, la Corporación presenta un tiempo promedio del 89% con respecto a la meta fijada en la norma por cada autorización ambiental, sobrepasando la meta establecida para la vigencia 2020 en el Plan de Accion ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia37 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15024,
            'year' =>1,
            'value' => 50,
            'description' => 'Durante la vigencia 2020, se aperturaron : 297  procesos sancionatorios; 278 actos administrativos de determinacion de responsabilidad de la Carsure, solo se ha cerrado 19 procesos sancionatorio., correspondiente a un 100%, sobrepasando la meta establecida en la vigencia 2020.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia38 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15025,
            'year' =>1,
            'value' => 50,
            'description' => 'Se trabajaron 50 expedientes separados por Infracciones y Licencias Ambientales, en el marco del proceso estos fueron atendidos con visitas de inspección técnica para el caso de los expedientes por infracción o en su defecto indicando el proceso de manejo jurídico por oficio proyectado. Los expedientes concernientes a Licencias Ambientales, se atenieron dando cumplimiento a los actos administrativos que indicaban la medida de manejo ambiental a impartir por el equipo técnico aplicando el seguimiento ambiental mediante visitas técnicas y en muchos de los casos complementando el trabajo con la evaluación de los Informes de Cumplimiento Ambiental, instrumento de verificación por esta autoridad ambiental.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia39 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15026,
            'year' =>1,
            'value' => 100,
            'description' => '
        En la Secretaría General de la Corporación Autónoma regional de Sucre se realizaron actuaciones judiciales dentro de los medios de control: Nulidad y Restablecimiento del Derecho, Reparación Directa, Ejecutivos, Acciones de tutelas, Acciones Populares, Acciones de Grupo, Acciones de Restitución de Tierras  y Acciones de expropiación donde CARSUCRE actúe como intervinientes, dentro de las cuales se presentaron memoriales a los juzgados, se impulsaron su cumplimiento administrativamente y se presentaron los recursos de Ley en aquellas decisiones judiciales que no le fueron favorables.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia40 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15027,
            'year' =>1,
            'value' => 2,
            'description' => '*Suministro, Instalación y Remodelación de Módulos Rodantes Doble Mecánicos de la Oficina de Archivo Central de la Corporación Autónoma Regional de Sucre – CARSUCRE, Con el fin de organizar y archivar los expedientes y demás procesos que reposa en las diferentes dependencias de la Corporación de acuerdo a su ciclo vital.
        *Suministro, Adecuación e Instalación de Mobiliarios de Oficina para la Creación de Nuevos Puestos de Trabajo en las Diferentes Dependencias de la Corporación Autónoma Regional de Sucre – Carsucre, con el fin de obtener un mayor número de espacios laborales para el cumplimiento de las actividades misionales de la entidad',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia41 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15028,
            'year' =>1,
            'value' => 5,
            'description' => 'Dentro del proceso de fortalecimiento administrativo se llevaron a cabo las a siguientes actividades:
        
        * Cargue de información a la plataforma CHIP 
        * Facturación y actualización de carteras ( Tua , tasa retributiva y predial).
        * cargue de información en el Sistema de Rendición Electrónica de la Cuenta e Informes (SIRECI-Contraloria)
        * Implementación del Sistema de Gestión de Seguridad y Salud en el Trabajo (SG-SST).
        * Implementacion de los Planes de Bienestar y Capacitacion Institucional
        * Estudio Tecnico para la Creacion e Implementacion de la Subdireccion de Asuntos Marinos y Costeros.
        
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia42 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15029,
            'year' =>1,
            'value' => 25,
            'description' => 'Para cumplir con la meta de este indicador se adquieron:
        - 20 equipos de computo con 20 licencias de Office
        - 1 Software de gestion documental de licencia con sistema obelisco version 3.0
        - 4 Escaner workforce DS 530 tipo escaner
        - 3 Impresoras laser 107 W
        - 1 Impresora laser Multifuncional 135W
        - Y demas elementos tecnologicos para las diferentes dependencia de la Corporacion ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia43 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15030,
            'year' =>1,
            'value' => 4,
            'description' => 'Durante la vigencia 2020 se llevo a cabo :  
        - Optimización de las redes locales, tanto en datos compartidos entre las dependencias que así lo requirieron, como el acceso y conexión a la red que actualmente se encuentran en Carsucre. 
        - Soporte a todos los equipos de cómputo que necesitaban de alguna configuración o falla de hardware, y se optimizaron de forma idónea para el buen funcionamiento y uso de los equipos.
        - Se dio cumplimiento a la optimización y actualización, tanto de la base de datos de la web de Carsucre, como toda la información que allí se encuentra alojada, haciendo un protocolo de seguridad de dos Backup por semana, asegurando así la información que se alojó en la vigencia 2020 y posterior a ella.
        - Mantenimiento de las redes locales y servidores de la Corporacoion correctivos y preventivos',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia44 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15031,
            'year' =>1,
            'value' => 19,
            'description' => 'En la vigencia 2020 se realizó evaluación de los componentes general, urbano y rural de los Instrumentos de Ordenamiento Territorial de San Onofre, Ovejas, San Antonio de Palmito, Los palmitos, Coveñas,Sampues, Corozal y Since. Municipios con los que se llevaron a cabo reuniones presenciales y/o virtuales con el fin de socializar todo lo relacionado con los componentes asociados al medio ambiente e inclusión de las Determinantes Ambientales para la insercion en sus respectivos Instrumentos de Ordenamiento Territorial.
        
        Asi mismo se brindo seguimiento a los Municipios de Toluviejo y Sincelejo, este ultimo con la revision y evaluacion de los planes parciales Rosedal y Los Angeles.
        
        Posteriormente, se envío solicitud de audiencia por videoconferencia a los Municipios de Tolu, Betulia, San Pedro, Morroa, Galeras, El Roble, Coloso, Chalan y Buenavista, con el objeto de conocer el estado del tramite de actualizacion de sus Instrumentos de Ordenamiento Territorial y brindar apoyo y asesorias en los asuntos ambientales',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia45 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15032,
            'year' =>1,
            'value' => 23,
            'description' => 'En el Banco de proyectos de la Corporación (BPC) de CARSUCRE se llevo a cabo: tres proyectos formulados para la vigencia 2020, cuatro proyectos formulados en  MGA y registrados en el sistema SUIFP  para la vigencia 2021,  15 proyectos corporativos financiados con recursos propios de la Corporación y un convenio MADS -CARSUCRE',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia46 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15033,
            'year' =>1,
            'value' => 76,
            'description' => 'El avance de este indicador corresponde al diligenciamiento de nueva metodología de matriz del Índice de Evaluación del Desempeño Institucional –  IEDI, con reporte de información correspondiente a la vigencia 2019.
        Obteniendo un Indice de Evaluacion de Desempeño Institucional del 76,2% ocupando el nivel satisfactorio, discriminado asi. 
        Componentes de gestión misional: Eficacia (71,35%) - Eficiencia (100%)
        Componente Administrativo: 54,8%
        Componente financiero: 53,74%',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia47 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15034,
            'year' =>1,
            'value' => 1,
            'description' => 'Se elaboro el Plan de Accion Institucional 2020 - 2023 , con la actualización de la síntesis ambiental de la Corporación, y apoyo logístico para el desarrollo de las actividades de participación institucional publica y privada, étnica y comunitaria del plan de Accion a través de realización de mesas de trabajos con actores claves del proceso como principales articuladores de las acciones a priorizar y materializar en los programas y proyectos ambientales que van encaminados a la preservación y conservación del medio ambiente y los recursos naturales renovales.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia48 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15035,
            'year' =>1,
            'value' => 0,
            'description' => 'No tiene recursos comprometidos.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia49 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15037,
            'year' =>1,
            'value' => 0,
            'description' => 'Se firmo contrato No. 0231 el 9 de Diciembre de 2020 con duracion de seis (6) meses, cuyo objeto es Consultoría para apoyar la gestión del riesgo de inundación, movimientos en masa y erosión en los municipios de Morroa y San Juan de Betulia en el marco del Proyecto: Apoyo a la Planeación, Seguimiento y Evaluación de la Gestión del Ordenamiento Territorial y Ambiental',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Contrato No. 0231 el 9 de Diciembre de 2020',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia50 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15038,
            'year' =>1,
            'value' => 4,
            'description' => 'Se brindó apoyo en el proceso de evaluación y revisión de la gestión del riesgo en los Planes de ordenamiento territorial en el Municipio de Ovejas, San Onofre, San Antonio de Palmito, Los Palmitos.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia51 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15039,
            'year' =>1,
            'value' => 6,
            'description' => 'Se realizaron las siguientes acciones en educación ambiental: 
        
        - CIDEA Municipales de San Antonio de Palmito, Morroa, Colosó, Toluviejo, Ovejas, Sincelejo y Chalan.
        - CIDEA Departamental de Sucre
        - 36 I.E de Sincelejo (PRAE)                                                                                                                                            
        - 300 dinamizadores ambientales y guardabosques de la Serranía de Coraza y montes de María (PROCEDA )  
        - Proyecto Ambiental Universitario -PRAU, CECAR, Arborizatón 2020. 
        - 1395 personas capacitadas.
        
        logrando de esta manera sobrepasar la meta establecida en acciones de educacion ambiental con: 7 CIDEAM, 1 CIDEAM Departamental, 1 PRAU, PRAE Y PROCEDA',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia52 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15040,
            'year' =>1,
            'value' => 4,
            'description' => 'En la implementación y/o mantenimiento de las estrategias de Comunicación, Información y Participación, el objetivo es lograr la organización eficiente y eficaz consecuente con los retos exigidos por la corporación y que beneficie al público interno y externo de la misma. Como son los siguientes:
        1. Publicación en Redes Sociales de las actividades realizadas por parte de las oficinas, áreas y/o dependencias de la corporación, así como la difusión de piezas gráficas para la conmemoración de los días especiales del calendario ambiental, publicación de comunicados, condolencias, y demás actividades de importancia para la Car y el público en general.
        Aumento del 76% de cuentas alcanzadas en Instagram, aumento en un 515.1% en las interacciones en redes sociales, aumento en un 98% de visitas al perfil de las redes sociales de la corporación, aumento en un 2017% de impresiones a las publicaciones de Instagram, aumento de seguidores en la página de Facebook, Twitter e Instagram, aumento en los likes de publicaciones, disminución en el tiempo de descuelgue de videos.
        2. Diseño y producción de piezas gráficas y audiovisuales conmemorativas, informativas, entre otras para redes sociales, televisión, la web, prensa, radio y demás impresos solicitados por las diferentes dependencias de la Corporación.
        3. Redacción de notas, comunicados y boletines para su difusión en prensa, radio en el orden departamental, en la web, y copys para redes sociales. De igual forma Envío periódico de notas a medios de comunicación impresos, radiales y de televisión en el departamento de Sucre.
        4. En radio tenemos presencia en Radio Majagual, caracolí y rcn radio.
        5. Cubrimiento y apoyo a las actividades realizadas por la oficina de Negocios Verdes, Educación Ambiental, Aguas, entre otras.
        6. Alimentación del banco fotográfico de Carsucre.
        7. Permanente comunicación, contacto y apoyo a entidades del orden nacional, regional y departamental en pro de reforzar los lazos interinstitucionales y cumplir con el objeto misional de la CAR.
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia53 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15041,
            'year' =>1,
            'value' => 100,
            'description' => '* Se proyectó oficio  dirigido a los 19 alcaldes de la jurisdicción de CARSUCRE con la finalidad de que incorporaran las consideraciones de cambio climático en los Planes de Desarrollo Territorial 2020-2023,
        * De igual manera se envió oficio al señor Gobernador del departamento de Sucre para incorporar adecuadamente las consideraciones de cambio climático en el Plan de Desarrollo Departamental 2020 - 2023. A cada uno de los Oficios se anexo en medio digital (DVD) información relacionada con la Política Nacional de Cambio Climático, Ley 1931 de 2018, la cual establece directrices para la gestión del cambio climático en Colombia y los documentos de la Tercera Comunicación Nacional de Cambio Climático (MinAmbiente, IDEAM, 2017). Además se le informaba que el Plan Integral de Gestión del Cambio Climático de Sucre se encontraba en proceso de construcción y se resaltaba la importancia de la participación proactiva del ente territorial.
        * La Subdirección de Planeación brindó apoyo en el proceso de evaluación y concepto sobre la incorporación adecuada de la dimensión ambiental en los instrumentos de planificación territorial.
        * Actualmente el MADS y la Procuraduría General de la Nación con el apoyo de The Climate Reality Project vienen desarrollando nueve (9) módulos en temas de cambio climático con gobernaciones y alcaldías de todo el país, lo que refuerza la labor realizada por la Corporación en los primeros meses de 2020.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia54 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15043,
            'year' =>1,
            'value' => 1,
            'description' => 'En el marco de la Convocatoria del Fondo Acción se inscribió un perfil de proyecto de Carbono Azul (manglares) para el Golfo de Morrosquillo, denominado RESTAURAR ZONAS DE MANGLAR COMO MEDIDA DE ADAPTACIÓN A LA VULNERABILIDAD COSTERA Y EL FOMENTO DE SUMIDEROS DE CARBONO, DEPARTAMENTO DE SUCRE, proyecto que fue escogidos por el MADS para iniciar el proceso de apoyo a la formulación por el Fondo Acción. Este proyecto generará cobeneficios en mitigación al capturar GEI. Le corresponderá al MADS la gestión de recursos de fondos internacionales para su financiamiento.
        
        Actualmente, se encuentra en fase de Alistamiento, definición del problema, mapeo de actores, estructuración de la línea base socioeconómica, definición espacial temporal de intervención del proyecto, encuentros de articulación interinstitucional, entre otras.
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia55 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15044,
            'year' =>1,
            'value' => 6.28,
            'description' => 'Se recuperaron 6,28 has de cuerpos de agua de los jagüeyes comunitarios de las zonas indígenas de Sampués y san antonio de Palmito, con la intervención de 18 jagüeyes que se discrimina a continuación:
         - Sampués:  Achote los Martínez, La Frontera- Chavarry, La Lucha y El Cacao, La Isla Maeca, Escobar Arriba, Huertas Chica los Laureles, Huertas Chica – La Laguna, Villa Nueva
        - San Antonio de Palmito: San Miguel, La María, La Granja, La Granja – el Lago, San Martin, El Martillo, Chupundun, Los Castillos, Pueblo Nuevo, Guamí.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia56 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15045,
            'year' =>1,
            'value' => 700,
            'description' => 'Se desarrollaron los talleres de capacitación y sensibilización a 700 miembros de las comunidades indigenas beneficiarias, en las temáticas de: 
        - Importancia de la Restauración en Cuerpos de Agua
        - Manejo de los Recursos Naturales y sus Beneficios Económicos, Sociales y Ambientales
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia57 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15046,
            'year' =>1,
            'value' => 1,
            'description' => 'Se estableció un puesto de control para control de tráfico de especies silvestres el 10 de abril del 2020 a 100 m. de la salida de Santiago de Tolú, específicamente en uno de los puntos de desinfección de vehículos. Esta actividad se realizó en acompañamiento con Bomberos, POLICIA de Turismo, CARSUCRE y Defensa Civil ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia58 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15047,
            'year' =>1,
            'value' => 3,
            'description' => 'Para la zona marino costera se ha priorizado el monitoreo de tres ecosistemas entre los cuales se encuentran Manglares, Arrecifes de Coral y Pastos Marinos
        
        En la vigencia 2020 se realizo visita al sector El Francés (humedal y manglares) en el municipio de Tolú para ell monitoreo a la calidad de las aguas de la laguna costera La Caimanera como parte del DRMI manglares de la Caimanera Boca del humedal costero El Francés, con intervención antrópicas, modificando la hidrodinámica del humedal, que podría conducir al deterioro del ecosistema de manglar.
        
        Posteriormente, se realizaron seguimientos a los ecosistemas de coral y pastos marinos.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia59 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15053,
            'year' =>1,
            'value' => 1,
            'description' => '
        Para el monitoreo de la calidad de las aguas marinas y costeras, se cuentan en su totalidad con 32 estaciones, de las cuales a 27 se ha venido aplicando el indicador ICAM. Sin embargo, para cumplir con el PND actual se aplicará por lo menos a 14 estaciones dos veces al año. Para la vigencia 2020 se realizaron dos salidas de campo para el monitoreo de la calidad de aguas marinas y costeras en los meses de Julio y Diciembre.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia60 = DB::getPdo()->lastInsertId();
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
