<?php

use Illuminate\Database\Seeder;

class DomainUnityObjetivePAISeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domains')->insert([
            'domain' => 'Unidad',
            'name' => 'Unidad de medida objetivo'
        ]);

        $idUnidad = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Área'
        ]);		
		
		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'µg/m3'
        ]);

		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Acciones'
        ]);		
		
		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Actos Administrativos'
        ]);		
		
		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Campañas'
        ]);

		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Capacitaciones'
        ]);		
		
		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'CAV'
        ]);

        DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Comités'
        ]);		
		
		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Corriente hídrica'
        ]);

		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Cuenca'
        ]);		
		
		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Días'
        ]);

		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Divulgaciones'
        ]);

		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Documentos'
        ]);		
		
		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Especies'
        ]);

		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Estaciones'
        ]);

		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Estudios'
        ]);		
		
		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Familias'
        ]);

        DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Hectáreas'
        ]);

		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Hectáreas de cuerpos de agua'
        ]);

		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Kilogramo'
        ]);		
		
		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Kilómetros'
        ]);

        DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Kilómetros cuadrados'
        ]);

        DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Longitud'
        ]);

		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Mapa'
        ]);

        DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Metros lineales'
        ]);

        DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Metros cuadrados'
        ]);

        DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Metros cúbicos'
        ]);

		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Municipios'
        ]);	
		
		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Número'
        ]);
		
		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Número de árboles'
        ]);

		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Número de centros de atención y valoración'
        ]);

		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Número de documentos'
        ]);		
		
		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Número de esquemas de pago'
        ]);

		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Número de Fuentes Hídricas'
        ]);

		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Número de Personas'
        ]);		
		
		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Obras'
        ]);

		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Operativos'
        ]);

		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Organizaciones'
        ]);		
		
		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Piezas publicitarias'
        ]);	
		
		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Plan'
        ]);		
		
		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Plan de Manejo'
        ]);

        DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Porcentaje'
        ]);		
	
		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Predios'
        ]);			
		
		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Programas'
        ]);	
		
		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Protocolo'
        ]);	
		
		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Proyecto'
        ]);

        DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Redes'
        ]);		
		
		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Registros'
        ]);	
		
		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Sectores'
        ]);

        DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Sedes'
        ]);		
		
		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Sistemas'
        ]);	
		
		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Socializaciones'
        ]);

		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Talleres'
        ]);	
		
		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Toneladas'
        ]);		
        
		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Unidad'
        ]);
		
		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Usuarios'
        ]);	
		
		DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Visitas'
        ]);

        DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Vivero'
        ]);

        DB::table('domains')->insert([
            'father_id' => $idUnidad,
            'name' => 'Volúmen'
        ]);
    }
}
