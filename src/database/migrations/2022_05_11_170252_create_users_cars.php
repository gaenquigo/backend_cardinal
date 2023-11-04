<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersCars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert([
            'name' => 'DorisCAS',
            'last_name' => 'DorisCAS',
            'type_document' => 'CEDULA',
            'document' => '12345',
            'email' => 'DorisCAS@test.com',
            'group_id' => 7,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'DorisCDA',
            'last_name' => 'DorisCDA',
            'type_document' => 'CEDULA',
            'document' => '12346',
            'email' => 'DorisCDA@test.com',
            'group_id' => 6,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        
		DB::table('users')->insert([
            'name' => 'DorisCDMB',
            'last_name' => 'DorisCDMB',
            'type_document' => 'CEDULA',
            'document' => '12347',
            'email' => 'DorisCDMB@test.com',
            'group_id' => 9,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'DorisCODECHOCO',
            'last_name' => 'DorisCODECHOCO',
            'type_document' => 'CEDULA',
            'document' => '12348',
            'email' => 'DorisCODECHOCO@test.com',
            'group_id' => 10,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'DorisCORALINA',
            'last_name' => 'DorisCORALINA',
            'type_document' => 'CEDULA',
            'document' => '12349',
            'email' => 'DorisCORALINA@test.com',
            'group_id' => 11,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'DorisCORMACARENA',
            'last_name' => 'DorisCORMACARENA',
            'type_document' => 'CEDULA',
            'document' => '12350',
            'email' => 'DorisCORMACARENA@test.com',
            'group_id' => 13,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'DorisCORPOAMAZONIA',
            'last_name' => 'DorisCORPOAMAZONIA',
            'type_document' => 'CEDULA',
            'document' => '12351',
            'email' => 'DorisCORPOAMAZONIA@test.com',
            'group_id' => 16,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'DorisCORPONOR',
            'last_name' => 'DorisCORPONOR',
            'type_document' => 'CEDULA',
            'document' => '12352',
            'email' => 'DorisCORPONOR@test.com',
            'group_id' => 25,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'AlexanderCARDER',
            'last_name' => 'AlexanderCARDER',
            'type_document' => 'CEDULA',
            'document' => '12353',
            'email' => 'AlexanderCARDER@test.com',
            'group_id' => 4,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'AlexanderCORANTIOQUIA',
            'last_name' => 'AlexanderCORANTIOQUIA',
            'type_document' => 'CEDULA',
            'document' => '12354',
            'email' => 'AlexanderCORANTIOQUIA@test.com',
            'group_id' => 12,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'AlexanderCORNARE',
            'last_name' => 'AlexanderCORNARE',
            'type_document' => 'CEDULA',
            'document' => '12355',
            'email' => 'AlexanderCORNARE@test.com',
            'group_id' => 14,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'AlexanderCORPOCALDAS',
            'last_name' => 'AlexanderCORPOCALDAS',
            'type_document' => 'CEDULA',
            'document' => '12356',
            'email' => 'AlexanderCORPOCALDAS@test.com',
            'group_id' => 18,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'AlexanderCORPOGUAJIRA',
            'last_name' => 'AlexanderCORPOGUAJIRA',
            'type_document' => 'CEDULA',
            'document' => '12357',
            'email' => 'AlexanderCORPOGUAJIRA@test.com',
            'group_id' => 21,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'AlexanderCORPONARIÑO',
            'last_name' => 'AlexanderCORPONARIÑO',
            'type_document' => 'CEDULA',
            'document' => '12358',
            'email' => 'AlexanderCORPONARIÑO@test.com',
            'group_id' => 24,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'AlexanderCORPORINOQUIA',
            'last_name' => 'AlexanderCORPORINOQUIA',
            'type_document' => 'CEDULA',
            'document' => '12359',
            'email' => 'AlexanderCORPORINOQUIA@test.com',
            'group_id' => 26,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'AlexanderCORPOURABA',
            'last_name' => 'AlexanderCORPOURABA',
            'type_document' => 'CEDULA',
            'document' => '12360',
            'email' => 'AlexanderCORPOURABA@test.com',
            'group_id' => 27,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'AlexanderCRQ',
            'last_name' => 'AlexanderCRQ',
            'type_document' => 'CEDULA',
            'document' => '12361',
            'email' => 'AlexanderCRQ@test.com',
            'group_id' => 31,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'ElianaCARDIQUE',
            'last_name' => 'ElianaCARDIQUE',
            'type_document' => 'CEDULA',
            'document' => '12362',
            'email' => 'ElianaCARDIQUE@test.com',
            'group_id' => 5,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'ElianaCARSUCRE',
            'last_name' => 'ElianaCARSUCRE',
            'type_document' => 'CEDULA',
            'document' => '12363',
            'email' => 'ElianaCARSUCRE@test.com',
            'group_id' => 6,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'ElianaCORPAMAG',
            'last_name' => 'ElianaCORPAMAG',
            'type_document' => 'CEDULA',
            'document' => '12364',
            'email' => 'ElianaCORPAMAG@test.com',
            'group_id' => 15,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'ElianaCORPOCESAR',
            'last_name' => 'ElianaCORPOCESAR',
            'type_document' => 'CEDULA',
            'document' => '12365',
            'email' => 'ElianaCORPOCESAR@test.com',
            'group_id' => 19,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'ElianaCORPOMOJANA',
            'last_name' => 'ElianaCORPOMOJANA',
            'type_document' => 'CEDULA',
            'document' => '12366',
            'email' => 'ElianaCORPOMOJANA@test.com',
            'group_id' => 23,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'ElianaCRA',
            'last_name' => 'ElianaCRA',
            'type_document' => 'CEDULA',
            'document' => '12367',
            'email' => 'ElianaCRA@test.com',
            'group_id' => 29,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'ElianaCSB',
            'last_name' => 'ElianaCSB',
            'type_document' => 'CEDULA',
            'document' => '12368',
            'email' => 'ElianaCSB@test.com',
            'group_id' => 32,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'ElianaCVS',
            'last_name' => 'ElianaCVS',
            'type_document' => 'CEDULA',
            'document' => '12369',
            'email' => 'ElianaCVS@test.com',
            'group_id' => 34,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'GloriaCAM',
            'last_name' => 'GloriaCAM',
            'type_document' => 'CEDULA',
            'document' => '12370',
            'email' => 'GloriaCAM@test.com',
            'group_id' => 2,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'GloriaCAR',
            'last_name' => 'GloriaCAR',
            'type_document' => 'CEDULA',
            'document' => '12371',
            'email' => 'GloriaCAR@test.com',
            'group_id' => 3,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'GloriaCORPOBOYACA',
            'last_name' => 'GloriaCORPOBOYACA',
            'type_document' => 'CEDULA',
            'document' => '12372',
            'email' => 'GloriaCORPOBOYACA@test.com',
            'group_id' => 17,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'GloriaCORPOCHIVOR',
            'last_name' => 'GloriaCORPOCHIVOR',
            'type_document' => 'CEDULA',
            'document' => '12373',
            'email' => 'GloriaCORPOCHIVOR@test.com',
            'group_id' => 20,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'GloriaCORPOGUAVIO',
            'last_name' => 'GloriaCORPOGUAVIO',
            'type_document' => 'CEDULA',
            'document' => '12374',
            'email' => 'GloriaCORPOGUAVIO@test.com',
            'group_id' => 22,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'GloriaCORTOLIMA',
            'last_name' => 'GloriaCORTOLIMA',
            'type_document' => 'CEDULA',
            'document' => '12375',
            'email' => 'GloriaCORTOLIMA@test.com',
            'group_id' => 28,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'GloriaCRC',
            'last_name' => 'GloriaCRC',
            'type_document' => 'CEDULA',
            'document' => '12376',
            'email' => 'GloriaCRC@test.com',
            'group_id' => 30,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
		DB::table('users')->insert([
            'name' => 'GloriaCVC',
            'last_name' => 'GloriaCVC',
            'type_document' => 'CEDULA',
            'document' => '12377',
            'email' => 'GloriaCVC@test.com',
            'group_id' => 33,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('Cardinal2022'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 2,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
        DB::table('rol_user')->insert([
            'user_id' => $lastId,
            'rol_id' => 3,
            'created_at' => now()->isoFormat('YYYY-MM-DD'),
            'updated_at' => now()->isoFormat('YYYY-MM-DD')
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       
    }
}
