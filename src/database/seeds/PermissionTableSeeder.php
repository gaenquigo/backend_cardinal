<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Rol;

/**
 * Class PermissionTableSeeder
 */
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::truncate();
        Permission::unguard();


        $crud = [
            'listar',
            'ver',
            'crear',
            'editar',
            'borrar'
        ];
        $modules = [
            'usuarios',
            'roles',
            'grupos',
            'fuentesDeFinanciacion',
            'planFinanciero',
            'pais',
            'lineasEstrategicas',
            'programas',
            'proyectos',
            'objetivos',
            'actividades',
            'indicadores',
            'dominio',
            'costos',
            'seguimiento_actividad',
            'administrador_geografico',
            'rezagos',
            'sugerencias'
        ];
        foreach ($modules as $module) {
            foreach ($crud as $item) {
                Permission::create([
                    'name' => "{$module}.{$item}",
                    'module' => $module
                ]);
            }
        }
        Permission::create([
            'name' => "pais.aprobar",
            'module' => 'pais'
        ]);
        Permission::create([
            'name' => "pais.novedad",
            'module' => 'pais'
        ]);
        Permission::create([
            'name' => "auditoria.listar",
            'module' => 'auditoria'
        ]);

        Permission::create([
            'name' => "detalleAuditoria.listar",
            'module' => 'auditoria'
        ]);

        Permission::create([
            'name' => "ejecucion.listar",
            'module' => 'ejecucion_pai'
        ]);

        Permission::create([
            'name' => "ingreso.edit",
            'module' => 'ejecucion_pai'
        ]);

 
        Permission::create([
            'name' => "gastos.edit",
            'module' => 'ejecucion_pai',
        ]);

        Permission::create([
            'name' => "gastos.ver",
            'module' => 'ejecucion_pai',
        ]);

        Permission::create([
            'name' => "seguimiento_actividad.pagos",
            'module' => 'seguimiento_actividad'
        ]);

        Permission::create([
            'name' => "seguimiento_actividad.avance",
            'module' => 'seguimiento_actividad'
        ]);

        Permission::create([
            'name' => "novedadGastos.edit",
            'module' => 'ejecucion_pai',
        ]);

        Permission::create([
            'name' => "gastosEditar.edit",
            'module' => 'ejecucion_pai',
        ]);

        Permission::create([
            'name' => "aprobarInforme.crear",
            'module' => 'ejecucion_pai',
        ]);

        Permission::create([
            'name' => "avance_ejecucion_financiera.ver",
            'module' => 'reportes',
        ]);

        Permission::create([
            'name' => "reporte_fca.ver",
            'module' => 'reportes',
        ]);
    }
}
