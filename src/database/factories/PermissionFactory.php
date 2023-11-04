<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Permission::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->domainWord,
        'module' => $faker->unique()->word
    ];
});
