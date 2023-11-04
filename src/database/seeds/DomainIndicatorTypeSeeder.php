<?php

use Illuminate\Database\Seeder;

class DomainIndicatorTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Indicadores - Tipo Indicador - Tipo Calculo
        DB::table('domains')->insert([
            'domain' => 'TipoIndicador',
            'name' => 'Tipo de Indicador '
        ]);

        $idTipoIndicador = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'domain' => 'propios',
            'father_id' => $idTipoIndicador,
            'name' => 'Propios'
        ]);

        DB::table('domains')->insert([
            'domain' => 'minimo_gestion',
            'father_id' => $idTipoIndicador,
            'name' => 'Mínimos de gestión'
        ]);

        DB::table('domains')->insert([
            'domain' => 'iedi',
            'father_id' => $idTipoIndicador,
            'name' => 'IEDI'
        ]);

        DB::table('domains')->insert([
            'domain' => 'tasa_pad',
            'father_id' => $idTipoIndicador,
            'name' => 'Tasa promedio anual de deforestación'
        ]);

        DB::table('domains')->insert([
            'domain' => 'hectareas_eaaj',
            'father_id' => $idTipoIndicador,
            'name' => 'Hectáreas de ecosistemas y áreas ambientales en jurisdicción de las CARs'
        ]);

        DB::table('domains')->insert([
            'domain' => 'indice_ca',
            'father_id' => $idTipoIndicador,
            'name' => 'Índice de calidad del agua'
        ]);

        DB::table('domains')->insert([
            'domain' => 'indice_ua',
            'father_id' => $idTipoIndicador,
            'name' => 'Índice del uso del agua'
        ]);

        DB::table('domains')->insert([
            'domain' => 'oferta_hts',
            'father_id' => $idTipoIndicador,
            'name' => 'Oferta Hídrica Total Superficial'
        ]);

        DB::table('domains')->insert([
            'domain' => 'oferta_htd',
            'name' => 'Oferta Hídrica Total Disponible'
        ]);
    
    }
}
