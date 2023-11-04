<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'last_name' => $faker->lastName,
        'type_document' => $faker->randomElement(['CEDULA', 'CEDULA_EXTRANJERIA', 'NUIP', 'PASAPORTE']),
        'document' => $faker->randomNumber(9),
        'email' => $faker->unique()->safeEmail,
        'group_id' => 1,
        'start_date' => now()->isoFormat('YYYY-MM-DD'),
        'end_date' => \Carbon\Carbon::now()->add(20, 'day')->isoFormat('YYYY-MM-DD'),
        'password' => bcrypt('secret'),
        'active' => $faker->boolean,
        'email_verified_at' => now(),
        'remember_token' => Str::random(10),
    ];
});
