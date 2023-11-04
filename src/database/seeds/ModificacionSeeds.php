<?php

use Illuminate\Database\Seeder;

class ModificacionSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('financing_sources')->where([
            ['group_id', '=', '18'],
            ['code', '=', '1'],
        ])->update(['code' => '1.1.2.2.1.1.4.1']);
        DB::table('financing_sources')->where([
            ['group_id', '=', '18'],
            ['code', '=', '02'],
        ])->update(['code' => '1.2.1.2']);	
        DB::table('financing_sources')->where([
            ['group_id', '=', '21'],
            ['name', '=', 'Otros Convenios'],
        ])->update(['code' => '1.2.5.1.3']);
        DB::table('financing_sources')->where([
            ['group_id', '=', '21'],
            ['name', '=', 'Tasa por el uso del agua (vigencia anterior)'],
        ])->update(['code' => '1.1.2.2.1.1.2.2']);
		DB::table('financing_sources')->where([
            ['group_id', '=', '21'],
            ['name', '=', 'Movilización Material Vegetal'],
        ])->update(['code' => '1.3']);
        DB::table('financing_sources')->where([
            ['group_id', '=', '21'],
            ['name', '=', 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)'],
        ])->update(['code' => '1.1.2.2.2.1.1']);
		DB::table('financing_sources')->where([
            ['group_id', '=', '21'],
            ['name', '=', 'Multas ambientales (vigencia actual)'],
        ])->update(['code' => '1.1.2.3.1.1.1']);
        DB::table('financing_sources')->where([
            ['group_id', '=', '21'],
            ['name', '=', 'Multas ambientales (vigencia anterior)'],
        ])->update(['code' => '1.1.2.3.1.1.2']);
				DB::table('financing_sources')->where([
            ['group_id', '=', '21'],
            ['name', '=', 'Seguimiento a licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)'],
        ])->update(['code' => '1.1.2.2.2.2.1']);
        DB::table('financing_sources')->where([
            ['group_id', '=', '21'],
            ['name', '=', 'Recuperacion Incapacidad y Licencia de Maternidad '],
        ])->update(['code' => '1.4']);
		DB::table('financing_sources')->where([
            ['group_id', '=', '21'],
            ['name', '=', 'Rendimientos Financieros Sector Electrico'],
        ])->update(['code' => '1.2.2.2.1.9']);
		DB::table('financing_sources')->where([
            ['group_id', '=', '21'],
            ['name', '=', 'Rendimientos financieros Tasa retributiva'],
        ])->update(['code' => '1.2.2.2.1.3.1']);
		DB::table('financing_sources')->where([
            ['group_id', '=', '21'],
            ['name', '=', 'Rendimientos financiero Multas, sanciones e intereses de mora'],
        ])->update(['code' => '1.2.2.2.1.4']);
		DB::table('financing_sources')->where([
            ['group_id', '=', '21'],
            ['name', '=', 'Rendimientos Finanieros Carbon'],
        ])->update(['code' => '1.2.2.2.1.10']);
		DB::table('financing_sources')->where([
            ['group_id', '=', '21'],
            ['name', '=', 'Rendimientos Financieros Sobretasa Ambiental'],
        ])->update(['code' => '1.2.2.2.1.11']);
		DB::table('financing_sources')->where([
            ['group_id', '=', '21'],
            ['name', '=', 'Rendimientos financierosTasa por el uso del agua'],
        ])->update(['code' => '1.2.2.2.1.3.2']);
		DB::table('financing_sources')->where([
            ['group_id', '=', '21'],
            ['name', '=', 'Recuperación de carteraTasa retributiva'],
        ])->update(['code' => '1.2.6.3.1']);
		DB::table('financing_sources')->where([
            ['group_id', '=', '21'],
            ['name', '=', 'Recuperación de cartera Multas, sanciones e intereses de mora'],
        ])->update(['code' => '1.2.6.4']);
		DB::table('financing_sources')->where([
            ['group_id', '=', '21'],
            ['name', '=', 'Recuperación de cartera Tasa por el uso del agua'],
        ])->update(['code' => '1.2.6.3.2']);
		
    }
}