<?php

use Illuminate\Database\Seeder;

class DomainDatesColletsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domains')->insert([
            'domain' => 'CON_RECAUDOS',
            'name' => 'Configuracion vigencia de Recaudos'
        ]);

        $idRecaudo = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'father_id' => $idRecaudo,
            'name' => 'PRIMER_SEMESTRE',
            'description' => '01-01,30-06,31-07'
        ]);

        DB::table('domains')->insert([
            'father_id' => $idRecaudo,
            'name' => 'SEGUNDO_SEMESTRE',
            'description' => '01-07,31-12,28-02'
        ]);        
    }
}
