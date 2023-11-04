<?php

use Illuminate\Database\Seeder;

class AjusteDominios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domains')
                ->where('name', 'urlpentaho')
                ->update(['father_id' => 1196]);
    }
}
