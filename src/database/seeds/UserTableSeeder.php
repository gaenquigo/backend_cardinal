<?php

use Illuminate\Database\Seeder;
use App\Models\User;

/**
 * Class UserTableSeeder
 */
class UserTableSeeder extends Seeder
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

        User::create([
            'name' => 'Admin',
            'last_name' => 'System',
            'type_document' => 'CEDULA',
            'document' => '999999999',
            'email' => 'admin@test.com',
            'group_id' => 1,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('admin123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'consulta_mads',
            'last_name' => 'mads',
            'type_document' => 'CEDULA',
            'document' => '444444444',
            'email' => 'consulta@test.com',
            'group_id' => 1,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('admin123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);        

        User::create([
            'name' => 'user_cornare',
            'last_name' => 'cornare',
            'type_document' => 'CEDULA',
            'document' => '888888888',
            'email' => 'user@cornare.com',
            'group_id' => 14,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('user123cornare@'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        
        User::create([
            'name' => 'user_corpoguavio',
            'last_name' => 'corpoguavio',
            'type_document' => 'CEDULA',
            'document' => '11111111',
            'email' => 'user@corpoguavio.com',
            'group_id' => 22,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('user123corpoguavio@'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        
        User::create([
            'name' => 'user_cormacarena',
            'last_name' => 'cormacarena',
            'type_document' => 'CEDULA',
            'document' => '222222222',
            'email' => 'user@cormacarena.com',
            'group_id' => 13,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('user123cormacarena@'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);     
        User::create([
            'name' => 'Fernando',
            'last_name' => 'betancourt',
            'type_document' => 'CEDULA',
            'document' => '1121817067',
            'email' => 'fernando.betancourt@cormacarena.gov.co',
            'group_id' => 13,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('user123cormacarena@'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);    
        User::create([
            'name' => 'Martha Viviana',
            'last_name' => 'Díaz',
            'type_document' => 'CEDULA',
            'document' => '12345601',
            'email' => 'mdiaz@cam.gov.co',
            'group_id' => 2,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Rosa Elena',
            'last_name' => 'Cruz',
            'type_document' => 'CEDULA',
            'document' => '12345602',
            'email' => 'rcruzb@car.gov.co',
            'group_id' => 3,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
          
        User::create([
            'name' => 'Lina Marcela',
            'last_name' => 'Uribe Rendón',
            'type_document' => 'CEDULA',
            'document' => '12345603',
            'email' => 'luribe@carder.gov.co',
            'group_id' => 4,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Yesid Alfonso',
            'last_name' => 'Correa Romero',
            'type_document' => 'CEDULA',
            'document' => '12345604',
            'email' => 'ycorrea@cardique.gov.co',
            'group_id' => 5,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Jorge Patron',
            'last_name' => 'Alcocer',
            'type_document' => 'CEDULA',
            'document' => '12345605',
            'email' => 'jpatron@carsucre.gov.co',
            'group_id' => 6,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Álvaro German',
            'last_name' => 'Salazar',
            'type_document' => 'CEDULA',
            'document' => '12345606',
            'email' => 'alvaro.salazar@cas.gov.co',
            'group_id' => 7,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Edson',
            'last_name' => 'Gonzalez',
            'type_document' => 'CEDULA',
            'document' => '12345607',
            'email' => 'edsongonzalez@cda.gov.co',
            'group_id' => 8,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Mario Hernando',
            'last_name' => 'Quijano Machuca',
            'type_document' => 'CEDULA',
            'document' => '12345609',
            'email' => 'mario.quijano@cdmb.gov.co',
            'group_id' => 9,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Elizabeth',
            'last_name' => 'Ramirez Rodriguez',
            'type_document' => 'CEDULA',
            'document' => '12345610',
            'email' => 'eramirez@codechoco.gov.co',
            'group_id' => 10,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Delia',
            'last_name' => 'James',
            'type_document' => 'CEDULA',
            'document' => '12345611',
            'email' => 'delia.james3267@gmail.com',
            'group_id' => 11,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Orlando',
            'last_name' => 'Zuluaga Arcila',
            'type_document' => 'CEDULA',
            'document' => '12345612',
            'email' => 'ozuluaga@corantioquia.gov.co',
            'group_id' => 12,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Carlos David',
            'last_name' => 'Díaz Suarez ',
            'type_document' => 'CEDULA',
            'document' => '12345613',
            'email' => 'sistemas@cormacarena.gov.co',
            'group_id' => 13,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Luis Fernando',
            'last_name' => 'Uribe Angel',
            'type_document' => 'CEDULA',
            'document' => '12345614',
            'email' => 'luribe@cornare.gov.co',
            'group_id' => 14,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Carlos',
            'last_name' => 'Santodomingo Vega',
            'type_document' => 'CEDULA',
            'document' => '12345615',
            'email' => 'csantodomingo@corpamag.gov.co',
            'group_id' => 15,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Raul Arnoldo',
            'last_name' => 'Rodriguez Arciniegas',
            'type_document' => 'CEDULA',
            'document' => '12345616',
            'email' => 'raulrodriguez@corpoamazonia.gov.co',
            'group_id' => 16,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Mónica Alexandra',
            'last_name' => 'Alvarez Hernandez ',
            'type_document' => 'CEDULA',
            'document' => '12345617',
            'email' => 'maalvarez@corpoboyaca.gov.co',
            'group_id' => 17,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'José Ramiro',
            'last_name' => 'Benjumea Narváez',
            'type_document' => 'CEDULA',
            'document' => '12345618',
            'email' => 'joserbenjumea@corpocaldas.gov.co',
            'group_id' => 18,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Mónica Inés',
            'last_name' => 'González Thomas',
            'type_document' => 'CEDULA',
            'document' => '12345619',
            'email' => 'banco.proyectos@corpocesar.gov.co',
            'group_id' => 19,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Roberto',
            'last_name' => 'Ayala Rosas',
            'type_document' => 'CEDULA',
            'document' => '12345620',
            'email' => 'roberto.ayala@corpochivor.gov.co',
            'group_id' => 20,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Paola Margarita',
            'last_name' => 'Sanguino Duque',
            'type_document' => 'CEDULA',
            'document' => '12345621',
            'email' => 'p.sanguino@corpoguajira.gov.co',
            'group_id' => 21,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Eliana Mireya',
            'last_name' => 'Bolivar Cordero',
            'type_document' => 'CEDULA',
            'document' => '12345622',
            'email' => 'elianab@corpoguavio.gov.co',
            'group_id' => 22,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Ignacio Fidel',
            'last_name' => 'Hernández Polo',
            'type_document' => 'CEDULA',
            'document' => '12345623',
            'email' => 'splaneacion@corpomojana.gov.co',
            'group_id' => 23,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Julian Andrés',
            'last_name' => 'Guerrero',
            'type_document' => 'CEDULA',
            'document' => '12345624',
            'email' => 'aguerrero@corponarino.gov.co',
            'group_id' => 24,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Lola',
            'last_name' => 'Rueda Jaimez',
            'type_document' => 'CEDULA',
            'document' => '12345625',
            'email' => 'lrueda@corponor.gov.co',
            'group_id' => 25,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Rodrigo Alejandro',
            'last_name' => 'Cepeda Muñoz',
            'type_document' => 'CEDULA',
            'document' => '12345626',
            'email' => 'rodrigocepeda@corporinoquia.gov.co',
            'group_id' => 26,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Jairo Andrés',
            'last_name' => 'Agudelo Arredondo',
            'type_document' => 'CEDULA',
            'document' => '12345627',
            'email' => 'jagudelo@corpouraba.gov.co',
            'group_id' => 27,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Carlos Enrique',
            'last_name' => 'Quiroga Calderon ',
            'type_document' => 'CEDULA',
            'document' => '12345628',
            'email' => 'carlos.quiroga@cortolima.gov.co',
            'group_id' => 28,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Lina Patricia',
            'last_name' => 'Saavedra Bornacelli',
            'type_document' => 'CEDULA',
            'document' => '12345629',
            'email' => 'Lsaavedra@crautonoma.gov.co',
            'group_id' => 29,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Johana Esneda',
            'last_name' => 'Dorado Flórez',
            'type_document' => 'CEDULA',
            'document' => '12345630',
            'email' => 'jedorado@crc.gov.co',
            'group_id' => 30,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Víctor Hugo',
            'last_name' => 'González Giraldo',
            'type_document' => 'CEDULA',
            'document' => '12345631',
            'email' => 'planeacion@crq.gov.co',
            'group_id' => 31,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Isabel Maria',
            'last_name' => 'Payares Marriaga',
            'type_document' => 'CEDULA',
            'document' => '12345632',
            'email' => 'isapayaresm@hotmail.com',
            'group_id' => 32,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Claudia María',
            'last_name' => 'Salazar Bermúdez ',
            'type_document' => 'CEDULA',
            'document' => '12345633',
            'email' => 'claudia-maria.salazar@cvc.gov.co ',
            'group_id' => 33,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Hugo',
            'last_name' => 'Cadena Cepeda',
            'type_document' => 'CEDULA',
            'document' => '12345634',
            'email' => 'hugo.cadena@cvs.gov.co',
            'group_id' => 34,
            'start_date' => now()->isoFormat('YYYY-MM-DD'),
            'end_date' => \Carbon\Carbon::now()->add(120, 'day')->isoFormat('YYYY-MM-DD'),
            'password' => bcrypt('UserCAR123'),
            'active' => '1',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
    }
}
