<?php

use App\Models\Domain;
use Illuminate\Database\Seeder;

class DomainOCDESeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domains')->insert([
            'domain' => 'OCDECategory',
            'name' => 'Lista de categorias OCDE'
        ]);

        $ocdeCategoryID = DB::getPdo()->lastInsertId();

        Domain::create([
            'name' => 'CAPA',
            'father_id' => $ocdeCategoryID
        ]);

        Domain::create([
            'name' => 'CREMA',
            'father_id' => $ocdeCategoryID
        ]);

        Domain::create([
            'name' => 'Otras actividades de gestión ambiental',
            'father_id' => $ocdeCategoryID,
            'description' => '17'
        ]);

        DB::table('domains')->insert([
            'domain' => 'OCDEIndicator',
            'name' => 'Lista de categorias OCDE'
        ]);

        $ocdeIndicatorID = DB::getPdo()->lastInsertId();

        Domain::create([
            'name' => 'CAPA-1) Protección de la atmosfera y el clima',
            'father_id' => $ocdeIndicatorID,
            'description' => '1'
        ]);

        Domain::create([
            'name' => 'CAPA-2) Gestión de Aguas residuales',
            'father_id' => $ocdeIndicatorID,
            'description' => '2'
        ]);

        Domain::create([
            'name' => 'CAPA-3) Gestión de residuos',
            'father_id' => $ocdeIndicatorID,
            'description' => '3'
        ]);

        Domain::create([
            'name' => 'CAPA-4) Protección y recuperación del suelo, aguas subterráneas y superficiales',
            'father_id' => $ocdeIndicatorID,
            'description' => '4'
        ]);

        Domain::create([
            'name' => 'CAPA-5) Reducción del ruido',
            'father_id' => $ocdeIndicatorID,
            'description' => '5'
        ]);

        Domain::create([
            'name' => 'CAPA-6) Protección de la biodiversidad y los paisajes',
            'father_id' => $ocdeIndicatorID,
            'description' => '6'
        ]);

        Domain::create([
            'name' => 'CAPA-7) Protección contra la radiación (excepto seguridad extrema)',
            'father_id' => $ocdeIndicatorID,
            'description' => '7'
        ]);

        Domain::create([
            'name' => 'CAPA-8) Investigación y desarrollo',
            'father_id' => $ocdeIndicatorID,
            'description' => '8'
        ]);

        Domain::create([
            'name' => 'CAPA-9) Otras actividades de protección del medio ambiente',
            'father_id' => $ocdeIndicatorID,
            'description' => '9'
        ]);

        Domain::create([
            'name' => 'CREMA-10) Gestión de recursos minerales y energéticos',
            'father_id' => $ocdeIndicatorID,
            'description' => '10'
        ]);

        Domain::create([
            'name' => 'CREMA-11) Gestión de recursos madereros',
            'father_id' => $ocdeIndicatorID,
            'description' => '11'
        ]);

        Domain::create([
            'name' => 'CREMA-12) Gestión de recursos acuáticos',
            'father_id' => $ocdeIndicatorID,
            'description' => '12'
        ]);

        Domain::create([
            'name' => 'CREMA-13) Gestión de otros recursos biológicos',
            'father_id' => $ocdeIndicatorID,
            'description' => '13'
        ]);

        Domain::create([
            'name' => 'CREMA-14) Gestión de recursos hídricos',
            'father_id' => $ocdeIndicatorID,
            'description' => '14'
        ]);

        Domain::create([
            'name' => 'CREMA-15) Actividades de investigación y desarrollo para la gestión de recurso',
            'father_id' => $ocdeIndicatorID,
            'description' => '15'
        ]);

        Domain::create([
            'name' => 'CREMA-16) Otras actividades de gestión de recursos',
            'father_id' => $ocdeIndicatorID,
            'description' => '16'
        ]);

    }
}
