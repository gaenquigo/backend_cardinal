<?php

use Illuminate\Database\Seeder;

class DomainNationalPolicyIndicatorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domains')->insert([
            'name' => 'Indicadores de política nacional',
            'domain' => 'IndicadorDePoliticaNacional'
        ]);

        $fatherID = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'No aplica',
            
        ]);        

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Política Ambiental para la Gestión Integral de Residuos o Desechos Peligrosos',
            
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Política de Prevención y Control de la Contaminación del Aire'
           
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Política Gestión Ambiental Urbana'
            
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Política nacional ambiental para el desarrollo sostenible de los espacios oceánicos y las zonas costeras e insulares de Colombia'
            
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Política Nacional de Cambio Climatico'
           
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Política Nacional de Educación Ambiental - SINA'
            
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Política Nacional Gestión Integral de Residuos de Aparatos Eléctricos y Electrónicos'
           
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Política Nacional para Humedales Interiores de Colombia '
         
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Política Nacional para la gestión integral de la biodiversidad y sus servicios ecosistémicos'
         
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Política Nacional para la Gestión Integral de Residuos'
            
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Política Nacional para la Gestión Integral del Recurso Hídrico'
           
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Política Nacional Producción  y Consumo Sostenible'
            
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Política para la Gestión Sostenible del Suelo'
        
        ]);
    }
}
