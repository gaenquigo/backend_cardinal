<?php

use Illuminate\Database\Seeder;
use App\Models\Financing_Source;

/**
 * Class FinancingSourceTableSeeder
 */
class FinancingSourceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Financing_Source::truncate();
		Financing_Source::unguard();
		
		DB::table('financing_sources')->insert([
			'father_id' => Null,
			'code' => '1',
			'name' => 'Ingresos',
			'description' => 'Los ingresos son recursos monetarios recaudados en una vigencia fiscal por quienes corresponda administrarlos según la ley.
		Se consideran ingresos las entradas de caja efectivas, en moneda nacional, que incrementan las disponibilidades para el gasto. Así, se deben cumplir las siguientes condiciones para reconocer una transacción como ingreso:
		1.	Afectación efectiva de caja. Los ingresos se reconocen bajo el principio de caja. Es decir, cuando hay desembolso de los recursos a favor de las entidades beneficiarias.
		2.	La afectación de caja se produce en moneda nacional.
		3.	Respaldo de un gasto. No se reconocen como ingresos aquellas entradas efectivas de caja que no están habilitadas para realizar gastos.']);
			
		$id1 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id1,
			'code' => '1.1',
			'name' => 'Ingresos Corrientes',
			'description' => 'Se reconocen por su regularidad, además se caracterizan porque: i) su base de cálculo y su trayectoria histórica permiten estimar con cierto grado de certidumbre el volumen de ingresos; ii) si bien pueden constituir una base aproximada, esta sirve de referente para la elaboración del presupuesto anual.']);
			
		$id2 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id2,
			'code' => '1.1.1',
			'name' => 'Ingresos tributarios',
			'description' => 'Son aquellos establecidos como impuestos y estampillas por la ley. Estos representan la obligación de hacer un pago, sin que exista una retribución particular por parte del Estado.']);
			
		$id3 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id3,
			'code' => '1.1.1.1',
			'name' => 'Impuestos directos',
			'description' => 'Son aquellos que gravan directamente los ingresos o el patrimonio de las personas naturales y jurídicas, es decir, recaen sobre la capacidad económica de los sujetos. En los impuestos directos se identifica al contribuyente respectivo, y se conoce su capacidad de pago,  mediante las informaciones relativas a sus rentas y patrimonio.']);
			
		$id4 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id4,
			'code' => '1.1.1.1.1',
			'name' => 'Sobretasa ambiental - Peajes',
			'description' => 'la Sobretasa Ambiental se creó como un mecanismo de compensación a la afectación y deterioro derivado de las vías del orden nacional actualmente construidas y que llegaren a construirse, próximas o situadas en Areas de Conservación y Protección Municipal, sitios de Ramsar o Humedales de Importancia Internacional definidos en la Ley 357 de 1997 y Reservas de Biosfera, así como sus respectivas Zonas de Amortiguación de conformidad con los criterios técnicos que para el efecto establezca el Ministerio de Ambiente, Vivienda y Desarrollo Territorial. ']);
			
		$id5 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id5,
			'code' => '1.1.1.1.1.1',
			'name' => 'Sobretasa ambiental - Peajes (vigencia actual)',
			'description' => 'Sobretasa ambiental - Peajes (vigencia actual)']);
			
		$id6 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id5,
			'code' => '1.1.1.1.1.2',
			'name' => 'Sobretasa ambiental - Peajes (vigencia anterior)',
			'description' => 'Sobretasa ambiental - Peajes (vigencia anterior)']);
			
		$id7 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id4,
			'code' => '1.1.1.1.2',
			'name' => 'Participación de intereses de mora sobre la sobretasa ambiental-peajes',
			'description' => 'Son las transferencias de recursos de los intereses recaudados por la mora en el pago de la sobretasa ambiental. Los intereses que se causen por mora en el pago del Impuesto Predial Unificado, también se causan para el pago y transferencia de la sobretasa ambiental.']);
			
		$id8 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id8,
			'code' => '1.1.1.1.2.1',
			'name' => 'Participación de intereses de mora sobre la sobretasa ambiental-peajes (vigencia actual)',
			'description' => 'Participación de intereses de mora sobre la sobretasa ambiental-peajes (vigencia actual)']);
			
		$id9 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id8,
			'code' => '1.1.1.1.2.2',
			'name' => 'Participación de intereses de mora sobre la sobretasa ambiental-peajes (vigencia anterior)',
			'description' => 'Participación de intereses de mora sobre la sobretasa ambiental-peajes (vigencia anterior)']);
			
		$id10 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id9,
			'code' => '1.1.1.1.1.1.1',
			'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales',
			'description' => 'Son las transferencias de recursos de la sobretasa ambiental para las Corporaciones Autónomas Regionales (Art. 1. Decreto 1339 de 1994).  De acuerdo con el Artículo 44 de la Ley 99 de 1993, el giro de estos recursos debe realizarse de forma trimestral y excepcionalmente, por anualidades antes del 30 de marzo de cada año siguiente al periodo de recaudo. ']);
			
		$id11 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id11,
			'code' => '1.1.1.1.1.1.1.1',
			'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
			'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)']);
			
		$id12 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id11,
			'code' => '1.1.1.1.1.1.1.2',
			'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia anterior)',
			'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia anterior)']);
			
		$id13 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id9,
			'code' => '1.1.1.1.1.1.2',
			'name' => 'Participación del porcentaje ambiental - Corporaciones Autónomas Regionales',
			'description' => 'Participación del porcentaje ambiental - Corporaciones Autónomas Regionales']);
			
		$id14 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id14,
			'code' => '1.1.1.1.1.1.2.1',
			'name' => 'Participación del porcentaje ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
			'description' => 'Participación del porcentaje ambiental - Corporaciones Autónomas Regionales (vigencia actual)']);
			
		$id15 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id14,
			'code' => '1.1.1.1.1.1.2.2',
			'name' => 'Participación del porcentaje ambiental - Corporaciones Autónomas Regionales (vigencia anterior)',
			'description' => 'Participación del porcentaje ambiental - Corporaciones Autónomas Regionales (vigencia anterior)']);
			
		$id16 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id9,
			'code' => '1.1.1.1.1.1.3',
			'name' => 'Participación de intereses de mora sobre la sobretasa ambiental',
			'description' => 'Participación de intereses de mora sobre la sobretasa ambiental']);
			
		$id17 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id17,
			'code' => '1.1.1.1.1.1.3.1',
			'name' => 'Participación de intereses de mora sobre la sobretasa ambiental (vigencia actual)',
			'description' => 'Participación de intereses de mora sobre la sobretasa ambiental (vigencia actual)']);
			
		$id18 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id17,
			'code' => '1.1.1.1.1.1.3.2',
			'name' => 'Participación de intereses de mora sobre la sobretasa ambiental (vigencia anterior)',
			'description' => 'Participación de intereses de mora sobre la sobretasa ambiental (vigencia anterior)']);
			
		$id19 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id9,
			'code' => '1.1.1.1.1.1.4',
			'name' => 'Participación de intereses de mora sobre el porcentaje ambiental',
			'description' => 'Participación de intereses de mora sobre el porcentaje ambiental']);
			
		$id20 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id20,
			'code' => '1.1.1.1.1.1.4.1',
			'name' => 'Participación de intereses de mora sobre el porcentaje ambiental (vigencia actual)',
			'description' => 'Participación de intereses de mora sobre el porcentaje ambiental (vigencia actual)']);
			
		$id21 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id20,
			'code' => '1.1.1.1.1.1.4.2',
			'name' => 'Participación de intereses de mora sobre el porcentaje ambiental (vigencia anterior)',
			'description' => 'Participación de intereses de mora sobre el porcentaje ambiental (vigencia anterior)']);
			
		$id22 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id2,
			'code' => '1.1.2',
			'name' => 'Ingresos no tributarios',
			'description' => 'Son los ingresos corrientes que por ley no están definidos como impuestos y comprenderán las tasas y las multas. Los ingresos no tributarios se clasifican en: 
		
		1) Contribuciones 
		2) Tasas y derechos administrativos 
		3) Multas, sanciones e intereses de mora 
		4) Derechos económicos por uso de recursos naturales 
		5) Venta de bienes y servicios 
		6) Transferencias corrientes
		7) Participación y derechos de monopolio']);
			
		$id23 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id23,
			'code' => '1.1.2.1',
			'name' => 'Contribuciones',
			'description' => 'Las contribuciones son “las cargas fiscales al patrimonio particular, sustentadas en la potestad tributaria del Estado”. Las contribuciones corresponden a “la recuperación de los costos de los servicios que les presten o participación en los beneficios que les proporcionen”. El principio de legalidad del tributo se extiende a las contribuciones, razón por cual y como establece la Constitución Política, el método de definición de costos y beneficios y su forma de reparto deben ser definidos por Ley. Asimismo, la ley, ordenanza o acuerdo, debe definir los sujetos pasivos y activos, y la base gravable aplicable a la contribución. Sin embargo, la ley puede dar potestad administrativa a las autoridades para que fijen la tarifa que cobren a los contribuyentes. La unica excepción al principio de legalidad del tributo son las contribuciones especiales, las cuales no están definidas como contribuciones, pero de acuerdo con sentencia emitida por la Corte Constitucional, se ajusta a su definición.
		']);
			
		$id24 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id24,
			'code' => '1.1.2.1.1',
			'name' => 'Contribuciones diversas',
			'description' => 'Las contribuciones diversas comprenden los ingresos por concepto de las demás contribuciones que no se clasifican dentro de las demás categorías de contribuciones descritas anteriormente, es decir, a las contribuciones sociales 1-01-02-01-001, contribuciones inherentes a la nómina 1-01-02-01-002, contribuciones especiales 1-01-02-01-003, contribuciones parafiscales, agropecuarias y pesqueras 1-01-02-01-004.']);
			
		$id25 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id25,
			'code' => '1.1.2.1.1.1',
			'name' => 'Contribución sector eléctrico',
			'description' => 'Son los recursos por contribución del sector eléctrico a las que se refiere el artículo 45 de la Ley 99 de 1993. De acuerdo con este artículo, las empresas generadoras de energía hidroeléctrica cuya potencia nominal supera los 10.000 kilovatios, deben transferir el 6% de las ventas brutas de energia por generación propia de acuerdo con las distribuciones establecidas por la ley. En el caso de centrales térmicas el porcentaje de los recursos a transferir es del 4%. Los destinatarios de estos recursos son: las Corporaciones Autonómas Regionales o los Parques Nacionales Naturales que tengan jurisdicción en el área donde se encuentra localizada la cuenca hidrográfica y del área de influencia del proyecto o el área donde este ubicada la central térmica; y los municipios y distritos localizados de la cuenca que surte el embalse de las generadoras de energía hidroeléctrica o el municipio donde este ubicada la central térmica. COMPLEMENTAR PLAN DE DESARROLLO ART.289 DE 2019']);
			
		$id26 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id26,
			'code' => '1.1.2.1.1.1.1',
			'name' => 'Contribución sector eléctrico - Hidroeléctrica',
			'description' => 'Contribución sector eléctrico - Hidroeléctrica']);
			
		$id27 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id27,
			'code' => '1.1.2.1.1.1.1.1',
			'name' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
			'description' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)']);
			
		$id28 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id27,
			'code' => '1.1.2.1.1.1.1.2',
			'name' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia anterior)',
			'description' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia anterior)']);
			
		$id29 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id26,
			'code' => '1.1.2.1.1.1.2',
			'name' => 'Contribución sector eléctrico - Termoeléctrica',
			'description' => '']);
			
		$id30 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id30,
			'code' => '1.1.2.1.1.1.2.1',
			'name' => 'Contribución sector eléctrico - Termoeléctrica (vigencia actual)',
			'description' => 'Contribución sector eléctrico - Termoeléctrica (vigencia actual)']);
			
		$id31 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id30,
			'code' => '1.1.2.1.1.1.2.2',
			'name' => 'Contribución sector eléctrico - Termoeléctrica (vigencia anterior)',
			'description' => 'Contribución sector eléctrico - Termoeléctrica (vigencia anterior)']);
			
		$id32 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id26,
			'code' => '1.1.2.1.1.1.3',
			'name' => 'Contribución sector eléctrico - Energia Alternativa',
			'description' => '']);
			
		$id33 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id33,
			'code' => '1.1.2.1.1.1.3.1',
			'name' => 'Contribución sector eléctrico - Energia Alternativa (vigencia actual)',
			'description' => 'Contribución sector eléctrico - Energia Alternativa (vigencia actual)']);
			
		$id34 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id33,
			'code' => '1.1.2.1.1.1.3.2',
			'name' => 'Contribución sector eléctrico - Energia Alternativa (vigencia anterior)',
			'description' => 'Contribución sector eléctrico - Energia Alternativa (vigencia anterior)']);
			
		$id35 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id26,
			'code' => '1.1.2.1.1.1.4',
			'name' => 'Participación de intereses de mora sobre contribución sector eléctrico',
			'description' => 'Participación de intereses de mora sobre contribución sector eléctrico']);
			
		$id36 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id36,
			'code' => '1.1.2.1.1.1.4.1',
			'name' => 'Participación de intereses de mora sobre contribución sector eléctrico (vigencia actual)',
			'description' => 'Participación de intereses de mora sobre contribución sector eléctrico (vigencia actual)']);
			
		$id37 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id36,
			'code' => '1.1.2.1.1.1.4.2',
			'name' => 'Participación de intereses de mora sobre contribución sector eléctrico (vigencia anterior)',
			'description' => 'Participación de intereses de mora sobre contribución sector eléctrico (vigencia anterior)']);
			
		$id38 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id23,
			'code' => '1.1.2.2',
			'name' => 'Tasas y derechos administrativos',
			'description' => '']);
			
		$id39 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id39,
			'code' => '1.1.2.2.1',
			'name' => 'Tasas',
			'description' => 'Tasas']);
			
		$id40 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id40,
			'code' => '1.1.2.2.1.1',
			'name' => 'Tasas retributivas y compensatorias',
			'description' => 'Tasas retributivas y compensatorias']);
			
		$id41 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id41,
			'code' => '1.1.2.2.1.1.1',
			'name' => 'Tasa retributiva',
			'description' => 'Corresponden a las tasas retributivas por la utilización directa o indirecta de la atmósfera, del agua y del suelo, para introducir o arrojar desechos o desperdicios agrícolas, mineros o industriales, aguas negras o servidas de cualquier origen, humos, vapores y sustancias nocivas que sean resultado de actividades antrópicas o propiciadas por el hombre, o actividades económicas o de servicio, sean o no lucrativas. También a las tasas para compensar los gastos de mantenimiento de la renovabilidad de los recursos naturales renovables.  ']);
			
		$id42 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id42,
			'code' => '1.1.2.2.1.1.1.1',
			'name' => 'Tasa retributiva (vigencia actual)',
			'description' => 'Tasa retributiva (vigencia actual)']);
			
		$id43 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id42,
			'code' => '1.1.2.2.1.1.1.2',
			'name' => 'Tasa retributiva (vigencia anterior)',
			'description' => 'Tasa retributiva (vigencia anterior)']);
			
		$id44 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id41,
			'code' => '1.1.2.2.1.1.2',
			'name' => 'Tasa por el uso del agua',
			'description' => 'Recursos recibidos por concepto del uso y aprovechamiento que hacen las personas naturales, jurídicas, públicas o privadas, de las aguas que componen los recursos naturales renovables asociados a cualquier área del Sistema de Parques Nacionales Naturales. Estos recursos, están destinados por Ley al pago de los gastos de protección y renovación de los recursos hídricos.']);
			
		$id45 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id45,
			'code' => '1.1.2.2.1.1.2.1',
			'name' => 'Tasa por el uso del agua (vigencia actual)',
			'description' => 'Tasa por el uso del agua (vigencia actual)']);
			
		$id46 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id45,
			'code' => '1.1.2.2.1.1.2.2',
			'name' => 'Tasa por el uso del agua (vigencia anterior)',
			'description' => 'Tasa por el uso del agua (vigencia anterior)']);
			
		$id47 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id41,
			'code' => '1.1.2.2.1.1.3',
			'name' => 'Tasa de aprovechamiento Forestal',
			'description' => 'Tasa de aprovechamiento Forestal']);
			
		$id48 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id48,
			'code' => '1.1.2.2.1.1.3.1',
			'name' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
			'description' => 'Tasa de aprovechamiento Forestal (vigencia actual)']);
			
		$id49 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id48,
			'code' => '1.1.2.2.1.1.3.2',
			'name' => 'Tasa de aprovechamiento Forestal (vigencia anterior)',
			'description' => 'Tasa de aprovechamiento Forestal (vigencia anterior)']);
			
		$id50 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id41,
			'code' => '1.1.2.2.1.1.4',
			'name' => 'Tasa compensatoria por caza de Fauna Silvestre',
			'description' => 'se dirige a las autoridades ambientales competentes a que se refiere el artículo 2.2.9.10.1 .3, y a
		léls personas naturales o jurídicas que cacen la fauna silvestre nativa en el país, en adelante denominadas usuarios']);
			
		$id51 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id51,
			'code' => '1.1.2.2.1.1.4.1',
			'name' => 'Tasa compensatoria por caza de Fauna Silvestre (vigencia actual)',
			'description' => 'Tasa compensatoria por caza de Fauna Silvestre (vigencia actual)']);
			
		$id52 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id51,
			'code' => '1.1.2.2.1.1.4.2',
			'name' => 'Tasa compensatoria por caza de Fauna Silvestre (vigencia anterior)',
			'description' => 'Tasa compensatoria por caza de Fauna Silvestre (vigencia anterior)']);
			
		$id53 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id41,
			'code' => '1.1.2.2.1.1.5',
			'name' => 'Otras tasas',
			'description' => 'Otras tasas']);
			
		$id54 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id54,
			'code' => '1.1.2.2.1.1.5.1',
			'name' => 'Otras tasas (vigencia actual)',
			'description' => 'Otras tasas (vigencia actual)']);
			
		$id55 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id54,
			'code' => '1.1.2.2.1.1.5.2',
			'name' => 'Otras tasas (vigencia anterior)',
			'description' => 'Otras tasas (vigencia anterior)']);
			
		$id56 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id39,
			'code' => '1.1.2.2.2',
			'name' => 'Derechos Administrativos',
			'description' => 'Corresponde a los ingresos por concepto de la venta de bienes y la prestación de servicios que realizan las entidades en desarrollo de sus funciones y competencias legales, independientemente de que las mismas estén o no relacionadas con actividades de producción, o si se venden o no a precios económicamente significativos. Las ventas de bienes y servicios se registran sin deducir los costos de su recaudo (Decreto 111 de 1996, art. 35). ']);
			
		$id57 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id57,
			'code' => '1.1.2.2.2.1',
			'name' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales',
			'description' => 'Ley 633 de 2002']);
			
		$id58 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id58,
			'code' => '1.1.2.2.2.1.1',
			'name' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
			'description' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)']);
			
		$id59 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id58,
			'code' => '1.1.2.2.2.1.2',
			'name' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia anterior)',
			'description' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia anterior)']);
			
		$id60 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id57,
			'code' => '1.1.2.2.2.2',
			'name' => 'Seguimiento a licencias, permisos, concesiones, autorizaciones y demás trámites ambientales',
			'description' => 'Ley 633 de 2002']);
			
		$id61 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id61,
			'code' => '1.1.2.2.2.2.1',
			'name' => 'Seguimiento a licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
			'description' => 'Seguimiento a licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)']);
			
		$id62 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id61,
			'code' => '1.1.2.2.2.2.2',
			'name' => 'Seguimiento a licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia anterior)',
			'description' => 'Seguimiento a licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia anterior)']);
			
		$id63 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id57,
			'code' => '1.1.2.2.2.3',
			'name' => 'Salvoconductos',
			'description' => 'Salvoconductos']);
			
		$id64 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id64,
			'code' => '1.1.2.2.2.3.1',
			'name' => 'Salvoconductos (vigencia actual)',
			'description' => 'Salvoconductos (vigencia actual)']);
			
		$id65 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id64,
			'code' => '1.1.2.2.2.3.2',
			'name' => 'Salvoconductos (vigencia anterior)',
			'description' => 'Salvoconductos (vigencia anterior)']);
			
		$id66 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id57,
			'code' => '1.1.2.2.2.4',
			'name' => 'Venta de productos forestales',
			'description' => 'Venta de productos forestales']);
			
		$id67 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id67,
			'code' => '1.1.2.2.2.4.1',
			'name' => 'Venta de productos forestales (vigencia actual)',
			'description' => 'Venta de productos forestales (vigencia actual)']);
			
		$id68 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id67,
			'code' => '1.1.2.2.2.4.2',
			'name' => 'Venta de productos forestales (vigencia anterior)',
			'description' => 'Venta de productos forestales (vigencia anterior)']);
			
		$id69 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id57,
			'code' => '1.1.2.2.2.5',
			'name' => 'Venta de Servicios de Laboratorio e Información',
			'description' => 'Venta de Servicios de Laboratorio e Información']);
			
		$id70 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id70,
			'code' => '1.1.2.2.2.5.1',
			'name' => 'Venta de Servicios de Laboratorio e Información (vigencia actual)',
			'description' => 'Venta de Servicios de Laboratorio e Información (vigencia actual)']);
			
		$id71 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id70,
			'code' => '1.1.2.2.2.5.2',
			'name' => 'Venta de Servicios de Laboratorio e Información (vigencia anterior)',
			'description' => 'Venta de Servicios de Laboratorio e Información (vigencia anterior)']);
			
		$id72 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id57,
			'code' => '1.1.2.2.2.6',
			'name' => 'Pruebas de Bombeo y Videos de Pozos',
			'description' => 'Pruebas de Bombeo y Videos de Pozos']);
			
		$id73 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id73,
			'code' => '1.1.2.2.2.6.1',
			'name' => 'Pruebas de Bombeo y Videos de Pozos (vigencia actual)',
			'description' => 'Pruebas de Bombeo y Videos de Pozos (vigencia actual)']);
			
		$id74 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id73,
			'code' => '1.1.2.2.2.6.2',
			'name' => 'Pruebas de Bombeo y Videos de Pozos (vigencia anterior)',
			'description' => 'Pruebas de Bombeo y Videos de Pozos (vigencia anterior)']);
			
		$id75 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id57,
			'code' => '1.1.2.2.2.7',
			'name' => 'Aprovechamientos por parques',
			'description' => 'Aprovechamientos por parques']);
			
		$id76 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id76,
			'code' => '1.1.2.2.2.7.1',
			'name' => 'Aprovechamientos por parques (vigencia actual)',
			'description' => 'Aprovechamientos por parques (vigencia actual)']);
			
		$id77 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id76,
			'code' => '1.1.2.2.2.7.2',
			'name' => 'Aprovechamientos por parques (vigencia anterior)',
			'description' => 'Aprovechamientos por parques (vigencia anterior)']);
			
		$id78 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id57,
			'code' => '1.1.2.2.2.8',
			'name' => 'Otros servicios',
			'description' => 'Otros servicios']);
			
		$id79 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id79,
			'code' => '1.1.2.2.2.8.1',
			'name' => 'Otros servicios (vigencia actual)',
			'description' => 'Otros servicios (vigencia actual)']);
			
		$id80 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id79,
			'code' => '1.1.2.2.2.8.2',
			'name' => 'Otros servicios (vigencia anterior)',
			'description' => 'Otros servicios (vigencia anterior)']);
			
		$id81 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id23,
			'code' => '1.1.2.3',
			'name' => 'Multas, sanciones e intereses de mora',
			'description' => 'El recaudo por multas y sanciones es generado por penalidades pecuniarias que derivan del poder punitivo del Estado, y que se establecen por el incumplimiento de leyes o normas administrativas, con el fin de prevenir un comportamiento considerado indeseable.
		
		Por su parte, los intereses de mora hacen referencia a aquellos que se recaudan por el resarcimiento tarifado o indemnización de los perjuicios que padece el acreedor por no tener consigo el dinero en la oportunidad debida. La mora genera que se hagan correr en contra del deudor los daños y perjuicios llamados moratorios que representan el perjuicio causado al acreedor por el retraso en la ejecución de la obligación.
		
		Los intereses de mora se incluyen en esta cuenta debido al componente indemnizatorio reconocido en la Sentencia C-604/2012. En este sentido, al igual que las multas y sanciones, el cobro de intereses de mora se hace en parte con el fin de prevenir la reiteración de una conducta indeseable.
		
		Las multas, sanciones e intereses moratorios se clasifican en:
		
		1) Multas y sanciones 
		2) Intereses de mora']);
			
		$id82 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id82,
			'code' => '1.1.2.3.1',
			'name' => 'Multas y sanciones',
			'description' => 'Recursos por concepto de penalidades pecuniarias que derivan del poder punitivo del Estado, y que se establecen con el fin de prevenir un comportamiento considerado indeseable. Vale la pena precisar que las multas y sanciones se distinguen nítidamente de las contribuciones fiscales y parafiscales, pues estas últimas son consecuencia del poder impositivo, y no punitivo, del Estado. Esta diferencia de naturaleza jurídica se articula a la diversidad de finalidades de las mismas.
		Así, una multa se establece con el fin de prevenir un comportamiento considerado indeseable, mientras que una contribución es un medio para financiar los gastos del Estado.
		Las multas y sanciones se desagregan de igual manera para la Nación, los establecimientos públicos, los fondos especiales y las contribuciones parafiscales.']);
			
		$id83 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id83,
			'code' => '1.1.2.3.1.1',
			'name' => 'Multas ambientales',
			'description' => 'Corresponde al pago de una suma de dinero que las autoridades ambientales imponen a quien con su acción u omisión infrinja las normas ambientales.
		Las autoridades ambientales son: El Ministerio de Ambiente y Desarrollo Sostenible, la Unidad Administrativa Especial del Sistema de Parques Nacionales Naturales, las Corporaciones Autónomas Regionales y las de Desarrollo Sostenible, las Unidades Ambientales Urbanas, la Armada Nacional, así como los departamentos, municipios y distritos.  Estas autoridades están habilitadas para imponer y ejecutar las medidas preventivas y sancionatorias consagradas en la ley, sin perjuicio de las competencias legales de otras autoridades.']);
			
		$id84 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id84,
			'code' => '1.1.2.3.1.1.1',
			'name' => 'Multas ambientales (vigencia actual)',
			'description' => 'Multas ambientales (vigencia actual)']);
			
		$id85 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id84,
			'code' => '1.1.2.3.1.1.2',
			'name' => 'Multas ambientales (vigencia anterior)',
			'description' => 'Multas ambientales (vigencia anterior)']);
			
		$id86 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id83,
			'code' => '1.1.2.3.1.2',
			'name' => 'Intereses de mora',
			'description' => 'Recaudo por concepto del retraso en que ha incurrido un tercero dentro de los plazos establecidos para el pago de una obligación. Los intereses de mora representan el resarcimiento tarifado o indemnización de los perjuicios que padece el acreedor por no tener consigo el dinero en la oportunidad debida.']);
			
		$id87 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id87,
			'code' => '1.1.2.3.1.2.1',
			'name' => 'Intereses de mora (vigencia actual)',
			'description' => 'Intereses de mora (vigencia actual)']);
			
		$id88 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id87,
			'code' => '1.1.2.3.1.2.2',
			'name' => 'Intereses de mora (vigencia anterior)',
			'description' => 'Intereses de mora (vigencia anterior)']);
			
		$id89 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id23,
			'code' => '1.1.2.4',
			'name' => 'Venta de bienes y servicios',
			'description' => 'Corresponde a los ingresos por concepto de la venta de bienes y la prestación de servicios que realizan las entidades en desarrollo de sus funciones y competencias legales, independientemente de que las mismas estén o no relacionadas con actividades de producción, o si se venden o no a precios económicamente significativos. Las ventas de bienes y servicios se registran sin deducir los costos de su recaudo (Decreto 111 de 1996, art. 35). ']);
			
		$id90 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id90,
			'code' => '1.1.2.4.1',
			'name' => 'Ventas de establecimientos de mercado',
			'description' => 'Son los ingresos por ventas de bienes y servicios resultantes del desarrollo de funciones misionales de producción o comercialización. Es decir, aquellas funciones de producción o comercialización dispuestas legalmente como competencias principales de la entidad. Esta categoría se desagrega siguiendo la Clasificación Central de Productos (CPC) del DANE.
		']);
			
		$id91 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id91,
			'code' => '1.1.2.4.1.1',
			'name' => 'Agricultura, silvicultura y productos de la pesca',
			'description' => 'Agricultura, silvicultura y productos de la pesca']);
			
		$id92 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id92,
			'code' => '1.1.2.4.1.1.1',
			'name' => 'Productos de la silvicultura y de la explotación forestal',
			'description' => 'Ley 633 de 2002']);
			
		$id93 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id93,
			'code' => '1.1.2.4.1.1.1.1',
			'name' => 'Madera en bruto',
			'description' => 'Madera en bruto']);
			
		$id94 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id94,
			'code' => '1.1.2.4.1.1.1.1.1',
			'name' => 'Madera en bruto (vigencia actual)',
			'description' => 'Madera en bruto (vigencia actual)']);
			
		$id95 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id94,
			'code' => '1.1.2.4.1.1.1.1.2',
			'name' => 'Madera en bruto  (vigencia anterior)',
			'description' => 'Madera en bruto  (vigencia anterior)']);
			
		$id96 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id93,
			'code' => '1.1.2.4.1.1.1.2',
			'name' => 'Productos forestales diferentes a la madera',
			'description' => 'Productos forestales diferentes a la madera']);
			
		$id97 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id97,
			'code' => '1.1.2.4.1.1.1.2.1',
			'name' => 'Productos forestales diferentes a la madera (vigencia actual)',
			'description' => 'Productos forestales diferentes a la madera (vigencia actual)']);
			
		$id98 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id97,
			'code' => '1.1.2.4.1.1.1.2.2',
			'name' => 'Productos forestales diferentes a la madera  (vigencia anterior)',
			'description' => 'Productos forestales diferentes a la madera  (vigencia anterior)']);
			
		$id99 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id91,
			'code' => '1.1.2.4.1.2',
			'name' => 'Otras ventas incidentales de establecimiento de mercado',
			'description' => 'Otras ventas incidentales de establecimiento de mercado']);
			
		$id100 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id100,
			'code' => '1.1.2.4.1.2.1',
			'name' => 'Otras ventas incidentales de establecimiento de mercado (vigencia actual)',
			'description' => 'Otras ventas incidentales de establecimiento de mercado (vigencia actual)']);
			
		$id101 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id100,
			'code' => '1.1.2.4.1.2.2',
			'name' => 'Otras ventas incidentales de establecimiento de mercado (vigencia anterior)',
			'description' => 'Otras ventas incidentales de establecimiento de mercado (vigencia anterior)']);
			
		$id102 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id90,
			'code' => '1.1.2.4.2',
			'name' => 'Ventas incidentales de establecimiento de no mercado',
			'description' => 'Son los ingresos por ventas de bienes y servicios que no resultan del desarrollo de funciones misionales de producción o comercialización. Es decir, que la venta de dichos bienes y servicios no se relaciona con las competencias legales de la entidad. Generalmente, estas ventas de bienes y servicios tienen un carácter incidental en las entidades. Esta categoría se desagrega siguiendo la Clasificación Central de Productos (CPC) del DANE.']);
			
		$id103 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id103,
			'code' => '1.1.2.4.2.1',
			'name' => 'Productos metálicos, maquinaria y equipo',
			'description' => 'Son los ingresos asociados a la venta de metales básicos o productos metálicos elaborados; maquinaria  de  uso  general  o  especial;  máquinas  para  oficina  y  contabilidad;  aparatos  eléctricos; aparatos de radio, televisión y comunicaciones; aparatos médicos y equipo de transporte. ']);
			
		$id104 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id104,
			'code' => '1.1.2.4.2.1.1',
			'name' => 'Productos metálicos, maquinaria y equipo (vigencia actual)',
			'description' => 'Productos metálicos, maquinaria y equipo (vigencia actual)']);
			
		$id105 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id104,
			'code' => '1.1.2.4.2.1.2',
			'name' => 'Productos metálicos, maquinaria y equipo (vigencia anterior)',
			'description' => 'Productos metálicos, maquinaria y equipo (vigencia anterior)']);
			
		$id106 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id103,
			'code' => '1.1.2.4.2.2',
			'name' => 'Alquiler de Maquinaria y Equipos',
			'description' => 'Alquiler de Maquinaria y Equipos']);
			
		$id107 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id107,
			'code' => '1.1.2.4.2.2.1',
			'name' => 'Alquiler de Maquinaria y Equipos (vigencia actual)',
			'description' => 'Alquiler de Maquinaria y Equipos (vigencia actual)']);
			
		$id108 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id107,
			'code' => '1.1.2.4.2.2.2',
			'name' => 'Alquiler de Maquinaria y Equipos (vigencia anterior)',
			'description' => 'Alquiler de Maquinaria y Equipos (vigencia anterior)']);
			
		$id109 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id103,
			'code' => '1.1.2.4.2.3',
			'name' => 'Aprovechamiento por arriendos',
			'description' => 'Aprovechamiento por arriendos']);
			
		$id110 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id110,
			'code' => '1.1.2.4.2.3.1',
			'name' => 'Aprovechamiento por arriendos (vigencia actual)',
			'description' => 'Aprovechamiento por arriendos (vigencia actual)']);
			
		$id111 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id110,
			'code' => '1.1.2.4.2.3.2',
			'name' => 'Aprovechamiento por arriendos (vigencia anterior)',
			'description' => 'Aprovechamiento por arriendos (vigencia anterior)']);
			
		$id112 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id103,
			'code' => '1.1.2.4.2.4',
			'name' => 'Otras ventas incidentales de establecimiento no de mercado',
			'description' => 'Otras ventas incidentales de establecimiento no de mercado']);
			
		$id113 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id113,
			'code' => '1.1.2.4.2.4.1',
			'name' => 'Otras ventas incidentales de establecimiento no de mercado (vigencia actual)',
			'description' => 'Otras ventas incidentales de establecimiento no de mercado (vigencia actual)']);
			
		$id114 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id113,
			'code' => '1.1.2.4.2.4.2',
			'name' => 'Otras ventas incidentales de establecimiento no de mercado (vigencia anterior)',
			'description' => 'Otras ventas incidentales de establecimiento no de mercado (vigencia anterior)']);
			
		$id115 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id23,
			'code' => '1.1.2.5',
			'name' => 'Transferencias corrientes',
			'description' => 'Transferencias corrientes']);
			
		$id116 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id116,
			'code' => '1.1.2.5.1',
			'name' => 'Transferencias del sector central Nacional - PGN',
			'description' => 'Agrupación que comprende las transferencias de recursos que reciben las unidades del PGSP y cuyo origen es el sector central Nacional, entendido como el Presupuesto General de Nación.']);
			
		$id117 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id117,
			'code' => '1.1.2.5.1.1',
			'name' => 'Aportes Nación',
			'description' => 'Corresponde a los recursos del Presupuesto de la Nación que el gobierno transfiere a las entidades descentralizadas del orden nacional con el objeto de contribuir a la atención de sus compromisos y al cumplimiento de sus funciones.']);
			
		$id118 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id118,
			'code' => '1.1.2.5.1.1.1',
			'name' => 'Aportes Nación para Funcionamiento',
			'description' => 'Aportes Nación para Funcionamiento']);
			
		$id119 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id119,
			'code' => '1.1.2.5.1.1.1.1',
			'name' => 'Aportes de la Nación para Gastos de personal',
			'description' => 'Aportes de la Nación para Gastos de personal']);
			
		$id120 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id119,
			'code' => '1.1.2.5.1.1.1.2',
			'name' => 'Aportes de la Nación para Adquisición de bienes y servicios',
			'description' => 'Aportes de la Nación para Adquisición de bienes y servicios']);
			
		$id121 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id119,
			'code' => '1.1.2.5.1.1.1.3',
			'name' => 'Aportes de la Nación para Transferencias corrientes',
			'description' => 'Aportes de la Nación para Transferencias corrientes']);
			
		$id122 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id118,
			'code' => '1.1.2.5.1.1.2',
			'name' => 'Aportes de la Nación para Inversión',
			'description' => 'Aportes de la Nación para Inversión']);
			
		$id123 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id117,
			'code' => '1.1.2.5.1.2',
			'name' => 'Aportes Fondo de Compensación Ambiental -FCA,',
			'description' => 'Aportes Fondo de Compensación Ambiental -FCA,']);
			
		$id124 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id124,
			'code' => '1.1.2.5.1.2.1',
			'name' => 'Aportes Fondo de Compensación Ambiental -FCA, Funcionamiento ',
			'description' => 'Aportes Fondo de Compensación Ambiental -FCA, Funcionamiento ']);
			
		$id125 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id125,
			'code' => '1.1.2.5.1.2.1.1',
			'name' => 'Aportes del FCA para Gastos de personal',
			'description' => 'Aportes del FCA para Gastos de personal']);
			
		$id126 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id125,
			'code' => '1.1.2.5.1.2.1.2',
			'name' => 'Aportes del FCA para Adquisición de bienes y servicios',
			'description' => 'Aportes del FCA para Adquisición de bienes y servicios']);
			
		$id127 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id125,
			'code' => '1.1.2.5.1.2.1.3',
			'name' => 'Aportes del FCA para Transferencias corrientes',
			'description' => 'Aportes del FCA para Transferencias corrientes']);
			
		$id128 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id124,
			'code' => '1.1.2.5.1.2.2',
			'name' => 'Aportes inversión Fondo de Compensación Ambiental -FCA',
			'description' => 'Aportes inversión Fondo de Compensación Ambiental -FCA']);
			
		$id129 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id117,
			'code' => '1.1.2.5.1.3',
			'name' => 'Aportes inversión Fondo Nacional Ambiental - FONAM',
			'description' => 'Aportes inversión Fondo Nacional Ambiental - FONAM']);
			
		$id130 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id117,
			'code' => '1.1.2.5.1.4',
			'name' => 'Aportes del Sistema de Participación General de Regalias - SPGR',
			'description' => 'Aportes del Sistema de Participación General de Regalias - SPGR']);
			
		$id131 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id131,
			'code' => '1.1.2.5.1.4.1',
			'name' => 'Aportes del SPGR para Funcionamiento',
			'description' => 'Aportes del SPGR para Funcionamiento']);
			
		$id132 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id131,
			'code' => '1.1.2.5.1.4.2',
			'name' => 'Aportes del SPGR para Servicio de la Deuda',
			'description' => 'Aportes del SPGR para Servicio de la Deuda']);
			
		$id133 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id131,
			'code' => '1.1.2.5.1.4.3',
			'name' => 'Aportes del SPGR para Inversión',
			'description' => 'Aportes del SPGR para Inversión']);
			
		$id134 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id1,
			'code' => '1.2',
			'name' => 'Recursos de capital',
			'description' => 'Los recursos de capital se diferencian de los ingresos corrientes por su regularidad. Si bien el EOP no da una definición conceptual de estos recursos, la Corte Constitucional, mediante la Sentencia C-1072 de 2002, establece que los recursos de capital son aquellos “que entran a las arcas públicas de manera esporádica, no porque hagan parte de un rubro extraño, sino porque su cuantía es indeterminada, lo cual difícilmente asegura su continuidad durante amplios periodos presupuestales” (Corte Constitucional, Sentencia C-1072 de 2002).']);
			
		$id135 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id135,
			'code' => '1.2.1',
			'name' => 'Disposición de activos',
			'description' => 'Recursos que obtiene una entidad del presupuesto general del sector público provenientes del traslado de derecho y dominio parcial o total de activos con destino a la financiación del presupuesto (Ministerio de Hacienda y Crédito Público, 2011, p. 245). En el CONPES 3281 de 2004 el gobierno nacional estableció la estrategia de aprovechamiento y disposición de activos con el objetivo de “reducir la magnitud del pasivo mediante la liquidación o venta de activos del balance con los cuales se corrija de manera efectiva el déficit fiscal, con un efecto permanente en el mediano plazo” (CONPES 3281 de 2004).']);
			
		$id136 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id136,
			'code' => '1.2.1.1',
			'name' => 'Disposición de activos no financieros',
			'description' => 'Corresponde a los ingresos por concepto de transacciones de capital referentes a la venta de activos no financieros . Sobre estos activos se ejerce un derecho de propiedad, y generan beneficios económicos por mantenerlos o utilizarlos durante un período de tiempo. Los activos no financieros incluyen tanto activos producidos como no producidos y los productos de la propiedad intelectual.']);
			
		$id137 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id137,
			'code' => '1.2.1.1.1',
			'name' => 'Disposición de activos fijos',
			'description' => 'Ingresos por concepto de la venta de activos no financieros producidos que se utilizan de forma repetida o continua en procesos de producción por más de un año y cuyo precio es significativo para la entidad del PGSP.
		En este rubro se deben registrar las mejoras mayores de los activos fijos existentes, como los edificios o los programas de informática; siempre que, estas mejoras incrementen su capacidad productiva, amplíen su vida útil o ambas cosas. Se consideran mejoras mayores aquellas que recuperan o aumentan el valor del activo fijo, como las renovaciones significativas, reconstrucciones o agrandamientos. 
		']);
			
		$id138 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id138,
			'code' => '1.2.1.1.1.1',
			'name' => 'Disposición de edificaciones y estructuras',
			'description' => 'Ingresos por concepto de la venta de todo de edificaciones y estructuras, incluidos los accesorios y adecuaciones que forman parte integral de la estructura. Se compone de viviendas, edificios que no sean viviendas, otras estructuras y mejoras de la tierra.
		Esta cuenta también incluye  los monumentos públicos, identificables por su significado histórico, nacional, regional, local, religioso o simbólico (FMI, 2014, pág. 179), los cuales se clasifican en otras estructuras.']);
			
		$id139 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id138,
			'code' => '1.2.1.1.1.2',
			'name' => 'Disposición de maquinaria y equipo',
			'description' => 'Ingresos por la concepto de la venta de activos como equipo de transporte, maquinaria relacionada con tecnologías de la información y las comunicaciones y otras maquinarias y equipos no clasificados en otra partida.']);
			
		$id140 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id138,
			'code' => '1.2.1.1.1.3',
			'name' => 'Disposición de otros activos fijos',
			'description' => 'Ingresos por la disposición de activos no mencionados en los rubros anteriores, a saber, recursos biológicos cultivados y productos de propiedad intelectual. ']);
			
		$id141 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id141,
			'code' => '1.2.1.1.1.3.1',
			'name' => 'Disposición de productos de la propiedad intelectual',
			'description' => 'Ingresos por la disposición de  productos de la propiedad intelectual, los cuales son el resultado de la investigación, el desarrollo o la innovación conducente a conocimientos que pueden venderse en el mercado.  ']);
			
		$id142 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id137,
			'code' => '1.2.1.1.2',
			'name' => 'Disposición de activos no producidos',
			'description' => 'Ingresos por la disposición de activos no producidos, los cuales incluyen los activos de origen natural e intangible. Los activos de origen natural son recursos naturales sobre los que se ejercen derechos de propiedad (Fondo Monetario Internacional, 2014, pág. 207).']);
			
		$id143 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id143,
			'code' => '1.2.1.1.2.1',
			'name' => 'Disposición de  tierras y terrenos',
			'description' => 'Ingresos por la disposición de tierras y terrenos propiamente dichas, incluyendo la cubierta de suelo y las aguas superficiales asociadas, sobre los que se han establecido derechos de propiedad y de las cuales pueden derivarse beneficios económicos para los propietarios por su posesión o uso.']);
			
		$id144 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id135,
			'code' => '1.2.2',
			'name' => 'Rendimientos financieros',
			'description' => 'Son los ingresos que se reciben las unidades del PGSP en retorno por poner ciertos activos financieros a disposición de terceros, sin trasladar el derecho o dominio, total o parcial del activo. De acuerdo con el MEFP 2014, los activos financieros son aquellos que tienen un pasivo como contrapartida, es decir, el propietario de dicho activo (acreedor) tiene derecho a recibir recursos o fondos de otra unidad institucional (deudor), de acuerdo con las condiciones del pasivo.']);
			
		$id145 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id145,
			'code' => '1.2.2.1',
			'name' => 'Rendimientos financieros de títulos participativos',
			'description' => 'Corresponde a los ingresos por concepto de rendimientos financieros sobre títulos participativos. Los títulos participativos otorgan al titular la calidad de copropietario e  incorporan derechos sobre los resultados obtenidos por la entidad emisora.']);
			
		$id146 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id145,
			'code' => '1.2.2.2',
			'name' => 'Rendimientos financieros de depósitos',
			'description' => 'Son los ingresos por rendimientos financieros de los depósitos que tengan las entidades de gobierno en las entidades vigiladas por la Superintendencia Financiera.']);
			
		$id147 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id147,
			'code' => '1.2.2.2.1',
			'name' => 'Rendimientos financieros de otros depósitos',
			'description' => 'Corresponden a los ingresos por rendimientos financieros de otros depósitos distintos a los de la Cuenta Única Nacional.']);
			
		$id148 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id148,
			'code' => '1.2.2.2.1.1',
			'name' => 'Rendimientos financieros Ingresos tributarios',
			'description' => 'Rendimientos financieros Ingresos tributarios']);
			
		$id149 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id149,
			'code' => '1.2.2.2.1.1.1',
			'name' => 'Rendimientos financieros Impuestos directos',
			'description' => 'Rendimientos financieros Impuestos directos']);
			
		$id150 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id148,
			'code' => '1.2.2.2.1.2',
			'name' => 'Rendimientos financieros Contribuciones',
			'description' => 'Rendimientos financieros Contribuciones']);
			
		$id151 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id148,
			'code' => '1.2.2.2.1.3',
			'name' => 'Rendimientos financieros Tasas retributivas y compensatorias',
			'description' => 'Rendimientos financieros Tasas retributivas y compensatorias']);
			
		$id152 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id152,
			'code' => '1.2.2.2.1.3.1',
			'name' => 'Rendimientos financieros Tasa retributiva',
			'description' => 'Rendimientos financieros Tasa retributiva']);
			
		$id153 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id152,
			'code' => '1.2.2.2.1.3.2',
			'name' => 'Rendimientos financierosTasa por el uso del agua',
			'description' => 'Rendimientos financierosTasa por el uso del agua']);
			
		$id154 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id152,
			'code' => '1.2.2.2.1.3.3',
			'name' => 'Rendimientos financieros Tasa de aprovechamiento Forestal',
			'description' => 'Rendimientos financieros Tasa de aprovechamiento Forestal']);
			
		$id155 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id152,
			'code' => '1.2.2.2.1.3.4',
			'name' => 'Rendimientos financieros Tasa compensatoria por caza de Fauna Silvestre',
			'description' => 'Rendimientos financieros Tasa compensatoria por caza de Fauna Silvestre']);
			
		$id156 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id152,
			'code' => '1.2.2.2.1.3.5',
			'name' => 'Rendimientos financieros Otras tasas',
			'description' => 'Rendimientos financieros Otras tasas']);
			
		$id157 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id148,
			'code' => '1.2.2.2.1.4',
			'name' => 'Rendimientos financiero Multas, sanciones e intereses de mora',
			'description' => 'Rendimientos financiero Multas, sanciones e intereses de mora']);
			
		$id158 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id148,
			'code' => '1.2.2.2.1.5',
			'name' => 'Rendimientos financiero Venta de bienes y servicios',
			'description' => 'Rendimientos financiero Venta de bienes y servicios']);
			
		$id159 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id148,
			'code' => '1.2.2.2.1.6',
			'name' => 'Rendimientos financiero Recursos de crédito externo',
			'description' => 'Rendimientos financiero Recursos de crédito externo']);
			
		$id160 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id148,
			'code' => '1.2.2.2.1.7',
			'name' => 'Rendimientos financiero Recursos de crédito interno',
			'description' => 'Rendimientos financiero Recursos de crédito interno']);
			
		$id161 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id148,
			'code' => '1.2.2.2.1.8',
			'name' => 'Rendimientos financieros Compensaciones',
			'description' => 'Rendimientos financieros Compensaciones']);
			
		$id162 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id162,
			'code' => '1.2.2.2.1.8.1',
			'name' => 'Rendimientos financieros Compensación resguardos indígenas',
			'description' => 'Rendimientos financieros Compensación resguardos indígenas']);
			
		$id163 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id145,
			'code' => '1.2.2.3',
			'name' => 'Rendimientos financieros Transferencias de capital',
			'description' => 'Rendimientos financieros Transferencias de capital']);
			
		$id164 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id164,
			'code' => '1.2.2.3.1',
			'name' => 'Rendimientos financieros Convenios',
			'description' => 'Rendimientos financieros Convenios']);
			
		$id165 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id165,
			'code' => '1.2.2.3.1.1',
			'name' => 'Rendimientos financieros  Convenios con Departamentos',
			'description' => 'Rendimientos financieros  Convenios con Departamentos']);
			
		$id166 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id165,
			'code' => '1.2.2.3.1.2',
			'name' => 'Rendimientos financieros  Convenios con Municipios ',
			'description' => 'Rendimientos financieros  Convenios con Municipios ']);
			
		$id167 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id165,
			'code' => '1.2.2.3.1.3',
			'name' => 'Rendimientos financieros  Otros Convenios',
			'description' => 'Rendimientos financieros  Otros Convenios']);
			
		$id168 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id164,
			'code' => '1.2.2.3.2',
			'name' => 'Rendimientos financieros Transferencias del sector central Nacional - PGN',
			'description' => 'Rendimientos financieros Transferencias del sector central Nacional - PGN']);
			
		$id169 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id164,
			'code' => '1.2.2.3.3',
			'name' => 'Rendimientos financieros Transferencias del sector descentralizado - Estapublicos Nacionales',
			'description' => 'Rendimientos financieros Transferencias del sector descentralizado - Estapublicos Nacionales']);
			
		$id170 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id164,
			'code' => '1.2.2.3.4',
			'name' => 'Rendimientos financieros Transferencias del sector descentralizado - Empresas Nacionales',
			'description' => 'Rendimientos financieros Transferencias del sector descentralizado - Empresas Nacionales']);
			
		$id171 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id164,
			'code' => '1.2.2.3.5',
			'name' => 'Rendimientos financieros Transferencias del sector central Territorial',
			'description' => 'Rendimientos financieros Transferencias del sector central Territorial']);
			
		$id172 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id164,
			'code' => '1.2.2.3.6',
			'name' => 'Rendimientos financieros Transferencias del sector descentralizado - Estapublicos Territoriales',
			'description' => 'Rendimientos financieros Transferencias del sector descentralizado - Estapublicos Territoriales']);
			
		$id173 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id164,
			'code' => '1.2.2.3.7',
			'name' => 'Rendimientos financieros Transferencias del sector descentralizado - Empresas Territoriales',
			'description' => 'Rendimientos financieros Transferencias del sector descentralizado - Empresas Territoriales']);
			
		$id174 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id164,
			'code' => '1.2.2.3.8',
			'name' => 'Rendimientos financieros Transferencias de esquemas asociativos',
			'description' => 'Rendimientos financieros Transferencias de esquemas asociativos']);
			
		$id175 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id164,
			'code' => '1.2.2.3.9',
			'name' => 'Rendimientos financieros Transferencias de órganos autónomos e independientes',
			'description' => 'Rendimientos financieros Transferencias de órganos autónomos e independientes']);
			
		$id176 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id164,
			'code' => '1.2.2.3.10',
			'name' => 'Rendimientos financieros Transferencias de  privados que administran recursos públicos',
			'description' => 'Rendimientos financieros Transferencias de  privados que administran recursos públicos']);
			
		$id177 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id164,
			'code' => '1.2.2.3.11',
			'name' => 'Rendimientos financieros Indemnizaciones relacionadas con seguros no de vida',
			'description' => 'Rendimientos financieros Indemnizaciones relacionadas con seguros no de vida']);
			
		$id178 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id164,
			'code' => '1.2.2.3.12',
			'name' => 'Rendimientos financieros Donaciones',
			'description' => 'Rendimientos financieros Donaciones']);
			
		$id179 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id145,
			'code' => '1.2.2.4',
			'name' => 'Rendimientos financieros de valores distintos de acciones',
			'description' => 'Corresponde a los ingresos por concepto de rendimientos de los valores distintos a las acciones. Los valores distintos a las acciones se definen como instrumentos financieros negociables, que sirven de evidencia de la obligación de liquidarlos mediante el suministro de efectivo.']);
			
		$id180 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id145,
			'code' => '1.2.2.5',
			'name' => 'Rendimientos financieros Intereses por préstamos',
			'description' => 'Corresponde a los ingresos por el concepto de intereses de fondos en préstamos que tienen las entidades de gobierno. Los intereses son una forma de renta de inversión cobradas por el acreedor del préstamo.']);
			
		$id181 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id135,
			'code' => '1.2.3',
			'name' => 'Recursos de crédito externo',
			'description' => 'Comprende los recursos provenientes de operaciones de crédito público realizadas con agentes residentes fuera del país. Entiéndase por operaciones de crédito público todo acto o contrato que tienen por objeto dotar a la entidad del PGSP de recursos, bienes o servicios con plazo para su pago. ']);
			
		$id182 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id182,
			'code' => '1.2.3.1',
			'name' => 'Recursos de contratos de empréstitos externos',
			'description' => 'Corresponde a los recursos provenientes de contratos de empréstitos externos realizados por las entidades del PGSP. Los contratos de empréstito tienen por objeto proveer a la entidad contratante (órgano del PGN, entidad territorial, órgano autónomo o particular) de recursos con plazo para su pago. Para el caso de las entidades estatales, el Decreto 1068 de 2015 reglamente los contratos de empréstitos externos.']);
			
		$id183 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id183,
			'code' => '1.2.3.1.1',
			'name' => 'Bancos comerciales',
			'description' => 'Comprende los recursos provenientes de los créditos adquiridos con bancos comerciales residentes fuera del país. Un banco comercial es un intermediario financiero que capta recursos de quienes tienen dinero disponible para colocarlos en manos de quienes lo necesitan']);
			
		$id184 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id183,
			'code' => '1.2.3.1.2',
			'name' => 'Entidades de fomento',
			'description' => 'Comprende los recursos provenientes de los créditos adquiridos con entidades de fomento residentes fuera del país. Una entidad de fomento es una institución que capta recursos de los mercados externos e internos para promover sectores específicos de la economía, a través de la elaboración y ejecución de proyectos de inversión en bienes de capital,  y la prestación de servicios de asistencia técnica necesarios para el desarrollo de los mismos']);
			
		$id185 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id182,
			'code' => '1.2.3.2',
			'name' => 'Recursos de crédito de títulos de deuda pública externa',
			'description' => 'Corresponde a los ingresos por emisión y colocación de bonos y demás valores de contenido crediticio y con plazo para su redención, emitidos por las entidades de gobierno en el exterior o empresas financieros y no financieras.']);
			
		$id186 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id182,
			'code' => '1.2.3.3',
			'name' => 'Recursos de crédito de proveedores',
			'description' => 'Comprende los créditos obtenidos con agentes residentes fuera del país,  mediante los cuales se contrata la adquisición de bienes o servicios con plazo para su pago. Esta cuenta es de uso exclusivo de la nación. No aplica para la entrega de bienes y/o servicios de manera directa por el proveedor. ']);
			
		$id187 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id135,
			'code' => '1.2.4',
			'name' => 'Recursos de crédito interno',
			'description' => 'Comprende los recursos provenientes de operaciones de crédito público que realizan las entidades del PGSP con agentes residentes en el país. Entiéndase por operaciones de crédito público todo acto o contrato que tienen por objeto dotar a la entidad (órgano del PGN, entidad territorial, órgano autónomo, empresa o particular) de recursos, bienes o servicios con plazo para su pago. ']);
			
		$id188 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id188,
			'code' => '1.2.4.1',
			'name' => 'Recursos de contratos de empréstitos internos',
			'description' => 'Corresponde a los recursos provenientes de contratos de empréstitos internos de las entidades del PGSP. Para las entidades de gobierno, estas operaciones están reguladas por el Decreto 1068 de 2015 y el Decreto 2681 de 1993, art. 22.']);
			
		$id189 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id189,
			'code' => '1.2.4.1.1',
			'name' => 'Recursos de contratos de empréstitos internos con bancos comerciales',
			'description' => 'Corresponde a los ingresos por adquisición de deuda con aquellos bancos comerciales que ofrecen sus recursos a tasas y condiciones vigentes del mercado. Estos recursos pueden dirigirse a cualquier sector.']);
			
		$id190 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id190,
			'code' => '1.2.4.1.1.1',
			'name' => 'Recursos de contratos de empréstitos internos con bancos comerciales públicos',
			'description' => 'Corresponde a los ingresos por concepto de los desembolsos realizados por bancos comerciales públicos en razón de los créditos otorgados a la entidad del PGSP.']);
			
		$id191 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id190,
			'code' => '1.2.4.1.1.2',
			'name' => 'Recursos de contratos de empréstitos internos con bancos comerciales privados',
			'description' => 'Corresponde a los ingresos por concepto de los desembolsos realizados por bancos comerciales privados en razón de los créditos otorgados a la entidad del PGSP.']);
			
		$id192 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id189,
			'code' => '1.2.4.1.2',
			'name' => 'Recursos de contratos de empréstitos internos con entidades del sector público',
			'description' => 'Ingresos por contratación de créditos públicos con entidades del sector público, excluyendo a los bancos comerciales públicos que están en otra categoría.']);
			
		$id193 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id193,
			'code' => '1.2.4.1.2.1',
			'name' => 'Recursos de contratos de empréstitos internos con la Nación',
			'description' => 'Corresponde a los ingresos por desembolsos de créditos otorgados por la Nación a las entidades del gobierno (nivel nacional y subnacional). Estos créditos están sujetos a condonación según los términos pactados en los convenios de desempeño y/o en los documentos que hagan sus veces.']);
			
		$id194 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id193,
			'code' => '1.2.4.1.2.2',
			'name' => 'Recursos de contratos de empréstitos internos con Findeter',
			'description' => 'Corresponde a los ingresos por desembolsos de créditos realizados durante la vigencia por la Financiera de Desarrollo Territorial S.A. (FINDETER).']);
			
		$id195 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id193,
			'code' => '1.2.4.1.2.3',
			'name' => 'Recursos de contratos de empréstitos internos con Fonade',
			'description' => 'Corresponde a los ingresos por desembolsos de créditos realizados durante la vigencia por el Fondo Financiero de Proyectos de Desarrollo (FONADE).']);
			
		$id196 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id193,
			'code' => '1.2.4.1.2.4',
			'name' => 'Recursos de contratos de empréstitos internos con Institutos de Desarrollo Departamental y/o Municipal',
			'description' => 'Corresponde a los ingresos por desembolsos realizados durante la vigencia por concepto de los créditos concedidos a la entidad de gobierno por parte de los fondos o institutos de desarrollo.']);
			
		$id197 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id193,
			'code' => '1.2.4.1.2.5',
			'name' => 'Banco de la República',
			'description' => 'Comprende los recursos provenientes de los préstamos adquiridos con el Banco de la República, el cual tiene, entre sus funciones, ser prestamista de última instancia del Gobierno Nacional. Los créditos otorgados por el Banco de la República a la Nación sólo se permiten en casos de extrema necesidad, y deben ser aprobados por todos los miembros de la Junta directiva del Banco.']);
			
		$id198 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id189,
			'code' => '1.2.4.1.3',
			'name' => 'Recursos de contratos de empréstitos internos con otras instituciones financieras y otros',
			'description' => 'Corresponde a los ingresos por contratación de créditos con entidades financieras distintas a las mencionadas. También incluyre los montos de dinero transferidos al Tesoro Nacional por concepto de cuentas inactivas, por parte de las entidades financieras. ']);
			
		$id199 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id188,
			'code' => '1.2.4.2',
			'name' => 'Recursos de crédito de títulos de deuda pública interna',
			'description' => 'Comprende los recursos provenientes de los títulos de deuda pública (bonos y demás valores de contenido crediticio) emitidos por las entidades de gobierno en el mercado local de capitales con plazo para su rendición']);
			
		$id200 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id200,
			'code' => '1.2.4.2.1',
			'name' => 'Colocación y títulos TES clase B del Gobierno Nacional',
			'description' => 'Comprende los recursos provenientes de la colocación de Títulos de Tesorería - TES Clase B que realiza el Gobierno Nacional mediante los mecanismos de subasta, operación convenida u operación forzosa, para financiar apropiaciones presupuestales. Los TES Clase B pueden ser administrados directamente por la Nación o ésta puede celebrar con el Banco de la República o con otras entidades nacionales o extranjeras, contratos de administración fiduciaria para la edición, emisión, colocación y garantía de los mismos.  ']);
			
		$id201 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id201,
			'code' => '1.2.4.2.1.1',
			'name' => 'Colocación y títulos TES clase B a corto plazo',
			'description' => 'Comprende los recursos provenientes de la colocación de TES Clase B que hace el Gobierno Nacional con  el  fin de efectuar operaciones  de  tesorería,  cuando  el  vencimiento de  los mismos  excede  la respectiva vigencia fiscal. Los TES Clase B a corto plazo tienen un término no mayor a un (1) año y no menor a treinta (30) días. ']);
			
		$id202 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id201,
			'code' => '1.2.4.2.1.2',
			'name' => 'Colocación y títulos TES clase B a largo plazo',
			'description' => 'Comprende los recursos provenientes de la colocación de TES Clase B que hace el Gobierno Nacional mediante subasta, operación forzosa u operación convenida, con el fin de financiar apropiaciones presupuestales. Los TES Clase B a largo plazo tienen un término de uno o más años calendario. ']);
			
		$id203 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id200,
			'code' => '1.2.4.2.2',
			'name' => 'Bonos y otros títulos emitidos por el Gobierno Nacional',
			'description' => 'Comprende  los  recursos provenientes  de  la  colocación  de  bonos  definidos  por  ley,  y  de  títulos diferentes a los TES, que tienen un contenido crediticio con plazo para su redención. ']);
			
		$id204 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id200,
			'code' => '1.2.4.2.3',
			'name' => 'Bonos y otros títulos de deuda emitidos por las entidades territoriales',
			'description' => 'Corresponde a los ingresos por emisión y colocación de bonos y demás valores de contenido crediticio y con plazo para su redención, emitidos por las entidades territoriales.']);
			
		$id205 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id188,
			'code' => '1.2.4.3',
			'name' => 'Recursos de crédito de proveedores',
			'description' => 'Comprende los créditos obtenidos con agentes residentes en territorio colombiano,  mediante los cuales se contrata la adquisición de bienes o servicios con plazo para su pago. Esta cuenta es de uso exclusivo de la nación. No aplica para la entrega de bienes y/o servicios de manera directa por el proveedor. ']);
			
		$id206 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id135,
			'code' => '1.2.5',
			'name' => 'Transferencias de capital ',
			'description' => 'Son las transferencias de recursos que reciben las entidades del PGSP, sin ser regulares o predecibles, y sin dar ningún bien, servicio o activo como contraprestación directa. 
		En oposición a las transferencias corrientes, las transferencias de capital se caracterizan por:
		
		•	No permitir un cálculo predecible o una estimación de estos gastos
		•	No son disponibilidades regulares 
		•	Dependen de la discrecionalidad de la entidad que realiza la transferencia.
		•	Tener un plazo limitado de vigencia']);
			
		$id207 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id207,
			'code' => '1.2.5.1',
			'name' => 'Convenios',
			'description' => 'Convenios']);
			
		$id208 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id208,
			'code' => '1.2.5.1.1',
			'name' => 'Convenios con Departamentos',
			'description' => 'Convenios con Departamentos']);
			
		$id209 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id208,
			'code' => '1.2.5.1.2',
			'name' => 'Convenios con  Municipios ',
			'description' => 'Convenios con  Municipios ']);
			
		$id210 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id208,
			'code' => '1.2.5.1.3',
			'name' => 'Otros Convenios',
			'description' => 'Otros Convenios']);
			
		$id211 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id207,
			'code' => '1.2.5.2',
			'name' => 'Transferencias del sector central Nacional - PGN',
			'description' => 'Transferencias del sector central Nacional - PGN']);
			
		$id212 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id212,
			'code' => '1.2.5.2.1',
			'name' => 'Transferencias a  órganos autónomos e independientes',
			'description' => 'Transferencias a  órganos autónomos e independientes']);
			
		$id213 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id207,
			'code' => '1.2.5.3',
			'name' => 'Transferencias del sector descentralizado - Estapublicos Nacionales',
			'description' => 'Transferencias del sector descentralizado - Estapublicos Nacionales']);
			
		$id214 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id207,
			'code' => '1.2.5.4',
			'name' => 'Transferencias del sector descentralizado - Empresas Nacionales',
			'description' => 'Transferencias del sector descentralizado - Empresas Nacionales']);
			
		$id215 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id207,
			'code' => '1.2.5.5',
			'name' => 'Transferencias del sector central Territorial',
			'description' => 'Transferencias del sector central Territorial']);
			
		$id216 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id216,
			'code' => '1.2.5.5.1',
			'name' => 'Transferencias de Departamentos',
			'description' => 'Transferencias de Departamentos']);
			
		$id217 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id216,
			'code' => '1.2.5.5.2',
			'name' => 'Transferencias de Municipios ',
			'description' => 'Transferencias de Municipios ']);
			
		$id218 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id207,
			'code' => '1.2.5.6',
			'name' => 'Transferencias del sector descentralizado - Estapublicos Territoriales',
			'description' => 'Transferencias del sector descentralizado - Estapublicos Territoriales']);
			
		$id219 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id207,
			'code' => '1.2.5.7',
			'name' => 'Transferencias del sector descentralizado - Empresas Territoriales',
			'description' => 'Transferencias del sector descentralizado - Empresas Territoriales']);
			
		$id220 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id207,
			'code' => '1.2.5.8',
			'name' => 'Transferencias de esquemas asociativos',
			'description' => 'Transferencias de esquemas asociativos']);
			
		$id221 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id207,
			'code' => '1.2.5.9',
			'name' => 'Transferencias de órganos autónomos e independientes',
			'description' => 'Transferencias de órganos autónomos e independientes']);
			
		$id222 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id207,
			'code' => '1.2.5.1',
			'name' => 'Transferencias de  privados que administran recursos públicos',
			'description' => 'Transferencias de  privados que administran recursos públicos']);
			
		$id223 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id207,
			'code' => '1.2.5.11',
			'name' => 'Indemnizaciones relacionadas con seguros no de vida',
			'description' => 'Son las transferencias de recursos que reciben las entidades del orden nacional y territorial por concepto de las indemnizaciones que se generan en el desarrollo de contratos de seguros no de vida, tras la ocurrencia de un siniestro.']);
			
		$id224 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id207,
			'code' => '1.2.5.12',
			'name' => 'Donaciones',
			'description' => 'Son las transferencias que reciben las entidades o unidades por concepto de donaciones. De acuerdo con el MHCP, son donaciones los “ingresos sin contraprestación, pero con la destinación que establezca el donante, recibidos de otros gobiernos o instituciones públicas o privadas de carácter nacional o internacional” (Ministerio de Hacienda y Crédito Público, 2011, pág. 246).']);
			
		$id225 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id225,
			'code' => '1.2.5.12.1',
			'name' => 'Donaciones de gobiernos extranjeros',
			'description' => 'Son las transferencias por concepto de donaciones que realizan los gobiernos extranjeros a las entidades o unidades.  Se consideran gobiernos extranjeros aquellos que se encuentran fuera del territorio económico colombiano y ejercen soberanía sobre un área determinada del resto del mundo.']);
			
		$id226 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id225,
			'code' => '1.2.5.12.2',
			'name' => 'Donaciones de organizaciones internacionales',
			'description' => 'Son las transferencias por concepto de donaciones que realizan las organizaciones internacionales a las entidades o unidades.  Se entiende por organizaciones internacionales aquellas que cumplen con las siguientes características (FMI, 2009, p. 71):
		*Sus miembros son Estados nacionales u otros organismos internacionales cuyos miembros son Estados nacionales.
		*Se establecen mediante acuerdos políticos formales entre sus miembros, que tiene el rango de tratados internacionales; su existencia es reconocida por ley en sus países miembros.
		*Se crean con una finalidad específica']);
			
		$id227 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id225,
			'code' => '1.2.5.12.3',
			'name' => 'Donaciones del sector privado nacional y extranjero',
			'description' => 'Son las transferencias de recursos por concepto de donaciones que realizan las personas naturales o personas jurídicas del sector privado nacional o extranjero a las entidades.']);
			
		$id228 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id207,
			'code' => '1.2.5.13',
			'name' => 'Compensaciones',
			'description' => 'Son las transferencias de recursos por pagos de gran cuantía, no recurrentes, para compensar daños extensos o lesiones graves, como las que resultan de desastres naturales no cubiertos por pólizas de seguros.']);
			
		$id229 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id229,
			'code' => '1.2.5.13.1',
			'name' => 'Compensación resguardos indígenas ',
			'description' => 'Corresponde al impuesto predial unificado de los resguardos indígenas de la jurisdicción del municipio con cargo al presupuesto general de la Nación']);
			
		$id230 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id230,
			'code' => '1.2.5.13.1.1',
			'name' => 'Compensación resguardos indígenas (vigencia actual)',
			'description' => 'Compensación resguardos indígenas (vigencia actual)']);
			
		$id231 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id230,
			'code' => '1.2.5.13.1.2',
			'name' => 'Compensación resguardos indígenas (vigencia anterior)',
			'description' => 'Compensación resguardos indígenas (vigencia anterior)']);
			
		$id232 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id229,
			'code' => '1.2.5.13.2',
			'name' => 'Intereses de mora Compensación resguardos indígenas',
			'description' => 'Intereses de mora Compensación resguardos indígenas']);
			
		$id233 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id207,
			'code' => '1.2.5.14',
			'name' => 'Cooperación ',
			'description' => 'Cooperación ']);
			
		$id234 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id234,
			'code' => '1.2.5.14.1',
			'name' => 'Acuerdos ',
			'description' => 'Acuerdos ']);
			
		$id235 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id234,
			'code' => '1.2.5.14.2',
			'name' => 'Subacuerdos',
			'description' => 'Subacuerdos']);
			
		$id236 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id135,
			'code' => '1.2.6',
			'name' => 'Recuperación de cartera',
			'description' => 'Ingresos por concepto de la amortización de préstamos realizados por las unidades del PGSP Gobierno nacional, las entidades territoriales, las empresas financieras y no financieras, los órganos autónomos y particulares que administran recursos públicos']);
			
		$id237 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id237,
			'code' => '1.2.6.1',
			'name' => 'Recuperación de cartera Ingresos tributarios',
			'description' => 'Recuperación de cartera Ingresos tributarios']);
			
		$id238 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id238,
			'code' => '1.2.6.1.1',
			'name' => 'Recuperación de cartera Impuestos directos',
			'description' => 'Recuperación de cartera Impuestos directos']);
			
		$id239 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id237,
			'code' => '1.2.6.2',
			'name' => 'Recuperación de cartera Contribuciones',
			'description' => 'Recuperación de cartera Contribuciones']);
			
		$id240 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id237,
			'code' => '1.2.6.3',
			'name' => 'Recuperación de cartera Tasas retributivas y compensatorias',
			'description' => 'Recuperación de cartera Tasas retributivas y compensatorias']);
			
		$id241 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id241,
			'code' => '1.2.6.3.1',
			'name' => 'Recuperación de carteraTasa retributiva',
			'description' => 'Recuperación de carteraTasa retributiva']);
			
		$id242 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id241,
			'code' => '1.2.6.3.2',
			'name' => 'Recuperación de cartera Tasa por el uso del agua',
			'description' => 'Recuperación de cartera Tasa por el uso del agua']);
			
		$id243 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id241,
			'code' => '1.2.6.3.3',
			'name' => 'Recuperación de cartera Tasa de aprovechamiento Forestal',
			'description' => 'Recuperación de cartera Tasa de aprovechamiento Forestal']);
			
		$id244 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id241,
			'code' => '1.2.6.3.4',
			'name' => 'Recuperación de cartera Tasa compensatoria por caza de Fauna Silvestre',
			'description' => 'Recuperación de cartera Tasa compensatoria por caza de Fauna Silvestre']);
			
		$id245 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id241,
			'code' => '1.2.6.3.5',
			'name' => 'Recuperación de cartera Otras tasas',
			'description' => 'Recuperación de cartera Otras tasas']);
			
		$id246 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id237,
			'code' => '1.2.6.4',
			'name' => 'Recuperación de cartera Multas, sanciones e intereses de mora',
			'description' => 'Recuperación de cartera Multas, sanciones e intereses de mora']);
			
		$id247 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id237,
			'code' => '1.2.6.5',
			'name' => 'Recuperación de cartera Venta de bienes y servicios',
			'description' => 'Recuperación de cartera Venta de bienes y servicios']);
			
		$id248 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id237,
			'code' => '1.2.6.6',
			'name' => 'Recuperación cuotas partes pensionales',
			'description' => 'Recuperación cuotas partes pensionales']);
			
		$id249 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id135,
			'code' => '1.2.7',
			'name' => 'Recursos del balance',
			'description' => 'Recursos provenientes del saldo del ejercicio fiscal de la vigencia inmediatamente anterior, que quedan disponibles para la vigencia siguiente.']);
			
		$id250 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id250,
			'code' => '1.2.7.1',
			'name' => 'Mayores Ingresos No Aforados',
			'description' => 'Mayores Ingresos No Aforados']);
			
		$id251 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id251,
			'code' => '1.2.7.1.1',
			'name' => 'Mayores Ingresos No Aforados Ingresos tributarios',
			'description' => 'Mayores Ingresos No Aforados Ingresos tributarios']);
			
		$id252 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id252,
			'code' => '1.2.7.1.1.1',
			'name' => 'Mayores Ingresos No Aforados Impuestos directos',
			'description' => 'Mayores Ingresos No Aforados Impuestos directos']);
			
		$id253 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id251,
			'code' => '1.2.7.1.2',
			'name' => 'Mayores Ingresos No Aforados Contribuciones',
			'description' => 'Mayores Ingresos No Aforados Contribuciones']);
			
		$id254 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id251,
			'code' => '1.2.7.1.3',
			'name' => 'Mayores Ingresos No Aforados Tasas retributivas y compensatorias',
			'description' => 'Mayores Ingresos No Aforados Tasas retributivas y compensatorias']);
			
		$id255 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id255,
			'code' => '1.2.7.1.3.1',
			'name' => 'Mayores Ingresos No Aforados Tasa retributiva',
			'description' => 'Mayores Ingresos No Aforados Tasa retributiva']);
			
		$id256 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id255,
			'code' => '1.2.7.1.3.2',
			'name' => 'Mayores Ingresos No Aforados Tasa por el uso del agua',
			'description' => 'Mayores Ingresos No Aforados Tasa por el uso del agua']);
			
		$id257 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id255,
			'code' => '1.2.7.1.3.3',
			'name' => 'Mayores Ingresos No Aforados Tasa de aprovechamiento Forestal',
			'description' => 'Mayores Ingresos No Aforados Tasa de aprovechamiento Forestal']);
			
		$id258 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id255,
			'code' => '1.2.7.1.3.4',
			'name' => 'Mayores Ingresos No Aforados Tasa compensatoria por caza de Fauna Silvestre',
			'description' => 'Mayores Ingresos No Aforados Tasa compensatoria por caza de Fauna Silvestre']);
			
		$id259 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id255,
			'code' => '1.2.7.1.3.5',
			'name' => 'Mayores Ingresos No Aforados Otras tasas',
			'description' => 'Mayores Ingresos No Aforados Otras tasas']);
			
		$id260 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id251,
			'code' => '1.2.7.1.4',
			'name' => 'Mayores Ingresos No Aforados Multas, sanciones e intereses de mora',
			'description' => 'Mayores Ingresos No Aforados Multas, sanciones e intereses de mora']);
			
		$id261 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id251,
			'code' => '1.2.7.1.5',
			'name' => 'Mayores Ingresos No Aforados Venta de bienes y servicios',
			'description' => 'Mayores Ingresos No Aforados Venta de bienes y servicios']);
			
		$id262 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id250,
			'code' => '1.2.7.2',
			'name' => 'Menores Ejecuciones en Gasto',
			'description' => 'Menores Ejecuciones en Gasto']);
			
		$id263 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id263,
			'code' => '1.2.7.2.1',
			'name' => 'Menores Ejecuciones en Gasto Ingresos tributarios',
			'description' => 'Menores Ejecuciones en Gasto Ingresos tributarios']);
			
		$id264 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id264,
			'code' => '1.2.7.2.1.1',
			'name' => 'IMenores Ejecuciones en Gasto mpuestos directos',
			'description' => 'IMenores Ejecuciones en Gasto mpuestos directos']);
			
		$id265 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id263,
			'code' => '1.2.7.2.2',
			'name' => 'Menores Ejecuciones en Gasto Contribuciones',
			'description' => 'Menores Ejecuciones en Gasto Contribuciones']);
			
		$id266 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id263,
			'code' => '1.2.7.2.3',
			'name' => 'Menores Ejecuciones en Gasto Tasas retributivas y compensatorias',
			'description' => 'Menores Ejecuciones en Gasto Tasas retributivas y compensatorias']);
			
		$id267 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id267,
			'code' => '1.2.7.2.3.1',
			'name' => 'Menores Ejecuciones en Gasto Tasa retributiva',
			'description' => 'Menores Ejecuciones en Gasto Tasa retributiva']);
			
		$id268 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id267,
			'code' => '1.2.7.2.3.2',
			'name' => 'Menores Ejecuciones en Gasto Tasa por el uso del agua',
			'description' => 'Menores Ejecuciones en Gasto Tasa por el uso del agua']);
			
		$id269 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id267,
			'code' => '1.2.7.2.3.3',
			'name' => 'Menores Ejecuciones en Gasto Tasa de aprovechamiento Forestal',
			'description' => 'Menores Ejecuciones en Gasto Tasa de aprovechamiento Forestal']);
			
		$id270 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id267,
			'code' => '1.2.7.2.3.4',
			'name' => 'Menores Ejecuciones en Gasto Tasa compensatoria por caza de Fauna Silvestre',
			'description' => 'Menores Ejecuciones en Gasto Tasa compensatoria por caza de Fauna Silvestre']);
			
		$id271 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id267,
			'code' => '1.2.7.2.3.5',
			'name' => 'Menores Ejecuciones en Gasto Otras tasas',
			'description' => 'Menores Ejecuciones en Gasto Otras tasas']);
			
		$id272 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id263,
			'code' => '1.2.7.2.4',
			'name' => 'Menores Ejecuciones en Gasto Multas, sanciones e intereses de mora',
			'description' => 'Menores Ejecuciones en Gasto Multas, sanciones e intereses de mora']);
			
		$id273 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id263,
			'code' => '1.2.7.2.5',
			'name' => 'Menores Ejecuciones en Gasto Venta de bienes y servicios',
			'description' => 'Menores Ejecuciones en Gasto Venta de bienes y servicios']);
			
		$id274 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id250,
			'code' => '1.2.7.3',
			'name' => 'Cancelación de reservas',
			'description' => 'Cancelación de reservas']);
			
		$id275 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id275,
			'code' => '1.2.7.3.1',
			'name' => 'Cancelación de reservas Ingresos tributarios',
			'description' => 'Cancelación de reservas Ingresos tributarios']);
			
		$id276 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id276,
			'code' => '1.2.7.3.1.1',
			'name' => 'Cancelación de reservas Impuestos directos',
			'description' => 'Cancelación de reservas Impuestos directos']);
			
		$id277 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id275,
			'code' => '1.2.7.3.2',
			'name' => 'Cancelación de reservas Contribuciones',
			'description' => 'Cancelación de reservas Contribuciones']);
			
		$id278 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id275,
			'code' => '1.2.7.3.3',
			'name' => 'Cancelación de reservas Tasas retributivas y compensatorias',
			'description' => 'Cancelación de reservas Tasas retributivas y compensatorias']);
			
		$id279 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id279,
			'code' => '1.2.7.3.3.1',
			'name' => 'Cancelación de reservas Tasa retributiva',
			'description' => 'Cancelación de reservas Tasa retributiva']);
			
		$id280 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id279,
			'code' => '1.2.7.3.3.2',
			'name' => 'Cancelación de reservas Tasa por el uso del agua',
			'description' => 'Cancelación de reservas Tasa por el uso del agua']);
			
		$id281 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id279,
			'code' => '1.2.7.3.3.3',
			'name' => 'Cancelación de reservas Tasa de aprovechamiento Forestal',
			'description' => 'Cancelación de reservas Tasa de aprovechamiento Forestal']);
			
		$id282 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id279,
			'code' => '1.2.7.3.3.4',
			'name' => 'Cancelación de reservas Tasa compensatoria por caza de Fauna Silvestre',
			'description' => 'Cancelación de reservas Tasa compensatoria por caza de Fauna Silvestre']);
			
		$id283 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id279,
			'code' => '1.2.7.3.3.5',
			'name' => 'Cancelación de reservas Otras tasas',
			'description' => 'Cancelación de reservas Otras tasas']);
			
		$id284 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id275,
			'code' => '1.2.7.3.4',
			'name' => 'Cancelación de reservas Multas, sanciones e intereses de mora',
			'description' => 'Cancelación de reservas Multas, sanciones e intereses de mora']);
			
		$id285 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id275,
			'code' => '1.2.7.3.5',
			'name' => 'Cancelación de reservas Venta de bienes y servicios',
			'description' => 'Cancelación de reservas Venta de bienes y servicios']);
			
		$id286 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id275,
			'code' => '1.2.7.3.6',
			'name' => 'Cancelación de reservas Recursos de crédito externo',
			'description' => 'Cancelación de reservas Recursos de crédito externo']);
			
		$id287 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id275,
			'code' => '1.2.7.3.7',
			'name' => 'Cancelación de reservas Recursos de crédito interno',
			'description' => 'Cancelación de reservas Recursos de crédito interno']);
			
		$id288 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id275,
			'code' => '1.2.7.3.8',
			'name' => 'Cancelación de reservas Transferencias de capital',
			'description' => 'Cancelación de reservas Transferencias de capital']);
			
		$id289 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id289,
			'code' => '1.2.7.3.8.1',
			'name' => 'Cancelación de reservas Convenios',
			'description' => 'Cancelación de reservas Convenios']);
			
		$id290 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id290,
			'code' => '1.2.7.3.8.1.1',
			'name' => 'Cancelación de reservas Convenios Departamentos',
			'description' => 'Cancelación de reservas Convenios Departamentos']);
			
		$id291 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id290,
			'code' => '1.2.7.3.8.1.2',
			'name' => 'Cancelación de reservas Convenios Municipios ',
			'description' => 'Cancelación de reservas Convenios Municipios ']);
			
		$id292 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id290,
			'code' => '1.2.7.3.8.1.3',
			'name' => 'Cancelación de reservas Otros convenios',
			'description' => 'Cancelación de reservas Otros convenios']);
			
		$id293 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id275,
			'code' => '1.2.7.3.9',
			'name' => 'Cancelación de reservas Compensaciones',
			'description' => 'Cancelación de reservas Compensaciones']);
			
		$id294 = DB::getPdo()->lastInsertId();
			
			DB::table('financing_sources')->insert([
			'father_id' => $id294,
			'code' => '1.2.7.3.9.1',
			'name' => 'Cancelación de reservas Compensación resguardos indígenas',
			'description' => 'Cancelación de reservas Compensación resguardos indígenas']);
		
		$id295 = DB::getPdo()->lastInsertId();
			
		
	}
}
