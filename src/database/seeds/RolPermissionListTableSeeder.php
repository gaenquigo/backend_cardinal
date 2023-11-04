<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;
use App\Models\Permission_Rol;

/**
 * Class RolPermissionListTableSeeder
 */
class RolPermissionListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission_Rol::truncate();
        Permission_Rol::unguard();

        //Admin
        for ($i = 1; $i < Permission::all()->count() + 1; $i++) {
            Permission_Rol::create([
                'rol_id' => 1,
                'permission_id' => $i,
            ]);
        }

        //Grupo interno de trabajo
        DB::table('permission_rol')->insert([
            'rol_id' => 2,
            'permission_id' => 26
            ]);
             
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 21
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 22
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 16
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 17
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 27
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 28
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 29
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 30
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 31
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 32
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 36
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 37
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 41
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 42
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 46
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 47
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 51
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 52
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 56
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 57
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 66
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 67
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 68
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 69
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 70
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 73
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 71
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 72
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 74
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 75
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 77
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 76
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 81
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 82
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 83
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 84
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 85
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 86
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 87
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 91
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 92
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 93
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 94
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 95
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 96
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 97
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 98
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 99
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 100
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 101
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 102
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 103
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 104
         ]);
          
       DB::table('permission_rol')->insert([
         'rol_id' => 2,
         'permission_id' => 105
         ]);


         //Planeacion 
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 26
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 27
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 28
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 29
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 30
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 21
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 22
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 23
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 24
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 25
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 20
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 19
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 18
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 17
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 16
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 45
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 44
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 43
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 42
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 41
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 40
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 39
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 38
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 37
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 36
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 35
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 34
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 33
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 32
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 31
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 46
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 47
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 48
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 49
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 50
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 51
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 52
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 53
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 54
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 55
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 56
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 57
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 67
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 66
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 92
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 91
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 93
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 94
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 95
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 104
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 105
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 98
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 58
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 59
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 60
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 71
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 72
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 76
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 77
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 81
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 82
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 86
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 87
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 96
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 99
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 100
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 103
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 101
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 3,
            'permission_id' => 102
            ]);

            
        //Rol Asesor SINA

        DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 1
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 2
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 6
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 7
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 11
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 12
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 16
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 17
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 22
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 21
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 26
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 27
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 31
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 32
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 36
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 37
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 41
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 42
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 46
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 47
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 51
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 52
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 56
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 57
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 61
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 62
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 66
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 67
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 71
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 72
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 76
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 77
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 81
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 82
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 86
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 87
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 88
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 89
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 90
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 92
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 93
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 94
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 95
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 96
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 97
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 98
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 99
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 100
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 101
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 102
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 104
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 103
            ]);
             
         DB::table('permission_rol')->insert([
            'rol_id' => 5,
            'permission_id' => 105
            ]);
  
           }
}
