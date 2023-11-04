<?php

use Illuminate\Database\Seeder;

class DomainIndicatorCategoryType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domains')->insert([
            'domain' => 'TipoCategoria',
            'name' => 'Tipo de categoria de Indicadores'
        ]);

        $idTipoCategoria = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'father_id' => $idTipoCategoria,
            'name' => 'Para medir las acciones de planificación, ordenamiento y coordinación ambiental'
        ]);

        DB::table('domains')->insert([
            'father_id' => $idTipoCategoria,
            'name' => 'Para medir las acciones de administración, control y vigilancia del ambiente, sus recursos naturales renovables y ecosistemas estratégicos'
        ]);

        DB::table('domains')->insert([
            'father_id' => $idTipoCategoria,
            'name' => 'Para medir las acciones de protección ambiental y planificación del desarrollo sostenible'
        ]);
    }
}
