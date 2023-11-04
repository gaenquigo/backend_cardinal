<?php

use App\Models\Rol;
use App\Models\User;
use App\Models\Permission;
use App\Models\Permission_Rol;
use Illuminate\Database\Seeder;

/**
 * Class RolTableSeeder
 */
class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        User::unguard();

        Rol::truncate();
        Rol::unguard();

        DB::table('rols')->insert([
            'name' => 'Administrador MADS',
            'description' => 'Este rol es el encargado de realizar las respectivas configuraciones en el Sistema.'
        ]);

         DB::table('rols')->insert([
            'name' => 'Grupo Interno de Trabajo',
            'description' =>  'Es el rol encargado de registrar la información de avance de metas físicas y financieras, la información de ingresos y gastos, la información de indicadores de gestión, la información de indicadores ambientales y proyectos asociados a dichos indicadores ambientales.' 
         ]);

         DB::table('rols')->insert([
             'name' => 'Planeación',
             'description' =>  'Rol encargado de realizar la configuración del PAI, indicadores de gestión propios de las CARs y aprobar el registro de información realizada por las CARs antes de ser reportada al MADS.'
         ]);

         DB::table('rols')->insert([
               'name' => 'Fondo de Compensación Ambiental (FCA)',
               'description' =>  'Rol responsable de consultar los reportes FCA y al reporte de Gastos.' 
               ]);

         DB::table('rols')->insert([
            'name' => 'Rol Asesor SINA',
            'description' =>  'Encargado de revisar y realizar correcciones, observaciones y recomendaciones a la información registrada por las CARs.' 
            ]);

 }
}
