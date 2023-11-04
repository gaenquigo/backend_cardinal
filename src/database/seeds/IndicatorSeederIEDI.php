<?php

use Illuminate\Database\Seeder;



class IndicatorSeederIEDI extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		//******************/
		// Instruccion para insertar un indicador tipo 6 */
		//******************/ 
		DB::table('indicators')->insert([
			'type' => 11,  //
			'calcule_type' => 1191, //
			'name' => 'Porcentaje de concesiones de aguas otorgadas con seguimiento PCAS',
			'abbreviated_name' => 'PCAS',
			'definition' =>'Porcentaje de concesiones de aguas otorgadas con seguimiento PCAS',
			'url' => '',
			'group_id' => 1
		]);
		$idIndicador_iedi1 = DB::getPdo()->lastInsertId();

		// Instruccion para insertar una variable existente */

		DB::table('indicator_variables')->insert([
			'type_id' => 28,
			'indicator_id' => $idIndicador_iedi1,
			'indicator_variable_id' => 12,
			'variable_id' => 18,
			'type_variable_id' => 1
		]);

		// Instruccion para insertar una nueva variable */

		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Número total de Concesiones de Aguas Superficiales  otorgadas',
			'abbreviated_name' => ' ',
			'description' => 'El reporte deberá realizarse en número entero. Hace referencia al total de expedientes de la Autoridad Ambiental que cuenten con concesiones de aguas otorgadas y sin acto administrativo de archivo con los que inicia en la vigencia del reporte. Ej.: Si se reporta en la celda Vigencia 2017, deberá indicarse el total de expedientes activos con los que inicia la vigencia 2017',
			'indicator_id' => $idIndicador_iedi1
		]);

		//******************/
		// Instruccion para insertar un indicador tipo 6 */
		//******************/ 
		DB::table('indicators')->insert([
			'type' => 11,  // 
			'calcule_type' => 1191, // 
			'name' => 'Porcentaje de licencias ambientales otorgadas con seguimiento PLAS',
			'abbreviated_name' => 'PLAS',
			'definition' =>'Porcentaje de licencias ambientales otorgadas con seguimiento PLAS',
			'url' => '',
			'group_id' => 1,
            'geom' => 0,
            'label' => ''
		]);
		$idIndicador_iedi2 = DB::getPdo()->lastInsertId();

		// Instruccion para insertar una variable existente */

		DB::table('indicator_variables')->insert([
			'type_id' => 28,
			'indicator_id' => $idIndicador_iedi2,
			'indicator_variable_id' => 12,
			'variable_id' => 17,
			'type_variable_id' => 1
		]);

		// Instruccion para insertar una nueva variable */

		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Total de Licencias Ambientales otorgadas',
			'abbreviated_name' => ' ',
			'description' => 'El reporte deberá realizarse en número entero. Hace referencia al total de expedientes de la Autoridad Ambiental que cuenten con Licencias ambientales otorgada y sin acto administrativo de archivo con los que inicia en la vigencia del reporte. Ej.:Si se reporta en la celda Vigencia 2017, deberá indicarse el total de expedientes activos con los que inicia la vigencia 2017.',
			'indicator_id' => $idIndicador_iedi2
		]);
		
		//******************/
		// Instruccion para insertar un indicador tipo 6 */
		//******************/ 
		DB::table('indicators')->insert([
			'type' => 11,  // 
			'calcule_type' => 1191, // 
			'name' => 'Porcentaje de autorizaciones de permisos de aprovechamiento forestal  con seguimiento PPAFS',
			'abbreviated_name' => 'PPAFS',
			'definition' =>'Porcentaje de autorizaciones de permisos de aprovechamiento forestal  con seguimiento PPAFS',
			'url' => '',
			'group_id' => 1,
            'geom' => 0,
            'label' => ''
		]);
		$idIndicador_iedi3 = DB::getPdo()->lastInsertId();

		// Instruccion para insertar una variable existente */

		DB::table('indicator_variables')->insert([
			'type_id' => 28,
			'indicator_id' => $idIndicador_iedi3,
			'indicator_variable_id' => 12,
			'variable_id' => 20,
			'type_variable_id' => 1
		]);

		// Instruccion para insertar una nueva variable */

		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Total de Permisos de Aprovechamiento Forestal otorgados',
			'abbreviated_name' => ' ',
			'description' => 'El reporte deberá realizarse en número entero. Hace referencia al total de expedientes de la Autoridad Ambiental que cuenten con Permisos de Aprovechamiento Forestal otorgado y sin acto administrativo de archivo con los que inicia en la vigencia del reporte. Ej.: Si se reporta en la celda Vigencia 2017, deberá indicarse el total de expedientes activos con los que inicia la vigencia 2017.',
			'indicator_id' => $idIndicador_iedi3
		]);
		
		//******************/
		// Instruccion para insertar un indicador tipo 6 */
		//******************/ 
		DB::table('indicators')->insert([
			'type' => 11,  // 
			'calcule_type' => 1191, // 
			'name' => 'Porcentaje de autorizaciones de permisos de vertimientos con seguimiento PPVS',
			'abbreviated_name' => 'PPVS',
			'definition' =>'Porcentaje de autorizaciones de permisos de vertimientos con seguimiento PPVS',
			'url' => '',
			'group_id' => 1,
            'geom' => 0,
            'label' => ''
		]);
		$idIndicador_iedi4 = DB::getPdo()->lastInsertId();

		// Instruccion para insertar una variable existente */

		DB::table('indicator_variables')->insert([
			'type_id' => 28,
			'indicator_id' => $idIndicador_iedi4,
			'indicator_variable_id' => 12,
			'variable_id' => 19,
			'type_variable_id' => 1
		]);

		// Instruccion para insertar una nueva variable */

		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Número total de Permisos de Vertimiento',
			'abbreviated_name' => ' ',
			'description' => 'El reporte deberá realizarse en número entero. Hace referencia al total de expedientes de la Autoridad Ambiental que cuenten con Permisos de Vertimientos otorgado y sin acto administrativo de archivo con los que inicia en la vigencia del reporte. Ej.:Si se reporta en la celda Vigencia 2017, deberá indicarse el total de expedientes activos con los que inicia la vigencia 2017.',
			'indicator_id' => $idIndicador_iedi4
		]);
		
		//******************/
		// Instruccion para insertar un indicador tipo 6 */
		//******************/ 
		DB::table('indicators')->insert([
			'type' => 11,  // 
			'calcule_type' => 1191, // 
			'name' => 'Porcentaje de procesos sancionatorios ambientales  resueltos PPSR',
			'abbreviated_name' => 'PPSR',
			'definition' =>'Porcentaje de procesos sancionatorios ambientales  resueltos PPSR',
			'url' => '',
			'group_id' => 1,
            'geom' => 0,
            'label' => ''
		]);
		$idIndicador_iedi5 = DB::getPdo()->lastInsertId();

		// Instruccion para insertar una variable existente */

		DB::table('indicator_variables')->insert([
			'type_id' => 28,
			'indicator_id' => $idIndicador_iedi5,
			'indicator_variable_id' => 22,
			'variable_id' => 49,
			'type_variable_id' => 1
		]);

		DB::table('indicator_variables')->insert([
			'type_id' => 28,
			'indicator_id' => $idIndicador_iedi5,
			'indicator_variable_id' => 22,
			'variable_id' => 50,
			'type_variable_id' => 1
		]);

		DB::table('indicator_variables')->insert([
			'type_id' => 28,
			'indicator_id' => $idIndicador_iedi5,
			'indicator_variable_id' => 22,
			'variable_id' => 49,
			'type_variable_id' => 2
		]);
		
		DB::table('indicator_variables')->insert([
			'type_id' => 28,
			'indicator_id' => $idIndicador_iedi5,
			'indicator_variable_id' => 22,
			'variable_id' => 50,
			'type_variable_id' => 2
		]);

		//******************/
		// Instruccion para insertar un indicador tipo 6 */
		//******************/ 
		DB::table('indicators')->insert([
			'type' => 11,  // 
			'calcule_type' => 1191, // 
			'name' => 'Tiempo promedio de trámite para el otorgamiento o negación de licencia Ambiental por la Corporación',
			'abbreviated_name' => 'TxLA',
			'definition' =>'Tiempo promedio de trámite para el otorgamiento o negación de licencia Ambiental por la Corporación',
			'url' => '',
			'group_id' => 1,
            'geom' => 0,
            'label' => ''
		]);
		$idIndicador_iedi6 = DB::getPdo()->lastInsertId();

		// Instruccion para insertar una variable existente */

		DB::table('indicator_variables')->insert([
			'type_id' => 28,
			'indicator_id' => $idIndicador_iedi6,
			'indicator_variable_id' => 27,
			'variable_id' => 55,
			'type_variable_id' => 1
		]);

		DB::table('indicator_variables')->insert([
			'type_id' => 28,
			'indicator_id' => $idIndicador_iedi6,
			'indicator_variable_id' => 27,
			'variable_id' => 55,
			'type_variable_id' => 2
		]);

		//******************/
		// Instruccion para insertar un indicador tipo 6 */
		//******************/ 
		DB::table('indicators')->insert([
			'type' => 11,  // 
			'calcule_type' => 1191, // 
			'name' => 'Tiempo promedio de trámite para el otorgamiento o negación de Consesión de aguas por la Corporación',
			'abbreviated_name' => 'TxCAS',
			'definition' =>'Tiempo promedio de trámite para el otorgamiento o negación de Consesión de aguas por la Corporación',
			'url' => '',
			'group_id' => 1,
            'geom' => 0,
            'label' => ''
		]);
		$idIndicador_iedi7 = DB::getPdo()->lastInsertId();

		// Instruccion para insertar una variable existente */

		DB::table('indicator_variables')->insert([
			'type_id' => 28,
			'indicator_id' => $idIndicador_iedi7,
			'indicator_variable_id' => 27,
			'variable_id' => 56,
			'type_variable_id' => 1
		]);

		DB::table('indicator_variables')->insert([
			'type_id' => 28,
			'indicator_id' => $idIndicador_iedi7,
			'indicator_variable_id' => 27,
			'variable_id' => 56,
			'type_variable_id' => 2
		]);
		
		//******************/
		// Instruccion para insertar un indicador tipo 6 */
		//******************/ 
		DB::table('indicators')->insert([
			'type' => 11,  // 
			'calcule_type' => 1191, // 
			'name' => 'Tiempo promedio de trámite para el otorgamiento o negación de Permisos de Vertimiento por la Corporación',
			'abbreviated_name' => 'TxPV',
			'definition' =>'Tiempo promedio de trámite para el otorgamiento o negación de Permisos de Vertimiento por la Corporación',
			'url' => '',
			'group_id' => 1,
            'geom' => 0,
            'label' => ''
		]);
		$idIndicador_iedi8 = DB::getPdo()->lastInsertId();

		// Instruccion para insertar una variable existente */

		DB::table('indicator_variables')->insert([
			'type_id' => 28,
			'indicator_id' => $idIndicador_iedi8,
			'indicator_variable_id' => 27,
			'variable_id' => 57,
			'type_variable_id' => 1
		]);

		DB::table('indicator_variables')->insert([
			'type_id' => 28,
			'indicator_id' => $idIndicador_iedi8,
			'indicator_variable_id' => 27,
			'variable_id' => 57,
			'type_variable_id' => 2
		]);
		
		//******************/
		// Instruccion para insertar un indicador tipo 6 */
		//******************/ 
		DB::table('indicators')->insert([
			'type' => 11,  // 
			'calcule_type' => 1191, // 
			'name' => 'Tiempo promedio de trámite para el otorgamiento o negación de Permiso de Aprovechamiento Forestal por la Corporación',
			'abbreviated_name' => 'TxAF',
			'definition' =>'Tiempo promedio de trámite para el otorgamiento o negación de Permiso de Aprovechamiento Forestal por la Corporación',
			'url' => '',
			'group_id' => 1,
            'geom' => 0,
            'label' => ''
		]);
		$idIndicador_iedi9 = DB::getPdo()->lastInsertId();

		// Instruccion para insertar una variable existente */

		DB::table('indicator_variables')->insert([
			'type_id' => 28,
			'indicator_id' => $idIndicador_iedi9,
			'indicator_variable_id' => 27,
			'variable_id' => 58,
			'type_variable_id' => 1
		]);

		DB::table('indicator_variables')->insert([
			'type_id' => 28,
			'indicator_id' => $idIndicador_iedi9,
			'indicator_variable_id' => 27,
			'variable_id' => 58,
			'type_variable_id' => 2
		]);
		
		
		//******************/
		// Instruccion para insertar un indicador tipo 6 */
		//******************/ 
		DB::table('indicators')->insert([
			'type' => 11,  //
			'calcule_type' => 1191, //
			'name' => 'Porcentaje de áreas de ecosistemas en restauración, rehabilitación y reforestación',
			'abbreviated_name' => 'PAERRR',
			'definition' =>'Porcentaje de áreas de ecosistemas en restauración, rehabilitación y reforestación',
			'url' => '',
			'group_id' => 1,
            'geom' => 0,
            'label' => ''
		]);
		$idIndicador_iedi10 = DB::getPdo()->lastInsertId();

		// Instruccion para insertar una nueva variable */

		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Número total de áreas de ecosistemas en procesos de restauración activa en el año reportado',
			'abbreviated_name' => ' ',
			'description' => 'El reporte debe realizarse indicando el número total de hectáreas de áreas de ecosistemas en procesos de restauración activa en el año reportado.',
			'indicator_id' => $idIndicador_iedi10
		]);

		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Número total de áreas de ecosistemas en procesos de rehabilitación activa en el año reportado',
			'abbreviated_name' => ' ',
			'description' => 'El reporte debe realizarse indicando el número total de hectáreas en áreas de ecosistemas en procesos de rehabilitación activa en el año reportado.',
			'indicator_id' => $idIndicador_iedi10
		]);

		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Número de total áreas de ecosistemas en procesos de  reforestación activa en el año reportado',
			'abbreviated_name' => ' ',
			'description' => 'El reporte debe realizarse indicando el número total de hectáreas de áreas de ecosistemas en procesos de  reforestación activa en el año reportado.',
			'indicator_id' => $idIndicador_iedi10
		]);

		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Número total de áreas de ecosistemas en proceso de restauración pasiva en el año reportado',
			'abbreviated_name' => ' ',
			'description' => 'El reporte debe realizarse indicando el número total de hectáreas en áreas de ecosistemas en proceso de restauración pasiva en el año reportado.',
			'indicator_id' => $idIndicador_iedi10
		]);

		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Número total de áreas de ecosistemas en proceso de rehabilitación pasiva en el año reportado',
			'abbreviated_name' => ' ',
			'description' => 'El reporte debe realizarse indicando el número total de hectáreas en áreas de ecosistemas en proceso de rehabilitación pasiva en el año reportado.',
			'indicator_id' => $idIndicador_iedi10
		]);

		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Número total de áreas de ecosistemas en proceso de  reforestación pasiva en el año reportado',
			'abbreviated_name' => ' ',
			'description' => 'El reporte debe realizarse indicando el número total de hectáreas en áreas de ecosistemas en proceso de  reforestación pasiva en el año reportado.',
			'indicator_id' => $idIndicador_iedi10
		]);

		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Meta número total de áreas de ecosistemas en procesos de restauración activa en el año reportado',
			'abbreviated_name' => ' ',
			'description' => 'El reporte debe realizarse indicando la meta del número total de hectáreas en áreas de ecosistemas en procesos de restauración activa en el año reportado.',
			'indicator_id' => $idIndicador_iedi10
		]);

		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Meta número de áreas de ecosistemas en procesos de rehabilitación activa en el año reportado',
			'abbreviated_name' => ' ',
			'description' => 'El reporte debe realizarse indicando la meta del número total de hectáreas en áreas de ecosistemas en procesos de rehabilitación activa en el año reportado.',
			'indicator_id' => $idIndicador_iedi10
		]);

		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Meta número de áreas de ecosistemas en procesos de  reforestación activa en el año reportado',
			'abbreviated_name' => ' ',
			'description' => 'El reporte debe realizarse indicando la meta del número total de hectáreas en áreas de ecosistemas en procesos de  reforestación activa en el año reportado.',
			'indicator_id' => $idIndicador_iedi10
		]);
		
		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Meta número total de áreas de ecosistemas en proceso de restauración pasiva en el año reportado',
			'abbreviated_name' => ' ',
			'description' => 'El reporte debe realizarse indicando la meta del número total de hectáreas en áreas de ecosistemas en proceso de restauración pasiva en el año reportado.',
			'indicator_id' => $idIndicador_iedi10
		]);


		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Meta número total de áreas de ecosistemas en proceso de rehabilitación pasiva en el año reportado',
			'abbreviated_name' => ' ',
			'description' => 'El reporte debe realizarse indicando la meta del número total de hectáreas en áreas de ecosistemas en proceso de rehabilitación pasiva en el año reportado.',
			'indicator_id' => $idIndicador_iedi10
		]);


		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Meta número total de áreas de ecosistemas en proceso de  reforestación pasiva en el año reportado',
			'abbreviated_name' => ' ',
			'description' => 'El reporte debe realizarse indicando la meta del número total de hectáreas en áreas de ecosistemas en proceso de  reforestación pasiva en el año reportado.',
			'indicator_id' => $idIndicador_iedi10
		]);

		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Número de árboles sembrados en áreas de restauración',
			'abbreviated_name' => ' ',
			'description' => 'Número entero. Total de árboles sembrados en áreas de restauración.',
			'indicator_id' => $idIndicador_iedi10
		]);

		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Número de árboles sembrados en áreas de rehabilitación',
			'abbreviated_name' => ' ',
			'description' => 'Número entero. Total de árboles sembrados en áreas de rehabilitación.',
			'indicator_id' => $idIndicador_iedi10
		]);

		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Número de árboles sembrados en áreas de reforestación',
			'abbreviated_name' => ' ',
			'description' => 'Número entero. Total de árboles sembrados en áreas de reforestación.',
			'indicator_id' => $idIndicador_iedi10
		]);

		//******************/
		// Instruccion para insertar un indicador tipo 6 */
		//******************/ 
		DB::table('indicators')->insert([
			'type' => 11,  //
			'calcule_type' => 1191, //
			'name' => 'Negocios verdes verificados',
			'abbreviated_name' => 'NVV',
			'definition' =>'Negocios verdes verificados',
			'url' => '',
			'group_id' => 1,
            'geom' => 0,
            'label' => ''
		]);
		$idIndicador_iedi11 = DB::getPdo()->lastInsertId();

		// Instruccion para insertar una nueva variable */

		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Número de negocios verdes verificados (NNVV)',
			'abbreviated_name' => 'NNVV',
			'description' => 'Número entero,  se reporta la cantidad de negocios verdes verificados en el año reportado. se entienden pór verificados aquellos que cuenten con visita y lista de de verificación,  adicionalmente que esten inscritos en la ventanilla de negocios verdes de la Corporación.',
			'indicator_id' => $idIndicador_iedi11
		]);

		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Meta de número de negocios verdes verificados (MNVV)',
			'abbreviated_name' => 'MNVV',
			'description' => 'Número entero, se reporta la meta establecida de negocios verdes verificados establecido en el Plan de Acción y reportada a la Oficina de Negocios Verdes y Sostenibles del Minambiente',
			'indicator_id' => $idIndicador_iedi11
		]);

		//******************/
		// Instruccion para insertar un indicador tipo 6 */
		//******************/ 
		DB::table('indicators')->insert([
			'type' => 11,  //
			'calcule_type' => 1191, //
			'name' => 'Porcentaje de cuerpos de agua con planes de ordenamiento del recurso hídrico adoptados (PORH)',
			'abbreviated_name' => 'PORH',
			'definition' =>'Porcentaje de cuerpos de agua con planes de ordenamiento del recurso hídrico adoptados (PORH)',
			'url' => '',
			'group_id' => 1,
            'geom' => 0,
            'label' => ''
		]);
		$idIndicador_iedi12 = DB::getPdo()->lastInsertId();

		// Instruccion para insertar una variable existente */

		DB::table('indicator_variables')->insert([
			'type_id' => 28,
			'indicator_id' => $idIndicador_iedi12,
			'indicator_variable_id' => 1,
			'variable_id' => 1,
			'type_variable_id' => 1
		]);

		// Instruccion para insertar una nueva variable */

		DB::table('indicator_iedi_variables')->insert([
			'name' => ' Número de cuerpos de agua objeto para plan de ordenamiento del recurso hídrico.',
			'abbreviated_name' => ' ',
			'description' => 'Número entero. Cuerpos de agua objeto de PORH y priorizados; las corporaciones deben establecer una priorización para el ordenamiento del recurso hídrico basados en los criterios al Capítulo 3 de la Subsección 2 Ordenamiento del Recurso Hídrico (artículos 2.2.3.3.1.4 y siguientes) del Decreto 1076 de 2015.',
			'indicator_id' => $idIndicador_iedi12
		]);

		//******************/
		// Instruccion para insertar un indicador tipo 6 */
		//******************/ 
		DB::table('indicators')->insert([
			'type' => 11,  //
			'calcule_type' => 1191, //
			'name' => 'Porcentaje de municipios con seguiminto de la concertación ambiental en sus documentos de planificación territorial',
			'abbreviated_name' => 'PMPCS',
			'definition' =>'Porcentaje de municipios con seguiminto de la concertación ambiental en sus documentos de planificación territorial',
			'url' => '',
			'group_id' => 1,
            'geom' => 0,
            'label' => ''
		]);
		$idIndicador_iedi13 = DB::getPdo()->lastInsertId();

		// Instruccion para insertar una nueva variable */

		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Número de municipios con PBOT,  EOT  o POT concertado con seguimiento',
			'abbreviated_name' => ' ',
			'description' => 'Es el total de los municipios con seguimiento de la concertación ambiental en sus documentos de planificación territorial.',
			'indicator_id' => $idIndicador_iedi13
		]);

		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Total  de municipios de la jurisdicción con PBOT,  EOT o POT concertado',
			'abbreviated_name' => ' ',
			'description' => 'Es el numero total de municipios de la jurisdicción',
			'indicator_id' => $idIndicador_iedi13
		]);

		//******************/
		// Instruccion para insertar un indicador tipo 6 */
		//******************/ 
		DB::table('indicators')->insert([
			'type' => 11,  //
			'calcule_type' => 1191, //
			'name' => 'Función de Producción en Autoridad Ambiental',
			'abbreviated_name' => 'FProduc',
			'definition' =>'Función de Producción en Autoridad Ambiental',
			'url' => '',
			'group_id' => 1,
            'geom' => 0,
            'label' => ''
		]);
		$idIndicador_iedi14 = DB::getPdo()->lastInsertId();

		// Instruccion para insertar una variable existente */

		DB::table('indicator_variables')->insert([
			'type_id' => 28,
			'indicator_id' => $idIndicador_iedi14,
			'indicator_variable_id' => 27,
			'variable_id' => 55,
			'type_variable_id' => 2
		]);

		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Gastos totales invertidos por evaluación de Licencias Ambientales',
			'abbreviated_name' => ' ',
			'description' => 'Son los gastos invertidos por la corporación para la evaluación del trámite de las licencias ambientales en la vigencia reportada.',
			'indicator_id' => $idIndicador_iedi14
		]);

		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Gastos totales cobrados por evaluación de Licencias',
			'abbreviated_name' => ' ',
			'description' => 'Son los gastos totales cobrados al usuario por concepto de evaluación del trámite de las licencias ambientales en la vigencia reportada.',
			'indicator_id' => $idIndicador_iedi14
		]);
		
		DB::table('indicator_variables')->insert([
			'type_id' => 28,
			'indicator_id' => $idIndicador_iedi14,
			'indicator_variable_id' => 27,
			'variable_id' => 56,
			'type_variable_id' => 2
		]);

		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Gastos totales invertidos por evaluación de Concesiones de Aguas Superficiales',
			'abbreviated_name' => ' ',
			'description' => 'Son los gastos invertidos por la corporación para la evaluación del trámite de las Concesiones de aguas superficiales en la vigencia reportada.',
			'indicator_id' => $idIndicador_iedi14
		]);
		
		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Gastos totales cobrados por evaluación de Concesiones de Aguas Superficiales',
			'abbreviated_name' => ' ',
			'description' => 'Son los gastos totales cobrados al usuario por concepto de evaluación del trámite de las Concesiones de aguas superficiales en la vigencia reportada.',
			'indicator_id' => $idIndicador_iedi14
		]);
		
		DB::table('indicator_variables')->insert([
			'type_id' => 28,
			'indicator_id' => $idIndicador_iedi14,
			'indicator_variable_id' => 27,
			'variable_id' => 57,
			'type_variable_id' => 2
		]);

		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Gastos totales invertidos por evaluación de Permiso de Vertimentos',
			'abbreviated_name' => ' ',
			'description' => 'Son los gastos invertidos por la corporación para la realización del trámite de los permisos de vertimientos en la vigencia reportada.',
			'indicator_id' => $idIndicador_iedi14
		]);
		
		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Gastos totales cobrados por evaluación de Permiso de Vertimentos',
			'abbreviated_name' => ' ',
			'description' => 'Número entero. Total de los trámites otorgados y negados de  permisos de aprovechamiento forestal evaluados en el período reportado.',
			'indicator_id' => $idIndicador_iedi14
		]);
		
		DB::table('indicator_variables')->insert([
			'type_id' => 28,
			'indicator_id' => $idIndicador_iedi14,
			'indicator_variable_id' => 27,
			'variable_id' => 58,
			'type_variable_id' => 2
		]);

		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Gastos totales invertidos por evaluación de Permisos de Aprovechamiento Forestal',
			'abbreviated_name' => ' ',
			'description' => 'Son los gastos invertidos por la corporación para la realización del trámite de  permisos de aprovechamiento forestal en la vigencia reportada.',
			'indicator_id' => $idIndicador_iedi14
		]);
		
		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Gastos totales cobrados por evaluación de Permisos de Aprovechamiento Forestal',
			'abbreviated_name' => ' ',
			'description' => 'Son los gastos cobrados al usuario parar la realización del trámite de  permisos de aprovechamiento forestal en la vigencia reportada.',
			'indicator_id' => $idIndicador_iedi14
		]);


		//******************/
		// Instruccion para insertar un indicador tipo 6 */
		//******************/ 
		DB::table('indicators')->insert([
			'type' => 11,  //
			'calcule_type' => 1191, //
			'name' => 'Gestión de los Ingresos Propios',
			'abbreviated_name' => 'GTO',
			'definition' =>'Gestión de los Ingresos Propios',
			'url' => '',
			'group_id' => 1,
            'geom' => 0,
            'label' => ''
		]);
		$idIndicador_iedi15 = DB::getPdo()->lastInsertId();
		
		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Facturación de la tasa retributiva',
			'abbreviated_name' => ' ',
			'description' => 'El valor facturado en la vigencia reportada por la corporación por concepto de tasa retributiva.',
			'indicator_id' => $idIndicador_iedi15
		]);

		// Instruccion para insertar una nueva cuenta */

		DB::table('indicator_accounts')->insert([
			'account_ppta_id' => 1,
			'account_id' => 2,
			'financing_source_id' => 43,
			'indicator_id' => $idIndicador_iedi15
		]);

		DB::table('indicator_accounts')->insert([
			'account_ppta_id' => 1,
			'account_id' => 2,
			'financing_source_id' => 44,
			'indicator_id' => $idIndicador_iedi15
		]);
		
		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Facturación de la tasa del uso del agua',
			'abbreviated_name' => ' ',
			'description' => 'El valor facturado en la vigencia reportada por la corporación por concepto de tasa del uso del agua .',
			'indicator_id' => $idIndicador_iedi15
		]);

		DB::table('indicator_accounts')->insert([
			'account_ppta_id' => 1,
			'account_id' => 2,
			'financing_source_id' => 46,
			'indicator_id' => $idIndicador_iedi15
		]);

		DB::table('indicator_accounts')->insert([
			'account_ppta_id' => 1,
			'account_id' => 2,
			'financing_source_id' => 47,
			'indicator_id' => $idIndicador_iedi15
		]);
		
		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Facturación de la tasa de aprovechamiento forestal',
			'abbreviated_name' => ' ',
			'description' => 'El valor facturado en la vigencia reportada por la corporación por concepto de tasa de aprovechamiento forestal.',
			'indicator_id' => $idIndicador_iedi15
		]);

		DB::table('indicator_accounts')->insert([
			'account_ppta_id' => 1,
			'account_id' => 2,
			'financing_source_id' => 49,
			'indicator_id' => $idIndicador_iedi15
		]);

		DB::table('indicator_accounts')->insert([
			'account_ppta_id' => 1,
			'account_id' => 2,
			'financing_source_id' => 50,
			'indicator_id' => $idIndicador_iedi15
		]);
		

		//******************/
		// Instruccion para insertar un indicador tipo 6 */
		//******************/ 
		DB::table('indicators')->insert([
			'type' => 11,  //
			'calcule_type' => 1191, //
			'name' => 'Capacidad de ejecución en inversión (obligado/apropiado)',
			'abbreviated_name' => 'Ejec',
			'definition' =>'Capacidad de ejecución en inversión (obligado/apropiado)',
			'url' => '',
			'group_id' => 1,
            'geom' => 0,
            'label' => ''
		]);
		$idIndicador_iedi16 = DB::getPdo()->lastInsertId();

		DB::table('indicator_accounts')->insert([
			'account_ppta_id' => 2,
			'account_id' => 3,
			'indicator_id' => $idIndicador_iedi16
		]);

		DB::table('indicator_accounts')->insert([
			'account_ppta_id' => 2,
			'account_id' => 4,
			'indicator_id' => $idIndicador_iedi16
		]);

		//******************/
		// Instruccion para insertar un indicador tipo 6 */
		//******************/ 
		DB::table('indicators')->insert([
			'type' => 11,  //
			'calcule_type' => 1191, //
			'name' => 'Recuperación de la cartera vencida',
			'abbreviated_name' => 'Cart',
			'definition' =>'Recuperación de la cartera vencida',
			'url' => '',
			'group_id' => 1,
            'geom' => 0,
            'label' => ''
		]);
		$idIndicador_iedi17 = DB::getPdo()->lastInsertId();

		DB::table('indicator_accounts')->insert([
			'account_ppta_id' => 1,
			'account_id' => 2,
			'financing_source_id' => 237,
			'indicator_id' => $idIndicador_iedi17
		]);

		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Cartera vencida',
			'abbreviated_name' => ' ',
			'description' => 'El total de recursos de la cartera,  es la suma total de la cartera vencida  reportada en los estados financieros.',
			'indicator_id' => $idIndicador_iedi17
		]);

		//******************/
		// Instruccion para insertar un indicador tipo 6 */
		//******************/ 
		DB::table('indicators')->insert([
			'type' => 11,  //
			'calcule_type' => 1191, //
			'name' => 'Recursos gestionados',
			'abbreviated_name' => 'Gest',
			'definition' =>'Recursos gestionados',
			'url' => '',
			'group_id' => 1,
            'geom' => 0,
            'label' => ''
		]);
		$idIndicador_iedi18 = DB::getPdo()->lastInsertId();

		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Recursos gestionados',
			'abbreviated_name' => ' ',
			'description' => 'El total de recursos gestionados (convenios, donaciones y acuerdos internacionales) en la vigencia reportada.',
			'indicator_id' => $idIndicador_iedi18
		]);

		DB::table('indicator_accounts')->insert([
			'account_ppta_id' => 1,
			'account_id' => 2,
			'financing_source_id' => 18,
			'indicator_id' => $idIndicador_iedi18
		]);
		
		//******************/
		// Instruccion para insertar un indicador tipo 6 */
		//******************/ 
		DB::table('indicators')->insert([
			'type' => 11,  //
			'calcule_type' => 1191, //
			'name' => 'Tiene fenecimiento de cuentas derivado de los procesos auditores de la contraloría general de la nación',
			'abbreviated_name' => 'Fenec',
			'definition' =>'Tiene fenecimiento de cuentas derivado de los procesos auditores de la contraloría general de la nación',
			'url' => '',
			'group_id' => 1,
            'geom' => 0,
            'label' => ''
		]);
		$idIndicador_iedi19 = DB::getPdo()->lastInsertId();

		DB::table('indicator_iedi_variables')->insert([
			'name' => 'Fenecimiento de cuentas por concepto de la Contraloría',
			'abbreviated_name' => ' ',
			'description' => 'Informe de auditoria realizado en la vigencia reportada; pronunciamiento de la Contraloría General de la República que le pone fin a la revisión de la cuenta fiscal, mediante el cual se califica la gestión fiscal realizada en el manejo de los recursos puestos a su disposición en condiciones de economía, eficiencia, eficacia, equidad, efectividad y valoración de costos ambientales',
			'indicator_id' => $idIndicador_iedi19
		]);

		//******************/
		// Instruccion para insertar un indicador tipo 6 */
		//******************/ 
		DB::table('indicators')->insert([
			'type' => 11,  //
			'calcule_type' => 1191, //
			'name' => 'FURAG',
			'abbreviated_name' => 'FURAG',
			'definition' =>'FURAG',
			'url' => '',
			'group_id' => 1,
            'geom' => 0,
            'label' => ''
		]);
		$idIndicador_iedi20 = DB::getPdo()->lastInsertId();

		DB::table('indicator_iedi_variables')->insert([
			'name' => '% FURAG',
			'abbreviated_name' => ' ',
			'description' => 'El resultado obtenido en el reporte realizado de la vigencia  reportada en el  Formulario Único Reporte de Avance de la Gestión.',
			'indicator_id' => $idIndicador_iedi20
		]);
	}
}
