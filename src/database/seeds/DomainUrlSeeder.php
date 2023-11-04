<?php

use Illuminate\Database\Seeder;

class DomainUrlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domains')->insert([
            'domain' => 'URL',
            'name' => 'Configuracion de urls'
        ]);

        $id = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'father_id' => $id,
            'name' => 'urlHistory',
            'description' => 'https://minambiente-sipgacar.s3.amazonaws.com'
        ]);

        DB::table('domains')->insert([
            'father_id' => $id,
            'name' => 'urlpentaho',
            'description' => 'http://ec2-13-58-72-65.us-east-2.compute.amazonaws.com:8080/pentaho/api/repos/%3Ahome%3Aadmin%3A'
        ]);

        DB::table('domains')->insert([
            'father_id' => $id,
            'name' => 'useridPentaho',
            'description' => 'admin'
        ]);

        DB::table('domains')->insert([
            'father_id' => $id,
            'name' => 'passwordPentaho',
            'description' => 'S1pgaMin2020/*'
        ]);
    }
}
