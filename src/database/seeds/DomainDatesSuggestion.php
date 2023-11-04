<?php

use Illuminate\Database\Seeder;

class DomainDatesSuggestion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domains')->insert([
            'domain' => 'CON_SUGGESTION',
            'name' => 'Configuracion vigencia de Suggestion'
        ]);

        $idRecaudo = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'father_id' => $idRecaudo,
            'name' => 'PRIMER_CORTE',
            'description' => '01-03'
        ]);

        DB::table('domains')->insert([
            'father_id' => $idRecaudo,
            'name' => 'SEGUNDO_CORTE',
            'description' => '01-08'
        ]);        
    }
}
