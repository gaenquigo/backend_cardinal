<?php

use Illuminate\Database\Seeder;
use App\Models\Indicator;
use App\Models\Other_data;
use App\Models\Variable;

class IndicatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas

        Indicator::truncate();
        Indicator::unguard();

        Variable::truncate();
        Variable::unguard();

        Other_data::truncate();
        Other_data::unguard();

        // DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas

        //**************************************************/
        // Instruccion para insertar un indicador tipo 1 ***/
        //**************************************************/ 
        DB::table('indicators')->insert([
            'type' => 10,  // 7 Minimo de Gestión
            'calcule_type' => 3, // 9 Tipo 1
            'name' => 'Porcentaje de cuerpos de agua con planes de ordenamiento del recurso hídrico (PORH) adoptados',
            'abbreviated_name' => 'PPORHA',
            'definition' =>'Es la relación entre el número de cuerpos de agua con planes de ordenamiento del recurso hídrico (PORH) adoptados y la meta de cuerpos de agua priorizados para la adopción de dichos planes por parte de la autoridad ambiental',
            'url' => '',
            'unit_id' => 63,
            'result_name' => 'Porcentaje de cuerpos de agua con planes de ordenamiento del recurso hídrico (PORH) adoptados, en el tiempo t',
            'category_type' => 1157,
            'group_id' => 1,
            'geom' => 1,
            'label' => 'Numero de cuerpos de Agua con plan de ordenamiento'
        ]);

        $idIndicador_1 = DB::getPdo()->lastInsertId();

        DB::table('variables')->insert([
            'numerator_name' => 'Número de Cuerpos de agua con planes de ordenamiento del recurso hídrico adoptados, en el tiempo t',
            'abbreviated_numerator' => 'PORHAt',
            'numerator_in' => 28,  // 19 Formulacion - 20 Seguimiento
            'denominator_name' => 'Meta de Cuerpos de agua con plan de ordenamiento del recurso hídrico adoptados, en el tiempo t',
            'abbreviated_denominator' => 'MPORHAt',
            'denominator_in' => 27, // 19 Formulacion - 20 Seguimiento
            'indicator_id' => $idIndicador_1
        ]);

        //**************************************************/

        DB::table('indicators')->insert([
            'type' => 10,  // 9 Minimo de Gestión
            'calcule_type' => 3, // 3 Tipo 1
            'name' => 'Porcentaje de Planes de Saneamiento y Manejo de Vertimientos (PSMV) con seguimiento',
            'abbreviated_name' => 'PPSMVCS',
            'definition' =>'Es la relación entre el número de Planes de Saneamiento y Manejo de Vertimientos (PSMV) con seguimiento con respecto a la meta de seguimiento de dichos planes por parte de la autoridad ambiental',
            'url' => '',
            'unit_id' => 69,
            'result_name' => 'Porcentaje de Planes de Saneamiento y Manejo de Vertimientos (PSMV) con seguimiento, en el tiempo t',
            'category_type'=>1158,
            'group_id' => 1,
            'geom' => 1,
            'label' => 'Nro. De Planes (PSMV) con seguimiento'
        ]);

        $idIndicador_2 = DB::getPdo()->lastInsertId();

        DB::table('variables')->insert([
            'numerator_name' => 'Número de Planes de Saneamiento y Manejo de Vertimientos con seguimiento, en el tiempo t',
            'abbreviated_numerator' => 'PSMVCSt',
            'numerator_in' => 28,  // 19 Formulacion - 20 Seguimiento
            'denominator_name' => 'Meta de Planes de Saneamiento y Manejo de Vertimientos con seguimiento, en el tiempo t',
            'abbreviated_denominator' => 'MPSMVCSt',
            'denominator_in' => 27, // 19 Formulacion - 20 Seguimiento
            'indicator_id' => $idIndicador_2
            
        ]);

        //*************************************************/

        DB::table('indicators')->insert([
            'type' => 10,  // 9 Minimo de Gestión
            'calcule_type' => 3, // 3 Tipo 1
            'name' => 'Porcentaje de cuerpos de agua con reglamentación del uso de las aguas',
            'abbreviated_name' => 'PRUA',
            'definition' =>'Es la relación entre el número de cuerpos de agua con reglamentación del uso de las aguas y la meta de cuerpos de agua a ser reglamentados en su uso de las aguas por parte de la autoridad ambiental',
            'url' => '',
            'unit_id' => 63, //    18	"Documento" 19	"Unidad" 20	"Metros lineales" 21	"Metros cuadrados" 22	"Metros cubicos" 23	"Hectárea"
            'result_name' => 'Porcentaje de cuerpos de agua con reglamentación del uso de las aguas, en el tiempo t',
            'category_type'=> 1158,
            'group_id' => 1,
            'geom' => 1,
            'label' => 'Cuerpos de Agua con Reglamentación'
        ]);

        $idIndicador_3 = DB::getPdo()->lastInsertId();

        DB::table('variables')->insert([
            'numerator_name' => 'Número de cuerpos de agua con reglamentación del uso de las aguas, en el tiempo t',
            'abbreviated_numerator' => 'RUAt',
            'numerator_in' => 28,  // 15 Formulacion - 16 Seguimiento
            'denominator_name' => 'Meta de número de cuerpos de agua con reglamentación del uso de las aguas, en el tiempo t',
            'abbreviated_denominator' => 'MRUAt',
            'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento
            'indicator_id' => $idIndicador_3
        ]);

        //******************************************************/
        DB::table('indicators')->insert([
            'type' => 10,  // 9 Minimo de Gestión
            'calcule_type' => 3, // 3 Tipo 1
            'name' => 'Porcentaje de Programas de Uso Eficiente y Ahorro del Agua (PUEAA) con seguimiento',
            'abbreviated_name' => 'PPUEAACS',
            'definition' =>'Es la relación entre el número de Programas de Uso Eficiente y Ahorro del Agua (PUEAA) con seguimiento con respecto a la meta de seguimiento de dichos planes por parte de la autoridad ambiental',
            'url' => '',
            'unit_id' => 73,
            'result_name' => 'Porcentaje de Programas de Uso Eficiente y Ahorro del Agua (PUEAA) con seguimiento, en el tiempo t',
            'category_type' => 1158,
            'group_id' => 1,
            'geom' => 1,
            'label' => 'Programas PUEAA con Seguimiento'
        ]);

        $idIndicador_4 = DB::getPdo()->lastInsertId();

        DB::table('variables')->insert([
            'numerator_name' => 'Número de Programas de Uso Eficiente y Ahorro del Agua con seguimiento, en el tiempo t',
            'abbreviated_numerator' => 'PUEAACSt',
            'numerator_in' => 28,  // 19 Formulacion - 20 Seguimiento
            'denominator_name' => 'Meta de Programas de Uso Eficiente y Ahorro del Agua con seguimiento, en el tiempo t',
            'abbreviated_denominator' => 'MPUEAACS',
            'denominator_in' => 27, // 19 Formulacion - 20 Seguimiento
            'indicator_id' => $idIndicador_4
        ]);

        //******************************************************/
        DB::table('indicators')->insert([
            'type' => 10,  // 7 Minimo de Gestión
            'calcule_type' => 3, // 9 Tipo 1
            'name' => 'Porcentaje de entes territoriales asesorados en la incorporación, planificación y ejecución de acciones relacionadas con cambio climático en el marco de los instrumentos de planificación territorial',
            'abbreviated_name' => 'PETACC',
            'definition' =>'Es la relación entre el número de entes territoriales asesorados en la incorporación, planificación y ejecución de acciones relacionadas con cambio climático en el marco de los instrumentos de planificación territorial, con respecto a la meta de entes territoriales a ser asesorados durante un periodo de gobierno en los departamentos y municipios',
            'url' => '',
            'unit_id' => 57,
            'result_name' => 'Porcentaje de entes territoriales asesorados en la incorporación, planificación y ejecución de cambio climático en los instrumentos de planificación territorial, en el tiempo t',
            'category_type' => 1157,
            'group_id' => 1,
            'geom' => 1,
            'label' => 'Nro. De M/pios asesorados'
        ]);

        $idIndicador_5 = DB::getPdo()->lastInsertId();

        DB::table('variables')->insert([
            'numerator_name' => 'Número de entes territoriales efectivamente asesorados en la incorporación, planificación y ejecución de cambio climático en los instrumentos de planificación territorial, en el tiempo t',
            'abbreviated_numerator' => 'ETACCt',
            'numerator_in' => 28,  // 19 Formulacion - 20 Seguimiento
            'denominator_name' => 'Meta de entes territoriales a ser asesorados en la incorporación, planificación y ejecución de cambio climático en los instrumentos de planificación territorial, en el tiempo t',
            'abbreviated_denominator' => 'METACCt',
            'denominator_in' => 27, // 19 Formulacion - 20 Seguimiento
            'indicator_id' => $idIndicador_5
        ]);

        DB::table('other_data')->insert([
            'variable_name' => 'Acciones',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador_5
        ]);
	
        DB::table('other_data')->insert([
            'variable_name' => 'Número de entes territoriales',
            'type' => 19, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador_5
        ]);
		
	    DB::table('other_data')->insert([
            'variable_name' => 'Nombres de entidades territoriales',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador_5
        ]);
		
        DB::table('other_data')->insert([
            'variable_name' => 'Observaciones',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador_5
        ]);

        DB::table('indicators')->insert([
            'type' => 10,  // 7 Minimo de Gestión
            'calcule_type' => 5, // 9 Tipo 1
            'name' => 'Porcentaje de suelos degradados en recuperación o rehabilitación',
            'abbreviated_name' => 'PSER',
            'definition' =>'Es la relación entre la superficie de suelos en restauración y en rehabilitación, con respecto a la meta de suelos en restauración y rehabilitación priorizadas por la Corporación',
            'url' => '',
            'unit_id' => 47, // 	"Hectárea"
            'result_name' => 'Porcentaje de suelos degradados en recuperación o rehabilitación, en el tiempo t',
			'complementary_result'=>'Inversión asociada a la recuperación o rehabilitación de suelos degradados, en el año t',
            'calcule_in' => true, 
            'category_type' => 1159,
            'group_id' => 1,
            'geom' => 3,
            'label' => 'Área Total Recuperada'
        ]);

        $idIndicador_6 = DB::getPdo()->lastInsertId();

        DB::table('variables')->insert([
			'category_name' => 'Suelos degradados en recuperación',
            'numerator_name' => 'Superficie de suelos degradados en recuperación o rehabilitación (ha), en el tiempo t',
            'abbreviated_numerator' => 'SERit',
            'numerator_in' => 28,  // 15 Formulacion - 16 Seguimiento
            'denominator_name' => 'Meta de suelos degradados en recuperación o rehabilitación (ha), en el tiempo t',
            'abbreviated_denominator' => 'MSERit',
            'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento
            'indicator_id' => $idIndicador_6
        ]);

        DB::table('variables')->insert([
			'category_name' => 'Suelos degradados en rehabilitación',
            'numerator_name' => 'Superficie de suelos degradados en recuperación o rehabilitación (ha), en el tiempo t',
            'abbreviated_numerator' => 'SERit',
            'numerator_in' => 28,  // 15 Formulacion - 16 Seguimiento
            'denominator_name' => 'Meta de suelos degradados en recuperación o rehabilitación (ha), en el tiempo t',
            'abbreviated_denominator' => 'MSERit',
            'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento
            'indicator_id' => $idIndicador_6
        ]);
		
        DB::table('other_data')->insert([
            'variable_name' => 'Tipo de acción',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador_6
        ]);
		
        DB::table('other_data')->insert([
            'variable_name' => 'Área de intervención (ha)',
            'type' => 19,// 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador_6
        ]);

        DB::table('other_data')->insert([
            'variable_name' => 'Observaciones',
            'type' => 20,// 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador_6
        ]);

        DB::table('indicators')->insert([
            'type' => 10,  // 7 Minimo de Gestión
            'calcule_type' => 3, // 9 Tipo 1
            'name' => 'Porcentaje de páramos delimitados por el MADS, con zonificación y régimen de usos adoptados por la CAR',
            'abbreviated_name' => 'PPDZRU',
            'definition' =>'Es el porcentaje de páramos con zonificación y régimen de usos adoptados por la CAR, en relación con los páramos delimitados por el MADS en la jurisdicción de la Corporación',
            'url' => '',
            'unit_id' => 58, //    18	"Documento" 19	"Unidad" 20	"Metros lineales" 21	"Metros cuadrados" 22	"Metros cubicos" 23	"Hectárea"
            'result_name' => 'Porcentaje de los páramos delimitados por el MADS, a los cuales la CAR les expide el Acto Administrativo de zonificación y régimen de usos, en el tiempo t',
            'category_type' => 1157,
            'group_id' => 1,
            'geom' => 1,
            'label' => 'Área Total Delímitada de Paramos'
        ]);

        $idIndicador_7 = DB::getPdo()->lastInsertId();

        DB::table('variables')->insert([
            'numerator_name' => 'Número de páramos previamente delimitados por el MADS en la jurisdicción de la CAR, a los cuales la CAR les expide el Acto Administrativo de zonificación y régimen de usos, en el tiempo t',
            'abbreviated_numerator' => 'PZRUit',
            'numerator_in' => 28,  // 15 Formulacion - 16 Seguimiento
            'denominator_name' => 'Número de páramos delimitados por el MADS en la jurisdicción de la CAR, en el tiempo t',
            'abbreviated_denominator' => 'PDit',
            'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento
            'indicator_id' => $idIndicador_7
        ]);

        DB::table('other_data')->insert([
            'variable_name' => 'Nombre del páramo',
            'type' => 20,// 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador_7
        ]);

        DB::table('other_data')->insert([
            'variable_name' => 'Estado de avance',
            'type' => 20,// 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador_7
        ]);

        DB::table('other_data')->insert([
            'variable_name' => 'Acto administrativo',
            'type' => 20,// 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador_7
        ]);

        //******************************************************/
        DB::table('indicators')->insert([
            'type' => 10,  // 7 Minimo de Gestión
            'calcule_type' => 3, // 9 Tipo 1
            'name' => 'Porcentaje de Planes de Gestión Integral de Residuos Sólidos (PGIRS) con seguimiento',
            'abbreviated_name' => 'PPGIRSCS',
            'definition' =>'Es la relación entre el número de Planes de Gestión Integral de Residuos Sólidos (PGIRS) con seguimiento con respecto a la meta de seguimiento de dichos planes por parte de la autoridad ambiental, exclusivamente en lo relacionado con las metas de aprovechamiento',
            'url' => '',
            'unit_id' => 69, //    18	"Documento" 19	"Unidad" 20	"Metros lineales" 21	"Metros cuadrados" 22	"Metros cubicos" 23	"Hectárea"
            'result_name' => 'Porcentaje de Planes de Gestión Integral de Residuos Sólidos (PGIRS) con seguimiento, exclusivamente en lo relacionado con las metas de aprovechamiento en el tiempo t',
            'category_type' => 1158,
            'group_id' => 1,
            'geom' => 1,
            'label' => 'Nro. De Planes (PGIRS) con seguimiento'
        ]);

        $idIndicador_8 = DB::getPdo()->lastInsertId();

        DB::table('variables')->insert([
            'numerator_name' => 'Número de Planes de Gestión Integral de Residuos Sólidos con seguimiento a las metas de aprovechamiento, en el tiempo t',
            'abbreviated_numerator' => 'PGIRSCSt',
            'numerator_in' => 28,  // 15 Formulacion - 16 Seguimiento
            'denominator_name' => 'Meta de Planes de Gestión Integral de Residuos Sólidos con seguimiento a las metas de aprovechamiento, en el tiempo t',
            'abbreviated_denominator' => 'MPGIRSCSt',
            'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento
            'indicator_id' => $idIndicador_8
        ]);

    

        //******************************************************/
        DB::table('indicators')->insert([
            'type' => 10,  // 7 Minimo de Gestión
            'calcule_type' => 3, // 9 Tipo 1
            'name' => 'Porcentaje de municipios asesorados o asistidos en la inclusión del componente ambiental en los procesos de planificación y ordenamiento territorial, con énfasis en la incorporación de las determinantes ambientales para la revisión y ajuste de los POT',
            'abbreviated_name' => 'PMAPOT',
            'definition' =>'Es la relación entre el número de municipios asesorados o asistidos en temas relacionados con la inclusión del componente ambiental en los procesos de planificación y ordenamiento territorial, con énfasis en la incorporación de las determinantes ambientales para la revisión y ajuste de los POT, con respecto a la meta de municipios a ser asesorados en dicha incorporación',
            'url' => '',
            'unit_id' => 57, //    18	"Documento" 19	"Unidad" 20	"Metros lineales" 21	"Metros cuadrados" 22	"Metros cubicos" 23	"Hectárea"
            'result_name' => 'Porcentaje de municipios asesorados o asistidos asesorados o asistidos en la inclusión del componente ambiental en los procesos de planificación y ordenamiento territorial, con énfasis en la incorporación de las determinantes ambientales para la revisión y ajuste de los POT, en el tiempo t',
            'category_type' => 1157,
            'group_id' => 1,
            'geom' => 1,
            'label' => 'Nro. De Municipios Asesorados'
        ]);

        $idIndicador_9 = DB::getPdo()->lastInsertId();

        DB::table('variables')->insert([
            'numerator_name' => 'Número de municipios asesorados en la inclusión del componente ambiental en los procesos de planificación y ordenamiento territorial, con énfasis en la incorporación de las determinantes ambientales para la revisión y ajuste de los POT, en el tiempo t',
            'abbreviated_numerator' => 'MAPOTt',
            'numerator_in' => 28,  // 15 Formulacion - 16 Seguimiento
            'denominator_name' => 'Meta de municipios a ser asesorados en la inclusión del componente ambiental en los procesos de planificación y ordenamiento territorial, con énfasis en la incorporación de las determinantes ambientales para la revisión y ajuste de los POT, en el tiempo t',
            'abbreviated_denominator' => 'MMAPOTt',
            'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento
            'indicator_id' => $idIndicador_9
        ]);

        DB::table('other_data')->insert([
            'variable_name' => 'Número de municipios',
            'type' => 19, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador_9
        ]);
		
		
        DB::table('other_data')->insert([
            'variable_name' => 'Nombres de municipios',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador_9
        ]);

        DB::table('other_data')->insert([
            'variable_name' => 'Observaciones',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador_9
        ]);

        //**************************************************/
        // Instruccion para insertar un indicador tipo 2 ***/
        //**************************************************/

        DB::table('indicators')->insert([
            'type' => 10,  // 9 Minimo de Gestión
            'calcule_type' => 4, // 4 Tipo 2
            'name' => 'Planes de Ordenación y Manejo de Cuencas (POMCAS), Planes de Manejo de Acuíferos (PMA) y Planes de Manejo de Microcuencas (PMM) formulados',
            'abbreviated_name' => 'PAFP',
            'definition' =>'Es el porcentaje de avance en la formulación o ajuste de los Planes de Ordenación y Manejo de Cuencas (POMCAS), Planes de Manejo de Acuíferos (PMA) y Planes de Manejo de Microcuencas (PMM) priorizados por la Corporación.',
            'url' => '',
            'unit_id' => 69, // 18	"Documento" 19	"Unidad" 20	"Metros lineales" 21	"Metros cuadrados" 22	"Metros cubicos" 23	"Hectárea"
            'result_name' => 'Porcentaje de avance en la formulación de los Planes de Ordenación y Manejo de Cuencas (POMCAS), Planes de Manejo de Acuíferos (PMA) y Planes de Manejo de Microcuencas (PMM), en el tiempo t',
            'category_type' => 1157,
            'group_id' => 1,
            'geom' => 1,
            'label' => 'Nro. de planes (POMCAS - PMA -PMM) Formulados'
        ]);

        $idIndicador_1= DB::getPdo()->lastInsertId();
		
        DB::table('variables')->insert([
            'category_name' => 'Porcentaje promedio de avance en la formulación de los Planes de Ordenación y Manejo de Cuencas (POMCAS), en el tiempo t',
			'category_weighing' => 'Ponderador de POMCAS',
			'numerator_name' => 'Porcentaje de avance de la meta anual en la formulación del Plan z, en el tiempo t',
			'abbreviated_numerator' => 'PAMAPzt',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Número total de planes en el tiempo t',
			'abbreviated_denominator' => 'Nt',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador_1
        ]);

        $idVariable1 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar fases               ***/
        //**************************************************/ 
        
		DB::table('phases')->insert([
            'name' => 'Procesos formales previos',
            'percentage' => '15',
			'variable_id' => $idVariable1,
        ]);

		DB::table('phases')->insert([
            'name' => 'Fase de Aprestamiento',
            'percentage' => '18',
			'variable_id' => $idVariable1,
        ]);

		DB::table('phases')->insert([
            'name' => 'Fase Diagnóstico',
            'percentage' => '33',
			'variable_id' => $idVariable1,
        ]);

		DB::table('phases')->insert([
            'name' => 'Fase de Prospectiva y Zonificación Ambiental',
            'percentage' => '16',
			'variable_id' => $idVariable1,
        ]);

		DB::table('phases')->insert([
            'name' => 'Fase de Formulación',
            'percentage' => '18',
			'variable_id' => $idVariable1,
        ]);

        DB::table('variables')->insert([
			'category_name' => 'Porcentaje promedio de avance en la formulación de los Planes de Manejo de Acuíferos (PMA), en el tiempo t',
			'category_weighing' => 'Ponderador de PMA',
			'numerator_name' => 'Porcentaje de avance de la meta anual en la formulación del Plan z, en el tiempo t',
			'abbreviated_numerator' => 'PAMAPzt',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
            'denominator_name' => 'Número total de planes en el tiempo t',
			'abbreviated_denominator' => 'Nt',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador_1,
        ]);

		$idVariable2 = DB::getPdo()->lastInsertId();
        
		DB::table('phases')->insert([
            'name' => 'Fase de Aprestamiento',
            'percentage' => '20',
			'variable_id' => $idVariable2,
        ]);
        
		DB::table('phases')->insert([
            'name' => 'Fase Diagnóstico',
            'percentage' => '50',
			'variable_id' => $idVariable2,
        ]);
                
		DB::table('phases')->insert([
            'name' => 'Fase de Formulación',
            'percentage' => '30',
			'variable_id' => $idVariable2,
        ]);
		
		DB::table('variables')->insert([
			'category_name' => 'Porcentaje promedio de avance en la formulación de los Planes de Microcuencas (PMM), en el tiempo t',
			'category_weighing' => 'Ponderador de PMM',
            'numerator_name' => 'Porcentaje de avance de la meta anual en la formulación del Plan z, en el tiempo t',
			'abbreviated_numerator' => 'PAMAPzt',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
            'denominator_name' => 'Número total de planes en el tiempo t',
			'abbreviated_denominator' => 'Nt',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador_1,
        ]);
		
		$idVariable3 = DB::getPdo()->lastInsertId();
        
		DB::table('phases')->insert([
            'name' => 'Fase de Aprestamiento',
            'percentage' => '20',
			'variable_id' => $idVariable3,
        ]);
		
		DB::table('phases')->insert([
            'name' => 'Fase Diagnóstico',
            'percentage' => '50',
			'variable_id' => $idVariable3,
        ]);
		
		DB::table('phases')->insert([
            'name' => 'Fase de Formulación',
            'percentage' => '30',
			'variable_id' => $idVariable3,
        ]);
		
		
        //**************************************************/
        // Instruccion para insertar otras variables     ***/
        //**************************************************/ 

        DB::table('other_data')->insert([
            'variable_name' => 'Tipo de plan',
            'type' => 20, // 11 Numero - 12 Texto
            'value' => '25',
            'indicator_id' => $idIndicador_1
        ]);
		
        DB::table('other_data')->insert([
            'variable_name' => 'Código',
            'type' => 19, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador_1
        ]);		
		
        DB::table('other_data')->insert([
            'variable_name' => 'Nombre de Cuenca, Microcuenca, Acuífero',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador_1
        ]);		
				
        DB::table('other_data')->insert([
            'variable_name' => 'Área',
            'type' => 19, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador_1
        ]);		
	    
		DB::table('other_data')->insert([
            'variable_name' => 'Estado de avance a 31 de diciembre del año anterior',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador_1
        ]);	
		
		DB::table('other_data')->insert([
            'variable_name' => 'Estado de avance a 31 de diciembre del año anterior (%)',
            'type' => 19, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador_1
        ]);	

        //**************************************************/

        DB::table('indicators')->insert([
            'type' => 10,  // 7 Minimo de Gestión
            'calcule_type' => 4, // 10 Tipo 2
            'name' => 'Planes de Ordenación y Manejo de Cuencas (POMCAS), Planes de Manejo de Acuíferos (PMA) y Planes de Manejo de Microcuencas (PMM) en ejecución',
            'abbreviated_name' => 'PPEE',
            'definition' =>'Es el porcentaje de Planes de Ordenación y Manejo de Cuencas (POMCAS), Planes de Manejo de Acuíferos (PMA) y Planes de Manejo de Microcuencas (PMM) en ejecución, en relación con los Planes de Ordenación y Manejo de Cuencas (POMCAS), Planes de Manejo de Acuíferos (PMA) y Planes de Manejo de Microcuencas (PMM) aprobados en la corporación.',
            'url' => '',
            'unit_id' => 69, // 18	"Documento" 19	"Unidad" 20	"Metros lineales" 21	"Metros cuadrados" 22	"Metros cubicos" 23	"Hectárea"
            'result_name' => 'Porcentaje de Planes de Ordenación y Manejo de Cuencas (POMCAS), Planes de Manejo de Acuíferos (PMA) y Planes de Manejo de Microcuencas (PMM) en ejecución, en el tiempo t',
            'complementary_result' => 'Ejecución presupuestal de acciones relacionadas con la implementación de POMCAS, PMA y PMM en el año t',
            'category_type' => 1159,
            'group_id' => 1,
            'geom' => 1,
            'label' => 'Nro. de planes (POMCAS - PMA -PMM) En Ejecucion'
        ]);

        $idIndicador2_2 = DB::getPdo()->lastInsertId();
		
        //**************************************************/
        // Instruccion para insertar categoría           ***/
        //**************************************************/ 
		
		DB::table('variables')->insert([
			'category_name' => 'Porcentaje de POMCAS en ejecución (PPOMCASEE), en el tiempo t',
			'category_weighing' => 'Ponderador de PPOMCASEE',
			'numerator_name' => 'Número de POMCAS en ejecución, en el tiempo t',
			'abbreviated_numerator' => 'POMCASEEt',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Número de POMCAS aprobados',
			'abbreviated_denominator' => 'POMCASF',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador2_2,
        ]);		
		
		DB::table('variables')->insert([
			'category_name' => 'Porcentaje de Planes de Manejo de Acuíferos (PMA) en ejecución, en el tiempo t',
			'category_weighing' => 'Ponderador de PPMAEE',
			'numerator_name' => 'Número de PMA en ejecución, en el tiempo t',
			'abbreviated_numerator' => 'PMAEEt',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Número de PMA aprobados',
			'abbreviated_denominator' => 'PMAF',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador2_2,
        ]);	
		
		DB::table('variables')->insert([
			'category_name' => 'Porcentaje de Planes de Manejo de Microcuencas (PMM) en ejecución, en el tiempo t',
			'category_weighing' => 'Ponderador de PPMMME',
			'numerator_name' => 'Número de PMM en ejecución, en el tiempo t',
			'abbreviated_numerator' => 'PMMEEt',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Número de PMM aprobados',
			'abbreviated_denominator' => 'PMMF',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador2_2,
        ]);

        //**************************************************/
        // Instruccion para insertar otras variables     ***/
        //**************************************************/ 

        DB::table('other_data')->insert([
            'variable_name' => 'Plan',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador2_2
        ]);

        DB::table('other_data')->insert([
            'variable_name' => 'Observaciones',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador2_2
        ]);

        //**************************************************/ 
        DB::table('indicators')->insert([
            'type' => 10,  // 7 Minimo de Gestión
            'calcule_type' => 4, // 10 Tipo 2
            'name' => 'Porcentaje de autorizaciones ambientales con seguimiento',
            'abbreviated_name' => 'PTAACS',
            'definition' =>'Es la relación entre el número de Autorizaciones ambientales con seguimiento con respecto a la meta de seguimiento de dichas autorizaciones por parte de la autoridad ambiental.',
            'url' => '',
            'unit_id' => 58, // 18	"Documento" 19	"Unidad" 20	"Metros lineales" 21	"Metros cuadrados" 22	"Metros cubicos" 23	"Hectárea"
            'result_name' => 'Porcentaje total de autorizaciones ambientales con seguimiento, en el tiempo t',
            'category_type' => 1158,
            'group_id' => 1,
            'geom' => 1,
            'label' => 'Nro. De autorizaciones con seguimiento'
        ]);

        $idIndicador2_3 = DB::getPdo()->lastInsertId();
		
        //**************************************************/
        // Instruccion para insertar categoría           ***/
        //**************************************************/ 
		
		DB::table('variables')->insert([
			'category_name' => 'Seguimiento de licencias ambientales',
			'category_weighing' => 'Ponderador correspondiente a licencias ambientales',
			'numerator_name' => 'Número de licencias ambientales con seguimiento',
			'abbreviated_numerator' => 'LACS',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Meta de licencias ambientales con seguimiento',
			'abbreviated_denominator' => 'MLACS',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador2_3,
        ]);		
		
		DB::table('variables')->insert([
			'category_name' => 'Seguimiento de concesiones de agua',
			'category_weighing' => 'Ponderador correspondiente a seguimiento de concesiones de agua',
			'numerator_name' => 'Número de concesiones de agua con seguimiento',
			'abbreviated_numerator' => 'CACS',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Meta de número de concesiones de agua con seguimiento',
			'abbreviated_denominator' => 'MCACS',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador2_3,
        ]);	
	
		DB::table('variables')->insert([
			'category_name' => 'Seguimiento de permisos de vertimiento de agua y PSMV',
			'category_weighing' => 'Ponderador correspondiente a seguimiento de permisos dde vertimientos de agua y PSMV',
			'numerator_name' => 'Número de permisos de vertimiento de agua con seguimiento',
			'abbreviated_numerator' => 'VACS',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Meta de número de permisos de vertimiento de agua con seguimiento',
			'abbreviated_denominator' => 'MVACS',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador2_3,
        ]);		
	
		DB::table('variables')->insert([
			'category_name' => 'Seguimiento de permisos de aprovechamiento forestal',
			'category_weighing' => 'Ponderador correspondiente a seguimiento de permisos de aprovechamiento forestal',
			'numerator_name' => 'Número de permisos de aprovechamiento forestal con seguimiento',
			'abbreviated_numerator' => 'PAFCS',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Meta de número de permisos de aprovechamiento forestal con seguimiento',
			'abbreviated_denominator' => 'MPAFCS',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador2_3,
        ]);
		
		DB::table('variables')->insert([
			'category_name' => 'Seguimiento de permisos de emisiones atmosféricas',
			'category_weighing' => 'Ponderador correspondiente a eguimiento de permisos de emisiones atmosféricas',
			'numerator_name' => 'Número de permisos de emisiones atmosféricas con seguimiento',
			'abbreviated_numerator' => 'EACS',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Meta de número de permisos de emisiones atmosféricas con seguimiento',
			'abbreviated_denominator' => 'MPEACS',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador2_3,
        ]);	

        //**************************************************/ 

        DB::table('indicators')->insert([
            'type' => 10,  // 7 Minimo de Gestión
            'calcule_type' => 4, // 10 Tipo 2
            'name' => 'Porcentaje de redes y estaciones de monitoreo en operación',
            'abbreviated_name' => 'PREMO',
            'definition' =>'Es el número de redes y estaciones de monitoreo que están en operación y que cumplen con la representatividad de los datos en relación con el número de redes y estaciones de monitoreo instaladas de la Corporación.',
            'url' => '',
            'unit_id' => 44, // 18	"Documento" 19	"Unidad" 20	"Metros lineales" 21	"Metros cuadrados" 22	"Metros cubicos" 23	"Hectárea"
            'result_name' => 'Porcentaje de redes y estaciones de monitoreo en operación, en el tiempo t',
            'category_type' => 1157,
            'group_id' => 1,
            'geom' => 1,
            'label' => 'Nro. De de redes y estaciones de monitoreo en operación'
        ]);
        
        $idIndicador2_4 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar categoría           ***/
        //**************************************************/
		
		DB::table('variables')->insert([
			'category_name' => 'Agua',
			'category_weighing' => 'Ponderador de PREMOAGt',
			'numerator_name' => 'Número total de estaciones hidrometeorológicas en operación',
			'abbreviated_numerator' => '',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Número total de estaciones hidrometeorológicas instaladas',
			'abbreviated_denominator' => '',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador2_4,
        ]);		
		
		DB::table('variables')->insert([
			'category_name' => 'Monitoreo de aire',
			'category_weighing' => 'Ponderador de PREMOARt',
			'numerator_name' => 'Redes con representatividad temporal a 75%',
			'abbreviated_numerator' => '',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Redes instaladas en la Corporación',
			'abbreviated_denominator' => '',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador2_4,
        ]);			
		
		DB::table('variables')->insert([
			'category_name' => 'Otras redes y estaciones de monitoreo en operación',
			'category_weighing' => 'Ponderador de PREMOOt',
			'numerator_name' => 'Número total de estaciones en operación',
			'abbreviated_numerator' => '',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Número total de estaciones  instaladas',
			'abbreviated_denominator' => '',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador2_4,
        ]);	

        //**************************************************/
        // Instruccion para insertar un indicador tipo 2 ***/
        //**************************************************/ 
        DB::table('indicators')->insert([
            'type' => 10,  // 7 Minimo de Gestión
            'calcule_type' => 4, // 10 Tipo 2
            'name' => 'Porcentaje de actualización y reporte de la información al SIAC',
            'abbreviated_name' => 'PARSIAC',
            'definition' =>'Es la relación entre el número de registros que la Corporación migra a los diferentes subsistemas del SIAC y el número de registros esperados reportados en dichos subsistemas.',
            'url' => '',
            'unit_id' => 77, // 18	"Documento" 19	"Unidad" 20	"Metros lineales" 21	"Metros cuadrados" 22	"Metros cubicos" 23	"Hectárea"
            'result_name' => 'Porcentaje de actualización y reporte de la información al Subsistema i del SIAC, en el tiempo t',
            'category_type' => 1157,
            'group_id' => 1,
            'geom' => 1,
            'label' => 'Nro. De actualizaciones y reportes al SIAC'
        ]);
		
        //**************************************************/
        // Instruccion para insertar categoría           ***/
        //**************************************************/ 
		
		$idIndicador2_5 = DB::getPdo()->lastInsertId();
		
		DB::table('variables')->insert([
			'category_name' => 'SIRH',
			'category_weighing' => 'Ponderador correspondiente a el subsistema SIRH',
			'numerator_name' => 'Número de registros reportados en el subsistema i del SIAC, en el tiempo t',
			'abbreviated_numerator' => 'RRSit',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Número de registros esperados reportados en el subsistema i del SIAC, en el tiempo t',
			'abbreviated_denominator' => 'RESit',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador2_5,
        ]);	
		
		DB::table('variables')->insert([
			'category_name' => 'SISAIRE',
			'category_weighing' => 'Ponderador correspondiente a el subsistema SISAIRE',
			'numerator_name' => 'Número de registros reportados en el subsistema i del SIAC, en el tiempo t',
			'abbreviated_numerator' => 'RRSit',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Número de registros esperados reportados en el subsistema i del SIAC, en el tiempo t',
			'abbreviated_denominator' => 'RESit',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador2_5,
        ]);	
		
		DB::table('variables')->insert([
			'category_name' => 'SNIF',
			'category_weighing' => 'Ponderador correspondiente a el subsistema SNIF',
			'numerator_name' => 'Número de registros reportados en el subsistema i del SIAC, en el tiempo t',
			'abbreviated_numerator' => 'RRSit',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Número de registros esperados reportados en el subsistema i del SIAC, en el tiempo t',
			'abbreviated_denominator' => 'RESit',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador2_5,
        ]);
		
		DB::table('variables')->insert([
			'category_name' => 'RESPEL',
			'category_weighing' => 'Ponderador correspondiente a el subsistema RESPEL',
			'numerator_name' => 'Número de registros reportados en el subsistema i del SIAC, en el tiempo t',
			'abbreviated_numerator' => 'RRSit',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Número de registros esperados reportados en el subsistema i del SIAC, en el tiempo t',
			'abbreviated_denominator' => 'RESit',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador2_5,
        ]);
		
		DB::table('variables')->insert([
			'category_name' => 'SIUR',
			'category_weighing' => 'Ponderador correspondiente a el subsistema SIUR',
			'numerator_name' => 'Número de registros reportados en el subsistema i del SIAC, en el tiempo t',
			'abbreviated_numerator' => 'RRSit',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Número de registros esperados reportados en el subsistema i del SIAC, en el tiempo t',
			'abbreviated_denominator' => 'RESit',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador2_5,
        ]);		

        //**************************************************/
        // Instruccion para insertar un indicador tipo 3 ***/
        //**************************************************/ 

        DB::table('indicators')->insert([
            'type' => 10,  // 7 Minimo de Gestión
            'calcule_type' => 5, // 11 Tipo 3
            'name' => 'Porcentaje de la superficie de áreas protegidas regionales declaradas, homologadas o recategorizadas, inscritas en el RUNAP',
            'abbreviated_name' => 'PAPR',
            'definition' =>'Mide la superficie en hectáreas de las áreas protegidas regionales, declaradas homologadas o recategorizadas inscritas en el RUNAP, con respecto a la meta de áreas protegidas regionales definida en el Plan de Acción de la Corporación. Comprende las áreas protegidas tanto continentales como marinas, costeras e insulares.',
            'url' => '',
            'unit_id' => 30, // 18	"Documento" 19	"Unidad" 20	"Metros lineales" 21	"Metros cuadrados" 22	"Metros cubicos" 23	"Hectárea"
            'result_name' => 'Porcentaje de áreas protegidas regionales declaradas, homologadas o recategorizadas, inscritas en el RUNAP, en el tiempo t',
            'category_type' => 1157,
            'group_id' => 1,
            'geom' => 3,
            'label' => 'Area declarada homologada o recategorizada en el RUNAP'
        ]);
        
        $idIndicador3_1 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar categoría           ***/
        //**************************************************/
		
		DB::table('variables')->insert([
			'category_name' => 'Áreas Protegidas Continentales',
			'numerator_name' => 'Superficie de áreas protegidas regionales declaradas, homologadas o recategorizadas, inscritas en el RUNAP (ha), en el tiempo t',
			'abbreviated_numerator' => 'SAPRi',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Meta de áreas protegidas regionales declaradas, homologadas o recategorizadas, inscritas en el RUNAP (ha), en el tiempo t',
			'abbreviated_denominator' => 'MAPRit',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador3_1,
        ]);		
		
		DB::table('variables')->insert([
			'category_name' => 'Áreas protegidas marinas, costeras e insulares',
			'numerator_name' => 'Superficie de áreas protegidas regionales declaradas, homologadas o recategorizadas, inscritas en el RUNAP (ha), en el tiempo t',
			'abbreviated_numerator' => 'SAPRi',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Meta de áreas protegidas regionales declaradas, homologadas o recategorizadas, inscritas en el RUNAP (ha), en el tiempo t',
			'abbreviated_denominator' => 'MAPRit',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador3_1,
        ]);
		
        //**************************************************/
        // Instruccion para insertar otras variables     ***/
        //**************************************************/ 

        DB::table('other_data')->insert([
            'variable_name' => 'Nombre de área protegida',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador3_1
        ]);

        DB::table('other_data')->insert([
            'variable_name' => 'Tipo (continental, marina, costera, insular)',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador3_1
        ]);
		
        DB::table('other_data')->insert([
            'variable_name' => 'Categoría',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador3_1
        ]);
		
        DB::table('other_data')->insert([
            'variable_name' => 'Superficie en acto administrativo (ha)',
            'type' => 19, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador3_1
        ]);
		
        DB::table('other_data')->insert([
            'variable_name' => 'Superficie en shape (ha)(a)',
            'type' => 19, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador3_1
        ]);
		
        DB::table('other_data')->insert([
            'variable_name' => 'Estado de avance (b)',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador3_1
        ]);
		
        DB::table('other_data')->insert([
            'variable_name' => 'Acto administrativo de declaratoria',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador3_1
        ]);

        //**************************************************/
        // Instruccion para insertar un indicador tipo 3 ***/
        //**************************************************/ 

        DB::table('indicators')->insert([
            'type' => 10,  // 7 Minimo de Gestión
            'calcule_type' => 5, // 11 Tipo 3
            'name' => 'Porcentaje de avance en la formulación del Plan de Ordenación Forestal',
            'abbreviated_name' => 'PAPOF',
            'definition' =>'Es el porcentaje de avance en la formulación del Plan de Ordenación Forestal, con respecto a la meta de Ordenación Forestal definida en el Plan de Acción de la Corporación.',
            'url' => '',
            'unit_id' => 47, // 18	"Documento" 19	"Unidad" 20	"Metros lineales" 21	"Metros cuadrados" 22	"Metros cubicos" 23	"Hectárea"
            'result_name' => 'Porcentaje de avance en la formulación del Plan de Ordenación Forestal, en el tiempo t',
            'category_type' => 1157,
            'group_id' => 1,
            'geom' => 1,
            'label' => 'Nro. Planes de Ordenación Forestal'
        ]);

        $idIndicador3_2 = DB::getPdo()->lastInsertId();
		
        //**************************************************/
        // Instruccion para insertar categoría           ***/
        //**************************************************/ 
		
		DB::table('variables')->insert([
			'category_name' => 'Hectáreas forestales a ser actualizadas en el Plan de Ordenación Forestal en el cuatrienio (ha) -si aplica-',
			'numerator_name' => 'Superficie de avance en la formulación del Plan de Ordenación Forestal (ha), en el tiempo t',
			'abbreviated_numerator' => 'APOFit',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Meta de avance en la formulación del Plan de Ordenación Forestal (ha), en el tiempo t',
			'abbreviated_denominator' => 'MAPOFit',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador3_2,
        ]);
		
		DB::table('variables')->insert([
			'category_name' => 'Hectáreas forestales a ser ordenadas en el Plan de Ordenación Forestal en el cuatrienio (ha)',
			'numerator_name' => 'Superficie de avance en la formulación del Plan de Ordenación Forestal (ha), en el tiempo t',
			'abbreviated_numerator' => 'APOFit',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Meta de avance en la formulación del Plan de Ordenación Forestal (ha), en el tiempo t',
			'abbreviated_denominator' => 'MAPOFit',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador3_2,
        ]);

        //**************************************************/
        // Instruccion para insertar otras variables     ***/
        //**************************************************/ 

        DB::table('other_data')->insert([
            'variable_name' => 'Nombre del área a ser ordenada',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador3_2
        ]);

        DB::table('other_data')->insert([
            'variable_name' => 'Municipios donde se ubica',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador3_2
        ]);
		
        DB::table('other_data')->insert([
            'variable_name' => 'Superficie (ha)',
            'type' => 19, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador3_2
        ]);
		
        DB::table('other_data')->insert([
            'variable_name' => 'Estado de avance (a)',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador3_2
        ]);
		
        DB::table('other_data')->insert([
            'variable_name' => 'Acto administrativo de adopción',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador3_2
        ]);

        //**************************************************/
        // Instruccion para insertar un indicador tipo 3 ***/
        //**************************************************/ 
        DB::table('indicators')->insert([
            'type' => 10,  // 7 Minimo de Gestión
            'calcule_type' => 5, // 5 Tipo 3 
            'name' => 'Porcentaje de áreas protegidas con planes de manejo en ejecución',
            'abbreviated_name' => 'PAPME',
            'definition' =>'Es la relación entre el número de áreas protegidas con planes de manejo en ejecución y el número de áreas protegidas regionales en jurisdicción de la Corporación registradas en el RUNAP, cuya administración es responsabilidad de la autoridad ambiental. Comprende áreas protegidas tanto continentales como marinas, costeras e insulares.',
            'url' => '',
            'unit_id' => 30, // 18	"Documento" 19	"Unidad" 20	"Metros lineales" 21	"Metros cuadrados" 22	"Metros cubicos" 23	"Hectárea"
            'result_name' => 'Porcentaje de áreas protegidas con planes de manejo en ejecución, en el tiempo t',
            'category_type' => 1159,
            'group_id' => 1,
            'geom' => 1,
            'label' => 'Área protegida con planes de manejo en ejecución'
        ]);

        $idIndicador3_3 = DB::getPdo()->lastInsertId();
		
        //**************************************************/
        // Instruccion para insertar categoría           ***/
        //**************************************************/
		
		DB::table('variables')->insert([
			'category_name' => 'Continentales',
			'numerator_name' => 'Número de áreas protegidas i con planes de manejo en ejecución, en el tiempo t',
			'abbreviated_numerator' => 'APMEit',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Número de áreas protegidas con plan de manejo adoptado, en el tiempo t',
			'abbreviated_denominator' => 'APCARit',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador3_3,
        ]);
		
		DB::table('variables')->insert([
			'category_name' => 'Marinas, costeras e insulares',
			'numerator_name' => 'Número de áreas protegidas i con planes de manejo en ejecución, en el tiempo t',
			'abbreviated_numerator' => 'APMEit',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Número de áreas protegidas con plan de manejo adoptado, en el tiempo t',
			'abbreviated_denominator' => 'APCARit',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador3_3,
        ]);

        //**************************************************/
        // Instruccion para insertar otras variables     ***/
        //**************************************************/ 

        DB::table('other_data')->insert([
            'variable_name' => 'Nombre de AP',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador3_3
		]);
        
		DB::table('other_data')->insert([
            'variable_name' => 'Tipo (continental, marina, costera, insular)',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador3_3
		]);
        
		DB::table('other_data')->insert([
            'variable_name' => 'Categoría de AP',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador3_3
        ]);

        DB::table('other_data')->insert([
            'variable_name' => 'Observaciones',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador3_3
        ]);
        //**************************************************/
        // Instruccion para insertar un indicador tipo 3 ***/
        //**************************************************/ 
        DB::table('indicators')->insert([
            'type' => 10,  // 7 Minimo de Gestión
            'calcule_type' => 5, // 11 Tipo 3
            'name' => 'Porcentaje de especies amenazadas con medidas de conservación y manejo en ejecución',
            'abbreviated_name' => 'PEAMME',
            'definition' =>'Es la relación entre el número de especies amenazadas con medidas de conservación y manejo en ejecución y el número de especies que cuentan con medidas de manejo formuladas, tanto para fauna y flora como en el medio continental y marino.',
            'url' => '',
            'unit_id' => 43, // 18	"Documento" 19	"Unidad" 20	"Metros lineales" 21	"Metros cuadrados" 22	"Metros cubicos" 23	"Hectárea"
            'result_name' => 'Porcentaje de especies amenazadas con medidas de conservación y manejo en ejecución, en tiempo t',
            'category_type' => 1159,
            'group_id' => 1,
            'geom' => 1,
            'label' => 'Nro. Especies amenazadas con medidas de conservación'
        ]);

        $idIndicador3_4 = DB::getPdo()->lastInsertId();
		
        //**************************************************/
        // Instruccion para insertar categoría           ***/
        //**************************************************/
		
		DB::table('variables')->insert([
			'category_name' => 'Especies de flora amenazadas continentales',
			'numerator_name' => 'Número de especies amenazadas i con medidas de conservación y manejo en ejecución, en el tiempo t',
			'abbreviated_numerator' => 'EAMMEit',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Número de especies amenazadas i con medidas de conservación y manejo formuladas, en el tiempo t',
			'abbreviated_denominator' => 'EAMMFit',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador3_4,
        ]);

		DB::table('variables')->insert([
			'category_name' => 'Especies de fauna amenazadas continentales',
			'numerator_name' => 'Número de especies amenazadas i con medidas de conservación y manejo en ejecución, en el tiempo t',
			'abbreviated_numerator' => 'EAMMEit',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Número de especies amenazadas i con medidas de conservación y manejo formuladas, en el tiempo t',
			'abbreviated_denominator' => 'EAMMFit',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador3_4,
        ]);

		DB::table('variables')->insert([
			'category_name' => 'Especies de flora amenazadas marinas',
			'numerator_name' => 'Número de especies amenazadas i con medidas de conservación y manejo en ejecución, en el tiempo t',
			'abbreviated_numerator' => 'EAMMEit',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Número de especies amenazadas i con medidas de conservación y manejo formuladas, en el tiempo t',
			'abbreviated_denominator' => 'EAMMFit',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador3_4,
        ]);
		
		DB::table('variables')->insert([
			'category_name' => 'Especies de fauna amenazadas marinas',
			'numerator_name' => 'Número de especies amenazadas i con medidas de conservación y manejo en ejecución, en el tiempo t',
			'abbreviated_numerator' => 'EAMMEit',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Número de especies amenazadas i con medidas de conservación y manejo formuladas, en el tiempo t',
			'abbreviated_denominator' => 'EAMMFit',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador3_4,
        ]);

        //**************************************************/
        // Instruccion para insertar otras variables     ***/
        //**************************************************/ 

        DB::table('other_data')->insert([
            'variable_name' => 'Tipo (Continental o marina)',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador3_4
		]);
		
        DB::table('other_data')->insert([
            'variable_name' => 'Tipo (Flora o fauna)',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador3_4
		]);	
		
        DB::table('other_data')->insert([
            'variable_name' => 'Nombre (común y/o científico)',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador3_4
        ]);	
        
        DB::table('other_data')->insert([
            'variable_name' => 'Observaciones',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador3_4
		]);	
		
        //**************************************************/
        // Instruccion para insertar un indicador tipo 3 ***/
        //**************************************************/ 
        DB::table('indicators')->insert([
            'type' => 10,  // 7 Minimo de Gestión
            'calcule_type' => 5, // 11 Tipo 3
            'name' => 'Porcentaje de especies invasoras con medidas de prevención, control y manejo en ejecución',
            'abbreviated_name' => 'PEIME',
            'definition' =>'Es la relación entre el número de especies invasoras con medidas de prevención, control y manejo en ejecución y el número de especies que cuentan con medidas de prevención, control y manejo formulado, tanto para fauna y flora como en el medio continental y marino.',
            'url' => '',
            'unit_id' => 43, // 18	"Documento" 19	"Unidad" 20	"Metros lineales" 21	"Metros cuadrados" 22	"Metros cubicos" 23	"Hectárea"
            'result_name' => 'Porcentaje de especies invasoras con medidas de prevención, control y manejo en ejecución, en tiempo t',
			'complementary_result'=>'Inversión asociada a la ejecución de las medidas de prevención, control y manejo de especies invasoras, en el año t',
            'calcule_in' => true, 
            'category_type' => 1159,
            'group_id' => 1,
            'geom' => 1,
            'label' => 'Nro. Especies invasoras  con medidas de prevencion, control y manejo'
        ]);

        $idIndicador3_5 = DB::getPdo()->lastInsertId();
		
        //**************************************************/
        // Instruccion para insertar categoría           ***/
        //**************************************************/
		
		DB::table('variables')->insert([
			'category_name' => 'Especies de flora invasoras continentales',
			'numerator_name' => 'Número de especies invasoras i con medidas de prevención, control y manejo en ejecución, en tiempo t',
			'abbreviated_numerator' => 'EIPMEEit',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Número de especies invasoras i con medidas de prevención, control y manejo formulado, en el tiempo t',
			'abbreviated_denominator' => 'EIPMEFit',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador3_5,
        ]);

		DB::table('variables')->insert([
			'category_name' => 'Especies de fauna invasoras continentales',
			'numerator_name' => 'Número de especies invasoras i con medidas de prevención, control y manejo en ejecución, en tiempo t',
			'abbreviated_numerator' => 'EIPMEEit',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Número de especies invasoras i con medidas de prevención, control y manejo formulado, en el tiempo t',
			'abbreviated_denominator' => 'EIPMEFit',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador3_5,
        ]);
		
		DB::table('variables')->insert([
			'category_name' => 'Especies de flora invasoras marinas',
			'numerator_name' => 'Número de especies invasoras i con medidas de prevención, control y manejo en ejecución, en tiempo t',
			'abbreviated_numerator' => 'EIPMEEit',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Número de especies invasoras i con medidas de prevención, control y manejo formulado, en el tiempo t',
			'abbreviated_denominator' => 'EIPMEFit',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador3_5,
        ]);
		
		DB::table('variables')->insert([
			'category_name' => 'Especies de fauna invasoras marinas',
			'numerator_name' => 'Número de especies invasoras i con medidas de prevención, control y manejo en ejecución, en tiempo t',
			'abbreviated_numerator' => 'EIPMEEit',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Número de especies invasoras i con medidas de prevención, control y manejo formulado, en el tiempo t',
			'abbreviated_denominator' => 'EIPMEFit',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador3_5,
        ]);

        //**************************************************/
        // Instruccion para insertar otras variables     ***/
        //**************************************************/ 

        DB::table('other_data')->insert([
            'variable_name' => 'Tipo (Continental o marina)',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador3_5
		]);

        DB::table('other_data')->insert([
            'variable_name' => 'Tipo (Flora o fauna)',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador3_5
		]);
		
		
        DB::table('other_data')->insert([
            'variable_name' => 'Nombre (común y/o científico)',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador3_5
        ]);
        
        DB::table('other_data')->insert([
            'variable_name' => 'Observaciones',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador3_5
		]);

        //**************************************************/
        // Instruccion para insertar un indicador tipo 3 ***/
        //**************************************************/ 
        DB::table('indicators')->insert([
            'type' => 10,  // 7 Minimo de Gestión
            'calcule_type' => 5, // 11 Tipo 3
            'name' => 'Porcentaje de áreas de ecosistemas en restauración, rehabilitación y reforestación',
            'abbreviated_name' => 'PAERRR',
            'definition' =>'Mide la superficie de ecosistemas en restauración, rehabilitación y reforestación, con respecto a la meta de áreas en restauración, rehabilitación y recuperación priorizadas por la Corporación.',
            'url' => '',
            'unit_id' => 47, // 18	"Documento" 19	"Unidad" 20	"Metros lineales" 21	"Metros cuadrados" 22	"Metros cubicos" 23	"Hectárea"
            'result_name' => 'Porcentaje de áreas de ecosistemas en restauración, rehabilitación y recuperación, en el tiempo t',
			'complementary_result'=>'Inversión asociada a restauración, rehabilitación y recuperación de los ecosistemas naturales, en el año t',
            'calcule_in' => true,
            'category_type' => 1159,
            'group_id' => 1,
            'geom' => 1,
            'label' => 'Área total de ecosistemas en restauración, rehabilitación y reforestación'
        ]);

        $idIndicador3_6 = DB::getPdo()->lastInsertId();
		
        //**************************************************/
        // Instruccion para insertar categoría           ***/
        //**************************************************/ 
		
		DB::table('variables')->insert([
			'category_name' => 'Áreas de ecosistemas en restauración ecológica',
			'numerator_name' => 'Superficie de áreas en restauración, en el tiempo t',
			'abbreviated_numerator' => 'AERRRit',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Meta de áreas en restauración, rehabilitación y recuperación (ha), en el tiempo t',
			'abbreviated_denominator' => 'MAERRRit',
			'denominator_in' => 10, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador3_6,
        ]);

		DB::table('variables')->insert([
			'category_name' => 'Áreas de ecosistemas en restauración ecológica',
			'numerator_name' => 'Superficie de áreas en restauración, en el tiempo t',
			'abbreviated_numerator' => 'AERRRit',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Meta de áreas en restauración, en el tiempo t',
			'abbreviated_denominator' => 'MAERRRit',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador3_6,
        ]);
		
		DB::table('variables')->insert([
			'category_name' => 'Áreas de ecosistemas en rehabilitación',
			'numerator_name' => 'Superficie de áreas en rehabilitación, en el tiempo t',
			'abbreviated_numerator' => 'AERRRit',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Meta de áreas en rehabilitación, en el tiempo t',
			'abbreviated_denominator' => 'MAERRRit',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador3_6,
        ]);
		
		DB::table('variables')->insert([
			'category_name' => 'Áreas de ecosistemas en recuperación',
			'numerator_name' => 'Superficie de áreas en recuperación, en el tiempo t',
			'abbreviated_numerator' => 'AERRRit',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Meta de áreas en recuperación (ha), en el tiempo t',
			'abbreviated_denominator' => 'MAERRRit',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador3_6,
        ]);
		
        //**************************************************/
        // Instruccion para insertar otras variables     ***/
        //**************************************************/ 

        DB::table('other_data')->insert([
            'variable_name' => 'Tipo de acción (restauración, rehabilitación o recuperación)',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador3_6
		]);

        DB::table('other_data')->insert([
            'variable_name' => 'Área en restauración, rehabilitación o recuperación (ha)',
            'type' => 19, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador3_6
        ]);
        
        DB::table('other_data')->insert([
            'variable_name' => 'Observaciones',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador3_6
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador tipo 3***/
        //**************************************************/ 
        DB::table('indicators')->insert([
            'type' => 10,  // 7 Minimo de Gestión
            'calcule_type' => 5, // 11 Tipo 3
            'name' => 'Porcentaje de sectores con acompañamiento para la reconversión hacia sistemas sostenibles de producción',
            'abbreviated_name' => 'PSA',
            'definition' =>'Es la relación entre el número de sectores acompañados por la Corporación Autónoma Regional en la reconversión hacia sistemas sostenibles de producción, y la meta de sectores priorizados por la autoridad ambiental para dicho acompañamiento.',
            'url' => '',
            'unit_id' => 78, // 18	"Documento" 19	"Unidad" 20	"Metros lineales" 21	"Metros cuadrados" 22	"Metros cubicos" 23	"Hectárea"
            'result_name' => 'Porcentaje de sectores con acompañamiento en la reconversión hacia sistemas sostenibles  de producción',
			'complementary_result'=>'Ejecución presupuestal de acciones relacionadas con el acompañamiento en la reconversión hacia sistemas sostenibles  de producción, en el tiempo t',
            'complementary_in' => true,
            'category_type' => 1159,
            'group_id' => 1,
            'geom' => 1,
            'label' => 'Nro. Sectores de acompañamiento'
        ]);

        $idIndicador3_7 = DB::getPdo()->lastInsertId();
		
        //**************************************************/
        // Instruccion para insertar categoría           ***/
        //**************************************************/ 
		
		DB::table('variables')->insert([
			'category_name' => 'Acompañamiento en la reconversión hacia sistemas sostenibles  de producción',
			'numerator_name' => 'Número de sectores priorizados para acompañamiento en la reconversión hacia sistemas sostenibles de producción',
			'abbreviated_numerator' => 'SPA',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Sectores acompañados en la reconversión hacia sistemas sostenibles de producción',
			'abbreviated_denominator' => 'SAP',
			'denominator_in' => 27, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador3_7,
        ]);

        //**************************************************/
        // Instruccion para insertar otras variables     ***/
        //**************************************************/ 

        DB::table('other_data')->insert([
            'variable_name' => 'Temática',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador3_7
		]);
		
        DB::table('other_data')->insert([
            'variable_name' => 'Sectores',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador3_7
		]);
        
		//**************************************************/
        // Instruccion para insertar un indicador tipo 3 ***/
        //**************************************************/ 
        DB::table('indicators')->insert([
            'type' => 10,  // 7 Minimo de Gestión
            'calcule_type' => 5, // 11 Tipo 3
            'name' => 'Porcentaje de Procesos Sancionatorios Resueltos',
            'abbreviated_name' => 'PPSR',
            'definition' =>'Es la relación entre el número de actos administrativos de determinación de la responsabilidad o de cesación de procedimiento expedidos, con respecto al número de actos administrativos de iniciación de procedimiento sancionatorio expedidos por la autoridad ambiental.',
            'url' => '',
            'unit_id' => 58, // 18	"Documento" 19	"Unidad" 20	"Metros lineales" 21	"Metros cuadrados" 22	"Metros cubicos" 23	"Hectárea"
            'result_name' => 'Porcentaje de Procesos Sancionatorios Resueltos, en el tiempo t',
            'category_type' => 1158,
            'group_id' => 1,
            'geom' => 1,
            'label' => 'Nro. De procesos sancionatorios resueltos'
        ]);

        $idIndicador3_8 = DB::getPdo()->lastInsertId();
		
        //**************************************************/
        // Instruccion para insertar categoría           ***/
        //**************************************************/
		
		DB::table('variables')->insert([
			'category_name' => 'Actos administrativos de determinación de la responsabilidad',
			'numerator_name' => 'Número de actos administrativos de determinación de la responsabilidad expedidos, en el tiempo t',
			'abbreviated_numerator' => 'ADRt',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Número de actos administrativos de iniciación de procedimiento sancionatorio expedidos',
			'abbreviated_denominator' => 'AIPS',
			'denominator_in' => 28, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador3_8,
        ]);

		DB::table('variables')->insert([
			'category_name' => 'Actos administrativos de cesación de procedimiento',
			'numerator_name' => 'Número de actos administrativos de cesación de procedimiento expedidos, en el tiempo t',
			'abbreviated_numerator' => 'ACPt',
			'numerator_in' => 28, // 15 Formulacion - 16 Seguimiento
			'denominator_name' => 'Número de actos administrativos de iniciación de procedimiento sancionatorio expedidos',
			'abbreviated_denominator' => 'AIPS',
			'denominator_in' => 28, // 15 Formulacion - 16 Seguimiento		
			'indicator_id' => $idIndicador3_8,
        ]);

        //**************************************************/
        // Instruccion para insertar un indicador tipo 5 ***/
        //**************************************************/ 
        
        DB::table('indicators')->insert([
            'type' => 10,  // 7 Minimo de Gestión
            'calcule_type' => 7, // 13 Tipo 5
            'name' => 'Implementación de acciones en manejo integrado de zonas costeras',
            'abbreviated_name' => 'ETAMIZC',
            'definition' =>'Es el porcentaje de avance en la ejecución, por parte de la corporación autónoma regional, de las acciones relacionadas con el manejo integrado de zonas costeras en el marco del Plan de Acción',
            'url' => '',
            'unit_id' => 32, //    18	"Documento" 19	"Unidad" 20	"Metros lineales" 21	"Metros cuadrados" 22	"Metros cubicos" 23	"Hectárea"
            'result_name' => 'Porcentaje de ejecución total de acciones en manejo integrado de zonas costeras, en el tiempo t',
            'complementary_result' => '',
            'category_type' => 1159,
            'group_id' => 1,
            'geom' => 1,
            'label' => 'Nro de acciones en manejo integrado'
        ]); 
        
		$idIndicador_1= DB::getPdo()->lastInsertId();
		
		DB::table('variables')->insert([
            'name_weighing' => 'Ponderador de la acción i de manejo integrado de zonas costeras',
            'abbreviated_weighing' => 'a',
            'weighing_in' => 28, // 15 Formulacion - 16 Seguimiento            
            'indicator_id' => $idIndicador_1
        ]);
		
        //**************************************************/
        // Instruccion para insertar otras variables     ***/
        //**************************************************/ 

        DB::table('other_data')->insert([
            'variable_name' => 'Temática',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador_1
        ]);		

        DB::table('other_data')->insert([
            'variable_name' => 'Observaciones',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador_1
        ]);	
		
		//**************************************************/
        // Instruccion para insertar un indicador tipo 5 ***/
        //**************************************************/ 
        DB::table('indicators')->insert([
            'type' => 10,  // 7 Minimo de Gestión
            'calcule_type' => 7, // 13 Tipo 5
            'name' => 'Porcentaje de ejecución de acciones en Gestión Ambiental Urbana',
            'abbreviated_name' => 'ETAGAU',
            'definition' =>'Es el porcentaje de avance en la ejecución, por parte de la corporación autónoma regional, de las acciones relacionadas con la gestión ambiental urbana en el marco del Plan de Acción',
            'url' => '',
            'unit_id' => 32, //    18	"Documento" 19	"Unidad" 20	"Metros lineales" 21	"Metros cuadrados" 22	"Metros cubicos" 23	"Hectárea"
            'result_name' => 'Porcentaje de ejecución total de acciones en gestión ambiental urbana, en el tiempo t',
            'complementary_result' => 'Ejecución presupuestal de acciones relacionadas con la gestión ambiental urbana, en el año t',
            'category_type' => 1159,
            'group_id' => 1,
            'geom' => 1,
            'label' => 'Nro de acciones de gestión ambiental urbana'
        ]);   
        
		$idIndicador_2= DB::getPdo()->lastInsertId();
		
		DB::table('variables')->insert([
            'name_weighing' => 'Ponderador de EAGAU',
            'abbreviated_weighing' => 'a',
            'weighing_in' => 28, // 15 Formulacion - 16 Seguimiento            
            'indicator_id' => $idIndicador_2
        ]);
		
        //**************************************************/
        // Instruccion para insertar otras variables     ***/
        //**************************************************/ 

        DB::table('other_data')->insert([
            'variable_name' => 'Temática',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador_2
        ]);

        DB::table('other_data')->insert([
            'variable_name' => 'Observaciones',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador_2
        ]);

		//**************************************************/
        // Instruccion para insertar un indicador tipo 5 ***/
        //**************************************************/ 
        DB::table('indicators')->insert([
            'type' => 10,  // 7 Minimo de Gestión
            'calcule_type' => 7, // 13 Tipo 5
            'name' => 'Implementación del Programa Regional de Negocios Verdes por la autoridad ambiental',
            'abbreviated_name' => 'IPRVAA',
            'definition' =>'Es el porcentaje de avance en la implementación de las acciones a cargo de la Corporación en el marco del Programa Regional de Negocios Verdes',
            'url' => '',
            'unit_id' => 32, //    18	"Documento" 19	"Unidad" 20	"Metros lineales" 21	"Metros cuadrados" 22	"Metros cubicos" 23	"Hectárea"
            'result_name' => 'Implementación del Programa Regional de Negocios Verdes por la autoridad ambiental, en el tiempo t',
            'complementary_result' => 'Ejecución presupuestal de la acción i asociada al Programa Regional de Negocios Verdes por la autoridad ambiental, en el año t',
            'category_type' => 1159,
            'group_id' => 1,
            'geom' => 1,
            'label' => 'Nro. De negocios vedes implementados'
        ]);

		$idIndicador_3= DB::getPdo()->lastInsertId();
		
		DB::table('variables')->insert([
            'name_weighing' => 'Ponderador de EAPRNV',
            'abbreviated_weighing' => 'a',
            'weighing_in' => 28, // 15 Formulacion - 16 Seguimiento
            'indicator_id' => $idIndicador_3
        ]);
		
        //**************************************************/
        // Instruccion para insertar otras variables     ***/
        //**************************************************/ 

        DB::table('other_data')->insert([
            'variable_name' => 'Temática',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador_3
        ]);

		//**************************************************/
        // Instruccion para insertar un indicador tipo 5 ***/
        //**************************************************/ 
        DB::table('indicators')->insert([
            'type' => 10,  // 7 Minimo de Gestión
            'calcule_type' => 7, // 13 Tipo 5
            'name' => 'Ejecución de Acciones en Educación Ambiental',
            'abbreviated_name' => 'ETAEA',
            'definition' =>'Es el porcentaje de avance en la implementación, por parte de la corporación autónoma regional, de las acciones relacionadas con la Educación Ambiental en el marco del Plan de Acción',
            'url' => '',
            'unit_id' => 32, //    18	"Documento" 19	"Unidad" 20	"Metros lineales" 21	"Metros cuadrados" 22	"Metros cubicos" 23	"Hectárea"
            'result_name' => 'Ejecución total de acciones en Educación Ambiental, en el tiempo t',
            'complementary_result' => 'Ejecución presupuestal de acciones en Educación Ambiental, en el año t',
            'category_type' => 1159,
            'group_id' => 1,
            'geom' => 1,
            'label' => 'Nro de acciones en educación ambiental'
        ]);    
    
		$idIndicador_4= DB::getPdo()->lastInsertId();
		
		DB::table('variables')->insert([
            'name_weighing' => 'Ponderador de EAEA',
            'abbreviated_weighing' => 'a',
            'weighing_in' => 28, // 15 Formulacion - 16 Seguimiento            
            'indicator_id' => $idIndicador_4
        ]);
		
        //**************************************************/
        // Instruccion para insertar otras variables     ***/
        //**************************************************/ 

        DB::table('other_data')->insert([
            'variable_name' => 'Observaciones',
            'type' => 20, // 25 Numero - 26 Texto
            'value' => '25',
            'indicator_id' => $idIndicador_4
        ]);

        DB::table('indicators')->insert([
            'type' => 10,  // 7 Minimo de Gestión
            'calcule_type' => 5, // 9 Tipo 1
            'name' => 'Tiempo promedio de trámite para la resolución de autorizaciones ambientales otorgadas por la corporación',
            'abbreviated_name' => 'Tx',
            'definition' =>'El tiempo promedio de trámite o procedimiento para la resolución de autorizaciones ambientales otorgadas por las autoridades ambientales es el resultado de la suma de los tiempos de cada trámite (licencias ambientales, concesiones de agua, permisos de aprovechamiento forestal, permisos de emisiones atmosféricas y permisos de vertimiento de agua), dividido en el número de trámites resueltos por la autoridad ambiental. Se entiende por tiempo efectivo, el periodo de tiempo en días que dura el proceso en manos de la Corporación, que resulta de descontar del tiempo total desde la radicación de la solicitud hasta la manifestación final de la autoridad ambiental, descontado el tiempo utilizado por el peticionario para atender los actos de trámites expedidos en el proceso.',
            'url' => '',
            'unit_id' => 40, //    18	"Documento" 19	"Unidad" 20	"Metros lineales" 21	"Metros cuadrados" 22	"Metros cubicos" 23	"Hectárea"
            'result_name' => 'Tiempo promedio efectivo de duración del trámite x',            
            'category_type' => 1158,
            'group_id' => 1,
            'geom' => 1,
            'label' => 'No Aplica'
        ]);

        $idIndicador_27 = DB::getPdo()->lastInsertId();

        DB::table('variables')->insert([
			'category_name' => 'Licencias ambientales',
            'numerator_name' => 'Tiempo efectivo de duración del trámite de otorgamiento de licencias ambientales (número de días)',
            'abbreviated_numerator' => 'TLA',
            'numerator_in' => 28,  // 15 Formulacion - 16 Seguimiento
            'denominator_name' => 'Número de solicitudes de licencia ambiental atendidos',
            'abbreviated_denominator' => 'NLA',
            'denominator_in' => 28, // 15 Formulacion - 16 Seguimiento
            'indicator_id' => $idIndicador_27
        ]);

        DB::table('variables')->insert([
			'category_name' => 'Concesiones de agua',
            'numerator_name' => 'Tiempo efectivo de duración del trámite de otorgamiento de conseciones de agua (número de días)',
            'abbreviated_numerator' => 'TCAS',
            'numerator_in' => 28,  // 15 Formulacion - 16 Seguimiento
            'denominator_name' => 'Número de solicitudes de concesión de agua recibidas en el periodo',
            'abbreviated_denominator' => 'NCAS',
            'denominator_in' => 28, // 15 Formulacion - 16 Seguimiento
            'indicator_id' => $idIndicador_27
        ]);
		
        DB::table('variables')->insert([
			'category_name' => 'Permisos de vertimiento de agua',
            'numerator_name' => ' Tiempo efectivo de duración del trámite de otorgamiento de un permiso de vertimiento (número de días)',
            'abbreviated_numerator' => 'TPV',
            'numerator_in' => 28,  // 15 Formulacion - 16 Seguimiento
            'denominator_name' => 'Número de solicitudes de permisos de vertimiento recibidas en el periodo.',
            'abbreviated_denominator' => 'NPV',
            'denominator_in' => 28, // 15 Formulacion - 16 Seguimiento
            'indicator_id' => $idIndicador_27
        ]);
		
        DB::table('variables')->insert([
			'category_name' => 'Permisos de aprovechamiento forestal',
            'numerator_name' => 'Tiempo efectivo de duración del trámite de otorgamiento de un permiso de emisión (número de días)',
            'abbreviated_numerator' => 'TAF',
            'numerator_in' => 28,  // 15 Formulacion - 16 Seguimiento
            'denominator_name' => 'Número de solicitudes de permisos de aprovechamiento forestal recibidas en el periodo',
            'abbreviated_denominator' => 'NAF',
            'denominator_in' => 28, // 15 Formulacion - 16 Seguimiento
            'indicator_id' => $idIndicador_27
        ]);

        DB::table('variables')->insert([
			'category_name' => 'Permisos de emisiones atmosféricas',
            'numerator_name' => 'Tiempo efectivo de duración del trámite de otorgamiento de un permiso de emisión (número de días)',
            'abbreviated_numerator' => 'TPE',
            'numerator_in' => 28,  // 15 Formulacion - 16 Seguimiento
            'denominator_name' => ' Número de solicitudes de permisos de emisiones atmosféricas recibidas en el periodo',
            'abbreviated_denominator' => 'NPE',
            'denominator_in' => 28, // 15 Formulacion - 16 Seguimiento
            'indicator_id' => $idIndicador_27
        ]);

         ///////////////////////  Indicadores Ambientales Efectividad  //////////////////
         DB::table('indicators')->insert([
            'type' => 12,  // Tasa de deforestacion 
            'calcule_type' => 6, 
            'name' => 'Tasa Promedio Anual de deforestación',
            'abbreviated_name' => 'TPADEF',
            'definition' =>'Es la tasa promedio de deforestacion y bosques medido en hectareas',
            'url' => 'https://services5.arcgis.com/QMDRhiG7NdW8OZJm/arcgis/rest/services/JurisdiccionCAR/FeatureServer/1',
            'unit_id' => 47, //    18	"Documento" 19	"Unidad" 20	"Metros lineales" 21	"Metros cuadrados" 22	"Metros cubicos" 23	"Hectárea"
            'group_id' => 1,
            'geom' => 0,
            'label' => ''
        ]);    
    
		$idIndicador_28= DB::getPdo()->lastInsertId();
        
        DB::table('variables')->insert([
			'category_name' => 'Indicadores Efectividad',
            'indicator_id' => $idIndicador_28
        ]);

        DB::table('indicators')->insert([
            'type' => 14, 
            'calcule_type' => 6, 
            'name' => 'Índice de Calidad del Agua ',
            'abbreviated_name' => 'ICAGUA',
            'definition' =>'Índice de Calidad del Agua ',
            'url' => 'https://services5.arcgis.com/QMDRhiG7NdW8OZJm/arcgis/rest/services/JurisdiccionCAR/FeatureServer/2',
            'unit_id' => 47, //    18	"Documento" 19	"Unidad" 20	"Metros lineales" 21	"Metros cuadrados" 22	"Metros cubicos" 23	"Hectárea"
            'group_id' => 1,
            'geom' => 0,
            'label' => ''
        ]);    
    
		$idIndicador_29= DB::getPdo()->lastInsertId();
        
        DB::table('variables')->insert([
			'category_name' => 'Indicadores Efectividad',
            'indicator_id' => $idIndicador_29
        ]);

        DB::table('indicators')->insert([
            'type' => 15,  
            'calcule_type' => 6, 
            'name' => 'Índice del Uso del Agua',
            'abbreviated_name' => 'IUAGUA',
            'definition' =>'Índice del Uso del Agua',
            'url' => 'https://services5.arcgis.com/QMDRhiG7NdW8OZJm/arcgis/rest/services/JurisdiccionCAR/FeatureServer/3',
            'unit_id' => 47, //47	"Hectárea"
            'group_id' => 1,
            'geom' => 0,
            'label' => ''
        ]);    
    
		$idIndicador_30= DB::getPdo()->lastInsertId();
        
        DB::table('variables')->insert([
			'category_name' => 'Indicadores Efectividad',
            'indicator_id' => $idIndicador_30
        ]);

        DB::table('indicators')->insert([
            'type' => 16,  
            'calcule_type' => 6, 
            'name' => 'Oferta hídrica total superficial',
            'abbreviated_name' => 'OHTSUP',
            'definition' =>'Oferta hídrica total superficial',
            'url' => 'https://services5.arcgis.com/QMDRhiG7NdW8OZJm/arcgis/rest/services/JurisdiccionCAR/FeatureServer/4',
            'unit_id' => 47, //47	"Hectárea"
            'group_id' => 1,
            'geom' => 0,
            'label' => ''
        ]);    
    
		$idIndicador_31= DB::getPdo()->lastInsertId();
        
        DB::table('variables')->insert([
			'category_name' => 'Indicadores Efectividad', // Categoria que se filtra en el modulo de reportes de efectividad
            'indicator_id' => $idIndicador_31
        ]);

        DB::table('indicators')->insert([
            'type' => 13,  
            'calcule_type' => 6, 
            'name' => 'Hectáreas de Ecosistemas',
            'abbreviated_name' => 'HEAAMB',
            'definition' =>'Hectáreas de Ecosistemas',
            'url' => 'https://services5.arcgis.com/QMDRhiG7NdW8OZJm/arcgis/rest/services/JurisdiccionCAR/FeatureServer/5', //// 
            'unit_id' => 47, //47	"Hectárea"
            'group_id' => 1,
            'geom' => 0,
            'label' => ''
        ]);    
    
		$idIndicador_32= DB::getPdo()->lastInsertId();
        
        DB::table('variables')->insert([
			'category_name' => 'Indicadores Efectividad', // Categoria que se filtra en el modulo de reportes de efectividad
            'indicator_id' => $idIndicador_32
        ]);
    }
}
